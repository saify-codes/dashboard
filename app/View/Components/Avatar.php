<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Exception;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $source, public string $size = "sm")
    {
        $sizes = ['sm','md','lg','xl'];
        if (!in_array( $size, $sizes)) {
            throw new Exception("Invalid size must be " . implode(', ', $sizes));
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.avatar');
    }
}
