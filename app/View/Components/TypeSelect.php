<?php

namespace App\View\Components;

use App\types;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TypeSelect extends Component
{
    public $types;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->types = types::cases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.type-select');
    }
}
