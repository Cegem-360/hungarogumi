<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

final class ProductAccessoriesSearch extends Component
{
    use WithPagination;

    public string $search = '';

    public string $category = '';

    public string $sortBy = 'name';

    public string $sortDirection = 'asc';

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => ''],
        'sortBy' => ['except' => 'name'],
        'sortDirection' => ['except' => 'asc'],
    ];

    public function mount(): void
    {
        $this->search = request()->get('search', '');
        $this->category = request()->get('category', '');
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedCategory(): void
    {
        $this->resetPage();
    }

    public function toggleSortDirection(): void
    {
        $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        $this->resetPage();
    }

    public function updatedSortBy(): void
    {
        $this->resetPage();
    }

    public function sortBy(string $field): void
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
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
        if (! empty($this->search)) {
            $query->where(function ($q) {
                $q->where('item_name', 'like', '%'.$this->search.'%')
                    ->orWhere('pattern_name', 'like', '%'.$this->search.'%')
                    ->orWhere('ean', 'like', '%'.$this->search.'%')
                    ->orWhere('sku', 'like', '%'.$this->search.'%')
                    ->orWhere('factory_code', 'like', '%'.$this->search.'%')
                    ->orWhereHas('manufacturer', function ($manufacturerQuery) {
                        $manufacturerQuery->where('name', 'like', '%'.$this->search.'%');
                    });
            });
        }

        // Kategória szűrés a categories JSON mezőn alapulva vagy item_type_name alapján
        if (! empty($this->category)) {
            $query->where(function ($q) {
                $q->where('item_type_name', $this->category);
            });
        }

        // Csak aktív termékek
        $query->where(function ($q) {
            $q->where('all_quantity', '>', 0);
        });

        // Rendezés
        switch ($this->sortBy) {
            case 'price':
                $query->orderBy('net_retail_price', $this->sortDirection);
                break;
            case 'manufacturer':
                $query->join('manufacturers', 'products.manufacturer_id', '=', 'manufacturers.id')
                    ->orderBy('manufacturers.name', $this->sortDirection)
                    ->select('products.*');
                break;
            default:
                $query->orderBy('item_name', $this->sortDirection);
        }
        // Szűrés: csak azok, amelyek nem tyre vagy nem wheel típusúak
        $query->whereNot(function ($q) {
            $q->where('item_type_name', 'gumiabroncs')
                ->orWhere('item_type_name', 'lemezfelni')
                ->orWhere('item_type_name', 'alufelni');
        });

        return $query->paginate(12);
    }
}
