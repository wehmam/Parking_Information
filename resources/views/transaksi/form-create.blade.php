@extends('layouts.master')
@section('title','Create Konsumen')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3 mb-3 text-center">Tambah Data Konsumen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="konsumen">Nama</label>
                        <input type="text" name="konsumen" id="konsumen" class="form-control @error('konsumen') is-invalid @enderror" value="{{ old('konsumen') }}">
                        @error('konsumen')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_polisi">No Polisi</label>
                        <input type="text" name="no_polisi" id="no_polisi" class="form-control @error('no_polisi') is-invalid @enderror" value="{{ old('no_polisi') }}">
                        @error('no_polisi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control @error('tanggal_masuk') is-invalid @enderror" value="{{ old('tanggal_masuk') }}">
                        @error('tanggal_masuk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="waktu_keluar">Waktu Keluar</label>
                        <input type="datetime-local" name="waktu_keluar" id="waktu_keluar" class="form-control @error('waktu_keluar') is-invalid @enderror" value="{{ old('waktu_keluar') }}">
                        @error('waktu_keluar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                  
                    <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection