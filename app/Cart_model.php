<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_model extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_ikan', 'kategori_ikan', 'nama_makanan', 'user_email', 'session_id'];
}
