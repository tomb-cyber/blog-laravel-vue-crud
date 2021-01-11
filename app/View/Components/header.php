<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    public $heading;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading)
    {
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}