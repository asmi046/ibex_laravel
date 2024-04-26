<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu\Menu;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MainMenue extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menu = Menu::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-menue', ['menu' => $this->menu]);
    }
}
