<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class signUp_controller extends Controller
{
    //
    public function index(){
        return view('signUp_view');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create($data);

        return view('signIn_view')->with('message', 'Account created successfully');
    }



}
