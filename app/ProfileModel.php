<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class ProfileModel extends Model
{

    protected $table = "profil";

    protected $fillable = ['nama', 'photo'];
}
