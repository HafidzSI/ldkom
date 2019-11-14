<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class PrintController extends Controller
{
    public function index()
    {
        $data = Transaksi::all();
        return view('print.index',compact('data'));
    }

    public function tambah()
    {
        return view('print.tambah');
    }

    public function simpan(Request $request)
    {
        $total = $request->total;
        $total_bayar = $request->total_bayar;
        $keterangan = "";
        if($total_bayar >= $total)
        {
            $keterangan = "Lunas";
        }
        else if($total_bayar < $total)
        {
            $keterangan = "Belum lunas";
        }

        Transaksi::create([
            'nama'          => $request->nama,
            'warna'         => $request->warna,
            'hitam_putih'   => $request->hitam_putih,
            'total'         => $request->total,
            'tanggal'       => $request->tanggal,
            'keterangan'    => $keterangan
        ]);

        return redirect('/print')->with('success','Data berhasil ditambah');
    }
}
