@extends('layouts.app')

@section('title', 'Kategori Surat')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategori Surat</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">Kategori Surat</h2>
    
    <div class="mb-3">
        <p>Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat.</p>
        <p>Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</p>
    </div>
    
    <!-- Search Form -->
    <div class="search-container">
        <form method="GET" action="{{ route('categories.index') }}" class="row g-3 align-items-end">
            <div class="col-md-3">
                <label for="search" class="form-label">
                    <i class="fas fa-search me-1"></i> Cari kategori:
                </label>
                <input type="text" class="form-control" id="search" name="search" 
                       value="{{ request('search') }}" placeholder="Masukkan nama kategori...">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search me-1"></i> Cari
                </button>
            </div>
        </form>
    </div>
    
    <!-- Category Table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nama_kategori }}</td>
                    <td>{{ $category->keterangan }}</td>
                    <td>
                        <button class="btn btn-hapus btn-sm me-1" data-id="{{ $category->id }}" onclick="confirmDeleteCategory(this)">
                            <i class="fas fa-trash me-1"></i> Hapus
                        </button>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-lihat btn-sm">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data kategori.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Add Category Button -->
    <div class="mt-3">
        <a href="{{ route('categories.create') }}" class="btn btn-success">
            <i class="fas fa-plus me-1"></i> Tambah Kategori Baru
        </a>
    </div>
</div>

<!-- Delete Form (Hidden) -->
<form id="delete-form" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<style>
.btn-success {
    background-color: #28a745;
    border-color: #28a745;
    border-radius: 0;
    border: 2px solid #000;
}

.table th {
    background-color: #f8f9fa;
    border: 2px solid #000;
}

.table td {
    border: 2px solid #000;
}

.btn-primary {
    border-radius: 0;
    border: 2px solid #000;
}

.form-control {
    border: 2px solid #000;
    border-radius: 0;
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