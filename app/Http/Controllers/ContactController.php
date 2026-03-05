<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    // public function __invoke(Request $request): JsonResponse
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name'      => ['required', 'string', 'max:255'],
    //         'email'     => ['required', 'email', 'max:255'],
    //         'message'   => ['required', 'string', 'max:5000'],
    //         'ag-budget' => ['nullable', 'string', 'max:255'],
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'data'    => $validator->errors()->all(),
    //         ], 422);
    //     }

    //     Mail::to('drawcodetest@gmail.com')->send(new ContactFormMail($request->all()));

    //     return response()->json([
    //         'success' => true,
    //         'data'    => 'Thank you! Your message has been received.',
    //     ]);
    // }

    public function __invoke(Request $request): JsonResponse
{
    $validator = Validator::make($request->all(), [
        'name'      => ['required', 'string', 'max:255'],
        'email'     => ['required', 'email', 'max:255'],
        'message'   => ['required', 'string', 'max:5000'],
        'ag-budget' => ['nullable', 'string', 'max:255'],
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'data'    => $validator->errors()->all(),
        ], 422);
    }

    // Send Telegram message
    $text = "📬 *New Contact Form Submission*\n\n"
        . "👤 *Name:* " . $request->name . "\n"
        . "📧 *Email:* " . $request->email . "\n"
        . "💰 *Budget:* " . $request->input('ag-budget', 'Not specified') . "\n"
        . "💬 *Message:* " . $request->message;

    $token = env('TELEGRAM_BOT_TOKEN');
    $chatId = env('TELEGRAM_CHAT_ID');

    Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
        'chat_id'    => $chatId,
        'text'       => $text,
        'parse_mode' => 'Markdown',
    ]);

    return response()->json([
        'success' => true,
        'data'    => 'Thank you! Your message has been received.',
    ]);
}
}