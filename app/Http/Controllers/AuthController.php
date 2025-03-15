<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        // dd('hell');
        return redirect()->back()->with('message', 'hello');
    }
}
