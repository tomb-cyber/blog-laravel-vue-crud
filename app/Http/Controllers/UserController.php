<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class UserController extends Controller
{

    public function show() 
    { 
        if (Auth::check()) {
            return view('users.show');
        }
        else {
            return redirect('/blogs');
        }
    }

    public function store()
    {
        
    }
    
    public function edit()
    {
        return view('users.edit');
    }
    
    public function update()
    {
        $user = Auth::user();
        //$this->authorize('update-post', $blogPost);

        $user->update(request()->validate([
            'name' => ['required', 'min:2', 'max:20'],
            'description' => ['required', 'max:200']
        ]));

        return redirect('/settings');
    }
    
    public function warn()
    {
        if (Auth::check()) {
            return view('users.warn');
        }
        else {
            return redirect('/blogs');
        }
    }

    public function destroy()
    {
        Auth::user()->delete();

        return redirect('/blogs');
    }

}