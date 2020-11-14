<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntranceCallController extends Controller
{
    public function index()
    {
        return view("back.calls.index");
    }

    public function create()
    {
        return view("back.calls.create");
    }

    public function store(Request $request)
    {
        Answering::register();
    }


}
