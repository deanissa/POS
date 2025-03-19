<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class KategoriController extends Controller
{   
    //Controller Kategori Index
    public function index(KategoriDataTable $dataTable) {
        return $dataTable->render('kategori.index');
    }

    //Controller Kategori Create
    public function create() {
        return view('kategori.create');
    }
    public function store(Request $request) {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }
    //Controller Kategori Edit
    public function edit($id) {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }
    public function update(Request $request, $id) {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
    
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }
    
    //public function index() {
    /*$data = [
        'kategori_kode' => 'SNK',
        'kategori_nama' => 'Snack/Makanan Ringan',
        'created_at' => now(),
    ];
    DB::table('m_kategori')->insert($data);
    return 'Insert data baru berhasil';*/

    //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    //return 'Update data berhasil. Jumlah data yang diupdate: ' .$row. 'baris';

    //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //return 'Delete data berhasil. Jumlah data yang delete: ' .$row. 'baris';

    //$data = DB::table('m_kategori')->get();
    //return view('kategori', ['data' => $data]);
}

