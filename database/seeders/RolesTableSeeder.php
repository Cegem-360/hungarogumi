<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

final class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['admin', 'guest', 'user', 'shopkeeper'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }
}
