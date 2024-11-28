@extends('layouts.app')

@section('content')


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <h1>List Barang</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->kode }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->kategori->nama }}</td>
                <td>{{ number_format($barang->harga, 2) }}</td>
                <td>{{ $barang->stok }}</td>
                <!-- <td>
                    <a href="{{ route('items.edit', $barang) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('items.destroy', $barang) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
