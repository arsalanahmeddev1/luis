<?php

namespace App\View\Components;

use Illuminate\View\Component;

class page extends Component
{

    public $verses,$page,$chapter,$slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($verses,$page,$chapter,$slug)
    {
        $this->verses=$verses;
        $this->page=$page;
        $this->chapter=$chapter;
        $this->slug=$slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page');
    }
}
