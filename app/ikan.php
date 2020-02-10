<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ikan extends Model
{
    protected $fillable = ['nama_ikan', 'id_kategori', 'jenis_ikan', 'foto', 'harga_ikan', 'keterangan'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
