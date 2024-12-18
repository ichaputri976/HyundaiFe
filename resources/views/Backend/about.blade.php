@extends('backend.layouts.app')
@section('title', 'About Us')
@section('content')

<div class="container-fluid pt-2 px-1">
    <div class="row bg-light rounded align-items-center mx-0 p-4">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex align-items-center gap-2">
                <i class="text-primary fas fa-cog"></i>
                <h3 class="mb-0 text-dark">About</h3>
            </div>
        </div>
    </div>
    <br>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row mt-4">
        <!-- Form untuk Title -->
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <form action="{{ Route('admin.about.save') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" id="title" name="title" value="{{ $aboutUs->title ?? 'Data belum dimasukkan' }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Form untuk Description -->
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Deskripsi</h5>
                    <form action="{{ Route('admin.about.save') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $aboutUs->description ?? 'Data belum dimasukkan' }}</textarea>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Form untuk Vision -->
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Visi</h5>
                    <form action="{{ Route('admin.about.save') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <textarea class="form-control" id="vision" name="vision" rows="2">{{ $aboutUs->vision ?? 'Data belum dimasukkan' }}</textarea>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Form untuk Mission -->
        <div class="col-md-6 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Misi</h5>
                    <form action="{{ Route('admin.about.save') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <textarea class="form-control" id="mission" name="mission" rows="2">{{ $aboutUs->mission ?? 'Data belum dimasukkan' }}</textarea>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
