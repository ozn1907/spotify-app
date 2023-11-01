<?php
namespace App\View\Components;

use Illuminate\View\Component;

class FormField extends Component
{
    public $label;
    public $name;
    public $type;
    public $placeholder;

    public function __construct($label, $name, $type, $placeholder)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.form.form-field');
    }
}
