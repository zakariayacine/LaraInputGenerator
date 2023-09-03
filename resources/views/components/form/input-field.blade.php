<div class="form-group mb-3">
    <label class="form-label" for="{{ $name }}">{{ __($label) }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}">
    @if ($errors->has($name))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
