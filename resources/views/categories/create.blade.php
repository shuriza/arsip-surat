@extends('layouts.app')

@section('title', 'Tambah Kategori Baru')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Kategori Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Tambah Kategori Baru</h2>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        
        <div class="row mb-3">
            <label for="id_kategori" class="col-sm-2 col-form-label">ID Kategori</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" 
                       id="id_kategori" name="id_kategori" 
                       value="{{ $nextId }}" readonly>
                <div class="form-text">ID kategori akan dibuat otomatis</div>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-6">
                <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" 
                       id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}" required>
                @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-4">
            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-8">
                <textarea class="form-control @error('keterangan') is-invalid @enderror" 
                          id="keterangan" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary me-2">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>
        </div>
    </form>
</div>

<style>
.form-control, .form-select {
    border: 2px solid #000;
    border-radius: 0;
}

.form-control[readonly] {
    background-color: #f8f9fa;
    opacity: 1;
}

.btn {
    border-radius: 0;
    border: 2px solid #000;
}

.btn-secondary {
    background-color: #f8f9fa;
    color: #000;
}

.btn-primary {
    background-color: #fff;
    color: #000;
}

.col-form-label {
    font-weight: normal;
}

.form-text {
    color: #6c757d;
    font-size: 0.875em;
}
</style>
@endsection