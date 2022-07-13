<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
class Text extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input type.
     *
     * @var string
     */
    public $type;
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
     * The input isReadonly.
     *
     * @var boolean
     */
    public $readonly;
    /**
     * The input disabled.
     *
     * @var boolean
     */
    public $disabled;
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
     * The input multiple.
     *
     * @var string
     */
    public $multiple;
   

    /**
     * Create a new component instance.
     *
     * @param  string  $name
     * @param  string  $label
     * @param  string  $placeholder
     *
     * @return void
     */
    public function __construct($type = "text",$name = "text",$id = '',$require=false, $readonly=false,$disabled = false, $label = "Text Input", $placeholder = "Enter Text", $value = '', $multiple= '')
    {
        $this->id = ($id)? $id : 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->require = $require;
        $this->readonly = $readonly;
        $this->disabled = $disabled;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.text');
    }
}
