@extends('layouts.koordinator.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Pengajuan Mahasiswa
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Bidang minat</td>
                                <td>Pembimbing</td>
                                <td>Topik</td>
                                <td>Status</td>
                                <td>Berkas</td>
                            </tr>
                            <tr>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm" target="_blank">setuju</a>
                                    <a href="#" class="btn btn-danger btn-sm" target="_blank">tolak</a>
                                </td>
                                <td>
                                <a href="#" class="btn btn-danger btn-sm" target="_blank">PDF</a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

