@extends('layouts.admin-layouts')

@section('title', 'Profil Pengguna')

@push('css')

@endpush

@section('main-content-header', 'Profil Akun')

@section('main-content-body')
    <div class="container-fluid">
        <div class="row flex-row">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                {{-- <div class="col-sm-12 col-md-12 col-lg-12"> --}}
                                                    <p class="text-bold text-dark">
                                                        Nama <br>
                                                        TTL <br>
                                                        Jenis Kelamin <br>
                                                        NIK <br>
                                                        Nama Orang Tua <br>
                                                        Provinsi <br>
                                                        Kota <br>
                                                        Kecamatan <br>
                                                        Puskesmas <br>
                                                        Desa <br>
                                                        Posyandu <br>
                                                    </p>
                                                {{-- </div> --}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                {{-- <div class="col-sm-12 col-md-12 col-lg-12"> --}}
                                                    <p class="text-bold text-dark">
                                                        : {{ $balita->balita_nama }} <br>  
                                                        : {{ $balita->balita_ttl }} <br>  
                                                        : {{ $balita->balita_jeniskelamin }} <br>  
                                                        : {{ $balita->balita_nik }} <br>  
                                                        : {{ $balita->balita_nama_ortu }} <br>  
                                                        : {{ $balita->balita_provinsi }} <br>  
                                                        : {{ $balita->balita_kota }} <br>  
                                                        : {{ $balita->balita_kecamatan }} <br>  
                                                        : {{ $balita->balita_puskesmas }} <br>  
                                                        : {{ $balita->balita_desa }} <br>  
                                                        : {{ $balita->balita_posyandu }} <br>  
                                                    </p>
                                                {{-- </div> --}}
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush