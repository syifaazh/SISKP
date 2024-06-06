@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Pilih Role
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Dosen Pembimbing</th>
                                <th scope="col">
                                <a href="{{url('laporan_dos')}}" class="btn btn-outline-warning btn-sm">Pilih</a>
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">Dosen Penguji</th>
                                <th scope="col">
                                <a href="{{url('jadwal_dos')}}" class="btn btn-outline-warning btn-sm">Pilih</a>
                                </th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection