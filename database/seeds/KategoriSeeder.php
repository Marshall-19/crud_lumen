<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{

    public function run()
    {
        // Option 1
        // $data = [

        // ];
        // DB::table('kategori')->create($data);

        // Option 2
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Kategori 1',
                'icon' => 'iconic.png',
                'keterangan' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos delectus totam iste blanditiis ipsam voluptatum facilis eius omnis ad, fuga officiis autem maxime quasi, eaque, in ipsa harum cumque placeat!'
            ],
            [
                'nama_kategori' => 'Kategori 2',
                'icon' => 'fontawesome.png',
                'keterangan' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos delectus totam iste blanditiis ipsam voluptatum facilis eius omnis ad, fuga officiis autem maxime quasi, eaque, in ipsa harum cumque placeat!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama_kategori' => 'Kategori 3',
                'icon' => 'ionic.png',
                'keterangan' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos delectus totam iste blanditiis ipsam voluptatum facilis eius omnis ad, fuga officiis autem maxime quasi, eaque, in ipsa harum cumque placeat!',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
