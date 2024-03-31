<?php

namespace App\View\Components\Product;

use Closure;
use App\Models\Product;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProductMainSection extends Component
{
    public $all_product;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->all_product = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.product-main-section');
    }
}
