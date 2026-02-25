<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

final class WheelList extends Component
{
    use WithPagination;

    // Felni specifikus szűrők
    #[Url]
    public $pcd; // Osztókor (PCD)

    #[Url]
    public $bolt_count; // Csavarlyukak száma

    #[Url]
    public $diameter;

    public $width_min; // Szélesség minimum (hüvelyk)

    public $width_max; // Szélesség maximum (hüvelyk)

    public $manufacturer; // Márka

    public $outlet; // Outlet termékek

    public $wheel_type = []; // Típus (alufelni/lemezfelni)

    public $stock_min; // min. 4 db azonnal

    public $price_category = []; // Árkategória (budget/közepes/prémium)

    public $price_min; // Árszűrő minimum

    public $price_max; // Árszűrő maximum

    public $wheel_model; // Modell

    public $rim_color; // Dedikáltság

    public $et_min; // ET minimum

    public $et_max; // ET maximum

    #[Url]
    public $sortBy = 'availability'; // availability, price_asc, price_desc

    public function mount(): void {}

    public function updatedManufacturer(): void
    {
        $this->resetPage();
    }

    public function updatedBoltCount(): void
    {
        $this->resetPage();
    }

    public function updatedPcd(): void
    {
        $this->resetPage();
    }

    public function updatedDiameter(): void
    {
        $this->resetPage();
    }

    public function updatedWheelType(): void
    {
        $this->resetPage();
    }

    public function updatedPriceMin(): void
    {
        $this->resetPage();
    }

    public function updatedPriceMax(): void
    {
        $this->resetPage();
    }

    public function render(): View|Factory
    {
        $products = $this->buildQuery();

        return view('livewire.wheel-list', ['products' => $products]);
    }

    private function buildQuery(): LengthAwarePaginator
    {
        $query = Product::query();

        $query->when($this->manufacturer, function ($query): void {
            $query->whereHas('manufacturer', function ($q): void {

                $q->where('name', $this->manufacturer);
            });
        })
            ->when($this->diameter, function ($query): void {
                $query->where('diameter', $this->diameter);
            })
            ->when($this->price_min, function ($query): void {
                $query->where('net_retail_price', '>=', round((int) $this->price_min / 1.27));
            })->when($this->price_max, function ($query): void {
                $query->where('net_retail_price', '<=', round((int) $this->price_max / 1.27));
            })->when($this->pcd, function ($query): void {
                $query->where('pcd', $this->pcd);
            })->when($this->bolt_count, function ($query): void {
                $query->where('bolt_count', $this->bolt_count);
            })->when($this->width_min, function ($query): void {
                $query->where('width', '>=', $this->width_min);
            })->when($this->width_max, function ($query): void {
                $query->where('width', '<=', $this->width_max);
            })->when($this->wheel_type, function ($query): void {
                $query->whereIn('item_type_name', $this->wheel_type);
            })->when($this->stock_min, function ($query): void {
                $query->where('all_quantity', '>=', 4);
            })->when($this->price_category, function ($query): void {
                // Itt kellene definiálni az árkategória logikát a tényleges árak alapján
                if (in_array('budget', $this->price_category)) {
                    $query->orWhere('net_retail_price', '<', 50000);
                }

                if (in_array('közepes', $this->price_category)) {
                    $query->orWhere(function ($q): void {
                        $q->whereBetween('net_retail_price', [50000, 150000]);
                    });
                }

                if (in_array('prémium', $this->price_category)) {
                    $query->orWhere('net_retail_price', '>', 150000);
                }
            })->when($this->wheel_model, function ($query): void {
                $query->where('item_name', 'like', '%'.$this->wheel_model.'%');
            })->when($this->rim_color, function ($query): void {
                $query->where('rim_color', $this->rim_color);
            })->when($this->et_min, function ($query): void {
                $query->whereRaw('CAST(et AS UNSIGNED) >= ?', [(int) $this->et_min]);
            })->when($this->et_max, function ($query): void {
                $query->whereRaw('CAST(et AS UNSIGNED) <= ?', [(int) $this->et_max]);
            })->when($this->outlet, function ($query): void {
                $query->where('outlet', true);
            })->wheel();

        // Rendezés
        match ($this->sortBy) {
            'price_asc' => $query->orderBy('net_retail_price', 'asc'),
            'price_desc' => $query->orderBy('net_retail_price', 'desc'),
            default => $query->orderBy('all_quantity', 'desc'), // availability
        };

        return $query->paginate(24);
    }
}
