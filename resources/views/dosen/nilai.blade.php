@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Penilaian
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Materi Objek Kerja Praktik</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Penulisan</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Penyajian</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Penguasaan Materi</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Rata-rata nilai</label>
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