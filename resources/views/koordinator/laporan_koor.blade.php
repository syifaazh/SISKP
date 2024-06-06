@extends('layouts.koordinator.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
        Menerima laporan dan mengatur jadwal seminar
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
                                <td>Laporan</td>
                                <td>Jadwal</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                <a href="#" class="btn btn-danger btn-sm" target="_blank">PDF</a>
                                </td>
                                <td>
                                    <a href="{{url('atur_jadwal')}}" class="btn btn-warning btn-sm" target="_blank">atur jadwal</a>
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