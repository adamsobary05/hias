<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ikan extends Model
{
    protected $fillable = ['nama_ikan', 'kategori_ikan', 'jenis_ikan', 'foto', 'harga_ikan'];
}
