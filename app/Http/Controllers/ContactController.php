<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => ['required', 'email'],
            'message'   => 'required',
        ]);

        // Send Email
        Mail::to(config('mail.from.address'))
            ->send(new ContactMail(
                name: $validatedData['name'],
                email: $validatedData['email'],
                body: $validatedData['message'],
            ));

        return response()->json([
            'success' => true,
            'message' => 'Thanks for your contact request. I will get back to you shortly.',
        ], Response::HTTP_OK);
    }
}
