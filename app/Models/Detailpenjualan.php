<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpenjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_penjual', 'id_produk', 'jumlah_produk', 'subtotal'];
}
