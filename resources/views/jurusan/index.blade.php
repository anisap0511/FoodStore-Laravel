@extends('layouts.frontend')

@section('section')
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-hover w-100 table-inverse">
                    <thead class="thead-inverse">
                        <tr>
                            <th>id</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $jrs)
                                <tr>
                                    <td scope="row">{{ $jrs->id }}</td>
                                    <td>{{ $jrs->nama_jurusan }}</td>
                                    <td>{{ $jrs->jenis_prodi }}</td>
                                    <td>
                                        <form action="{{ route('jurusan.destroy', $jrs->id) }}" method="POST">
                                            <a href="{{ route('jurusan.show', $jrs->id) }}" class="btn btn-success">Lihat</a>
                                            <a href="{{ route('jurusan.edit', $jrs->id) }}" class="btn btn-success">Edit</a>
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Serius ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
