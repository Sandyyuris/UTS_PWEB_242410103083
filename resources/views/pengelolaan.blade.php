@extends('layouts.app')

@section('title', 'Pengelolaan Data')

@section('content')
<div class="card shadow-premium border-0 rounded-4">
    <div class="card-header bg-teal text-white py-3 rounded-top-4">
        <h5 class="mb-0 fw-bold">Pengelolaan Inventaris</h5>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nama Barang</th>
                        <th class="text-center">Stok</th>
                        <th class="text-end">Harga (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data_barang as $barang)
                    <tr>
                        <td class="text-center fw-bold text-teal">{{ $barang['id'] }}</td>
                        <td>{{ $barang['nama'] }}</td>
                        <td class="text-center">{{ $barang['stok'] }} unit</td>
                        <td class="text-end fw-bold text-teal">{{ number_format($barang['harga'], 0, ',', '.') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">Tidak ada data yang ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
