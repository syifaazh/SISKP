@extends('layouts.koordinator.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Penilaian
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Nilai Pembimbing Lapangan</td>
                                <td>Nilai Pembimbing Prodi</td>
                                <td>Nilai Penguji</td>
                                <td>Total Nilai</td>
                                <td>Rata-rata Nilai</td>
                                <td>Nilai Huruf</td>
                            </tr>
                            <tr>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>
                                <td>-------</td>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="p-2 col-md-12">
            <div class="text-center">
                    <button class="btn btn-danger" type="button">Export PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection