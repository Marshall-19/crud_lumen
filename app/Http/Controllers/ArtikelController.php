<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{

    public function __construct()
    {
        //
    }

    public function get()
    {
        $data = ArtikelModel::get();
        // ArtikelModel merupakan pemanggilan model (metode eloquint)
        return response()->json($data);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'photo' => 'required',
            'isi' => 'required',
        ]);
        $judul = $request->judul;
        $photo = $request->photo;
        $isi = $request->isi;

        $add = ArtikelModel::create([
            'judul' => $judul,
            'photo' => $photo,
            'isi'   => $isi,
        ]);

        if ($add) {
            return response()->json([
                'status' => 'Success',
                'data'   => $add
            ]);
        } else {
            return response()->json([
                'status' => 'Failed',
                'data'   => null
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'photo' => 'required',
            'isi' => 'required'
        ]);

        $judul = $request->judul;
        $photo = $request->photo;
        $isi = $request->isi;

        $artikel = ArtikelModel::find($id);

        $update = $artikel->update([
            'judul' => $judul,
            'photo' => $photo,
            'isi' => $isi
        ]);

        if ($update) {
            return response()->json([
                'Status' => 'Data Berhasil Diupdate',
                'Data' => $update
            ]);
        } else {
            return response()->json([
                'Status' => 'Data Gagal Diupdate',
                'Data' => null
            ]);
        }
    }
    public function delete($id)
    {
        $artikel = ArtikelModel::find($id);

        $delete = $artikel->delete();

        if ($delete) {
            return response()->json([
                'Status' => 'Data Artikel Berhasil Dihapus',
                'Data' => $artikel
            ]);
        } else {
            return response()->json([
                'Status' => 'Data Artikel Gagal Dihapus',
                'Data' => null
            ]);
        }
    }
}
