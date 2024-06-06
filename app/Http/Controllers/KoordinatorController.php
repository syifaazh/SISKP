<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoordinatorController extends Controller
{
    //

    public function pembimbing ()
    {
        return view('koordinator.pembimbing');
    }

    public function jadwal_koor ()
    {
        return view('koordinator.jadwal_koor');
    }

    public function penilaian ()
    {
        return view('koordinator.penilaian');
    }

    public function atur_jadwal ()
    {
        return view('koordinator.atur_jadwal');
    }

    public function laporan_koor ()
    {
        return view('koordinator.laporan_koor');
    }
}
