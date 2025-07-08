<?php

use App\Livewire\TyreList;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(TyreList::class)
        ->assertStatus(200);
});
