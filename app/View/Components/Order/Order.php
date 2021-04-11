<?php

namespace App\View\Components\Order;

use Illuminate\View\Component;

class Order extends Component
{
    public $product;
    // public $pix;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
        // $this->pix = $pix;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.order.order');
    }
}
