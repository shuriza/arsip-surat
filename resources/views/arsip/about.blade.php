@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('arsip.index') }}">Arsip Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
    
    <h2 class="mb-4">About</h2>
    
    <div class="row">
        <div class="col-md-3">
            <!-- Developer Photo -->
            <div class="photo-container">
                <div class="developer-photo"></div>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="ms-3">
                <h5>Aplikasi ini dibuat oleh:</h5>
                <table class="table table-borderless">
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>:</td>
                        <td>M.Firdaus Suraningrat</td>
                    </tr>
                    <tr>
                        <td><strong>Prodi</strong></td>
                        <td>:</td>
                        <td>D3-MI PSDKU Kediri</td>
                    </tr>
                    <tr>
                        <td><strong>NIM</strong></td>
                        <td>:</td>
                        <td>2331730134</td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal</strong></td>
                        <td>:</td>
                        <td>14 September 2025</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
.photo-container {
    width: 154px; /* Width foto + border */
    height: 184px; /* Height foto + border */
    border: 2px solid #000;
    background-color: #fff;
    padding: 0;
    margin: 0;
    display: inline-block;
}

.table td {
    padding: 0.25rem 0.5rem;
    border: none;
    vertical-align: top;
}

.table td:first-child {
    width: 80px;
}

.table td:nth-child(2) {
    width: 20px;
}

.developer-photo {
    width: 150px;
    height: 180px;
    background-image: url('/images/developer.jpg'); 
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    display: block;
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