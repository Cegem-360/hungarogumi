<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Manufacturer;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

final class ProductAccessoriesSearch extends Component
{
    use WithPagination;

    public string $search = '';

    #[Url]
    public string $category = '';

    public string $manufacturer = '';

    public string $price_min = '';

    public string $price_max = '';

    #[Url]
    public string $sortBy = 'availability';

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => ''],
        'sortBy' => ['except' => 'availability'],
    ];

    public function mount(): void
    {
        $this->search = request()->input('search', '');
        $this->category = request()->input('category', '');
    }

    public function updated($property): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function accessoryCategories()
    {
        return Product::whereNot('item_type_name', 'gumiabroncs')
            ->whereNot('item_type_name', 'lemezfelni')
            ->whereNot('item_type_name', 'alufelni')
            ->where('all_quantity', '>', 0)
            ->selectRaw('item_type_name, COUNT(*) as count')
            ->groupBy('item_type_name')
            ->orderByDesc('count')
            ->get();
    }

    #[Computed]
    public function accessoryManufacturers()
    {
        return Manufacturer::whereHas('products', function ($q): void {
            $q->whereNot('item_type_name', 'gumiabroncs')
                ->whereNot('item_type_name', 'lemezfelni')
                ->whereNot('item_type_name', 'alufelni')
                ->where('all_quantity', '>', 0);
        })->orderBy('name')->get();
    }

    public function render()
    {
        $products = $this->getProducts();

        return view('livewire.product-accessories-search', [
            'products' => $products,
        ]);
    }

    private function getProducts()
    {
        $query = Product::query();

        // Keresés a termék névben, gyártó névben és egyéb mezőkben
        if ($this->search !== '' && $this->search !== '0') {
            $query->where(function ($q): void {
                $q->where('item_name', 'like', '%'.$this->search.'%')
                    ->orWhere('pattern_name', 'like', '%'.$this->search.'%')
                    ->orWhere('ean', 'like', '%'.$this->search.'%')
                    ->orWhere('sku', 'like', '%'.$this->search.'%')
                    ->orWhere('factory_code', 'like', '%'.$this->search.'%')
                    ->orWhereHas('manufacturer', function ($manufacturerQuery): void {
                        $manufacturerQuery->where('name', 'like', '%'.$this->search.'%');
                    });
            });
        }

        // Kategória szűrés
        if ($this->category !== '' && $this->category !== '0') {
            $query->where('item_type_name', $this->category);
        }

        // Gyártó szűrés
        if ($this->manufacturer !== '') {
            $query->whereHas('manufacturer', function ($q): void {
                $q->where('name', $this->manufacturer);
            });
        }

        // Árszűrő (bruttó → nettó konverzió)
        if ($this->price_min !== '') {
            $query->where('net_retail_price', '>=', round((int) $this->price_min / 1.27));
        }

        if ($this->price_max !== '') {
            $query->where('net_retail_price', '<=', round((int) $this->price_max / 1.27));
        }

        // Csak aktív termékek
        $query->where('all_quantity', '>', 0);

        // Szűrés: csak kiegészítők
        $query->whereNot(function ($q): void {
            $q->where('item_type_name', 'gumiabroncs')
                ->orWhere('item_type_name', 'lemezfelni')
                ->orWhere('item_type_name', 'alufelni');
        });

        // Rendezés
        match ($this->sortBy) {
            'price_asc' => $query->orderBy('net_retail_price', 'asc'),
            'price_desc' => $query->orderBy('net_retail_price', 'desc'),
            'name' => $query->orderBy('item_name', 'asc'),
            default => $query->orderBy('all_quantity', 'desc'),
        };

        return $query->paginate(24);
    }
}
