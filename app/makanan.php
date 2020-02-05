<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $fillable = ['nama_makanan', 'harga_makanan', 'foto', 'deskripsi'];
}
