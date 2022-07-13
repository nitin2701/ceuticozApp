<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
class Button extends Component
{
        /**
     * The button type.
     *
     * @var string
     */
    public $type;
    
    
    /**
     * The input button text.
     *
     * @var string
     */
    public $button_text;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = "submit", $button_text = "Save")
    {
        $this->type = $type;
        $this->button_text = $button_text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
