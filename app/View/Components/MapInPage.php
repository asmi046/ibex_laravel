<?php

namespace App\View\Components;

use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MapInPage extends Component
{
    public $map_info;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $all_options = Option::where("name", "phone")
            ->orWhere("name", "adress")
            ->orWhere("name", "geo")
            ->orWhere("name", "phone")
            ->orWhere("name", "organization_name")
            ->get();

        $opt = [];

        foreach ($all_options as $otion) {
        $opt[$otion['name']] = $otion['value'];
        }

        $this->map_info = $opt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.map-in-page');
    }
}
