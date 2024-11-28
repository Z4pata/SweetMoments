<?php

namespace App\View\Components;

use App\sizes;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SizeSelect extends Component
{
    public $sizes;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sizes = sizes::cases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.size-select');
    }
}
