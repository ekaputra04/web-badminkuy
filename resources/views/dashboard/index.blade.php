@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hallo, {{ auth()->user()->name }}</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Artikel</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Komentar</h5>
                </div>
            </div>
        </div>
    </div>

    @can('admin')
        
    <div class="row g-4 my-3">
        <div class="col-md-6">
            <div class="row g-3 ">
                <div class="col-md-4 px-3 ">
                    <img src="{{ asset('/img/pengguna.jpg') }}" class="img-fluid rounded-start" alt="..." style="max-width: 60%;">
                </div>
                <div class="col-md-8 px-3 ">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Pengguna</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endcan

@endsection
