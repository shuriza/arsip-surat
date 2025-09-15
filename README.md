<div align="center">

# 📄 Arsip Surat

**Aplikasi web sederhana untuk mengarsipkan dan mengelola surat resmi di lingkungan desa**

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3+-777BB4?style=flat-square&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=flat-square&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.1-7952B3?style=flat-square&logo=bootstrap)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-4.0-06B6D4?style=flat-square&logo=tailwindcss)
![Vite](https://img.shields.io/badge/Vite-7.0-646CFF?style=flat-square&logo=vite)
![SweetAlert2](https://img.shields.io/badge/SweetAlert2-11.x-FF6B6B?style=flat-square)

</div>

---

## 🎯 Tujuan

Membantu digitalisasi dokumen surat agar lebih mudah dicari, aman, dan efisien dalam pengelolaan arsip kantor desa.

## ✨ Fitur Utama

- 📤 **Upload & manajemen surat** (PDF, max 10MB)
- 🔍 **Pencarian surat** secara real-time
- 👁️ **Preview & download PDF** langsung di aplikasi  
- 🗂️ **CRUD kategori surat** dengan mudah
- 🔒 **Validasi & keamanan upload** file
- 📱 **Tampilan responsive** (desktop & mobile)

## 🚀 Cara Menjalankan

### 📋 **Langkah Instalasi**

1. **Clone repository**
   ```bash
   git clone https://github.com/shuriza/arsip-surat.git
   cd arsip-surat
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi database**
   > Edit file `.env` dan sesuaikan pengaturan database Anda

5. **Migrasi & seed database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Buat storage link**
   ```bash
   php artisan storage:link
   ```

7. **Jalankan aplikasi**
   ```bash
   php artisan serve
   ```
   > Akses aplikasi di: http://localhost:8000

---

## 🖼️ Preview Aplikasi

### 🏠 Dashboard
*Halaman utama dengan daftar arsip dan fitur pencarian*

![Dashboard](public/images/image.png)

### 📤 Upload Surat  
*Form upload dokumen dengan validasi lengkap*

![Upload](public/images/unggah.png)

### 👁️ Preview Surat
*Preview PDF dengan opsi download*

![Preview](public/images/lihat.png)

### ✏️ Edit Surat
*Halaman edit untuk memperbarui data surat*

![Edit](public/images/edit.png)

### 🗂️ Manajemen Kategori
*CRUD kategori untuk mengorganisir surat*

![Kategori](public/images/kategori.png)

**Tambah Kategori**
![Tambah Kategori](public/images/tambahkategori.png)

**Edit Kategori**  
![Edit Kategori](public/images/editkategori.png)

### ℹ️ Halaman About
*Informasi aplikasi dan pengembang*

![About](public/images/about.png)

---

<div align="center">

**Dibuat dengan ❤️ menggunakan Laravel**

[![GitHub](https://img.shields.io/badge/GitHub-shuriza-181717?style=flat-square&logo=github)](https://github.com/shuriza)

</div>
