<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class ArtikelModel extends Model
{

    protected $table = "artikel";

    protected $fillable = ['judul', 'photo', 'isi'];
}
