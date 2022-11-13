<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Services extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $services;
    public function __construct($services )
    {
        $this->services = $services;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.services');
    }
}
