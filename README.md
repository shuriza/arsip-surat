# 📄 Arsip Surat - Sistem Manajemen Dokumen Desa

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

*Aplikasi web untuk mengarsipkan dan mengelola surat-surat resmi Desa Karangduren*

</div>

## 🎯 Tujuan Aplikasi

Aplikasi **Arsip Surat** dikembangkan untuk memenuhi kebutuhan digitalisasi dan pengelolaan dokumen di Kantor Desa Karangduren, Kecamatan Pakisaji. Sistem ini bertujuan untuk:

- 📋 **Mengorganisir** dokumen surat secara digital dan terstruktur
- 🔍 **Mempermudah pencarian** dokumen berdasarkan kriteria tertentu
- 💾 **Mengamankan** dokumen dari kerusakan fisik dan kehilangan
- ⚡ **Meningkatkan efisiensi** dalam pengelolaan arsip kantor
- 🌐 **Memberikan akses mudah** bagi perangkat desa untuk mengakses dokumen

## ✨ Fitur Unggulan

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
- **PHP**: >= 8.1 dengan ekstensi: mbstring, xml, pdo, pdo_mysql, openssl, json
- **Composer**: Latest version
- **MySQL**: >= 5.7 atau MariaDB >= 10.3
- **Web Server**: Apache/Nginx (untuk production)
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

# Cache configuration for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

#### **5. File Permissions**
```bash
# Set proper permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache
chown -R www-data:www-data storage
chown -R www-data:www-data bootstrap/cache
```

#### **6. Development Server**
```bash
# Start development server
php artisan serve --host=0.0.0.0 --port=8000

# Or with specific environment
php artisan serve --env=local
```

</details>

## 🏗️ Teknologi & Arsitektur

### **Backend Stack**
- **� Laravel 12.x** - PHP Framework dengan Eloquent ORM
- **🗄️ MySQL 5.7+** - Relational Database Management System
- **📁 File Storage** - Laravel Storage dengan Symbolic Links
- **🔐 Authentication** - Laravel Built-in Auth System

### **Frontend Stack**
- **🎨 Bootstrap 5.x** - CSS Framework untuk responsive design
- **✨ SweetAlert2** - Beautiful popup alerts dan confirmations
- **📄 PDF.js** - Dalam-browser PDF rendering
- **🎯 Vanilla JavaScript** - Custom interactions dan validations

### **Development Tools**
- **📦 Composer** - PHP Dependency Manager
- **🔧 Artisan CLI** - Laravel command line interface
- **💾 Migration System** - Database version control
- **🌱 Seeder Classes** - Sample data generation

### **Architecture Patterns**
- **🏛️ MVC (Model-View-Controller)** - Clean separation of concerns
- **📋 Repository Pattern** - Data access abstraction
- **🔄 RESTful Routes** - Standard HTTP methods
- **🛡️ CSRF Protection** - Security against cross-site request forgery

### 📋 **Dashboard Utama**
*Halaman utama menampilkan daftar semua arsip surat dengan fitur pencarian*

![Dashboard](screenshots/dashboard.png)

### 📤 **Form Upload Arsip**
*Interface upload dokumen baru dengan validasi form yang lengkap*

![Upload Form](screenshots/upload-form.png)

### 👁️ **Preview Dokumen**
*Halaman detail dengan preview PDF dan opsi download*

![Document Preview](screenshots/document-preview.png)

### 📝 **Edit Arsip**
*Halaman edit dokumen dengan opsi ganti file*

![Edit Document](screenshots/edit-document.png)

### 🗂️ **Manajemen Kategori**
*CRUD kategori surat dengan ID otomatis*

![Category Management](screenshots/category-management.png)

### 📱 **Responsive Design**
*Tampilan mobile-friendly untuk akses di berbagai perangkat*

![Mobile View](screenshots/mobile-view.png)

---

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

**🎉 Aplikasi siap digunakan di `http://localhost:8000`**

## 📊 Database Schema

### **Tabel: `arsip`**
| Field | Type | Constraints | Description |
|-------|------|-------------|-------------|
| `id` | bigint(20) | PRIMARY KEY, AUTO_INCREMENT | Unique identifier |
| `nomor_surat` | varchar(255) | UNIQUE, NOT NULL | Nomor surat resmi |
| `kategori` | varchar(255) | NOT NULL | Kategori surat |
| `judul` | varchar(255) | NOT NULL | Judul/perihal surat |
| `file_path` | varchar(255) | NOT NULL | Path file PDF di storage |
| `waktu_pengarsipan` | timestamp | NOT NULL | Timestamp upload dokumen |
| `created_at` | timestamp | NULL | Laravel timestamp |
| `updated_at` | timestamp | NULL | Laravel timestamp |

