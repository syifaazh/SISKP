@extends('layouts.mahasiswa.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Laporan
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Laporan</td>
                                    <td>status</td>
                                    <td>keterangan</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="file" class="form-control" id="#">
                                    </td>
                                    <td><span class="badge badge-warning">Belum Diverifikasi</span></td>
                                    <td> ----------
                                        <!-- <div class="col-5">
                                        <input type="password" class="form-control" id="#">
                                    </div> -->
                                    </td>

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