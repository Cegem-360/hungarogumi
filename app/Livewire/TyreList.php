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

    #[Computed]
    public function products()
    {
        return $this->buildQuery();
    }

    public function mount(): void
    {
        /* $this->seasons = request('seasons', []);
        if (! is_array($this->seasons)) {
            $this->seasons = [$this->seasons];
        } */

    }

    public function render(): View|Factory
    {

        return view('livewire.tyre-list');
    }

    private function buildQuery(): LengthAwarePaginator
    {
        $query = Product::query();

        $query->when($this->manufacturer, function ($query): void {
            $query->where('manufacturer_id', Manufacturer::where('name', $this->manufacturer)->first('id')->id);
        })->when($this->price_min, function ($query): void {
            $query->where('net_retail_price', '>=', $this->price_min);
        })->when($this->price_max, function ($query): void {
            $query->where('net_retail_price', '<=', $this->price_max);
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
            $query->whereIn('season', $this->seasons);
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

        return $query->paginate(24);
    }
}
