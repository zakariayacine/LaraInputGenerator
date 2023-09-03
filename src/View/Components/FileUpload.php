<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileUpload extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $label
     * @param string|null $accept
     * @param bool $multiple
     */
    public function __construct(public $name, public $label = null, public $accept = null, public $multiple = false)
    {
        // Initialize component data properties
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        // Return the view file associated with this component
        return view('components.form.file-upload');
    }
}
