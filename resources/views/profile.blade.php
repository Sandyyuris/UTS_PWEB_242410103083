@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="card shadow-premium border-0 rounded-4">
    <div class="card-header bg-teal text-white py-3 rounded-top-4">
        <h3>Detail Profil</h3>
    </div>
    <div class="card-body">
        <p><strong>Username:</strong> <span class="text-success">{{ $username ?? 'Tamu' }}</span></p>
        <p><strong>Status:</strong> Pengguna Aktif</p>
        <p><strong>Jabatan:</strong> Mahasiswa PWEB</p>
    </div>
</div>
@endsection
