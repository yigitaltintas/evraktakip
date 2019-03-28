<?php

namespace App\Http\Controllers;

use App\Models\EvrakKategori;
use Illuminate\Http\Request;

class EvrakKategoriController extends Controller
{
    // Document Categories
    public function index(){
        $evrak_kategoriler = EvrakKategori::all();

        return view('document-categories.all', compact('evrak_kategoriler'));
    }

    // Add Document Category Form
    public function add(){
        return view('document-categories.add');
    }

    // Add Document Category
    public function add_post(){
        $this -> validate(request(), [
            'evrak_kategori_adi' => 'required|min:3|unique:document_category'
        ]);

        $kategori = EvrakKategori::create([
            'evrak_kategori_adi' => request('evrak_kategori_adi')
        ]);

        return redirect()->route('document-categories');
    }

    // Edit Document Category Form
    public function edit(){
        return redirect()->route('edit-document');
    }

    // Edit Document Category
    public function edit_post(){
        return view('document-categories.edit');
    }
}

