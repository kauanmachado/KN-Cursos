<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCurso extends Model
{
    protected $table ='curso';
    protected $fillable = ['id','id_user','titulo', 'preco','descricao', 'imagem'];

    public function relUser()
    {
        return $this->hasMany('App\Models\User', 'id', 'id_user');
    }
}


