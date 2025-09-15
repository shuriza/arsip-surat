@extends('layouts.app')

@section('title', 'Edit Arsip Surat')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit - {{ $arsip->nomor_surat }}</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Edit Arsip: {{ $arsip->nomor_surat }}</h2>
    
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
    
    <div class="mb-3">
        <p>Edit data arsip surat. File surat saat ini: <strong>{{ basename($arsip->file_path) }}</strong></p>
        <p><strong>Catatan:</strong></p>
        <ul>
            <li>Isi file baru jika ingin mengganti file yang sudah ada</li>
            <li>Kosongkan file jika hanya ingin mengubah data tanpa mengganti file</li>
            <li>Gunakan file berformat PDF</li>
        </ul>
    </div>
    
    <form method="POST" action="{{ route('arsip.update', $arsip->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="row mb-3">
            <label for="id_arsip" class="col-sm-2 col-form-label">ID Arsip</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" 
                       id="id_arsip" name="id_arsip" 
                       value="{{ $arsip->id }}" readonly>
                <div class="form-text">ID arsip tidak dapat diubah</div>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
            <div class="col-sm-4">
                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" 
                       id="nomor_surat" name="nomor_surat" 
                       value="{{ old('nomor_surat', $arsip->nomor_surat) }}" required>
                @error('nomor_surat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-4">
                <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                    <option value="Undangan" {{ old('kategori', $arsip->kategori) == 'Undangan' ? 'selected' : '' }}>Undangan</option>
                    <option value="Pengumuman" {{ old('kategori', $arsip->kategori) == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    <option value="Nota Dinas" {{ old('kategori', $arsip->kategori) == 'Nota Dinas' ? 'selected' : '' }}>Nota Dinas</option>
                    <option value="Pemberitahuan" {{ old('kategori', $arsip->kategori) == 'Pemberitahuan' ? 'selected' : '' }}>Pemberitahuan</option>
                </select>
                @error('kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                       id="judul" name="judul" 
                       value="{{ old('judul', $arsip->judul) }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="current_file" class="col-sm-2 col-form-label">File Saat Ini</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" readonly 
                       value="{{ basename($arsip->file_path) }}">
                <div class="form-text">File yang sedang digunakan</div>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-outline-primary">
                    <i class="fas fa-download me-1"></i> Download
                </a>
            </div>
        </div>
        
        <div class="row mb-4">
            <label for="file" class="col-sm-2 col-form-label">File Baru (Opsional)</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="file-display" readonly placeholder="Pilih file baru jika ingin mengganti">
                <input type="file" class="form-control @error('file') is-invalid @enderror" 
                       id="file" name="file" accept=".pdf" style="display: none;">
                @error('file')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-outline-secondary" onclick="document.getElementById('file').click()">
                    <i class="fas fa-folder-open me-1"></i> Browse File...
                </button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <a href="{{ route('arsip.index') }}" class="btn btn-secondary me-2">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Simpan Perubahan
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

.btn-outline-secondary {
    background-color: #f8f9fa;
    color: #000;
    border: 2px solid #000;
}

.btn-outline-primary {
    background-color: #fff;
    color: #007bff;
    border: 2px solid #007bff;
}

.btn:hover {
    opacity: 0.8;
}

#file {
    display: none;
}

.col-form-label {
    font-weight: normal;
}

.form-text {
    color: #6c757d;
    font-size: 0.875em;
}

.breadcrumb {
    background-color: transparent;
    padding: 0;
}

.breadcrumb-item a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb-item a:hover {
    text-decoration: underline;
}

.breadcrumb-item.active {
    color: #6c757d;
}
</style>

@endsection