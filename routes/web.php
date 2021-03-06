<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home");
})->name("home");

Auth::routes();


Route::as("responders.")->prefix("responders")->namespace("\App\Http\Controllers\Responders")->group(function () {
    Route::get("", "RespondingDashboardController@index")->name("index");
});


Route::namespace("\\App\\Http\\Controllers\\Back")->as("admin.")->prefix("admin")->group(function(){
    Route::get("search/users", "SearchController@searchForUser")->name("search.users");
    Route::resource("permissions","PermissionController");
    Route::resource("roles","RoleController");
    Route::post("roles/{role}/syncPermissions","RoleController@syncPermissions")->name("roles.syncPermissions");
    Route::post("roles/{role}/addUser","RoleController@addUser")->name("roles.addUser");
    Route::delete("roles/{role}/removeUser","RoleController@removeUser")->name("roles.removeUser");
});
