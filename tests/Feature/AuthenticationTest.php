<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Authentication', function () {
    test('login page can be rendered', function () {
        $response = $this->get('/belepes');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    });

    test('register page can be rendered', function () {
        $response = $this->get('/regisztracio');

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    });

    test('users can authenticate using the login screen', function () {
        $user = User::factory()->create();

        $response = $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('profile.orders'));
    });

    test('users can not authenticate with invalid password', function () {
        $user = User::factory()->create();

        $this->post('/belepes', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    });

    test('users can register', function () {
        $response = $this->post('/regisztracio', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('profile.orders'));

        $this->assertDatabaseHas('users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    });

    test('registration requires valid data', function () {
        $response = $this->post('/regisztracio', [
            'name' => '',
            'email' => 'not-an-email',
            'password' => 'short',
            'password_confirmation' => 'different',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
        $this->assertGuest();
    });

    test('users can logout', function () {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->post('/kilepes');

        $this->assertGuest();
        $response->assertRedirect('/');
    });

    test('login screen cannot be rendered when authenticated', function () {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/belepes');

        $response->assertRedirect(route('home'));
    });

    test('register screen cannot be rendered when authenticated', function () {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/regisztracio');

        $response->assertRedirect(route('home'));
    });
});
