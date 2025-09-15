# 📋 Screenshot Checklist untuk README.md

## ✅ Daftar Screenshot yang Diperlukan

### 1. **Dashboard Utama** (`dashboard.png`)
- [ ] URL: `http://127.0.0.1:8000`
- [ ] Menampilkan tabel arsip dengan data sample
- [ ] Breadcrumb "Arsip Surat" terlihat
- [ ] Search box dan tombol "Arsipkan Surat" terlihat
- [ ] Button Hapus, Unduh, Edit, Lihat terlihat
- [ ] Ukuran: 1200x800px

### 2. **Form Upload Arsip** (`upload-form.png`)
- [ ] URL: `http://127.0.0.1:8000/arsip/create`
- [ ] Breadcrumb "Arsip Surat > Unggah" terlihat
- [ ] Semua field form terlihat (Nomor Surat, Kategori, Judul, File)
- [ ] Button "Browse File" dan "Simpan" terlihat
- [ ] Catatan PDF requirements terlihat
- [ ] Ukuran: 1200x800px

### 3. **Preview Dokumen** (`document-preview.png`)
- [ ] URL: `http://127.0.0.1:8000/arsip/1`
- [ ] Breadcrumb "Arsip Surat > Lihat - [Nomor]" terlihat
- [ ] Detail informasi surat terlihat
- [ ] PDF viewer/iframe terlihat
- [ ] Button Edit/Ganti File, Download, Kembali terlihat
- [ ] Ukuran: 1200x800px

### 4. **Edit Dokumen** (`edit-document.png`)
- [ ] URL: `http://127.0.0.1:8000/arsip/1/edit`
- [ ] Breadcrumb "Arsip Surat > Edit - [Nomor]" terlihat
- [ ] Form dengan data terisi terlihat
- [ ] ID Arsip readonly field terlihat
- [ ] File saat ini dan opsi file baru terlihat
- [ ] Button Download file lama terlihat
- [ ] Ukuran: 1200x800px

### 5. **Manajemen Kategori** (`category-management.png`)
- [ ] URL: `http://127.0.0.1:8000/categories`
- [ ] Breadcrumb "Arsip Surat > Kategori Surat" terlihat
- [ ] Tabel kategori dengan data terlihat
- [ ] Button Hapus dan Edit terlihat
- [ ] Search box dan tombol "Tambah" terlihat
- [ ] Ukuran: 1200x800px

### 6. **Form Tambah Kategori** (`add-category.png`)
- [ ] URL: `http://127.0.0.1:8000/categories/create`
- [ ] Breadcrumb "Kategori Surat > Tambah" terlihat
- [ ] ID Kategori otomatis terlihat
- [ ] Form Nama Kategori dan Keterangan terlihat
- [ ] Help text "ID kategori akan dibuat otomatis" terlihat
- [ ] Ukuran: 1200x800px

### 7. **Mobile View** (`mobile-view.png`)
- [ ] Buka Developer Tools (F12)
- [ ] Pilih device mode (iPhone/Android)
- [ ] Screenshot halaman dashboard di mobile view
- [ ] Navigation dan tabel responsive terlihat
- [ ] Ukuran: 375x800px

## 🎯 Tips Screenshot

### **Persiapan Data**
- Pastikan ada data arsip sample (minimal 3-5 items)
- Pastikan ada data kategori sample
- Gunakan nama file yang realistis untuk demo

### **Browser Setup**
- Gunakan Chrome atau Firefox
- Set zoom level 100%
- Hide bookmark bar untuk screenshot yang bersih
- Gunakan window size yang konsisten

### **Kualitas Screenshot**
- Format: PNG untuk kualitas terbaik
- Crop area yang tidak perlu
- Pastikan text terlihat jelas
- Hindari blur atau pixelated images

### **Konsistensi**
- Gunakan data yang sama di semua screenshot jika memungkinkan
- Pastikan theme/styling konsisten
- Ukuran dan aspect ratio yang seragam

## 📁 Lokasi Penyimpanan

Simpan semua screenshot di folder:
```
/screenshots/
├── dashboard.png
├── upload-form.png
├── document-preview.png
├── edit-document.png
├── category-management.png
├── add-category.png
└── mobile-view.png
```

## ✅ Setelah Screenshot Selesai

- [ ] Update path screenshot di README.md jika perlu
- [ ] Verifikasi semua screenshot terlihat di README
- [ ] Test README.md preview di GitHub/editor
- [ ] Commit semua screenshot ke repository