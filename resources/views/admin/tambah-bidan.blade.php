@extends('layouts.admin-layouts')

@section('title', 'Tambah Data Balita')

@push('css')

@endpush

@section('main-content-header', 'Tambah Data Balita')

@section('main-content-body')

    <div class="card mb-2">
        <div class="card-body">
            <form action="{{ route('post-tambah-bidan') }}" method="POST">
                @csrf

                <div class="form-group mb-2">
                    <label for="bidan_nama" class="text-bold h6"><strong><h6 class="mb-0">Nama :</h6></strong></label>
                    <input type="text" class="form-control" id="bidan_nama" aria-describedby="" placeholder="Masukkan Nama Bidan..." name="bidan_nama">
                    <small id="" class="form-text text-muted">Contoh : Asriani Sagiri</small>
                </div>

                <div class="form-group mb-2">
                    <label for="bidan_sipb" class="text-bold h6"><strong><h6 class="mb-0">SIPB :</h6></strong></label>
                    <input type="text" class="form-control" id="bidan_sipb" aria-describedby="" placeholder="Masukkan SIPB Bidan..." name="bidan_sipb">
                    <small id="" class="form-text text-muted">Contoh : Muh. Nabil Zulaiman</small>
                </div>

                <div class="form-group mb-2">
                    <label for="bidan_alamat" class="text-bold h6"><strong><h6 class="mb-0">Alamat :</h6></strong></label>
                    <input type="text" class="form-control" id="bidan_alamat" aria-describedby="" placeholder="Masukkan Alamat Bidan..." name="bidan_alamat">
                    <small id="" class="form-text text-muted">Contoh : Jl. Bakti Abri, Bukit Wolio Indah. Kec. Wolio</small>
                </div>

                <div class="form-group mb-2">
                    <label for="bidan_telepon" class="text-bold h6"><strong><h6 class="mb-0">No. HP / Telepon :</h6></strong></label>
                    <input type="number" class="form-control" id="bidan_telepon" aria-describedby="" placeholder="Masukkan No. HP / Telepon Bidan..." name="bidan_telepon">
                    <small id="" class="form-text text-muted">Contoh : Muh. Nabil Zulaiman</small>
                </div>

                <div class="row">
                    <div class="col-sm-12 mx-auto d-flex justify-content-center">
                        <button type="submit" class="btn btn-info shadow">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection

@push('js')

@endpush
