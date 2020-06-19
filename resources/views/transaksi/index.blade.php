@extends('layouts.master')
@section('title','Transaksi')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3 text-center">Daftar Transaksi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
                    <thead>
                        <th>No</th>
                        <th>Konsumen</th>
                        <th>No Polisi</th>
                        <th>tanggal Masuk</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Biaya</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        @forelse($transaksi as $transaksis)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaksis->konsumen }}</td>
                                <td>{{ $transaksis->no_polisi }}</td>
                                <td>{{ $transaksis->tanggal_masuk }}</td>
                                <td>{{ $transaksis->waktu_masuk }}</td>
                                <td>{{ $transaksis->waktu_keluar }}</td>
                                
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('transaksi.edit',$transaksis->id,'edit') }}" class="badge badge-success">Edit</a>
                                        <form action="{{ route('transaksi.destroy',$transaksis->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin Ingin Menghapus Data {{ $transaksis->konsumen }}?')">Hapus</button>
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