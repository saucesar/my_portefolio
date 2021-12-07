<div class="d-inline-flex">
    <div class="form-check">
        <input class="form-check-input" name="{{ $name }}" id="{{ $id ?? $name }}" type="checkbox" value="{{ $value ?? 1 }}" @if($checked) checked @endif >
        <label class="form-check-label" for="{{ $id ?? $name }}">{{ $label }}</label>
    </div>
    @if(isset($imgURL))
        <img src="{{ $imgURL }}" class="ml-2" alt="image-{{ $id ?? $name }}" width="30" title="{{ $value  ?? 1 }}">
    @endif
</div>