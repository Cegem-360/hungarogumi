<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class HeaderSearch extends Component
{
    public string $search = '';

    public function performSearch()
    {
        if (! in_array(mb_trim($this->search), ['', '0'], true)) {
            return to_route('search', ['search' => mb_trim($this->search)]);
        }

        return null;
    }

    public function render(): Factory|View
    {
        return view('livewire.header-search');
    }
}
