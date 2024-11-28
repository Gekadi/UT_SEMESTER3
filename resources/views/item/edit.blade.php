@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This tells Laravel that this is an update request -->
        
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" name="kode" class="form-control" value="{{ old('kode', $item->kode) }}" required>
            @error('kode')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $item->nama) }}" required>
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="">Select Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('kategori', $item->kategori_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->nama }}
                    </option>
                @endforeach
            </select>
            @error('kategori')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $item->harga) }}" required>
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ old('stok', $item->stok) }}" required>
            @error('stok')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Barang</button>
    </form>
</div>
@endsection
