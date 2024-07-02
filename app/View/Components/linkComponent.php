<?php

namespace App\View\Components;

use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class linkComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $dismis = false)
    {
        $this->dismis;
    }

    function linkText($text, $link = "#"){
        return new HtmlString( "<a target='_blank' href='".$link."' class='w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-700 text-base font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm'>".$text."</a>");
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-component');
    }
}
