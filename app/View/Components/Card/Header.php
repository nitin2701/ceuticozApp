<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Header extends Component
{
          /**
    
    /**
     * The header heading
     *
     * @var string
     */
      public $heading;
      
     /**
     * The header icon
     *
     * @var string
     */
    public $icon;
    
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading,$icon='list')
    {
                $this->heading          =       $heading;
                $this->icon                 =       $icon;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.header');
    }
}
