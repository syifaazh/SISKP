@extends('layouts.pem_lapangan.app')

@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="card" style="width: 18rem; height:18rem">
            <img class="img-profile rounded-circle" src="{{asset('assets/img/undraw_profile.svg')}}">
        </div>
    </div>
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
                Akun
            </div>
            <div class="container-fluid px-5 py-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingNip" placeholder="Nip/Nik">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingText" placeholder="Instansi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
                    Atur Ulang Kata Sandi
                </div>
            </div>
            <div class="container-fluid px-5 py-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Kata Sandi Lama</td>
                                    <td>
                                        <input type="text" class="form-control" id="#">
                                    </td>
                                </tr>
                                <tr>
                                    <td>kata Sandi Baru</td>
                                    <td>
                                        <input type="text" class="form-control" id="#">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Konfirmasi kata Sandi Baru</td>
                                    <td>
                                        <input type="text" class="form-control" id="#">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <div class="text-right">
                                <button class="btn btn-primary" type="button">simpan perubahan</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection