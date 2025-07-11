<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ShippingMethod;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
        ]);

        ShippingMethod::create([
            'name' => 'Átvétel üzletünkben',
            'title' => 'Átvétel üzletünkben',
            'slug' => 'átvétel-üzletünkben',
            'description' => 'Az átvétel üzletünkben történik, ahol a megrendelt termékeket átveheted. Az átvétel ingyenes.',
            'cost' => 0,
        ]);

        $this->call([
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
        ]);
    }
}
