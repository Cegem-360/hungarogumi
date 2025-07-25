<?php

declare(strict_types=1);

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

describe('Profile', function (): void {
    test('unauthenticated users cannot access profile pages', function (): void {
        $response = $this->get('/profil/rendelesek');
        $response->assertRedirect('/belepes');

        $response = $this->get('/profil/adatok');
        $response->assertRedirect('/belepes');
    });
    test('authenticated users can view orders page', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');

        $response->assertStatus(200);
        $response->assertViewIs('profile.orders');
        $response->assertSee('Rendeléseim');
    });
    test('authenticated users can view profile page', function (): void {
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

    test('orders page displays user orders', function (): void {
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

        $response->assertSee('Rendelés #' . $order->id);
        $response->assertSee('50 000 Ft'); // 2 * 25000
        $response->assertSee('Részletek');
    });

    test('user can view single order details', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);
        $product = Product::factory()->create([
            'item_name' => 'Test Gumiabroncs',
            'sku' => 'TEST-123',
        ]);

        $order = Order::factory()->create([
            'user_id' => $user->id,
            'billing_name' => 'Test User',
            'billing_email' => 'test@example.com',
        ]);

        OrderItem::factory()->create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 2,
            'total' => 25000,
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek/' . $order->id);

        $response->assertStatus(200);
        $response->assertViewIs('profile.order-show');
        $response->assertSee('Rendelés #' . $order->id);
        $response->assertSee('Test Gumiabroncs');
        $response->assertSee('TEST-123');
        $response->assertSee('2 db');
        $response->assertSee('25 000 Ft');
        $response->assertSee('Test User');
        $response->assertSee('test@example.com');
        $response->assertSee('Vissza a rendelésekhez');
    });

    test('user cannot view other users orders', function (): void {
        $user = User::factory()->create(['email_verified_at' => now()]);
        $otherUser = User::factory()->create();

        $order = Order::factory()->create([
            'user_id' => $otherUser->id,
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek/' . $order->id);

        $response->assertStatus(404);
    });
    test('orders page shows empty state when no orders', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->get('/profil/rendelesek');

        $response->assertSee('Még nincs rendelése');
        $response->assertSee('Termékek böngészése');
    });
    test('user can logout from profile page', function (): void {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->actingAs($user);

        $response = $this->post('/kilepes');

        $this->assertGuest();
        $response->assertRedirect('/');
    });
});
