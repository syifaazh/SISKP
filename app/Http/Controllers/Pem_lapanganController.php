<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pem_lapanganController extends Controller
{
    //
    Public function akun()
    {
        return view('pem_lapangan.akun');
    }

    Public function nilai_mhs()
    {
        return view('pem_lapangan.nilai_mhs');
    }

    Public function rekap_mhs()
    {
        return view('pem_lapangan.rekap_mhs');
    }
}
