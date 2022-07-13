<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
class Image extends Component
{
    /**
     * The image src .
     *
     * @var string
     */
    public $src;
    /**
     * The input width.
     *
     * @var string
     */
    public $width;
    /**
     * The input height.
     *
     * @var string
     */
    public $height;
    
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src = "",$width = '', $height = '')
    {
        $this->src = $src;
        $this->width = $width;
        $this->height = $height;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.image');
    }
}
