<div class="form-group mb-3">
    <!-- Form Label -->
    <label class="form-label" for="{{ $name }}">{{ ucfirst($label) }}</label>

    <!-- File Input -->
    <input type="file" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $name }}"
        @if($accept) accept="{{ $accept }}" @endif @if($multiple) multiple @endif>

    <!-- Error Message (if validation fails) -->
    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>