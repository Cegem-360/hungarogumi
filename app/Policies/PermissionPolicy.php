<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

final class PermissionPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view any permissions');
    }

    public function view(User $user): bool
    {
        return $user->can('view permissions');
    }

    public function create(User $user): bool
    {
        return $user->can('create permissions');
    }

    public function update(User $user): bool
    {
        return $user->can('edit permissions');
    }

    public function delete(User $user): bool
    {
        return $user->can('delete permissions');
    }
}
