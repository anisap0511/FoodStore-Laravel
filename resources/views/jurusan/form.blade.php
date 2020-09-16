@extends('layouts.frontend')

@section('section')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 pt-5">
                @if ((\Route::current()->getName() == 'jurusan.edit'))
                    <form method="POST" action="{{ route('jurusan.update', $jurusan->id) }}">
                    {!! method_field('patch') !!}
                    <h2>Edit Jurusan</h2>
                @else
                    <form method="POST" action="{{ route('jurusan.store') }}">
                    <h2>Tambah Jurusan</h2>
                @endif
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan"
                                value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->nama_jurusan : '' }}"
                                id="nama_jurusan"
                                class="form-control"
                                placeholder="Nama Jurusan"
                                aria-describedby="namaJurusan">
                        <small id="namaJurusan" class="text-muted d-none"></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_prodi">Jenis Prodi</label>
                        <input type="text"
                                value="{{ \Route::current()->getName() == 'jurusan.edit' ? $jurusan->jenis_prodi : '' }}"
                                name="jenis_prodi"
                                id="jenis_prodi"
                                class="form-control"
                                placeholder="Prodi"
                                aria-describedby="jenisProdi">
                        <small id="jenisProdi" class="text-muted d-none"></small>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
