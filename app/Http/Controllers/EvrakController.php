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

    // Edit Document
    public function edit($id){
        $entry = Evrak::find($id);
        $evrak_kategori = EvrakKategori::all();
        return view('documents.edit', compact('evrak_kategori', 'entry'));
    }

    public function edit_post($id){
        $this->validate(request(), [
            'evrak_adi' => 'required',
            'evrak_kategori_id' => 'required',
            'evrak_aciklama' => 'required',
            'evrak_tipi' => 'required',
            'evrak_fotograf' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $evrak_fotograf = request()->evrak_fotograf;


        if(isset($evrak_fotograf)){
            $dosya_adi = $evrak_fotograf -> hashName();
            if($evrak_fotograf->isValid()){
                $evrak_fotograf -> move('uploads/evraklar', $dosya_adi);
                $data['evrak_fotograf'] = $evrak_fotograf;
            }
        }


        $data = [
            'evrak_adi' => request('evrak_adi'),
            'evrak_kategori_id' => request('evrak_kategori_id'),
            'evrak_aciklama' => request('evrak_aciklama'),
            'evrak_tipi' => request('evrak_tipi'),
        ];

        $entry = Evrak::where('id', $id);
        $entry -> update($data);


        return redirect()->route('documents');
    }

    // Delete Document
    public function delete($id){
        Evrak::destroy($id);

        return redirect()->route('documents');
    }
}
