<div class="form-group row mb-3">
    <!-- Form Label for Standard Select -->
    <label class="col-md-4 col-form-label text-md-end" for="{{ $name }}">{{ ucfirst($label) }}</label>

    <!-- Standard Select Input -->
    <div class="col-12 col-md-6">
        <select {{ $required ? 'required' : '' }} class="form-control @error($name) is-invalid @enderror"
            id="{{ $name }}" name="{{ $name }}">
            @foreach ($options as $optionValue => $optionLabel)
            @if (gettype($optionLabel) == 'array')
            <option value="{{ $optionLabel['value'] }}" {{ $optionLabel['value']==$value ? 'selected' : '' }}>
                {{ $optionLabel['text'] }}
            </option>
            @else
            <option value="{{ $optionValue }}" {{ $optionValue==$value ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
            @endif
            @endforeach
        </select>
    </div>

    <!-- Error Message (if validation fails) -->
    @if ($errors->has($name))
    <div class="col-12 col-md-6 offset-md-4">
        <span class="text-danger">
            {{ $errors->first($name) }}
        </span>
    </div>
    @endif
</div>