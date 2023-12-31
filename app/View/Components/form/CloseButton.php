<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CloseButton extends Component
{
    /**
     * Create a new component instance.
     */

    public $modalToggle;

    public function __construct($modalToggle)
    {
        $this->modalToggle = $modalToggle;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.close-button');
    }
}
