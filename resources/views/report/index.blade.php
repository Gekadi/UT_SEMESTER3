@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Laporan Barang</h1>

    <!-- DataTable -->
    <div class="table-responsive">
        <table id="barang-table" class="table table-striped table-bordered table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('css') 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endsection

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#barang-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "lengthChange": false,
            "pageLength": 5
        });
    });
</script>
@endsection
