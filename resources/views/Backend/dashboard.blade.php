@extends('Backend.Layout.app')

@section('title', 'Dashboard')

@section('content')

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row bg-light rounded mx-0 shadow-sm">
        <div class="col-12 d-flex justify-content-center align-items-center p-4">
            <p class="fw-bold fs-5 mb-0 text-center">Hi {{ $user->name }}, Selamat Datang Di Dashboard KilatNews</p>
        </div>
    </div>
</div>

@endsection