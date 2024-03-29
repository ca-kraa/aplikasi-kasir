<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pelanggan;
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

    public function editPenjualan(Request $request, $id)
    {
        $validate = $request->validate([
            'tanggal_penjualan' => 'required',
            'id_pelanggan' => 'required',
        ]);

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->tanggal_penjualan = $request->tanggal_penjualan;
        $penjualan->id_pelanggan = $request->id_pelanggan;
        $penjualan->save();

        return response()->json([
            'message' => 'Penjualan berhasil diupdate',
            'data' => $penjualan,
        ]);
    }

    public function deletePenjualan($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return response()->json([
            'message' => 'Penjualan berhasil dihapus',
        ]);
    }

    public function indexProduk()
    {
        $produk  = Produk::all();
        return response()->json($produk);
    }

    public function createProduk(Request $request)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();

        return response()->json([
            'message' => 'Produk berhasil dibuat',
            'data' => $produk,
        ]);
    }

    public function editProduk(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();

        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'data' => $produk,
        ]);
    }

    public function deleteProduk($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return response()->json([
            'message' => 'Produk berhasil dihapus',
        ]);
    }

    public function indexPelanggan()
    {
        $pelanggan =  Pelanggan::all();
        return response()->json($pelanggan);
    }

    public function createPelanggan(Request $request)
    {
        $validate = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomor_telpon' => 'required',
        ]);

        $pelanggan = new Pelanggan;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->nomor_telpon = $request->nomor_telpon;
        $pelanggan->save();

        return response()->json([
            'message' => 'Pelanggan berhasil dibuat',
            'data' => $pelanggan,
        ]);
    }

    public function editPelanggan(Request $request, $id)
    {
        $validate = $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomor_telpon' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->nomor_telpon = $request->nomor_telpon;
        $pelanggan->save();

        return response()->json([
            'message' => 'Pelanggan berhasil diupdate',
            'data' => $pelanggan,
        ]);
    }

    public function deletePelanggan($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return response()->json([
            'message' => 'Pelanggan berhasil dihapus',
        ]);
    }
}
