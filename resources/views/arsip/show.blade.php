@extends('layouts.app')

@section('title', 'Arsip Surat >> Lihat')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lihat - {{ $arsip->nomor_surat }}</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Detail Arsip: {{ $arsip->nomor_surat }}</h2>
    
    <div class="mb-3">
        <p><strong>Nomor:</strong> {{ $arsip->nomor_surat }}</p>
        <p><strong>Kategori:</strong> {{ $arsip->kategori }}</p>
        <p><strong>Judul:</strong> {{ $arsip->judul }}</p>
        <p><strong>Waktu Unggah:</strong> {{ $arsip->waktu_pengarsipan->format('Y-m-d H:i') }}</p>
    </div>
    
    <!-- PDF Viewer -->
    <div class="border border-dark mb-3" style="height: 500px; background-color: #f8f9fa;">
        <iframe src="{{ asset('storage/' . $arsip->file_path) }}" 
                width="100%" height="100%" 
                style="border: none;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="text-center">
                    <h5>{{ strtoupper($arsip->kategori) }}</h5>
                    <h6>{{ $arsip->nomor_surat }}</h6>
                    <p>Browser Anda tidak mendukung PDF viewer.</p>
                    <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-primary">Download PDF</a>
                </div>
            </div>
        </iframe>
    </div>
    
    <!-- Action Buttons -->
    <div class="mb-3">
        <a href="{{ route('arsip.index') }}" class="btn btn-outline-secondary me-2">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
        <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-outline-secondary me-2">
            <i class="fas fa-download me-1"></i> Unduh
        </a>
        <button class="btn btn-outline-secondary" data-id="{{ $arsip->id }}" onclick="confirmEditArsip(this)">
            <i class="fas fa-edit me-1"></i> Edit/Ganti File
        </button>
    </div>
</div>

<!-- Delete Form (Hidden) -->
<form id="delete-form" method="POST" action="{{ route('arsip.destroy', $arsip->id) }}" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<style>
.btn-outline-secondary {
    border: 2px solid #000;
    color: #000;
    background-color: #fff;
    border-radius: 0;
}

.btn-outline-secondary:hover {
    background-color: #f8f9fa;
    border-color: #000;
    color: #000;
}

.border-dark {
    border-width: 2px !important;
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