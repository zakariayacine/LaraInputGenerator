<div class="form-group mb-3">
    <!-- Form Label -->
    <label class="form-label" for="{{ $name }}">{{ __($label) }}</label>

    <!-- Form Input -->
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}"
        class="form-control @error($name) is-invalid @enderror" id="{{ $name }}">

    <!-- Error Message (if validation fails) -->
    @if ($errors->has($name))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($name) }}</strong>
    </span>
    @endif
</div>