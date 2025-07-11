<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

final class RolePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view-any roles');
    }

    public function view(User $user): bool
    {
        return $user->can('view roles');
    }

    public function create(User $user): bool
    {
        return $user->can('create roles');
    }

    public function update(User $user): bool
    {
        return $user->can('edit roles');
    }

    public function delete(User $user): bool
    {
        return $user->hasRole('delete roles');
    }
}
