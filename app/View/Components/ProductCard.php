<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $product;
    /**
     * Create a new component instance.
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): mixed
    {
        return view('components.product-card');
    }

    /*
Original render code below: this was being flagged as depricated and was throwing a warning which I wanted to get rid of so the code above was converted by ChatGPT.
"In PHP 8, the return type declaration syntax has been extended, so you should use the mixed type instead of specifying multiple types directly."

    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
    */    
    
}