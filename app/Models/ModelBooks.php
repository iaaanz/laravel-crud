<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBooks extends Model
{
    protected $table = 'book';

    //Campos que é permitido ser cadastrado
    protected $fillable=['title','id_user','pages','price'];

    public function relUsers() 
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
