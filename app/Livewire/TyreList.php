<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Livewire\WithPagination;

final class TyreList extends Component
{
    use WithPagination;

    public $width; // mm

    public $aspect_ratio; // %

    public $structure; // R / L

    public $diameter;

    public $li; // suly index

    public $si; // sebesség index

    public $season; // Nyári / Téli / Négyévszakos (1,2,3),{summer(),winter(),allSeason()}

    public $consumption; // A / B / C / D / E / F / G

    public $grip; // A / B / C / D / E / F

    public $noise_level; // 1 / 2 / 3

    public $noise_value;

    public $rim_structure; // 	Kúpos Csavarral / Talpas csavarral/ Használt

    public $rim_dedicated; // Homológizáció

    public $reinforced; // igen / nem

    public $pattern_name; // Mintázat

    public $runflat; // igen / nem

    public $tire_spec_data; // Gumiabroncs specifikációs adatok

    public $tire_car_data; // Gumiabroncs autó adatok

    public $price_min;

    public $price_max;

    public function render(): View|Factory
    {
        $products = $this->buildQuery();

        return view('livewire.tyre-list', ['products' => $products]);
    }

    private function buildQuery(): LengthAwarePaginator
    {
        $query = Product::query();

        $query->when($this->width, function ($query) {
            $query->where('width', $this->width);
        })->when($this->aspect_ratio, function ($query) {
            $query->where('aspect_ratio', $this->aspect_ratio);
        })->when($this->structure, function ($query) {
            $query->where('structure', $this->structure);
        })->when($this->diameter, function ($query) {
            $query->where('diameter', $this->diameter);
        })->when($this->li, function ($query) {
            $query->where('li', $this->li);
        })->when($this->si, function ($query) {
            $query->where('si', $this->si);
        })->when($this->season, function ($query) {
            if ($this->season === 'summer') {
                $query->summer();
            } elseif ($this->season === 'winter') {
                $query->winter();
            } elseif ($this->season === 'allSeason') {
                $query->allSeason();
            }
        })->when($this->consumption, function ($query) {
            $query->where('consumption', $this->consumption);
        })->when($this->grip, function ($query) {
            $query->where('grip', $this->grip);
        })->when($this->noise_level, function ($query) {
            $query->where('noise_level', $this->noise_level);
        })->when($this->noise_value, function ($query) {
            $query->where('noise_value', $this->noise_value);
        })->when($this->rim_structure, function ($query) {
            $query->where('rim_structure', $this->rim_structure);
        })->when($this->rim_dedicated, function ($query) {
            $query->where('rim_dedicated', $this->rim_dedicated);
        })->when($this->reinforced, function ($query) {
            $query->reinforced();
        })->when($this->pattern_name, function ($query) {
            $query->where('pattern_name', 'like', '%'.$this->pattern_name.'%');
        })->when($this->runflat, function ($query) {
            $query->punctureResistant();
        });

        return $query->paginate(24);
    }
}
