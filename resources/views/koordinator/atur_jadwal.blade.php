@extends('layouts.koordinator.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Atur Jadwal
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Nama Mahasiswa</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Bidang Minat</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Pembimbing</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Penguji</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Jadwal</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Waktu</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Ruang</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection