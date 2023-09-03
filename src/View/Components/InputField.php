<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $type
     * @param string|null $label
     * @param string|null $value
     * @param string|null $errors
     */
    public function __construct(public $name, public  $type, public  $label = null, public  $value = null, public  $errors = null)
    {
        // Initialize component data properties
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
        $this->value = old($name, $value);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        // Return the view file associated with this component
        return view('components.form.input-field');
    }
}
