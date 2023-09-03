<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileUpload extends Component
{
    public $name;
    public $label;
    public $accept;
    public $multiple;

    public function __construct($name, $label = null, $accept = null, $multiple = false)
    {
        $this->name = $name;
        $this->label = $label ?? ucwords(str_replace('_', ' ', $name));
        $this->accept = $accept;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.file-upload');
    }
}
