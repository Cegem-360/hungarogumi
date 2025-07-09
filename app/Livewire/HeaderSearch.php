<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class HeaderSearch extends Component
{
    public string $search = '';

    public function performSearch()
    {
        if (! empty(mb_trim($this->search))) {
            return redirect()->route('search', ['search' => mb_trim($this->search)]);
        }
    }

    public function render()
    {
        return view('livewire.header-search');
    }
}
