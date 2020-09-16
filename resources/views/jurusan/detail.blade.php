@extends('layouts.frontend')

@section('section')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="{{ URL::previous() }}" class="btn btn-transparent border-primary px-5">Kembali</a>
                <h1>{{ $jurusan->nama_jurusan }}</h1>
                <p>{{ $jurusan->jenis_prodi }}</p>
            </div>
        </div>
    </div>
@endsection
