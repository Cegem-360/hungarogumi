<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

abstract class BaseResource extends Resource
{
    final public static function canViewAny(): bool
    {
        $user = Auth::user();

        if (! $user) {
            return false;
        }

        if ($user->hasRole('Super Admin')) {
            return true;
        }

        $model = static::getModel();
        // A modelnév legyen többes szám, ahogy a seederben is szerepel
        $modelName = Str::plural(Str::kebab(class_basename($model)));
        $permissionName = 'view any '.$modelName;

        // dump($user->can($permissionName));
        return $user->can($permissionName);
    }
}
