@extends('layouts.admin-layouts')

@section('title', 'Daftar Data Bidan')

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

@section('main-content-header', 'Daftar Data Bidan')

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
@foreach ($bidan as $item)
    <div class="card mb-2">
        <div class="card-body">
            <div class="d-flex align-items-center pb-1">
                {{-- <img class="img-sm rounded-circle pl-0" src="{{ asset('assets/img/default-avatar.jpg') }}" alt="profile" width="100px"> --}}
                <div class="ms-3">
                    <h6 class="mb-1">{{ $item->bidan_nama }}</h6>
                    <small class="text-muted mb-0"><b>SIPB</b> : {{ $item->bidan_sipb }}</small><br>
                    <small class="text-muted mb-0"><b>Alamat</b> : {{ $item->bidan_alamat }}</small><br>
                    <small class="text-muted mb-0"><b>Telepon</b> : {{ $item->bidan_telepon }}</small><br>
                    <br>
                </div>
            </div>
            <div class="d-flex justify-content-end float-right">
                <a href="{{ route('profile-bidan', $item->id) }}" class="btn btn-info btn-md border-1 rounded ml-2">
                    Lihat
                </a><br>
                <a href="{{ route('ubah-bidan', $item->id) }}" class="btn btn-primary btn-md border-1 rounded ml-2">
                    Ubah
                </a><br>
                {{-- <a href="#" class="btn btn-danger btn-md border-1 rounded ml-2" data-toggle="modal" data-target="#hapusbidan{{ $item->id }}">
                    <i class="fas fa-trash"></i>
                    Hapus
                </a> --}}
                <form action="{{ route('hapus-bidan', $item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-md border-1 rounded ml-2">
                        {{-- <i class="fas fa-trash"></i> --}}
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hapusbidan{{ $item->id }}" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Konfirmasi Tindakan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">Apakah anda yakin ingin menghapus item ini? </div>
                <form action="{{ route('hapus-bidan', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-footer">
                        <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        {{ $bidan->links() }}
    </div>
</div>

<button class="btn btn-primary rcorners fixed-bottom ml-4" id="rcorners1" onclick="window.location.href='{{ route('tambah-bidan') }}'">
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
