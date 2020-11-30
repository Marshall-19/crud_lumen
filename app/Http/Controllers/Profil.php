<?php

namespace App\Http\Controllers;

use App\ProfileModel;
use Illuminate\Http\Request;

class Profil extends Controller
{

    public function __construct()
    {
        //
    }

    public function tampilProfil()
    {
        $data = ProfileModel::get();
        return response()->json($data);
    }
    public function tambahProfil(Request $request)
    {
        $this->validate($request, [

            'nama' => 'required',
            'photo' => 'required'

        ]);
        $nama = $request->nama;
        $photo = $request->photo;

        $tambah = ProfileModel::create([
            'nama' => $nama,
            'photo' => $photo,
        ]);

        if ($tambah) {
            return response()->json([
                'Status' => 'Data Berhasil Diinputkan',
                'Data' => $tambah
            ]);
        } else {
            return response()->json([
                'Status' => 'Data Gagal Diinputkan',
                'Data' => null
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'photo' => 'required',

        ]);

        $nama = $request->nama;
        $photo = $request->photo;

        $profil = ProfileModel::find($id);

        $update = $profil->update([
            'nama' => $nama,
            'photo' => $photo
        ]);
        if ($update) {
            return response()->json([
                'Status' => 'Data Profil Berhasil Diupdate',
                'Data' => $profil
            ]);
        } else {
            return response()->json([
                'Status' => 'Data Profil Gagal Diupdate',
                'Data' => null
            ]);
        }
    }
    public function delete($id)
    {
        $profil = ProfileModel::find($id);

        $delete = $profil->delete();

        if ($delete) {
            return response()->json([
                'Status' => 'Data Profil Berhasil Dihapus',
                'Data' => $profil
            ]);
        } else {
            return response()->json([
                'Status' => 'Data Profil Gagal Dihapus',
                'Data' => null
            ]);
        }
    }
}
