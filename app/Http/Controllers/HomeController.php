<?php

namespace App\Http\Controllers;

use App\Services\InstagramFeedService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly InstagramFeedService $instagramFeedService
    ) {
    }

    public function __invoke(): View
    {
        return view('pages.index', [
            'instagramPosts' => $this->instagramFeedService->latestPosts(3),
        ]);
    }
}

