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
            'view',
            'view any',
            'create',
            'edit',
            'delete',
        ];
        $model = [
            'roles',
            'permissions',
            'products',
            'categories',
            'orders',
            'order items',
            'users',
            'blogs',
            'shipping methods',
            'manufacturers',
            'carts',
            'cart items',
            'categories',

        ];
        foreach ($model as $m) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate(
                    ['name' => sprintf('%s %s', $permission, $m),
                        'guard_name' => 'web',
                    ]);
            }
        }

        // Super Admin role létrehozása, ha még nem létezik
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        // Minden jogosultság hozzárendelése a Super Admin szerepkörhöz
        $allPermissions = Permission::all();
        $superAdmin->syncPermissions($allPermissions);
        // Példa: jogosultságok hozzárendelése szerepkörökhöz
        $admin = Role::where('name', 'admin')->first();
        if ($admin) {
            $adminPermissions = [];
            foreach ($model as $m) {
                foreach ($permissions as $permission) {
                    $adminPermissions[] = sprintf('%s %s', $permission, $m);
                }
            }

            dump($adminPermissions);
            $admin->givePermissionTo($adminPermissions);
        }

        $shopkeeper = Role::where('name', 'shopkeeper')->first();
        if ($shopkeeper) {
            $shopkeeper->syncPermissions(['view any products', 'view any orders']);
        }

        $user = Role::where('name', 'user')->first();
        if ($user) {
            $user->syncPermissions(['view any products']);
        }

        $guest = Role::where('name', 'guest')->first();
        if ($guest) {
            $guest->syncPermissions(['create orders']);
        }
    }
}
