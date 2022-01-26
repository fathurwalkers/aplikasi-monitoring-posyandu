@extends('layouts.admin-layouts')

@section('title', 'Daftar Data Balita')

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
        stroke: none!important;
        outline-color: none!important;
    }

</style>
@endpush

@section('main-content-header', 'Daftar Data Balita')

@section('main-content-body')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        @if (session('status'))
        <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
</div>
@foreach ($balita as $item)
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex align-items-center pb-1">
                {{-- <img class="img-sm rounded-circle pl-0" src="{{ asset('assets/img/default-avatar.jpg') }}" alt="profile" width="100px"> --}}
                <div class="ms-3">
                    <h6 class="mb-1">{{ $item->balita_nama }}</h6>
                    <small class="text-muted mb-0">Tanggal Lahir : {{ date('d-m-Y', strtotime($item->balita_ttl)) }}</small>
                    <br>
                    <small class="text-muted mb-0">Jenis Kelamin :
                        @switch($item->balita_jeniskelamin)
                            @case('L')
                                Laki - Laki
                                @break
                            @case('P')
                                Perempuan
                                @break
                        @endswitch
                    </small>
                </div>
                {{-- <a href="{{ route('profile') }}" class="btn btn-info btn-md border-1 rounded ms-auto">
                    Lihat
                </a> --}}
            </div>
            <div class="d-flex justify-content-end float-right">
                <button onclick="location.href = '{{ route('profile-balita', $item->id) }}';" class="btn btn-primary btn-sm rounded shadow mt-2 nopadding mr-1">Lihat</button>
                <button onclick="location.href = '{{ route('ubah-balita', $item->id) }}';" class="btn btn-info btn-sm rounded shadow mt-2 nopadding mr-1">Edit</button>
                <form action="{{ route('hapus-balita', $item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm rounded shadow mt-2 nopadding">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        {{ $balita->links() }}
    </div>
</div>

<button class="btn btn-primary rcorners fixed-bottom ml-4" id="rcorners1" onclick="window.location.href='{{ route('tambah-balita') }}'">
    <div class="d-flex justify-content-center">
        <i class="mdi mdi-library-plus" size="50%"></i>
    </div>
</button>

@endsection

@push('js')
    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
        } );
    </script>
@endpush
