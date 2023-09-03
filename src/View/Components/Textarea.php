<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;

    public $name;

    public $value;

    public $errors;

    public function __construct($name, $label = null, $value = null, $errors = null)
    {
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
        $this->name = $name;
        $this->value = old($name, $value);
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}
