@extends("back.layout")

@section("content")
    <x-success></x-success>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    نقش ها
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>عنوان نقش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <form action="{{ route("admin.roles.destroy",$role) }}" method="post">
                                        @csrf
                                        @method("DELETE")

                                        <input type="submit" class="btn-link btn" value="حذف">
                                        <a  href="{{ route("admin.roles.show",$role) }}" class="btn btn-link">نمایش</a>
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
{{--
                    <form action="{{ route("admin.roles.attachPermission",$role) }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="role_name">عنوان نقش</label>
                                    <input type="text" id="role_name" name="role_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-primary" value="ذخیره">
                            </div>
                        </div>
                    </form>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
