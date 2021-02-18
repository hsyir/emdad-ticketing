<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view("back.roles.all", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            "role_name" => "required|unique:roles,name",
        ]);

        Role::create(["name" => $request->role_name]);

        return self::redirectBackWithSuccess("ثبت شد");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view("back.roles.show",compact("role"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return self::redirectBackWithSuccess("حذف شد");
    }

    public function syncPermissions(Request $request,Role $role)
    {
        $role->syncPermissions($request->permissions);
        return self::redirectBackWithSuccess("انجام شد");
    }


    public function addUser(Request $request,Role $role)
    {
        $user= User::find($request->user_id);
        $user->assignRole($role);

        return self::redirectBackWithSuccess("انجام شد");
    }
    public function removeUser(Request $request,Role $role)
    {
        $user= User::find($request->user_id);
        $user->removeRole($role->name);

        return self::redirectBackWithSuccess("انجام شد");
    }


}
