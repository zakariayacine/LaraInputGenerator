<div class="form-group mb-3">
    <label class="form-label" for="{{ $name }}">{{ ucfirst($label) }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
        name="{{ $name }}">{{ $value }}</textarea>
    @if ($errors->has($name))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first($name) }}</strong>
    </span>
    @endif
</div>