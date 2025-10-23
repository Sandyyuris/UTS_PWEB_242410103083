@php
    $message = session('error') ?? 'Pesan notifikasi.';
    $alertClass = 'alert-danger';
@endphp

<div class="alert {{ $alertClass }} mt-3 shadow-sm rounded-3 fw-bold" role="alert">
    {{ $message }}
</div>
