<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Header Component', function () {
    test('header shows login link for guests', function () {
        $response = $this->get('/');

        $response->assertSee('Belépés / Regisztráció');
        $response->assertDontSee('Kijelentkezés');
    });

    test('header shows user menu for authenticated users', function () {
        $user = User::factory()->create(['name' => 'John Doe']);

        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertSee('John Doe');
        $response->assertSee('Rendeléseim');
        $response->assertSee('Adataim');
        $response->assertSee('Kijelentkezés');
        $response->assertDontSee('Belépés / Regisztráció');
    });

    test('login link redirects to login page', function () {
        $response = $this->get('/belepes');

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    });

    test('profile links work for authenticated users', function () {
        $user = User::factory()->create();

        $this->actingAs($user);

        $ordersResponse = $this->get('/profil/rendelesek');
        $ordersResponse->assertStatus(200);

        $profileResponse = $this->get('/profil/adatok');
        $profileResponse->assertStatus(200);
    });
});
