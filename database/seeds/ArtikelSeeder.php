<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{

    public function run()
    {
        // Option 1
        // $data = [

        // ];
        // DB::table('artikel')->create($data);

        // Option 2
        DB::table('artikel')->insert([
            [
                'judul' => 'Belajar Lumen',
                'photo' => 'photo.png',
                'isi'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel earum quaerat exercitationem saepe necessitatibus molestias illum, dignissimos debitis harum, minima dolorem dolores hic sint labore, maxime cum eos asperiores voluptatem?',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'judul' => 'Belajar Lumen ii',
                'photo' => 'photo.png',
                'isi'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel earum quaerat exercitationem saepe necessitatibus molestias illum, dignissimos debitis harum, minima dolorem dolores hic sint labore, maxime cum eos asperiores voluptatem?',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
