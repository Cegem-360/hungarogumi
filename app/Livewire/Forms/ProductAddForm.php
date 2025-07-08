<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use Livewire\Form;

final class SimpleProductAddForm extends Form
{
    public $quantity;

    public $product_id;

    public function store()
    {
        $this->validate([
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
        ]);

    }
}
