<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

final class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            $user = Auth::user();

            if (! $user->hasVerifiedEmail()) {
                return redirect()->route('verification.notice');
            }

            return redirect()->intended(route('profile.orders'))
                ->with('success', 'Sikeresen bejelentkezett!');
        }

        throw ValidationException::withMessages([
            'email' => 'A megadott adatok nem megfelelőek.',
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice')
            ->with('success', 'Sikeres regisztráció! Elküldtük a megerősítő emailt a megadott címre.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')
            ->with('success', 'Sikeresen kijelentkeztünk!');
    }

    public function verificationNotice()
    {
        return view('auth.verify-email');
    }

    public function verificationVerify(EmailVerificationRequest $request)
    {
        // Ellenőrizzük, hogy a felhasználó már megerősítette-e az email címét
        if (Auth::user()->hasVerifiedEmail()) {
            return redirect()->route('profile.orders')
                ->with('info', 'Email cím már megerősítve!');
        }

        $request->fulfill();

        return redirect()->route('profile.orders')
            ->with('success', 'Email cím sikeresen megerősítve!');
    }

    public function verificationResend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Megerősítő email újra elküldve!');
    }
}
