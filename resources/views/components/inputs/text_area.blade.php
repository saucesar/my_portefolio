<label class="mb-2" for="{{ $name }}">{{ $label }}</label>
<textarea name="{{ $name }}" id="{{ $id ?? $name }}"  class="form-control @error($name) is-invalid @enderror"
          cols="{{ $cols ?? 30 }}" rows="{{ $rows ?? 5 }}">{{ $value ?? old($name) }}</textarea>
@error($name)
<small class="text-danger">{{ $message }}</small>
@enderror