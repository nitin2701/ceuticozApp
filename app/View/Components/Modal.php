<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Modal extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input heading attribute.
     *
     * @var string
     */
    public $heading;

    /**
     * The input size attribute.
     *
     * @var string
     */
    public $msize;
    /**
     * The input close attribute.
     *
     * @var string
     */
    public $close;
    /**
     * The input save attribute.
     *
     * @var string
     */
    public $save;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading = 'Default Modal',$msize='', $save = '', $close = '')
    {
        $this->id = 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($heading);
        $this->heading = $heading;
         $this->msize = $msize;
         $this->save = $save;
        $this->close = $close;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
