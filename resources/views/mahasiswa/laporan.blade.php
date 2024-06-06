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
                                    <td>Upload Laporan</td>
                                    <td>
                                        <input type="file" class="form-control" id="#">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection