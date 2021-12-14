<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PraktikumController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$praktikum = DB::table('praktikum')->get();

        $praktikum = DB::table('praktikum')
       ->join('pegawai', 'praktikum.kodesepatu', '=', 'pegawai.pegawai_id')
       ->select('praktikum.*', 'pegawai.pegawai_nama')
       ->paginate() ;


    	// mengirim data pegawai ke view index
    	return view('praktikum.index',['praktikum' => $praktikum]);


    }
    // method untuk menampilkan view form tambah praktikum
    public function tambah()
    {

        // memanggil view tambah
        return view('praktikum.tambah');

    }
        // method untuk insert data ke table praktikum
    public function store(Request $request)
    {
        // insert data ke table praktikum
        DB::table('praktikum')->insert([
            'merksepatu' => $request->merk,
            'stocksepatu' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman praktikum
        return redirect('/praktikum');

    }
    // method untuk edit data praktikum
    public function edit($id)
        {
        // mengambil data praktikum berdasarkan id yang dipilih
        $praktikum = DB::table('praktikum')->where('kodesepatu',$id)->get();
        // passing data praktikum yang didapat ke view edit.blade.php
        return view('praktikum.edit',['praktikum' => $praktikum]);

        }

    //method uintuk melihat detail data praktikum
    public function detail($id)
    {
    // mengambil data praktikum berdasarkan id yang dipilih
    $praktikum = DB::table('praktikum')
    ->join('pegawai', 'praktikum.kodesepatu', '=', 'pegawai.pegawai_id')
    ->select('praktikum.*', 'pegawai.pegawai_nama')
    ->where('kodesepatu',$id)->get();

    // passing data praktikum yang didapat ke view edit.blade.php
    return view('praktikum.detail',['praktikum' => $praktikum]);

    }
    // update data praktikum
    public function update(Request $request)
    {
        // update data praktikum
        DB::table('praktikum')->where('praktikum_id',$request->id)->update([
            '' => $request->nama,
            'merksepatu' => $request->merk,
            'stocksepatu' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman praktikum
        return redirect('/praktikum');
    }
    // method untuk hapus data praktikum
    public function hapus($id)
    {
        // menghapus data praktikum berdasarkan id yang dipilih
        DB::table('praktikum')->where('kodesepatu',$id)->delete();

        // alihkan halaman ke halaman praktikum
        return redirect('/praktikum');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

            // mengambil data dari table praktikum sesuai pencarian data
        $praktikum = DB::table('praktikum')
        ->join('pegawai', 'praktikum.kodesepatu', '=', 'pegawai.pegawai_id')
        ->select('praktikum.*', 'pegawai.pegawai_nama')
        ->where('merksepatu','like',"%" . $cari . "%")
        ->paginate();

            // mengirim data praktikum ke view index
        return view('praktikum.index',['praktikum' => $praktikum]);

    }
}


