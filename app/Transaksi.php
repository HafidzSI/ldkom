<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['nama','warna','hitam_putih','total','keterangan','tanggal'];
}
