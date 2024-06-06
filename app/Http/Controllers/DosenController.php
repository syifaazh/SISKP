<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function role ()
    {
        return view('dosen.role');
    }

    public function laporan_dos ()
    {
        return view('dosen.laporan_dos');
    }

    public function revisi ()
    {
        return view('dosen.revisi');
    }

    public function jadwal_dos ()
    {
        return view('dosen.jadwal_dos');
    }

    public function nilai ()
    {
        return view('dosen.nilai');
    }
}
