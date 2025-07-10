<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Log;

final class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'privacy' => 'required|accepted',
        ], [
            'name.required' => 'A név megadása kötelező.',
            'email.required' => 'Az email cím megadása kötelező.',
            'email.email' => 'Kérjük, adjon meg egy érvényes email címet.',
            'subject.required' => 'A tárgy megadása kötelező.',
            'message.required' => 'Az üzenet megadása kötelező.',
            'privacy.required' => 'Az adatvédelmi tájékoztató elfogadása kötelező.',
            'privacy.accepted' => 'Az adatvédelmi tájékoztató elfogadása kötelező.',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Send email to admin
            Log::info('Attempting to send contact form email', [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
            ]);

            Mail::to(config('mail.contact.admin_email', 'info@somiautomotive.hu'))
                ->send(new ContactFormSubmission($request->all()));

            Log::info('Contact form email sent successfully');

            return back()->with('success', 'Üzenetét sikeresen elküldtük! Hamarosan felvesszük Önnel a kapcsolatot.');
        } catch (Exception $e) {
            Log::error('Contact form error: '.$e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString(),
            ]);

            return back()
                ->with('error', 'Hiba történt az üzenet küldése során. Kérjük, próbálja meg később.')
                ->withInput();
        }
    }
}
