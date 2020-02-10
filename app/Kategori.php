<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['kategori_ikan'];

    public function ikan()
    {
        return $this->hasMany('App\ikan', 'id_kategori');
    }
}
