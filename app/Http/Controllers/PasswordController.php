<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }
}