<?php

namespace App\View\Components;

use Closure;
use App\Models\Option;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PageContacts extends Component
{
    public $contact_info;


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $all_options = Option::where("name", "phone")
                        ->orWhere("name", "phone2")
                        ->orWhere("name", "email")
                        ->orWhere("name", "tg_lnk")
                        ->orWhere("name", "vk_lnk")
                        ->orWhere("name", "adress")
                        ->get();

        $opt = [];

        foreach ($all_options as $otion) {
            $opt[$otion['name']] = $otion['value'];
        }

        $this->contact_info = $opt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-contacts');
    }
}
