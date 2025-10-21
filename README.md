# 📊 Database Management System SMKN 62 Jakarta



Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.

Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

## ✨ Fitur Utama

[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)

### 🗂️ Manajemen File dengan Google Drive

- **4 Kategori Database**: Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha
  [![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

- **Upload File**: Dukungan semua tipe file (max 100MB) dengan progress bar

- **File Operations**: View, rename, delete file di Google Drive

- **Filter & Sort**: By date, name, size dengan pagination (5-50 item/page)

---## ✨ Fitur Utama## 🚀 Fitur Utama

### 🔗 Manajemen Link Kegiatan

- **CRUD Operations**: Create, read, update, delete link kegiatan

- **Google Sheets Storage**: Data tersimpan real-time di Google Sheets

- **Auto Timestamp**: Tracking created_at dan updated_at otomatis## ✨ Fitur Utama---



### 📝 Manajemen Google Forms

- **Form Collection**: Kelola link Google Forms untuk isian data sekolah

- **Easy Management**: Interface simpel untuk tambah, edit, hapus form### 🗂️ Manajemen File dengan Google Drive



### 🔐 Keamanan & Autentikasi- **4 Kategori Database**: Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha

- **OAuth 2.0**: Login aman dengan akun Google

- **Session Management**: Auto-logout setelah 30 menit inactive- **Upload File**: Upload langsung ke Google Drive dengan progress bar## ✨ Fitur Utama

- **Protected Routes**: Semua halaman dilindungi autentikasi

- **File Management**: View, rename, delete file

### 🎨 User Interface

- **Full Responsive**: 7 breakpoints (2560px - 360px)- **Filter & Sort**: By date, name, size (newest, oldest, A-Z, Z-A, largest, smallest)### 🗂️
- **Manajemen File dengan Google Drive**- 
- **Pengelompokan Database** - 4 Kategori
- **Modern Design**: Gradient, animations, card-based layout
- **Clean UI**: Font Awesome icons, Google Poppins font-
- **Pagination**: 5-50 item per halaman
- **Support All File Types**: PDF, Word, Excel, Image, Video, dll (max 100MB)

- ### 🗂️ Manajemen File dengan Google Drive
- **Composer** (Dependency Manager)
- **Web Server** (Apache/Nginx/XAMPP/WAMP)
- **CRUD Operations**: Create, read, update, delete link kegiatan
- **Akun Google** dengan akses Google Drive API & Sheets API
- **Google Sheets Storage**: Data tersimpan di Google Sheets (real-time sync)  
- **Auto Timestamp**: Mencatat created_at dan updated_at

## 🚀 Instalasi



### 1️⃣ Clone Repository



```bash

git clone https://github.com/rahmat43112/Data-Base-Guru.git### 📝 Manajemen Google Forms  - 🏢 **Sapras & Humas** - Sarana prasarana dan hubungan masyarakat

cd Data-Base-Guru

```- **Form Collection**: Kelola link Google Forms untuk isian data



### 2️⃣ Install Dependencies- **Easy Management**: Tambah, edit, hapus form dengan mudah  - 📋 **Tata Usaha** - Administrasi dan surat menyurat  - 👥 **Kesiswaan** - Data siswa, absensi, prestasi  - 🏢 Sapras & Humas



```bash- **Organized View**: Tabel dengan icon indicators

composer install

```



### 3️⃣ Konfigurasi Google API### 🔐 Keamanan & Autentikasi



**Setup lengkap Google OAuth & Sheets API ada di:**- **OAuth 2.0**: Login aman dengan akun Google- ☁️ **Upload File Langsung ke Google Drive**  - 🏢 **Sapras & Humas** - Sarana prasarana dan hubungan masyarakat  - 📋 Tata Usaha

📖 **[docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md)**

- **Session Management**: Auto-logout setelah 30 menit inactive

### 4️⃣ Konfigurasi Aplikasi

- **Protected Routes**: Semua halaman dilindungi autentikasi  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)

Copy file konfigurasi dan isi dengan credentials Anda:



```bash

cp config.example.php includes/config.php### 🎨 User Interface  - Real-time upload progress bar dengan animasi  - 📋 **Tata Usaha** - Administrasi dan surat menyurat

```

- **Full Responsive**: 7 breakpoints (2560px - 360px)

Edit `includes/config.php`:

- **Modern Design**: Gradient, animations, card-based layout  - Maximum file size: 100MB

```php

define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');- **Clean UI**: Font Awesome icons, Google Poppins font

define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

define('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');  - Auto-detect file type dengan icon- ☁️ **Upload File ke Google Drive** - Upload file langsung ke folder Google Drive

```

---

> ⚠️ **PENTING**: File `includes/config.php` sudah di-gitignore untuk keamanan



### 5️⃣ Jalankan Aplikasi

## 📋 Prasyarat
  - XAMPP/WAMP/LAMP dengan PHP 7.4+
  - Web Browser modern

```bash

php -S localhost:8000- **Composer** (Dependency Manager)  - **View** - Lihat file langsung di Google Drive

```

- **Web Server** (Apache/Nginx/XAMPP/WAMP)

---

- **Akun Google** dengan akses Google Drive API & Sheets API  - **Rename** - Edit nama file dengan modal interface  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)- 📝 **Manajemen Google Forms** - Kumpulan link Google Form untuk isian data

## 📖 Dokumentasi

- 📘 **[Setup Google API](docs/SETUP_GOOGLE_API.md)** - Panduan lengkap OAuth 2.0, Drive API, dan Sheets API
- 📗 **[Setup Aplikasi](docs/SETUP.md)** - Konfigurasi aplikasi dan troubleshooting---  



