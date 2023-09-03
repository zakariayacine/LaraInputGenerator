<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;

    public $label;

    public $type;

    public $value;

    public $errors;

    public function __construct($name, $type, $label = null, $value = null, $errors = null)
    {
        $this->name = $name;
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
        $this->type = $type;
        $this->value = old($name, $value);
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-field');
    }
}
