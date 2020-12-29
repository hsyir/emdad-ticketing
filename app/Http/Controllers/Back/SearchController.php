<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Credit;
use App\Models\Queue;
use App\Models\User;

class SearchController extends Controller
{

    public function searchForUser()
    {
        $term = request('term');
        $users = User
            ::like('name', $term)
            ->orlike('email', $term)
            ->orlike('username', $term)
            ->limit(50)
            ->get(['id', 'name']);

        return response()->json(compact('users'));
    }
}
