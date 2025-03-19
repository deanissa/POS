@extends('layout.app')

@section('subtitle', 'Edit Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Edit Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Kategori</div>

            <div class="card-body">
                <form method="POST" action="{{ route('kategori.update', ['id' => $kategori->kategori_id]) }}">
                    @csrf
                    @method('PUT')                

                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                            value="{{ old('kodeKategori', $kategori->kategori_kode) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori"
                            value="{{ old('namaKategori', $kategori->kategori_nama) }}" required>
                    </div>
                
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
                </form>                
            </div>
        </div>
    </div>
@endsection
