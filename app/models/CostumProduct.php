<?php

namespace App\Models;

use App\Core\Model;

class Trashmonitor extends Model
{
    protected $table = 'costum-products';

    protected $fillable = [
        'bahan','warna', 'panjang', 'lebar', 'tinggi', 'jumlah_pesanan', 'metode_pengiriman', 'keterangan_tambahan',
    ];
    public $timestamps = false;

}
