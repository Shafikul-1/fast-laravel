<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Aleart extends Component
{
//   public $massage;
//   public $type;
//   public $dismis;

protected $types = ['yellow', 'green', 'red'];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $massage = 'defult massage', public $type = 'bg-gray-100', public $dismis = false)
    {
        // $this->$type;
        $this->$massage = $massage;
        $this->$type = $type;
        $this->$type = $dismis;
    }

    public function valiedType(){
        return in_array($this->type, $this->types) ? $this->type : '';
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.aleart');
    }
}
