@extends('layouts.app')

@section('title', 'Arsip Surat - Desa Karangduren')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Arsip Surat</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Arsip Surat</h2>
    
    <div class="mb-3">
        <p class="text-muted">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
        <p class="text-muted">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
    </div>
    
    <!-- Search Form -->
    <div class="search-container">
        <form method="GET" action="{{ route('arsip.index') }}" class="row g-3 align-items-end">
            <div class="col-md-3">
                <label for="search" class="form-label">
                    <i class="fas fa-search me-1"></i> Cari surat:
                </label>
                <input type="text" class="form-control" id="search" name="search" 
                       value="{{ request('search') }}" placeholder="Masukkan judul surat...">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search me-1"></i> Cari
                </button>
            </div>
        </form>
    </div>
    
    <!-- Archive Table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor Surat</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Waktu Pengarsipan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($arsipList as $arsip)
                <tr>
                    <td>{{ $arsip->nomor_surat }}</td>
                    <td>{{ $arsip->kategori }}</td>
                    <td>{{ $arsip->judul }}</td>
                    <td>{{ $arsip->waktu_pengarsipan->format('Y-m-d H:i') }}</td>
                    <td>
                        <button class="btn btn-hapus btn-sm me-1" data-id="{{ $arsip->id }}" onclick="confirmDeleteArsip(this)">
                            <i class="fas fa-trash me-1"></i> Hapus
                        </button>
                        <a href="{{ route('arsip.download', $arsip->id) }}" class="btn btn-unduh btn-sm me-1">
                            <i class="fas fa-download me-1"></i> Unduh
                        </a>
                        <a href="{{ route('arsip.edit', $arsip->id) }}" class="btn btn-warning btn-sm me-1">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <a href="{{ route('arsip.show', $arsip->id) }}" class="btn btn-lihat btn-sm">
                            <i class="fas fa-eye me-1"></i> Lihat
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data surat yang diarsipkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Add Archive Button -->
    <div class="mt-3">
        <a href="{{ route('arsip.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-1"></i> Arsipkan Surat Baru
        </a>
    </div>
</div>

<!-- Delete Form (Hidden) -->
<form id="delete-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
@endsection