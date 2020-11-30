<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{

    public function run()
    {
        // Option 1
        // $data = [

        // ];
        // DB::table('profil')->create($data);

        // Option 2
        DB::table('profil')->insert([

            [
                'nama' => 'Pak Seo Joon',
                'photo' => 'psj.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Ji Chang Wook',
                'photo' => 'jcw.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ]);
    }
}
