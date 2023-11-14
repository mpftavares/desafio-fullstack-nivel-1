<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly array $links)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.breadcrumbs');
    }
}