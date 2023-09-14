<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function signup(){
        return view('Auth.registratiepage');
    }

    public function store() {
     
        $user_data = request()->validate([
            'name' => ['required', ' max:50'],
            'password' => ['required', ' max:50', 'confirmed','same:password_confirmation'],
            // 'password_confirmation' => ['required', ' max: 50'],
            'gender' => ['required', ' max:50'],
            'age' => ['required', ' max:50'],
            'email' => ['required', ' max:50','email'],
            'phonenumber' => ['required', ' max:50'],
            // 'admin' => ['boolean']
        ]);
        
        // DD($user_data);
        session()->flush();
      
        $user_data['password'] = Hash::make($user_data['password']);
        $user=User::create($user_data);

        if (!Auth::login($user)) return redirect('login');
        return redirect('home');
    }

    public function inlog()
    {
        return view("Auth.loginpage");
    }

    public function login() {
        $credentails = request()->validate([
            'email' => ['required', ' max: 50'],
            'password' => ['required', ' max: 50'],
        ]);


        session()->flush();
        if (!Auth::attempt($credentails)) return redirect('login');
        return redirect('home');
    } 
    
    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function create() {
        return view('post.create');
    }

    public function edit(){
        return view('post.edit');
    }
}
