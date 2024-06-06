@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-5 py-4">
    <div class="card" >
        <div class="card-header" style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: larger;">
            Revisi
        </div>
        <div class="container-fluid px-5 py-4">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="p-2 col-md-12">
                            <label for="#" class="form-label">Berikan Masukan</label>
                            <textarea class="form-control" id="#"></textarea>
                        </div>
                        <div class="p-2 col-md-12">
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection