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

    public function createPenjualan(Request $request)
    {
        $validate = $request->validate([
            'tanggal_penjualan' => 'required',
            'id_pelanggan' => 'required',
        ]);

        $penjualan = new Penjualan;
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->save();

        return response()->json([
            'message' => 'Penjualan berhasil dibuat',
            'data' => $penjualan,
        ]);
    }
}
