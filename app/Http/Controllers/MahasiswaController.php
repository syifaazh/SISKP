<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function pengajuan ()
    {
        return view('mahasiswa.pengajuan');
    }
    
    public function berkas ()
    {
        return view('mahasiswa.berkas');
    }

    public function laporan ()
    {
        return view('mahasiswa.laporan');
    }

    public function jadwal ()
    {
        return view('mahasiswa.jadwal');
    }
    
    public function pengajuan_fix ()
    {
        return view('mahasiswa.pengajuan_fix');
    }   
    
    public function laporan_fix ()
    {
        return view('mahasiswa.laporan_fix');
    }

    public function berkas_fix ()
    {
        return view('mahasiswa.berkas_fix');
    }
}
