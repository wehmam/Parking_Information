@extends('layouts.master')
@section('title','Konsumen')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3 text-center">Daftar Data Konsumen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <a href="{{ route('konsumen.create') }}" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
                    <thead>
                        <th>No</th>
                        <th>Konsumen</th>
                        <th>Jenis Kendaraan</th>
                        <th>No Polisi</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelamin</th>
                        <th>No Hp</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        @forelse($konsumen as $konsumens)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $konsumens->konsumen }}</td>
                                <td>{{ $konsumens->jenis_kendaraan }}</td>
                                <td>{{ $konsumens->no_polisi }}</td>
                                <td>{{ $konsumens->tanggal_lahir }}</td>
                                <td>{{ $konsumens->jenis_kelamin }}</td>
                                <td>{{ $konsumens->no_hp }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('konsumen.edit',$konsumens->id,'edit') }}" class="badge badge-success">Edit</a>
                                        <form action="{{ route('konsumen.destroy',$konsumens->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin Ingin Menghapus Data {{ $konsumens->konsumen }}?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                        @empty
                                <td class="text-center" colspan="6">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection