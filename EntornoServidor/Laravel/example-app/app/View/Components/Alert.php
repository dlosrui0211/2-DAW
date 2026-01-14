<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */

    // Todas las funciones que sean publicas se puede ver desde el componente alert
    public $colortext;

    public function __construct($colortext)
    {
        $this -> colortext = $colortext;
    }

    /**
     * Get the view / contents that represent the component. / Va a renderizar la vista
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
