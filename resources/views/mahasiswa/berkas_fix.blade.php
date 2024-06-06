@extends('layouts.mahasiswa.app')

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="card">
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Berkas
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Unduh Berkas</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm" target="_blank">Unduh</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Upload Berkas</td>
                                    <td>
                                        <input type="#" class="form-control" id="#">
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