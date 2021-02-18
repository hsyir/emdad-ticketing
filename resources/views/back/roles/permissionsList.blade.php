@php($permissions = \Spatie\Permission\Models\Permission::all())

@foreach($permissions as $permission)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="permissionCheck{{ $loop->index }}" @if($role->hasPermissionTo($permission->name)) checked @endif>
        <label class="form-check-label" for="permissionCheck{{ $loop->index }}">
            {{ $permission->name }}
        </label>
    </div>
@endforeach