## 💻 Teknologi
- **Backend**: PHP 7.4+- Konfigurasi lengkap dengan screenshot
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **API Integration**: Google Drive API v3, Google Sheets API v4-️
- **Easy Management** - Tambah, edit, hapus form dengan mudah
- **Filter & Sort** - Berdasarkan tanggal, nama, ukuran (newest, oldest, A-Z, Z-A, largest, smallest)
- **Authentication**: OAuth 2.0
- **Dependencies**: ### 4. Konfigurasi Aplikasi
  - `google/apiclient` - Google API Client
  - `monolog/monolog` - Logging- 📊 **Organized View** - Tabel terstruktur dengan pagination
- **UI/UX**: 
  - Font Awesome 6.4.0Copy file konfigurasi:
  - Google Fonts (Poppins)
  - CSS Animations & Transitions- 🎨 **Icon Indicators** - Visual icon untuk setiap form  
  - **Pagination** - Tampilkan 5-50 file per halaman## 🛠️ Instalasi




### Upload File

1. Login dengan akun Google

2. Pilih kategori database (Kurikulum/Kesiswaan/Sapras & Humas/Tata Usaha)### 1. Clone Repository  - **Pagination** - Tampilkan 5-50 file per halaman

3. Klik "Choose File" → Select file → "Upload ke Google Drive"

4. Progress bar akan muncul → File tersimpan di Google Drive folder



### Kelola Link Kegiatan```bash  - **Search by Date** - Filter file berdasarkan tanggal upload  - Maximum file size: 100MB

1. Dashboard → Klik "Tambah Link"

2. Isi **Judul Kegiatan** dan **URL Link** → "Simpan Link"git clone https://github.com/LTZ24/Database-Management-.git

3. **Edit**: Klik icon pensil → Ubah data → "Update Link"

4. **Hapus**: Klik icon trash → Konfirmasicd Database-Management-  - **File Info** - Size, created date, dan icon type



### Kelola Google Forms```

1. Dashboard → Klik "Tambah Form"

2. Isi **Judul Form** dan **URL Google Form** → "Simpan Form"  - Auto-detect file type dengan icon## 📋 Prasyarat

3. Manage seperti link kegiatan (edit/hapus)

### 2. Install Dependencies

---

### 🔗 Manajemen Link Kegiatan (Google Sheets)

## 📁 Struktur Project

```bash

├── assets/
│   ├── css/```
│   │   ├── common.css         # 
│   │   ├── components.css     # 
│   │   ├── category.css       # File upload & category
│   │   └── dashboard.css      #
│   ├── js/
│   │   ├── modal.js          # Modal │   │   ├── category.js       # File management
│   │   ├── dashboard.js      # Link & form CRUD- Dependencies lainnya (Guzzle, Monolog, PSR, dll)
│   │   └── common.js         # Shared utilities
│   └── images/               # Logo & icons
├── includes/
│   ├── config.php           # Configuration (gitignored)### 3. Setup Google API
│   ├── header.php           # Header component
│   └── footer.php           # Footer 
├── data/
│   └── database.json        # Legacy ├── docs/
│   ├── SETUP_GOOGLE_API.md  # Google API setup guide
│   └── SETUP.md             # Application setup guide
├── vendor/                  # 
├── index.html              # Landing page
├── login.php               # Login dengan OAuth 
├── callback.php            # OAuth callback handler
├── dashboard.php           # 
├── category.php            # File management per kategori
├── manage_links.php        # Link CRUD operations
├── manage_forms.php        # Form CRUD operations
├── logout.php              # Logout handler
└── composer.json           # PHP dependencies

```

## 🐛 Troubleshootingcp includes/config.example.php includes/config.php



### Login Error: "Redirect URI Mismatch"```

✅ **Solusi**: Pastikan Authorized Redirect URI di Google Console sama dengan URL callback

### 🔐 Autentikasi & Keamanan  - **Search by Date** - Filter file berdasarkan tanggal upload

http://localhost/Data-Base-Guru/callback.php

```Edit `includes/config.php` dan isi kredensial Anda:



### Upload Gagal: "Permission Denied"- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google

✅ **Solusi**: Service account harus punya akses **Editor** ke folder Google Drive


### Data Link/Form Tidak Muncul

✅ **Solusi**: Cek akses Google Sheets - Service account harus punya permission **Editor**// Google OAuth 2.0- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive  - **File Info** - Tampilan size, created date, dan icon type### 1. Clone Repository



**Forked by:** [LTZ24](https://github.com/LTZ24/Database-Management-)- 🎯 **7 


Project ini dibuat untuk **SMKN 62 Jakarta** - Internal Use

## 👥 Tim Developer

- **SMKN 62 Jakarta** - IT Department
- **Created by:** [KTT Indonesia]


## 📞 Support & Kontak

Jika ada pertanyaan, bug, atau request fitur:
- 📧 Email: info@kttindonesia.com
- 🐛 **Bug Reports:** Buat issue di [GitHub Issues](https://github.com/rahmat43112/Data-Base-Guru/issues)
- 💡 **Feature Requests:** Buat issue dengan label `enhancement`
- 📖 **Documentation:** Lihat folder [docs/](docs/)

## 🙏 Credits

- **Google** - Google Drive API, Sheets API, OAuth 2.0
- **Font Awesome** - Icons library
- **Google Fonts** - Poppins font family
- **Composer** - PHP dependency management

---

<div align="center">

**Made with 💥 for SMKN 62 Jakarta**

⭐ **Star this repo** if you find it helpful!

[🏠 Homepage](https://github.com/rahmat43112/Data-Base-Guru) · [📖 Documentation](docs/SETUP.md) · [🐛 Report Bug](https://github.com/rahmat43112/Data-Base-Guru/issues) · [💡 Request Feature](https://github.com/rahmat43112/Data-Base-Guru/issues)

</div>
