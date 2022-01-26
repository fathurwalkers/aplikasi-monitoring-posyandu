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
                    <div class="col-sm-2 col-md-2 col-lg-2 mx-auto justify-content-center d-flex">
                        <img class="img-thumbnail img-fluid" src="{{ asset('assets/img/default-avatar.jpg') }}" alt="" width="200">
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm table-borderless">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <p class="text-bold text-dark">
                                                        Nama <br>
                                                        Email <br>
                                                        Username <br>
                                                        No. HP / Telepon <br>
                                                        Status Pengguna <br>
                                                        Akses Level <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <p class="text-bold text-dark">
                                                        : {{ $users->login_nama }} <br> 
                                                        : {{ $users->login_email }} <br> 
                                                        : {{ $users->login_username }} <br> 
                                                        : {{ $users->login_telepon }} <br> 
                                                        : {{ $users->login_level }} <br> 
                                                        : {{ $users->login_status }} <br> 
                                                    </p>
                                                </div>
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