<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $totalSongsSynced;
    public $totalDurationInHours;
    public $totalDurationInMinutes;

    public function __construct($totalSongsSynced, $totalDurationInHours, $totalDurationInMinutes)
    {
        $this->totalSongsSynced = $totalSongsSynced;
        $this->totalDurationInHours = $totalDurationInHours;
        $this->totalDurationInMinutes = $totalDurationInMinutes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
