<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarItem extends Component
{
    public $route;
    public $title;
    public $icon;
    public $submenu;
    public $submenuData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $title, $icon, $submenu = false, $submenuData = [])
    {
        $this->route = $route;
        $this->title = $title;
        $this->icon = $icon;
        $this->submenu = $submenu;
        $this->submenuData = $submenuData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-item');
    }
}
