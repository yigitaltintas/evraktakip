<?php

namespace App\Http\Controllers;

use App\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Users
    public function index(){
        $users = Kullanici::all();
        return view('users.all', compact('users'));
    }

    // Add User Form
    public function add(){
        return view('users.add');
    }

    // Add User
    public function add_post(){
        $this -> validate(request(), [
            'adsoyad' => 'required|min:5|max:60',
            'email' => 'required|email|unique:user',
            'sifre' => 'required|confirmed|min:5|max:20'
        ]);

        $kullanici = Kullanici::create([
            'adsoyad' => request('adsoyad') ,
            'email' => request('email') ,
            'sifre' => Hash::make(request('sifre'))
        ]);

        return redirect()->route('home');
    }

    // Edit user
    public function edit(){
        return view('users.edit');
    }

    // Login Form
    public function login(){
            return view('login');
    }

    // Login
    public function login_post(){
        $this->validate(request(), [
            'email' => 'required|email',
            'parola' => 'required'
        ]);

        if(auth()->attempt(['email' => request('email'), 'password' => request('parola')], request()->has('remember'))){
            request()->session()->regenerate();
            return redirect()->intended('/');
        }else{
            $errors = ['email' => 'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }

}
