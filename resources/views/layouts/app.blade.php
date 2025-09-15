<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '📄 Arsip Surat - Desa Karangduren')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📄</text></svg>">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }
        
        .main-content {
            min-height: 100vh;
            padding: 20px;
        }
        
        .menu-item {
            padding: 10px 20px;
            border-bottom: 1px solid #dee2e6;
            display: block;
            text-decoration: none;
            color: #333;
        }
        
        .menu-item:hover {
            background-color: #e9ecef;
            color: #333;
            text-decoration: none;
        }
        
        .menu-item.active {
            background-color: #007bff;
            color: white;
        }
        
        .btn-hapus {
            background-color: #dc3545;
            color: white;
        }
        
        .btn-unduh {
            background-color: #ffc107;
            color: #212529;
        }
        
        .btn-warning {
            background-color: #fd7e14;
            color: white;
        }
        
        .btn-lihat {
            background-color: #007bff;
            color: white;
        }
        
        .table th {
            background-color: #f8f9fa;
        }
        
        .search-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="p-3">
                    <div class="text-center mb-4">
                        <i class="fas fa-building text-primary fs-1 mb-2"></i>
                        <h5><i class="fas fa-archive me-1"></i> Arsip Surat</h5>
                        <small class="text-muted">Desa Karangduren</small>
                    </div>
                    <hr>
                    
                    <a href="{{ route('arsip.index') }}" class="menu-item {{ request()->routeIs('arsip.*') ? 'active' : '' }}">
                        <i class="fas fa-file-archive me-2"></i> Arsip Surat
                    </a>
                    
                    <a href="{{ route('categories.index') }}" class="menu-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                        <i class="fas fa-tags me-2"></i> Kategori Surat
                    </a>
                    
                    <a href="{{ route('arsip.about') }}" class="menu-item {{ request()->routeIs('arsip.about') ? 'active' : '' }}">
                        <i class="fas fa-user-circle me-2"></i> About
                    </a>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 main-content">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                
                @yield('content')
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/confirmation.js') }}"></script>
    
    @stack('scripts')
</body>
</html>