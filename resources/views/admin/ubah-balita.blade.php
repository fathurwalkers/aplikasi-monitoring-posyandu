@extends('layouts.admin-layouts')

@section('title', 'Ubah Data Balita')

@push('css')

@endpush

@section('main-content-header', 'Ubah Data Balita')

@section('main-content-body')

    <div class="card mb-2">
        <div class="card-body">
            <form action="{{ route('post-ubah-balita', $balita->id) }}" method="POST">
                @csrf

                <div class="form-group mb-2">
                    <label for="balita_nama" class="text-bold h6"><strong><h6 class="mb-0">Nama Balita :</h6></strong></label>
                    <input type="text" class="form-control" id="balita_nama" aria-describedby="" placeholder="Masukkan Nama Balita..." name="balita_nama" value="{{ $balita->balita_nama }}">
                    <small id="" class="form-text text-muted">Contoh : Muh. Nabil Zulaiman</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_jeniskelamin" class="text-bold h6"><strong><h6 class="mb-0">Jenis Kelamin :</h6></strong></label>
                    <select class="form-control" id="balita_jeniskelamin" name="balita_jeniskelamin">
                        <option value="{{ $balita->balita_jeniskelamin }}" selected>{{ $balita->balita_jeniskelamin }}</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_ttl" class="text-bold"><strong><h6 class="mb-0">Tempat Tanggal Lahir: </h6></strong></label>
                    <input type="date" class="form-control" id="balita_ttl" aria-describedby="" name="balita_ttl" value="{{ date(strtotime($balita->balita_ttl)) }}">
                    {{-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>

                <div class="form-group mb-2">
                    <label for="balita_nik" class="text-bold"><strong><h6 class="mb-0">NIK : </h6></strong></label>
                    <input type="number" class="form-control" id="balita_nik" aria-describedby="" placeholder="Masukkan NIK..." name="balita_nik" value="{{ $balita->balita_nik }}">
                    {{-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>

                <div class="form-group mb-2">
                    <label for="balita_nama_ortu" class="text-bold"><strong><h6 class="mb-0">Nama Orang Tua : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_nama_ortu" aria-describedby="" placeholder="Masukkan nama ibu..." name="balita_nama_ortu" value="{{ $balita->balita_nama_ortu }}">
                    <small id="" class="form-text text-muted">Contoh : Nur Zulaika</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_provinsi" class="text-bold"><strong><h6 class="mb-0">Provinsi : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_provinsi" aria-describedby="" placeholder="Masukkan nama provinsi..." name="balita_provinsi" value="{{ $balita->balita_provinsi }}">
                    <small id="" class="form-text text-muted">Contoh : Sulawesi Tenggara</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_kota" class="text-bold"><strong><h6 class="mb-0">Kota / Kabupaten : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_kota" aria-describedby="" placeholder="Masukkan asal kota / Kabupaten..." name="balita_kota" value="{{ $balita->balita_kota }}">
                    <small id="" class="form-text text-muted">Contoh : Kota Baubau atau Kabupaten Gu</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_kecamatan" class="text-bold"><strong><h6 class="mb-0">Kecamatan : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_kecamatan" aria-describedby="" placeholder="Masukkan Kecamatan..." name="balita_kecamatan" value="{{ $balita->balita_kecamatan }}">
                    <small id="" class="form-text text-muted">Contoh : Kecamatan Wolio</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_puskesmas" class="text-bold"><strong><h6 class="mb-0">Puskesmas : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_puskesmas" aria-describedby="" placeholder="Masukkan puskesmas..." name="balita_puskesmas" value="{{ $balita->balita_puskesmas }}">
                    <small id="" class="form-text text-muted">Contoh : Wolio</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_desa" class="text-bold"><strong><h6 class="mb-0">Kelurahan / Desa : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_desa" aria-describedby="" placeholder="Masukkan desa..." name="balita_desa" value="{{ $balita->balita_desa }}">
                    <small id="" class="form-text text-muted">Contoh : Wolio</small>
                </div>

                <div class="form-group mb-2">
                    <label for="balita_posyandu" class="text-bold"><strong><h6 class="mb-0">Posyandu : </h6></strong></label>
                    <input type="text" class="form-control" id="balita_posyandu" aria-describedby="" placeholder="Masukkan posyandu..." name="balita_posyandu" value="{{ $balita->balita_posyandu }}">
                    <small id="" class="form-text text-muted">Contoh : POSYANDU POS 5 GU</small>
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
