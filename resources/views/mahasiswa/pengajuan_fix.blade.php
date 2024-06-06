@extends('layouts.mahasiswa.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Pengajuan
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td>Topik</td>
                                    <td>Pembimbing</td> 
                                    <td>Status</td>
                                </tr>
                                <tr>
                                    <td>------</td>
                                    <td>------</td>
                                    <td>------</td>
                                    <td><span class="badge badge-warning">Belum Diverifikasi</span></td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection