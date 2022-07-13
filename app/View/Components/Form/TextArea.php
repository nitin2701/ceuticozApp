<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
class TextArea extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input name.
     *
     * @var string
     */
    public $name;
    /**
     * The input isRequire.
     *
     * @var boolean
     */
    public $require;
    /**
     * The input label.
     *
     * @var string
     */
    public $label;
    /**
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;
    /**
     * The input value.
     *
     * @var string
     */
    public $value;
    /**
     * The input rows.
     *
     * @var string
     */
    public $rows;
    /**
     * The input cols.
     *
     * @var string
     */
    public $cols;

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($name = "text",$id = '',$require=false, $label = "Text Input", $placeholder = "Enter Text",$rows = '', $cols = '', $value = '')
    {
        $this->id = ($id)? $id : 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->label = $label;
        $this->require = $require;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
