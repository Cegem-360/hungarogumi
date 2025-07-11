<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

final class HeaderSearch extends Component
{
    public string $search = '';

    public function performSearch()
    {
        if (!in_array(mb_trim($this->search), ['', '0'], true)) {
            return redirect()->route('search', ['search' => mb_trim($this->search)]);
        }

        return null;
    }

    public function render()
    {
        return view('livewire.header-search');
    }
}
