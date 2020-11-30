<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtikelSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(KategoriSeeder::class);
    }
}
