@extends('layouts.app')

@section('title', 'Arsip Surat >> Unggah')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Unggah</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Unggah Arsip Surat</h2>
    
    <div class="mb-3">
        <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
        <p><strong>Catatan:</strong></p>
        <ul>
            <li>Gunakan file berformat PDF</li>
        </ul>
    </div>
    
    <form method="POST" action="{{ route('arsip.store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="row mb-3">
            <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
            <div class="col-sm-4">
                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror" 
                       id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat') }}" required>
                @error('nomor_surat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-4">
                <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                    <option value="Undangan" {{ old('kategori') == 'Undangan' ? 'selected' : '' }}>Undangan</option>
                    <option value="Pengumuman" {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    <option value="Nota Dinas" {{ old('kategori') == 'Nota Dinas' ? 'selected' : '' }}>Nota Dinas</option>
                    <option value="Pemberitahuan" {{ old('kategori') == 'Pemberitahuan' ? 'selected' : '' }}>Pemberitahuan</option>
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
                       id="judul" name="judul" value="{{ old('judul') }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row mb-4">
            <label for="file" class="col-sm-2 col-form-label">File Surat (PDF)</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="file-display" readonly placeholder="Belum ada file dipilih">
                <input type="file" class="form-control @error('file') is-invalid @enderror" 
                       id="file" name="file" accept=".pdf" required style="display: none;">
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

.btn:hover {
    opacity: 0.8;
}

#file {
    display: none;
}

.col-form-label {
    font-weight: normal;
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