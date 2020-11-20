<div class="form-check">
    <input type="checkbox" {{ (isset($checked) and $checked==true) ? "checked" : ""    }}
    id="{{ $name }}" name="{{ $name }}" class="form-check-input" value="{{ $value ?? "" }}">
    <label for="{{ $name }}"
           class="form-check-label">{{ $label ?? "" }}</label>
</div>