### **Tabel: `categories`**
| Field | Type | Constraints | Description |
|-------|------|-------------|-------------|
| `id` | bigint(20) | PRIMARY KEY, AUTO_INCREMENT | Unique identifier |
| `nama_kategori` | varchar(255) | UNIQUE, NOT NULL | Nama kategori |
| `keterangan` | text | NULL | Deskripsi kategori |
| `created_at` | timestamp | NULL | Laravel timestamp |
| `updated_at` | timestamp | NULL | Laravel timestamp |

### **Sample Data Categories**
- 📢 **Pengumuman** - Surat pengumuman resmi desa
- 📮 **Undangan** - Surat undangan rapat atau acara
- ⚖️ **Keputusan** - Surat keputusan kepala desa
- 📝 **Nota Dinas** - Komunikasi internal dinas
- 📰 **Pemberitahuan** - Surat pemberitahuan kepada masyarakat

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

## Kategori Surat

- Pengumuman
- Undangan  
- Keputusan
- Permohonan
- Pemberitahuan
- Lainnya

## Keamanan & Validasi

- Validasi file PDF pada upload
- Maksimal ukuran file 10MB
- Nomor surat harus unik
- Proteksi CSRF pada form
- Konfirmasi sebelum delete

## 🔧 Troubleshooting

<details>
<summary>🚨 <strong>Masalah Umum & Solusi</strong></summary>

### **📁 File Upload Error**
```bash
# Periksa permission folder
ls -la storage/app/public/
chmod -R 775 storage/
chown -R www-data:www-data storage/

# Periksa PHP configuration
php -i | grep upload_max_filesize
php -i | grep post_max_size
```

### **🔗 Storage Link Missing**
```bash
# Buat ulang symbolic link
php artisan storage:link

# Verifikasi link exists
ls -la public/storage
```

### **🗄️ Database Connection Error**
```bash
# Test koneksi database
php artisan tinker
DB::connection()->getPdo();

# Clear cache configuration
php artisan config:clear
php artisan cache:clear
```

### **📄 PDF Preview Tidak Muncul**
- Periksa file exists di `storage/app/public/arsip/`
- Cek browser console untuk error JavaScript
- Pastikan MIME type PDF di-support browser

### **🔐 CSRF Token Mismatch**
```bash
# Clear sessions & cache
php artisan session:clear
php artisan cache:clear
php artisan config:clear
```

</details>

## 🤝 Kontribusi

Kami sangat menghargai kontribusi dari komunitas! Untuk berkontribusi:

1. **🍴 Fork** repository ini
2. **🌿 Buat branch** untuk fitur baru (`git checkout -b feature/amazing-feature`)
3. **💾 Commit** perubahan (`git commit -m 'Add amazing feature'`)
4. **📤 Push** ke branch (`git push origin feature/amazing-feature`)
5. **🔃 Buat Pull Request**

### **📋 Panduan Kontribusi**
- Ikuti PSR-12 coding standards
- Tulis unit tests untuk fitur baru
- Update dokumentasi jika diperlukan
- Gunakan conventional commits format

## 📞 Support & Kontak

<div align="center">

### **🏢 Kantor Desa Karangduren**
📍 **Alamat**: Jl. Raya Karangduren, Kec. Pakisaji, Kab. Malang  
📞 **Telepon**: (0341) 123-4567  
📧 **Email**: karangduren@gmail.com  

### **👨‍💻 Developer**
**M. Firdaus Suraningrat**  
📧 Email: firdaus@example.com  
🐙 GitHub: [@shuriza](https://github.com/shuriza)  

</div>

---

## 📜 Lisensi

Project ini dikembangkan khusus untuk **Desa Karangduren, Kecamatan Pakisaji**.  
Penggunaan terbatas untuk keperluan internal pemerintahan desa.

```
Copyright © 2025 Desa Karangduren
All Rights Reserved
```

## 🙏 Credits & Acknowledgments

- **🚀 Laravel Framework** - [laravel.com](https://laravel.com)
- **🎨 Bootstrap CSS** - [getbootstrap.com](https://getbootstrap.com)
- **✨ SweetAlert2** - [sweetalert2.github.io](https://sweetalert2.github.io)
- **👥 Perangkat Desa Karangduren** - Support dan feedback
- **🌐 Open Source Community** - Inspirasi dan resources

---

<div align="center">

**🏛️ Dikembangkan dengan ❤️ untuk Desa Karangduren, Kecamatan Pakisaji**

[![Made with Laravel](https://img.shields.io/badge/Made%20with-Laravel-red.svg?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Built for Government](https://img.shields.io/badge/Built%20for-Government-blue.svg?style=for-the-badge&logo=government)](https://karangduren.desa.id)

**⭐ Jika aplikasi ini bermanfaat, berikan star di repository!**

</div>


