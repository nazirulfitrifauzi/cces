<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Simple extends Component
{
    public $type;
    public $size;
    public $icon;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $size = 'base', $icon = false, $disabled = false)
    {
        $this->type = $type;
        $this->size = $size;
        $this->icon = $icon;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.simple');
    }
}
