@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session('error'))
            @include('components.alert_notif')
        @endif

        <div class="card bg-cream shadow-premium border-0 rounded-5 mt-4">
            <div class="card-header bg-cream text-teal text-center p-4 border-0 rounded-top-5">
                <h3 class="fw-bolder my-2">LOGIN</h3>
            </div>
            <div class="card-body p-5">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-teal btn-lg mt-3 fw-bold rounded-pill">MASUK</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3 bg-light border-0 rounded-bottom-5">
            </div>
        </div>
    </div>
</div>
@endsection
