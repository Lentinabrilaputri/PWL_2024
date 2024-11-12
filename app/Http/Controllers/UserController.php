<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function showProfile($id, $name)
    {
        return view('user.profile')
        ->with('name', $name)
        ->with('id', $id);
    }
}
