<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill in all required fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Prepare email data
            $data = [
                'name' => (string) $request->name,
                'email' => (string) $request->email,
                'project_type' => (string) $request->project_type,
                'user_message' => (string) $request->message,
                'timestamp' => (string) now()->format('Y-m-d H:i:s')
            ];

            // Send email using SMTP
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to(config('mail.from.address')) // Uses MAIL_FROM_ADDRESS from .env
                        ->subject('New Contact Form Submission - ' . $data['project_type'])
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->replyTo($data['email'], $data['name']);
            });

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! I\'ll get back to you soon.'
            ]);

        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Contact form error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }
}
