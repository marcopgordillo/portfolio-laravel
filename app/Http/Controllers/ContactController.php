<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

        return response()->json([
            'success' => true,
            'message' => 'Thanks for your contact request. I will get back to you shortly.',
        ], Response::HTTP_OK);
    }
}
