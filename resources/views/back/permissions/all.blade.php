@extends("back.layout")

@section("content")
    <x-success></x-success>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    دسترسی ها
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>عنوان دسترسی</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <form action="{{ route("admin.permissions.destroy",$permission) }}" method="post">
                                        @csrf
                                        @method("DELETE")

                                        <input type="submit" class="btn-link btn" value="حذف">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                    <x-errors></x-errors>

                    <form action="{{ route("admin.permissions.store") }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="permission_name">عنوان دسترسی</label>
                                    <input type="text" id="permission_name" name="permission_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-primary" value="ذخیره">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
