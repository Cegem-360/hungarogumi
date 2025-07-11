<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'view products',
            'edit products',
            'delete products',
            'manage orders',
            'view users',
            'edit users',
            'delete users',
            'manage shop',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Példa: jogosultságok hozzárendelése szerepkörökhöz
        $admin = Role::where('name', 'admin')->first();
        if ($admin) {
            $admin->givePermissionTo($permissions);
        }

        $shopkeeper = Role::where('name', 'shopkeeper')->first();
        if ($shopkeeper) {
            $shopkeeper->givePermissionTo(['manage shop', 'view products', 'manage orders']);
        }

        $user = Role::where('name', 'user')->first();
        if ($user) {
            $user->givePermissionTo(['view products']);
        }

        $guest = Role::where('name', 'guest')->first();
        if ($guest) {
            $guest->givePermissionTo(['view products']);
        }
    }
}
