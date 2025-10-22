# 📊 Database Management System SMKN 62 Jakarta



Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.

Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)

[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)

## ✨ Fitur Utama

### 🗂️ Manajemen File dengan Google Drive

- **4 Kategori Database**: Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha

- **Upload File**: Dukungan semua tipe file (max 100MB) dengan progress bar

- **File Operations**: View, rename, delete file di Google Drive

- **Filter & Sort**: By date, name, size dengan pagination (5-50 item/page)


### 🔗 Manajemen Link Kegiatan

- **CRUD Operations**: Create, read, update, delete link kegiatan

- **Google Sheets Storage**: Data tersimpan real-time di Google Sheets

- **Auto Timestamp**: Tracking created_at dan updated_at otomatis## 


### 📝 Manajemen Google Forms

- **Form Collection**: Kelola link Google Forms untuk isian data sekolah

- **Easy Management**: Interface simpel untuk tambah, edit, hapus form### 🗂️ Manajemen File dengan Google Drive



### 🔐 Keamanan & Autentikasi
- **4 Kategori Database**: Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha

- **OAuth 2.0**: Login aman dengan akun Google

- **Session Management**: Auto-logout setelah 30 menit inactive

- **Upload File**: Upload langsung ke Google Drive dengan progress bar

- **Protected Routes**: Semua halaman dilindungi autentikasi

- **File Management**: View, rename, delete file
  

### 🎨 User Interface

- **Full Responsive**: 7 breakpoints (2560px - 360px)
- **Filter & Sort**: By date, name, size (newest, oldest, A-Z, Z-A, largest, smallest)### 🗂️
- **Manajemen File dengan Google Drive**- 
- **Pengelompokan Database** - 4 Kategori
- **Modern Design**: Gradient, animations, card-based layout
- **Clean UI**: Font Awesome icons, Google Poppins font-
- **Pagination**: 5-50 item per halaman
- **Support All File Types**: PDF, Word, Excel, Image, Video, dll (max 100MB)
- **Composer** (Dependency Manager)




## � Syarat Instalasi

- PHP >= 7.4
- Composer
- Web Server (Apache/Nginx/XAMPP/WAMP)
- Akun Google dengan akses Google Drive API & Sheets API
- Google Cloud Project dengan Drive API & Sheets API enabled

---

## 🚀 Instalasi & Setup

Lihat panduan lengkap di:
- � [docs/SETUP.md](docs/SETUP.md) — Setup aplikasi & troubleshooting
- 📖 [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md) — Setup Google Cloud Console, OAuth, Drive API, Sheets API

---

## 📁 Struktur Folder

```
Database-Management-/
├── assets/
│   ├── css/                # Stylesheets
│   └── images/             # Logo & icons
├── includes/
│   ├── config.php          # Configuration (gitignored)
│   ├── header.php          # Header
│   └── footer.php          # Footer
├── docs/
│   ├── SETUP_GOOGLE_API.md # Google API setup guide
│   └── SETUP.md            # App setup & troubleshooting
├── data/                   # Legacy database (optional)
├── vendor/                 # Composer dependencies
├── login.php               # Login page
├── callback.php            # OAuth callback
├── dashboard.php           # Dashboard
├── category.php            # File management
├── manage_links.php        # Link management
├── manage_forms.php        # Form management
├── logout.php              # Logout
├── composer.json           # PHP dependencies
└── README.md               # This file
```

---

## 👥 Developer & Support

- Created by: [KTT Indonesia](https://kttindonesia.com)
- Maintained by: SMKN 62 Jakarta IT Dept
- Fork: [LTZ24/Database-Management-](https://github.com/LTZ24/Database-Management-)
- Email: info@kttindonesia.com
- Bug/Request: [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues)

---

**Made with 💥 for SMKN 62 Jakarta**

