@extends('layouts.admin-layouts')

@section('title', 'Jadwal Posyandu')

@push('css')
<style>
    #rcorners1 {
        border-radius: 25px;
        background: #12a8ff;
        /* padding: 15px; */
        width: 55px;
        height: 55px;
        margin: 25%;
        margin-left: 80%;
        z-index: 1;
        /* position: ; */
        /* stroke: none!important;
        outline-color: none!important; */
    }

    .nopadding {
        z-index: 1;
    }
</style>
@endpush

@section('main-content-header', 'Jadwal Posyandu')

@section('main-content-body')

@foreach ($jadwal as $item)
    <div class="card mb-2 pt-1 px-1">
        <div class="card-body">
            <div class="row d-flex">
                {{-- <div class="col-sm-9 col-md-9 col-lg-9"> --}}
                    <div class="d-flex align-items-center pb-1 px-0">
                        {{-- <img class="img-sm rounded-circle pl-0" src="{{ asset('assets/img/default-avatar.jpg') }}" alt="profile" width="100px"> --}}
                        <div class="ms-3">
                            <h6 class="mb-1">
                                <i class="ti-location-pin me-1"></i>
                                {{ $item->nama_posyandu }}
                            </h6>
                            <small class="text-muted mb-0">{{ date('d / M / Y', strtotime($item->tanggal_posyandu)) }} - {{ $item->alamat_posyandu }}</small><br>
                            <small class="text-muted mb-0">Kecamatan : {{ $item->kecamatan_posyandu }}</small><br>
                            {{-- <small class="text-muted mb-0">{{ $item->alamat_posyandu }}</small> --}}
                        </div>
                    </div>
                    <div class="d-flex justify-content-end float-right">
                        <button onclick="location.href = '{{ route('lihat-jadwal', $item->id) }}';" class="btn btn-info btn-sm rounded shadow mt-2 nopadding mr-1">Lihat</button> &nbsp;
                        <button onclick="location.href = '{{ route('ubah-jadwal', $item->id) }}';" class="btn btn-primary btn-sm rounded shadow mt-2 nopadding mr-1">Ubah</button> &nbsp;
                        <form action="{{ route('hapus-jadwal', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm rounded shadow mt-2 nopadding">Hapus</button>
                        </form>
                    </div>
                {{-- </div> --}}
                {{-- <div class="col-sm-3 col-md-3 col-lg-3"> --}}
                    {{-- <button href="{{ route('profile') }}" class="btn btn-primary btn-sm rounded shadow float-right d-flex justify-content-end nopadding">Lihat</button> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    {{-- <div class="d-flex justify-content-end float-right">
        <button href="{{ route('profile') }}" class="btn btn-primary btn-sm rounded shadow mb-3 nopadding mr-2">Lihat</button> &nbsp;
        <button href="{{ route('profile') }}" class="btn btn-info btn-sm rounded shadow mb-3 nopadding mr-2">Edit</button> &nbsp;
        <button href="{{ route('profile') }}" class="btn btn-danger btn-sm rounded shadow mb-3 nopadding">Hapus</button>
    </div> --}}
@endforeach

    <div class="row d-flex justify-content-center mx-auto">
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center mx-auto">
            {{ $jadwal->links() }}
        </div>
    </div>

@if ($users->login_level == 'admin')
    <button class="btn btn-primary rcorners fixed-bottom ml-4" id="rcorners1" onclick="window.location.href='{{ route('tambah-jadwal-posyandu') }}'">
        <div class="d-flex justify-content-center">
            <i class="mdi mdi-library-plus" size="50%"></i>
        </div>
    </button>
@endif

@endsection

@push('js')
    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
        } );
    </script>
@endpush
