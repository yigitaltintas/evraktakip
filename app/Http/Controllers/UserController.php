<?php

namespace App\Http\Controllers;

use App\Kullanici;
use Session;
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

        return redirect()->route('users');
    }

    // Edit user
    public function edit($id){

        $entry = Kullanici::find($id);
        return view('users.edit', compact('entry'));
    }

    // Edit user Put
    public function edit_post($id){

        $this -> validate(request(),[
            'adsoyad' => 'required',
            'email' => 'required|email'
        ]);

        $data  = request()->only('adsoyad', 'email');

        if(request()->filled('sifre')){
            $data['sifre'] = Hash::make(request('sifre'));
        }

        $entry = Kullanici::where('id', $id);
        $entry -> update($data);

        return redirect()->route('edit-user', $id);
    }

    // Delete User
    public function delete($id){

        Kullanici::destroy($id);

        return redirect()->route('users');
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

            Session::put('email', request('email'));

            request()->session()->regenerate();
            return redirect()->intended('/');
        }else{
            $errors = ['email' => 'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }

    // Logout
    public function logout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect('login');
    }

}
