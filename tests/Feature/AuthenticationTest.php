<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Authentication', function (): void {
    test('login page can be rendered', function (): void {
        $response = $this->get('/belepes');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    });

    test('register page can be rendered', function (): void {
        $response = $this->get('/regisztracio');

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    });

    test('users can authenticate using the login screen', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $response = $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('profile.orders'));
    });

    test('users can not authenticate with invalid password', function (): void {
        $user = User::factory()->create();

        $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    });

    test('users can register', function (): void {
        $response = $this->post('/regisztracio', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect(route('verification.notice'));

        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => null,
        ]);
    });

    test('registration requires valid data', function (): void {
        $response = $this->post('/regisztracio', [
            'name' => '',
            'email' => 'not-an-email',
            'password' => 'short',
            'password_confirmation' => 'different',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
        $this->assertGuest();
    });

    test('users can logout', function (): void {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/kilepes');

        $this->assertGuest();
        $response->assertRedirect('/');
    });

    test('login screen cannot be rendered when authenticated', function (): void {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/belepes');

        $response->assertRedirect(route('home'));
    });

    test('register screen cannot be rendered when authenticated', function (): void {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/regisztracio');

        $response->assertRedirect(route('home'));
    });

    test('unverified users are redirected to verification notice', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('verification.notice'));
    });

    test('verified users can access profile after login', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $response = $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('profile.orders'));
    });

    test('unverified users cannot access profile pages', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => null,
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');
        $response->assertRedirect(route('verification.notice'));
    });

    test('verification notice page can be rendered', function (): void {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/email/verify');

        $response->assertStatus(200);
        $response->assertViewIs('auth.verify-email');
    });
});
