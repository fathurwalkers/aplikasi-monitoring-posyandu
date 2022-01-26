@extends('layouts.admin-layouts')

@section('title', 'Dashboard')

@push('css')

@endpush

@section('main-content-header', 'Beranda')

@section('main-content-body')
{{-- <div class="card">
    <div class="card-body"> --}}
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        @if ($users->login_level == 'admin')
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                    <button onclick="location.href = '{{ route('daftar-balita') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">DATA BALITA</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                    <button onclick="location.href = '{{ route('daftar-bidan') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">DATA BIDAN</button>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                    <button onclick="location.href = '{{ route('dashboard') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">CATATAN PEMERIKSAAN</button>
                </div>
            </div>
            
            {{-- <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                    <button onclick="location.href = '{{ route('dashboard') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">CATATAN IMUNISASI</button>
                </div>
            </div> --}}
        @endif

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                <button onclick="location.href = '{{ route('profile') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">PROFIL AKUN</button>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mb-1 text-bold text-dark">
                <button onclick="location.href = '{{ route('daftar-jadwal-posyandu') }}';" class="btn rounded btn-info shadow py-3" style="width: 100%">JADWAL POSYANDU</button>
            </div>
        </div>
        
    {{-- </div> --}}
{{-- </div> --}}
@endsection

@push('js')
    
@endpush