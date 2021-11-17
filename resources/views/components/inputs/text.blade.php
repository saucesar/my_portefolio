<label class="mb-2" for="{{ $name }}">{{ $label }}</label>
<input type="{{ $type ?? 'text' }}"  class="form-control @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $id ?? $name }}" value="{{ $value ?? old($name) }}"
        placeholder="{{ $placeholder ?? '' }}" @if(!isset($required) || isset($required) && $required) required @endif >
@error($name)
<small class="text-danger">{{ $message }}</small>
@enderror