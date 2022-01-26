@extends('layouts.admin-layouts')

@section('title', 'Profil Bidan')

@push('css')

@endpush

@section('main-content-header', 'Profil Bidan')

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
                                                        Posyandu <br>
                                                        Alamat <br>
                                                        Tanggal Posyandu <br>
                                                        Kecamatan <br>
                                                    </p>
                                                {{-- </div> --}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                {{-- <div class="col-sm-12 col-md-12 col-lg-12"> --}}
                                                    <p class="text-bold text-dark">
                                                        : {{ $jadwal->nama_posyandu }} <br>
                                                        : {{ $jadwal->alamat_posyandu }} <br>
                                                        : {{ date('d/m/Y', strtotime($jadwal->tanggal_posyandu)) }} <br>
                                                        : {{ $jadwal->kecamatan_posyandu }} <br>
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
