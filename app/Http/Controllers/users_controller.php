<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class users_controller extends Controller
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

    public function post_signIn(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        // $user = User::where('email', $data['email'])->first();
        // //dd($user);

        // if($user){
        //     if (Hash::check($data['password'], $user->password)) {
        //         return view('welcome');
        //     }else{
        //         return view('signIn_view')->with('message', 'Invalid email or password');
        //     }
        // }else{
        //     return view('signIn_view')->with('message', 'Invalid email or password');
        // }

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('user-page');
        }else{
            return view('signIn_view')->with('message', 'Invalid email or password');
        }
    }

    public function signIn_page(){
        return view('signIn_view');
    }

    public function logout(){
        Auth::logout();
        return view('signIn_view');
    }



}
