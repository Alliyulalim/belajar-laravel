<?php

namespace App\Http\Controllers;

use App\models\biodata;
use App\Models\barang;
use App\Models\pembelian;
use App\Models\pesanan;
use App\Models\pembeli;
use App\Models\suplier;

class MyController extends Controller
{
    public function latihan()
    {
        $result ="latihan controller";
        return view('latihan',compact('result'));
    }

    public function biodataa()
    {
        $nama = "muhamad alliyul alim";
        $kelas = "XII rpl 2";
        $tgl_lahir= "11-12-03";
        $umur="18";
        $jk="laki-laki";
        return view('biodataa',compact('nama','kelas','tgl_lahir','umur','jk'));

    }

    public function bio()
    {
        // mengambil data dari semua model biodata
        $bio = Biodata::all();
        return view('bio',compact('bio'));
    }
    
    public function barang()
    {
        $barang = barang::all();
        return view('barang2',compact('barang'));
    }
    public function pembelian()
    {
        $pembelian = pembelian::all();
        return view('pembelian',compact('pembelian'));
    }
    public function pesanan()
    {
        $pesanan = pesanan::all();
        return view('pesanan',compact('pesanan'));
    }
    public function pembeli()
    {
        $pembeli = pembeli::all();
        return view('pembeli2',compact('pembeli'));
    }
    public function suplier()
    {
        $suplier = suplier::all();
        return view('suplier',compact('suplier'));
    }
    public function sibarang($id)
    {
        $barang = barang::findOrFail($id);
        return view('sibarang',compact('barang'));
    }
    public function sipembelian($id)
    {
        $pembelian = pembelian::findOrFail($id);
        return view('sipembelian',compact('pembelian'));
    }
    public function sipesanan($id)
    {
        $pesanan = pesanan::findOrFail($id);
        return view('sipesanan',compact('pesanan'));
    }
    public function sipembeli($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('sipembeli',compact('pembeli'));
    }
    public function sisuplier($id)
    {
        $suplier = suplier::findOrFail($id);
        return view('sisuplier',compact('suplier'));
    }
}
