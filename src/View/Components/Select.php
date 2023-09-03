<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $name;

    public $label;

    public $required;

    public $options;

    public $withSearch;

    public $value;

    public $errors;

    public function __construct($name, $required = false, $label = null, $options = [], $withSearch = false, $value = null, $errors = null)
    {
        $this->name = $name;
        $this->required = $required;
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
        $this->options = $options;
        $this->withSearch = $withSearch;
        $this->value = old($name, $value);
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
