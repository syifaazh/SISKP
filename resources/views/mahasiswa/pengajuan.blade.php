@extends('layouts.mahasiswa.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Ajukan Topik
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-style: italic;">
                        <div class="col-md-6">
                            <label for="#" class="form-label">Nama Mahasiswa</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Prodi</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Bidang Minat</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Semester Aktif</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="container-fluid col-md-6">
                            <label for="#" class="form-label">Dosen Pembimbing</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <label for="#" class="form-label">Topik</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection