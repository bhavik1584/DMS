<?php

namespace App\View\Components\dms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Folder extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($props)
    {
        $this->props = $props;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {   
        $this->data['props'] = $this->props;
        return view('components.dms.folder',$this->data);
    }
}
