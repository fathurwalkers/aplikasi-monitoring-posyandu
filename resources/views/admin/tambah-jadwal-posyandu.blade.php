@extends('layouts.admin-layouts')

@section('title', 'Tambah Jadwal Posyandu')

@push('css')

@endpush

@section('main-content-header', 'Tambah Jadwal Posyandu')

@section('main-content-body')

    <div class="card mb-2">
        <div class="card-body">
            <form action="{{ route('post-tambah-jadwal-posyandu') }}" method="POST">
                @csrf

                <input type="hidden" name="detail_type" value="balita">

                <div class="form-group mb-2">
                    <label for="nama_posyandu" class="text-bold h6"><strong><h6 class="mb-0">Nama Posyandu :</h6></strong></label>
                    <input type="text" class="form-control" id="nama_posyandu" aria-describedby="emailHelp" placeholder="Masukkan nama posyandu..." name="nama_posyandu">    
                    <small id="emailHelp" class="form-text text-muted">Contoh : Posyandu POS 5</small>
                </div>

                <div class="form-group mb-2">
                    <label for="alamat_posyandu" class="text-bold h6"><strong><h6 class="mb-0">Alamat Posyandu :</h6></strong></label>
                    <input type="text" class="form-control" id="alamat_posyandu" aria-describedby="emailHelp" placeholder="Masukkan alamat posyandu..." name="alamat_posyandu">    
                    <small id="emailHelp" class="form-text text-muted">Contoh : Jl. Bukit Wolio Indah, Kel. Wolio</small>
                </div>

                <div class="form-group mb-2">
                    <label for="tanggal_posyandu" class="text-bold h6"><strong><h6 class="mb-0">Tanggal Posyandu : </h6></strong></label>
                    <input type="date" class="form-control" id="tanggal_posyandu" aria-describedby="emailHelp"  name="tanggal_posyandu">    
                    {{-- <small id="emailHelp" class="form-text text-muted">Contoh : Muh. Nabil Zulaiman</small> --}}
                </div>

                <div class="form-group mb-2">
                    <label for="kecamatan_posyandu" class="text-bold h6"><strong><h6 class="mb-0">Tempat Posyandu : </h6></strong></label>
                    <input type="text" class="form-control" id="kecamatan_posyandu" aria-describedby="emailHelp" placeholder="Masukkan tempat posyandu..." name="kecamatan_posyandu">    
                    <small id="emailHelp" class="form-text text-muted">Contoh : DESA WABULA</small>
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