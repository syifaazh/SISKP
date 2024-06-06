@extends('layouts.pem_lapangan.app')

@section('content')

<div class="col-sm-12 mx-auto">
    <div class="container-fluid px-5 py-4">
        <div class="card">
            <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
                Input data dan nilai mahasiswa Kerja Praktik (KP) dengan benar
            </div>
            <div class="container-fluid px-5 py-2">
                <div class="card-body">
                    <form class="row g-2 justify-content-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: italic;">
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Nama Mahasiswa</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">NIM</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Semeter Aktif</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Tempat Kerja Praktik</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Kedisiplinan dalam melakukan tugas (berikan dalam nilai angka)</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Keseriusan dalam pelaksanaan KP (berikan dalam nilai angka)</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Keterampilan dalam bekerja (berikan dalam nilai angka)</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-10 mb-2">
                            <label for="#" class="form-label">Rata-rata nilai yang diperoleh mahasiswa</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <div class="text-center">
                                <button class="btn btn-primary" type="button">kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection