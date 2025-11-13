<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $tempVar = $request->validate([
            'name'=> 'required',
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        return view('dashboard');
        //return redirect()->route('dashboard');
    }
}
