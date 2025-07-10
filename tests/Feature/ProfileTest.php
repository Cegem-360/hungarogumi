<?php

declare(strict_types=1);

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Profile', function () {
    test('unauthenticated users cannot access profile pages', function () {
        $response = $this->get('/profil/rendelesek');
        $response->assertRedirect('/belepes');

        $response = $this->get('/profil/adatok');
        $response->assertRedirect('/belepes');
    });
    test('authenticated users can view orders page', function () {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');

        $response->assertStatus(200);
        $response->assertViewIs('profile.orders');
        $response->assertSee('Rendeléseim');
    });
    test('authenticated users can view profile page', function () {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/adatok');

        $response->assertStatus(200);
        $response->assertViewIs('profile.profile');
        $response->assertSee($user->name);
        $response->assertSee($user->email);
    });

    test('orders page displays user orders', function () {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);
        $product = Product::factory()->create([
            'item_name' => 'Test Gumiabroncs',
        ]);

        $order = Order::factory()->create([
            'user_id' => $user->id,
        ]);

        OrderItem::factory()->create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 2,
            'total' => 25000,
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');

        $response->assertSee('Test Gumiabroncs');
        $response->assertSee('2 db');
        $response->assertSee('25 000 Ft');
    });
    test('orders page shows empty state when no orders', function () {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');

        $response->assertSee('Még nincs rendelése');
        $response->assertSee('Termékek böngészése');
    });
    test('user can logout from profile page', function () {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->post('/kilepes');

        $this->assertGuest();
        $response->assertRedirect('/');
    });
});
