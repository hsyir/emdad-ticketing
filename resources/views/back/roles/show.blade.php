@extends("back.layout")

@section("content")

    @php($users = \App\Models\User::role($role->name)->get())

    <x-success></x-success>
    @can("edit posts")
        <div>ICAN</div>
    @else
        <div>ICAN not</div>
    @endcan
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    asd
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>عنوان نقش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($role->permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
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
                    کاربران دارای نقش
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>نام</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <form action="{{ route("admin.roles.removeUser",$role) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="submit" class="btn btn-link" value="حذف">
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
افزودن نقش به کاربران
                </div>
                <div class="card-body">

                    <form action="{{ route("admin.roles.addUser",$role) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                               <div class="form-group">
                                   <label for="user_id">نام کاربر</label>
                                   <x-select-user></x-select-user>
                               </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-primary" value="افزودن نقش به کاربر">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                    <x-errors></x-errors>

                    <form action="{{ route("admin.roles.syncPermissions",$role) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    @include("back.roles.permissionsList",["role"=>$role])
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
