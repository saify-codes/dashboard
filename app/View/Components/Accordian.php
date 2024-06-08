<?php

namespace App\View\Components;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordian extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $style = 'primary')
    {
        $accordian_styles = ['minimal', 'primary'];

        if (!in_array( $style, $accordian_styles)) {
            throw new Exception("Invalid accordian style must be " . implode(', ', $accordian_styles));
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordian');
    }
}
