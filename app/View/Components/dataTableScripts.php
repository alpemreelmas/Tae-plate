<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dataTableScripts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($tableSelector = "dataTableTae")
    {
        $this->tableSelector = $tableSelector;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $tableSelector = $this->tableSelector;
        return view('components.data-table-scripts',compact("tableSelector"));
    }
}
