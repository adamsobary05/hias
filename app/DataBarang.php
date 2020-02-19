<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $fillable = ['nama_ikan', 'id_kategori', 'nama_makanan', 'stok_makanan', 'total_pendapatan', 'total_pengeluaran'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
