<div class="form-group row mb-3">
    @if ($withSearch)
        @php
            // $mappedOptions = $options->map(fn($el, $k) => ['value' => $k, 'text' => $el]);
            $mappedOptions = $options;
        @endphp
        <label class="col-md-4 col-form-label text-md-end" for="{{ $name }}">{{ ucfirst($label) }}</label>
        <div class="col-12 col-md-6">
            <searchable-select required={{ $required }} name="{{ $name }}" label="{{ $label }}"
                :options="{{ $mappedOptions }}" />


        </div>
    @else
        <label class="col-md-4 col-form-label text-md-end" for="{{ $name }}">{{ ucfirst($label) }}</label>
        <div class="col-12 col-md-6">
            <select {{ $required ? 'required' : '' }} class="form-control @error($name) is-invalid @enderror"
                id="{{ $name }}" name="{{ $name }}">
                @foreach ($options as $optionValue => $optionLabel)
                    @if (gettype($optionLabel) == 'array')
                        <option value="{{ $optionLabel['value'] }}"
                            {{ $optionLabel['value'] == $value ? 'selected' : '' }}>
                            {{ $optionLabel['text'] }}
                        </option>
                    @else
                        <option value="{{ $optionValue }}" {{ $optionValue == $value ? 'selected' : '' }}>
                            {{ $optionLabel }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>

    @endif

    @if ($errors->has($name))
        <div class="col-12 col-md-6 offset-md-4">
            <span class="text-danger">
                {{ $errors->first($name) }}
            </span>

        </div>
    @endif



</div>
