<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class InstagramFeedService
{
    /**
     * Fetch latest Instagram posts using Meta Instagram Graph API.
     *
     * @return array<int, array<string, mixed>>
     */
    public function latestPosts(int $limit = 3): array
    {
        $enabled = (bool) config('services.instagram.enabled', false);
        $userId = (string) config('services.instagram.user_id', '');
        $token = (string) config('services.instagram.access_token', '');
        $version = (string) config('services.instagram.graph_version', 'v22.0');
        $cacheTtl = (int) config('services.instagram.cache_ttl', 30);

        if (! $enabled || $userId === '' || $token === '') {
            return [];
        }

        $limit = max(1, min($limit, 10));
        $cacheKey = "instagram.latest_posts.{$userId}.{$limit}";

        try {
            return Cache::remember($cacheKey, now()->addMinutes($cacheTtl), function () use ($version, $userId, $token, $limit) {
                $response = Http::timeout(12)
                    ->retry(2, 400)
                    ->get("https://graph.facebook.com/{$version}/{$userId}/media", [
                        'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
                        'limit' => $limit,
                        'access_token' => $token,
                    ]);

                if (! $response->successful()) {
                    throw new \RuntimeException('Instagram API request failed with status '.$response->status());
                }

                $rows = $response->json('data', []);

                return collect($rows)
                    ->filter(fn ($row) => in_array(($row['media_type'] ?? ''), ['IMAGE', 'VIDEO', 'CAROUSEL_ALBUM'], true))
                    ->map(function ($row) {
                        $imageUrl = $row['media_url'] ?? null;
                        if (($row['media_type'] ?? '') === 'VIDEO') {
                            $imageUrl = $row['thumbnail_url'] ?? $imageUrl;
                        }

                        return [
                            'id' => $row['id'] ?? null,
                            'caption' => trim((string) ($row['caption'] ?? '')),
                            'media_type' => $row['media_type'] ?? null,
                            'image_url' => $imageUrl,
                            'permalink' => $row['permalink'] ?? null,
                            'timestamp' => $row['timestamp'] ?? null,
                        ];
                    })
                    ->filter(fn ($row) => ! empty($row['image_url']) && ! empty($row['permalink']))
                    ->values()
                    ->all();
            });
        } catch (\Throwable $e) {
            Log::warning('Instagram feed fetch failed', [
                'message' => $e->getMessage(),
            ]);

            return Cache::get($cacheKey, []);
        }
    }
}

