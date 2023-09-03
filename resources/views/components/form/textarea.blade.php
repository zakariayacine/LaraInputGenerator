<div class="form-group mb-3">
    <!-- Form Label -->
    <label class="form-label" for="{{ $name }}">{{ ucfirst($label) }}</label>
    
    <!-- Textarea Input -->
    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
        name="{{ $name }}">{{ $value }}</textarea>
    
    <!-- Error Message (if validation fails) -->
    @if ($errors->has($name))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
