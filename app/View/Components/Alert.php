<?php

namespace App\View\Components;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $title, public string $message = '', public string $type = 'success')
    {
        $alert_types = ['success', 'warning', 'error'];

        if (!in_array( $type, $alert_types)) {
            throw new Exception("Invalid alert type must be " . implode(', ', $alert_types));
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
