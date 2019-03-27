<?php

namespace App\Http\Controllers;

use App\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Users
    public function index(){
        return view('users.all');
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
}