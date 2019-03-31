<?php

namespace App\Http\Controllers;

use App\Models\Evrak;
use App\Models\EvrakKategori;
use Illuminate\Http\Request;

class EvrakController extends Controller
{
    // Documents
    public function index(){
        $evraklar = Evrak::orderBy('id', 'desc')->get();
        return view('documents.all', compact('evraklar'));
    }

    // Add Document
    public function add(){
        $evrak_kategori = EvrakKategori::all();
        return view('documents.add', compact('evrak_kategori'));
    }

    // Add Document
    public function add_post(){

        $this->validate(request(), [
            'evrak_adi' => 'required',
            'evrak_kategori_id' => 'required',
            'evrak_aciklama' => 'required',
            'evrak_tipi' => 'required',
            'evrak_fotograf' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $evrak_fotograf = request()->evrak_fotograf;
        $dosya_adi = $evrak_fotograf -> hashName();

        if($evrak_fotograf->isValid()){
            $evrak_fotograf -> move('uploads/evraklar', $dosya_adi);
        }

        $evrak = Evrak::create([
            'evrak_adi' => request('evrak_adi'),
            'evrak_kategori_id' => request('evrak_kategori_id'),
            'evrak_aciklama' => request('evrak_aciklama'),
            'evrak_tipi' => request('evrak_tipi'),
            'evrak_fotograf' => $dosya_adi,
        ]);

        return redirect()->route('documents');
    }

}
