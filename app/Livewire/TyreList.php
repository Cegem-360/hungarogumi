<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

final class TyreList extends Component
{
    use WithPagination;

    #[Url]
    public $manufacturer; // Manufacturer:id

    #[Url]
    public $width; // mm

    #[Url]
    public $aspect_ratio; // %

    public $structure; // R / L

    #[Url]
    public $diameter;

    public $li; // suly index

    public $si; // sebesség index

    #[Url]
    public $seasons = []; // Nyári / Téli / Négyévszakos (1,2,3),{summer(),winter(),allSeason()}

    public $consumptions = []; // A / B / C / D / E / F / G

    public $grips = []; // A / B / C / D / E / F

    public $noise_levels = []; // 1 / 2 / 3

    public $noise_value;

    public $rim_structure; // 	Kúpos Csavarral / Talpas csavarral/ Használt

    public $rim_dedicated; // Homológizáció

    #[Url]
    public $reinforced; // igen / nem

    public $pattern_name; // Mintázat

    #[Url]
    public $runflat; // igen / nem

    public $tire_spec_data; // Gumiabroncs specifikációs adatok

    public $tire_car_data; // Gumiabroncs autó adatok

    public $price_min;

    public $price_max;

    #[Url]
    public $sortBy = 'availability'; // availability, price_asc, price_desc

    #[Computed]
    public function products(): LengthAwarePaginator
    {
        return $this->buildQuery();
    }

    #[Computed]
    public function availableConsumptions(): array
    {
        return $this->baseFilterQuery()
            ->whereNotNull('consumption')
            ->distinct('consumption')
            ->pluck('consumption')
            ->toArray();
    }

    #[Computed]
    public function availableGrips(): array
    {
        return $this->baseFilterQuery()
            ->whereNotNull('grip')
            ->distinct('grip')
            ->pluck('grip')
            ->toArray();
    }

    public function mount(): void {}


    public function render(): View|Factory
    {

        return view('livewire.tyre-list');
    }

    private function baseFilterQuery()
    {
        $query = Product::query();

        $query->when($this->manufacturer, function ($query): void {
            $query->where('manufacturer_id', Manufacturer::where('name', $this->manufacturer)->first('id')?->id);
        })->when($this->width, function ($query): void {
            $query->where('width', $this->width);
        })->when($this->aspect_ratio, function ($query): void {
            $query->where('aspect_ratio', $this->aspect_ratio);
        })->when($this->diameter, function ($query): void {
            $query->where('diameter', $this->diameter);
        })->when($this->seasons, function ($query): void {
            $query->whereIn('season', array_map('strval', $this->seasons));
        })->when($this->reinforced, function ($query): void {
            $query->reinforced();
        })->when($this->runflat, function ($query): void {
            $query->punctureResistant();
        })->tyre();

        return $query;
    }

    private function buildQuery(): LengthAwarePaginator
    {
        $query = Product::query();

        $query->when($this->manufacturer, function ($query): void {
            $query->where('manufacturer_id', Manufacturer::where('name', $this->manufacturer)->first('id')?->id);
        })->when($this->price_min, function ($query): void {
            $query->where('net_retail_price', '>=', round((int) $this->price_min / 1.27));
        })->when($this->price_max, function ($query): void {
            $query->where('net_retail_price', '<=', round((int) $this->price_max / 1.27));
        })->when($this->width, function ($query): void {
            $query->where('width', $this->width);
        })->when($this->aspect_ratio, function ($query): void {
            $query->where('aspect_ratio', $this->aspect_ratio);
        })->when($this->structure, function ($query): void {
            $query->where('structure', $this->structure);
        })->when($this->diameter, function ($query): void {
            $query->where('diameter', $this->diameter);
        })->when($this->li, function ($query): void {
            $query->where('li', $this->li);
        })->when($this->si, function ($query): void {
            $query->where('si', $this->si);
        })->when($this->seasons, function ($query): void {
            $query->whereIn('season', array_map('strval', $this->seasons));
        })->when($this->consumptions, function ($query): void {
            $query->whereIn('consumption', $this->consumptions);
        })->when($this->grips, function ($query): void {
            $query->whereIn('grip', $this->grips);
        })->when($this->noise_levels, function ($query): void {
            $query->whereIn('noise_level', $this->noise_levels);
        })->when($this->noise_value, function ($query): void {
            $query->where('noise_value', $this->noise_value);
        })->when($this->rim_structure, function ($query): void {
            $query->where('rim_structure', $this->rim_structure);
        })->when($this->rim_dedicated, function ($query): void {
            $query->where('rim_dedicated', $this->rim_dedicated);
        })->when($this->reinforced, function ($query): void {
            $query->reinforced();
        })->when($this->pattern_name, function ($query): void {
            $query->where('pattern_name', 'like', '%'.$this->pattern_name.'%');
        })->when($this->runflat, function ($query): void {
            $query->punctureResistant();
        })->tyre();

        // Rendezés
        match ($this->sortBy) {
            'price_asc' => $query->orderBy('net_retail_price', 'asc'),
            'price_desc' => $query->orderBy('net_retail_price', 'desc'),
            default => $query->orderBy('all_quantity', 'desc'), // availability
        };

        return $query->paginate(24);
    }
}
