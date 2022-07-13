<?php

namespace App\View\Components\Show;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Text extends Component
{
    
    /**
     * The id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The label text.
     *
     * @var string
     */
    public $label;
    /**
     * The label for.
     *
     * @var string
     */
    public $for;
    /**
     * The value of label.
     *
     * @var string
     */
    public $value;
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = "label", $for = "", $value = "")
    {
        $this->id = 'label-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($label);
        $this->label = $label;
        $this->for = $for;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('show.text');
    }
}
