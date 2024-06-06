@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Laporan
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Laporan</td>
                                <td>Status</td>
                                <td>Ket</td>
                            </tr>
                            <tr>
                                <td>---------------------</td>
                                <td>
                                <button type="button" class="btn btn-danger btn-sm">PDF</button>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm" target="#">setujui</a>
                                    <a href="{{url('revisi')}}" class="btn btn-warning btn-sm" target="#">revisi</a>
                                </td>
                                <td>----------</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection