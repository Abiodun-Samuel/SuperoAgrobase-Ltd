<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageComponent extends Component
{
    public $description;
    public $link;
    public $linktext;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description, $link, $linktext)
    {
        $this->description = $description;
        $this->link = $link;
        $this->linktext = $linktext;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.page-component');
    }
}
