<?php
namespace App\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
class Select extends Component
{
    /**
     * The input id attribute.
     *
     * @var string
     */
    public $id;
    /**
     * The input name attribute.
     *
     * @var string
     */
    public $name;
    /**
     * The input require attribute.
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
     * The input isReadonly.
     *
     * @var boolean
     */
    public $multiple;
    /**
     * The input label.
     *
     * @var string
     */
    public $label;
    /**
     * The selectable options.
     *
     * @var string
     */
    public $placeholder;
    /**
     * The selectable options.
     *
     * @var array
     */
    public $options;
    /**
     * The selected option.
     *
     * @var array
     */
    public $selected;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     * @param  string   $label
     * @param  string   $placeholder
     * @param  array    $options
     *
     * @return void
     */
    public function __construct(string $name = "select",string $id = "",$require=false, $readonly=false,$multiple=false, string $label = "Select Input", string $placeholder = "Select Option...", array $options = [], $selected = '')
    {
                $this->id = ($id)? $id : 'form-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
                $this->name = $name;
                $this->label = $label;
                $this->require = $require;
                $this->readonly = $readonly;
                $this->multiple = $multiple;
                $this->placeholder = $placeholder;
                $this->options = $options;
                $this->selected = $selected;
               
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.select');
    }
    
    public function isSelected($option)
    {   
        if(strlen($this->selected) > 0){
            if(is_array($this->selected) && in_array($option,$this->selected)){
                return true;
            }elseif($option == $this->selected || $option == old($this->name)){
                    return true;
            }else{
                    return false;
            }

        }else{
            return false;
        }
        
        //return ($option === $this->selected || $option== old($this->name) ||);
    }
}