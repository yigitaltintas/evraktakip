<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvrakKategoriController extends Controller
{
    // Document Categories
    public function index(){
        return view('document-categories.all');
    }

    // Add Document Category Form
    public function add(){
        return view('document-categories.add');
    }

    // Add Document Category
    public function add_post(){

    }

    // Edit Document Category Form
    public function edit(){
        return view('document-categories.edit');
    }

    // Edit Document Category
    public function edit_put(){
        return view('document-categories.edit');
    }
}

