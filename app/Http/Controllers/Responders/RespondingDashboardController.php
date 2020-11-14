<?php

namespace App\Http\Controllers\Responders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RespondingDashboardController extends Controller
{
    public function index(){
        return view("responders.responding-dashboard.index");
    }
}
