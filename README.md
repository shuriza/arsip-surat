# 📄 Arsip Surat - Sistem Manajemen Dokumen Desa

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

*Aplikasi web untuk mengarsipkan dan mengelola surat-surat resmi Desa Karangduren*

## 🎯 Tujuan Aplikasi

Aplikasi **Arsip Surat** dikembangkan untuk memenuhi kebutuhan digitalisasi dan pengelolaan dokumen di Kantor Desa Karangduren, Kecamatan Pakisaji. Sistem ini bertujuan untuk:

- 📋 **Mengorganisir** dokumen surat secara digital dan terstruktur
- 🔍 **Mempermudah pencarian** dokumen berdasarkan kriteria tertentu
- 💾 **Mengamankan** dokumen dari kerusakan fisik dan kehilangan
- ⚡ **Meningkatkan efisiensi** dalam pengelolaan arsip kantor
- 🌐 **Memberikan akses mudah** bagi perangkat desa untuk mengakses dokumen

## ✨ Fitur Unggulan

### 🏠 **Dashboard Utama**

- **Daftar Arsip Komprehensif**: Tampilan tabel dengan informasi lengkap setiap dokumen
- **Pencarian Real-time**: Cari dokumen berdasarkan judul dengan hasil instan
- **Navigasi Breadcrumb**: Navigasi yang intuitif dan mudah dipahami
- **Responsive Design**: Tampilan optimal di desktop, tablet, dan mobile

### 📤 **Manajemen Upload**

- **Upload PDF**: Sistem upload khusus file PDF dengan validasi ketat
- **Validasi File**: Maksimal 10MB, format PDF only
- **Auto-numbering**: Sistem penomoran otomatis untuk ID arsip
- **Metadata Lengkap**: Nomor surat, kategori, judul, dan timestamp

### 👁️ **Preview & Download**

- **PDF Viewer**: Preview dokumen langsung di browser tanpa download
- **Download Secure**: Unduh file dengan nama yang sesuai nomor surat
- **Iframe Integration**: Tampilan PDF yang seamless dalam aplikasi

### 🗂️ **Kategori Management**

- **CRUD Kategori**: Tambah, edit, hapus kategori surat
- **ID Otomatis**: Sistem ID kategori yang auto-generated
- **Search Categories**: Pencarian kategori berdasarkan nama

### 🔒 **Keamanan & Konfirmasi**

- **SweetAlert2**: Konfirmasi cantik untuk aksi delete
- **CSRF Protection**: Keamanan form dengan Laravel CSRF
- **File Validation**: Validasi ketat untuk file upload
- **Unique Constraints**: Nomor surat dan nama kategori harus unik

### 🎨 **User Interface**

- **Bootstrap 5**: Framework CSS modern dan responsive
- **Custom Styling**: Design yang konsisten dengan branding desa
- **Interactive Elements**: Button hover effects dan transitions
- **Accessibility**: Interface yang mudah digunakan untuk semua user

### 📋 **Instalasi Detail**

<details>
<summary>🔧 <strong>Klik untuk melihat langkah instalasi lengkap</strong></summary>

#### **1. Persyaratan Sistem**

- **PHP**: >= 8.1
- **Composer**: Latest version
- **MySQL**: >= 5.7 atau MariaDB >= 10.3
- **Web Server**: Apache/Nginx
- **Node.js & NPM**: (opsional, untuk asset compilation)

#### **2. Clone & Setup**

```bash
# Clone repository
git clone https://github.com/shuriza/arsip-surat.git
cd arsip-surat

# Install composer dependencies
composer install --optimize-autoloader --no-dev

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### **3. Database Configuration**

```bash
# Buat database MySQL
mysql -u root -p
CREATE DATABASE arsip_surat CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Edit .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=arsip_surat
DB_USERNAME=root
DB_PASSWORD=your_secure_password
```

#### **4. Application Setup**

```bash
# Run migrations
php artisan migrate --force

# Create storage symbolic link
php artisan storage:link

# Seed sample data (optional)
php artisan db:seed --class=CategorySeeder
php artisan db:seed --class=ArsipSeeder

```

### 📋 **Dashboard Utama**

*Halaman utama menampilkan daftar semua arsip surat dengan fitur pencarian*

![Dashboard](public\images\image.png)

### 📤 **Form Upload Arsipv**

*Interface upload dokumen baru dengan validasi form yang lengkap*

![Upload Form](public\images\unggah.png)

### 👁️ **Preview Dokumen**

*Halaman detail dengan preview PDF dan opsi download*

![Document Preview](public\images\lihat.png)

### 📝 **Edit Arsip**

*Halaman edit dokumen dengan opsi ganti file*

![Edit Document](public\images\edit.png)

### 🗂️ **Manajemen Kategori**

*CRUD kategori surat dengan ID otomatis*

![Category Management](public\images\kategori.png)

![Category Management](public\images\tambahkategori.png)

![Category Management](public\images\editkategori.png)

### **About**

![Category Management](public\images\about.png)

## 🛠️ Cara Menjalankan Aplikasi

### ⚡ **Quick Start**

```bash
# 1. Clone repository
git clone https://github.com/shuriza/arsip-surat.git
cd arsip-surat

# 2. Install dependencies
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di .env
# DB_DATABASE=arsip_surat
# DB_USERNAME=root
# DB_PASSWORD=your_password

# 5. Migrate & seed
php artisan migrate
php artisan db:seed

# 6. Create storage link
php artisan storage:link

# 7. Run development server
php artisan serve
```

## Panduan Penggunaan

### 1. Arsipkan Surat Baru

- Klik tombol "Arsipkan Surat..."
- Isi form dengan data lengkap
- Upload file PDF (max 10MB)
- Klik "Arsipkan Surat"

### 2. Cari Surat

- Gunakan search box di halaman utama
- Ketik judul surat yang dicari
- Klik tombol "Cari"

### 3. Lihat Detail Surat

- Klik tombol "Lihat >>" pada baris surat
- Preview PDF akan ditampilkan
- Tersedia opsi download dan hapus

### 4. Download Surat

- Klik tombol "Unduh" pada baris surat
- File PDF akan terdownload

### 5. Hapus Surat

- Klik tombol "Hapus"
- Konfirmasi penghapusan
- Data dan file akan dihapus permanen
