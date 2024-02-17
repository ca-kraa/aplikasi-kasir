<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function indexPenjualan()
    {
        $penjualan = Penjualan::all();
        return response()->json($penjualan);
    }

    
}
