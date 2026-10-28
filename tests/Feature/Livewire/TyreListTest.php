<?php

declare(strict_types=1);

use App\Livewire\TyreList;
use Livewire\Livewire;

it('renders successfully', function (): void {
    Livewire::test(TyreList::class)
        ->assertStatus(200);
});
