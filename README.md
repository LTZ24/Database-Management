# 📊 Database Management System SMKN 62 Jakarta# Database Management System SMKN 62 Jakarta



Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.Aplikasi web untuk mengelola database sekolah berbasis Google Drive dengan fitur upload file, manajemen link kegiatan, dan Google Forms.



## ✨ Fitur Utama## 🚀 Fitur Utama



### 🗂️ **Manajemen File dengan Google Drive**- ✅ **Pengelompokan Database** - 4 Kategori:

- ✅ **4 Kategori Database Terorganisir:**  - 📚 Kurikulum

  - 📚 **Kurikulum** - Dokumen pembelajaran, RPP, silabus  - 👥 Kesiswaan

  - 👥 **Kesiswaan** - Data siswa, absensi, prestasi  - 🏢 Sapras & Humas

  - 🏢 **Sapras & Humas** - Sarana prasarana dan hubungan masyarakat  - 📋 Tata Usaha

  - 📋 **Tata Usaha** - Administrasi dan surat menyurat

- ☁️ **Upload File ke Google Drive** - Upload file langsung ke folder Google Drive

- ☁️ **Upload File Langsung ke Google Drive**- 🔗 **Manajemen Link Kegiatan** - Kelola link dokumentasi kegiatan sekolah

  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)- 📝 **Manajemen Google Forms** - Kumpulan link Google Form untuk isian data

  - Real-time upload progress bar dengan animasi- 🔐 **Login dengan Google** - Autentikasi menggunakan akun Google

  - Maximum file size: 100MB

  - Auto-detect file type dengan icon## 📋 Prasyarat



- 📁 **Manajemen File Lengkap:**- PHP >= 7.4

  - **View** - Lihat file langsung di Google Drive- Composer

  - **Rename** - Edit nama file dengan modal interface- Web Server (Apache/Nginx/XAMPP/WAMP)

  - **Delete** - Hapus file dengan konfirmasi- Akun Google dengan akses Google Drive API

  - **Filter & Sort** - Berdasarkan tanggal, nama, ukuran (newest, oldest, A-Z, Z-A, largest, smallest)

  - **Pagination** - Tampilkan 5-50 file per halaman## 🛠️ Instalasi

  - **Search by Date** - Filter file berdasarkan tanggal upload

  - **File Info** - Tampilan size, created date, dan icon type### 1. Clone Repository



### 🔗 **Manajemen Link Kegiatan (Google Sheets)**```bash

- 💾 **Cloud Storage** - Data tersimpan di Google Sheets (bukan JSON)git clone https://github.com/rahmat43112/Data-Base-Guru.git

- ➕ **CRUD Operations** - Create, Read, Update, Delete link kegiatancd Data-Base-Guru

- 📅 **Auto Timestamp** - Mencatat created_at dan updated_at otomatis```

- 🔄 **Real-time Sync** - Data langsung tersinkronisasi dengan Sheets

- 📊 **Pagination** - Tampilan tabel dengan pagination 5-50 data### 2. Install Dependencies

- 🎯 **Quick Actions** - Tombol Edit, Delete, dan Open Link

```bash

### 📝 **Manajemen Google Forms (Google Sheets)**composer install

- 📋 **Form Collection** - Kelola link Google Forms untuk isian data```

- 🔄 **Real-time Database** - Tersimpan di Google Sheets API

- ✏️ **Easy Management** - Tambah, edit, hapus form dengan mudah### 3. Setup Google Drive API

- 📊 **Organized View** - Tabel terstruktur dengan pagination

- 🎨 **Icon Indicators** - Visual icon untuk setiap form#### A. Buat Project di Google Cloud Console



### 🔐 **Autentikasi & Keamanan**1. Buka [Google Cloud Console](https://console.cloud.google.com/)

- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google2. Klik **"Create Project"** atau pilih project yang ada

- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive3. Beri nama project (contoh: "SMKN62 Database")

- 🔒 **Protected Routes** - Semua halaman dilindungi autentikasi4. Klik **"Create"**

- 👤 **User Info Display** - Menampilkan nama dan foto profil Google

- 🔄 **Session Regeneration** - Security dengan regenerate session ID#### B. Enable Google Drive API



### 🎨 **User Interface & UX**1. Di menu sidebar, pilih **"APIs & Services"** > **"Library"**

- 📱 **Full Responsive Design** - Optimal di desktop, tablet, dan mobile2. Cari **"Google Drive API"**

- 🎯 **7 Breakpoints Responsive:**3. Klik dan tekan **"Enable"**

  - 🖥️ 2560px (Ultra Wide)

  - 🖥️ 1920px (Desktop HD)#### C. Buat OAuth 2.0 Credentials

  - 💻 1280px (Laptop)

  - 📱 1024px (Tablet Landscape)1. Di menu sidebar, pilih **"APIs & Services"** > **"Credentials"**

  - 📱 768px (Tablet Portrait)2. Klik **"Create Credentials"** > **"OAuth client ID"**

  - 📱 480px (Mobile)3. Jika diminta, configure consent screen:

  - 📱 360px (Small Mobile)   - User Type: **External**

   - App name: **SMKN62 Database Management**

- ✨ **Modern Animations:**   - User support email: email Anda

  - Fade in & slide down effects   - Developer contact: email Anda

  - Hover transitions dengan transform   - Klik **"Save and Continue"**

  - Loading spinners   - Scopes: Skip (klik **"Save and Continue"**)

  - Progress bars dengan gradient   - Test users: Tambahkan email Anda untuk testing

  - Logo float animation   - Klik **"Save and Continue"**



- 🎨 **Clean & Professional Design:**4. Kembali ke **"Credentials"** > **"Create Credentials"** > **"OAuth client ID"**

  - Gradient backgrounds5. Application type: **Web application**

  - Card-based layout6. Name: **SMKN62 Database**

  - Icon-based navigation (Font Awesome 6.5.2)7. Authorized redirect URIs:

  - Color-coded categories   ```

  - Shadow effects & borders   http://localhost/Data-Base-Guru/callback.php

  - Google Poppins font   ```

   (sesuaikan dengan path project Anda)

### ⚡ **Performance & Optimization**8. Klik **"Create"**

- 🚀 **AJAX & Lazy Loading** - Load data file on-demand9. Copy **Client ID** dan **Client Secret** yang muncul

- 📦 **Efficient API Calls** - Batch requests untuk Google API

- 🔄 **Smart Caching** - Mengurangi API calls yang tidak perlu#### D. Buat Folder di Google Drive

- ⏱️ **Fast Loading** - Optimized untuk loading cepat

- 📊 **Empty State Handling** - User-friendly ketika tidak ada data1. Buka [Google Drive](https://drive.google.com/)

2. Buat 4 folder dengan nama:

### 🔧 **Developer Features**   - **Kurikulum**

- 📚 **Google API Integration:**   - **Kesiswaan**

  - Google Drive API v3   - **Sapras & Humas**

  - Google Sheets API v4   - **Tata Usaha**

  - OAuth 2.0 Authentication

  3. Untuk setiap folder:

- 🛠️ **Built With:**   - Klik kanan folder > **"Share"**

  - PHP 7.4+   - Ubah akses menjadi **"Anyone with the link"** (optional, sesuai kebutuhan)

  - Composer (Dependency Management)   - Copy **Folder ID** dari URL

  - Google API Client Library (google/apiclient ^2.15)     - URL format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

  - Font Awesome Icons 6.5.2     - Copy bagian `FOLDER_ID_HERE`

  - Modern CSS3 (Flexbox, Grid, Animations, Media Queries)

  - Vanilla JavaScript (No jQuery)### 4. Konfigurasi Aplikasi



- 📁 **Clean Code Structure:**Edit file `config.php` dan isi dengan data Anda:

  ```

  Data-Base-Guru/```php

  ├── auth/                   # Authentication files// Google API Credentials

  │   ├── login.php          # Google OAuth logindefine('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

  │   ├── callback.php       # OAuth callback handlerdefine('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

  │   └── logout.php         # Logout handlerdefine('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');

  ├── pages/                  # Application pages

  │   ├── dashboard.php      # Main dashboard// Folder IDs dari Google Drive

  │   ├── category.php       # Category & file managementdefine('FOLDER_KURIKULUM', 'FOLDER_ID_KURIKULUM');

  │   ├── manage_links.php   # Link management formdefine('FOLDER_KESISWAAN', 'FOLDER_ID_KESISWAAN');

  │   └── manage_forms.php   # Form management formdefine('FOLDER_SAPRAS_HUMAS', 'FOLDER_ID_SAPRAS_HUMAS');

  ├── includes/              # Core filesdefine('FOLDER_TATA_USAHA', 'FOLDER_ID_TATA_USAHA');

  │   ├── config.php         # Configuration & functions```

  │   ├── header.php         # Header component

  │   └── footer.php         # Footer component### 5. Buat Folder Data

  ├── assets/                # Static assets

  │   ├── css/              # Stylesheets```bash

  │   │   ├── common.css    # Common styles & variablesmkdir data

  │   │   ├── components.css # Header & footerchmod 777 data

  │   │   ├── login.css     # Login page styles```

  │   │   ├── dashboard.css # Dashboard styles

  │   │   └── category.css  # Category page stylesAtau di Windows (PowerShell):

  │   └── images/           # Images & icons```powershell

  │       └── smk62.png     # School logoNew-Item -ItemType Directory -Path "data"

  ├── docs/                  # Documentation```

  │   ├── SETUP.md          # Setup guide

  │   └── SETUP_GOOGLE_API.md # Google API setup### 6. Setup Web Server

  ├── vendor/                # Composer dependencies

  ├── composer.json          # PHP dependencies#### Menggunakan PHP Built-in Server (untuk development):

  ├── .gitignore            # Git ignore rules

  ├── .htaccess             # Apache configuration```bash

  └── index.php             # Entry pointphp -S localhost:8000

  ``````



## 📋 PrasyaratAkses aplikasi di: `http://localhost:8000/login.php`



- **PHP** >= 7.4#### Menggunakan XAMPP/WAMP:

- **Composer** (Dependency Manager)

- **Web Server** (Apache/Nginx/XAMPP/WAMP)1. Copy folder project ke `htdocs` (XAMPP) atau `www` (WAMP)

- **Akun Google** dengan akses Google Drive API & Sheets API2. Akses aplikasi di: `http://localhost/Data-Base-Guru/login.php`

- **Google Cloud Console** project dengan OAuth 2.0

## 📖 Cara Penggunaan

## 🛠️ Instalasi

### Login

### 1. Clone Repository

1. Buka `http://localhost/Data-Base-Guru/login.php`

```bash2. Klik **"Login dengan Google"**

git clone https://github.com/rahmat43112/Data-Base-Guru.git3. Pilih akun Google Anda

cd Data-Base-Guru4. Izinkan akses ke Google Drive

```5. Anda akan diarahkan ke Dashboard



### 2. Install Dependencies### Dashboard



```bashDashboard menampilkan:

composer install- 4 Kategori database (Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha)

```- Daftar link kegiatan

- Daftar Google Forms

Ini akan menginstall:

- `google/apiclient` ^2.15 (Google API Client)### Upload File ke Google Drive

- Dependencies lainnya

1. Klik salah satu kategori database

### 3. Setup Google API2. Klik **"Choose File"** dan pilih file

3. Klik **"Upload ke Google Drive"**

Ikuti panduan lengkap di:4. File akan tersimpan di folder Google Drive yang sesuai

- 📖 [docs/SETUP.md](docs/SETUP.md) - Panduan lengkap instalasi

- 📖 [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md) - Setup Google Cloud Console### Mengelola Link Kegiatan



**Ringkas:**1. Di Dashboard, klik **"Tambah Link"** di section Link Kegiatan

2. Isi **Judul Kegiatan** dan **URL Link**

#### A. Google Cloud Console3. Klik **"Simpan Link"**

1. Buat project di [Google Cloud Console](https://console.cloud.google.com/)4. Link akan muncul di Dashboard

2. Enable **Google Drive API** dan **Google Sheets API**

3. Buat **OAuth 2.0 Credentials** (Web Application)Untuk edit/hapus:

4. Tambahkan Redirect URI: `http://localhost/Data-Base-Guru/auth/callback.php`- Klik icon **Edit** untuk mengubah

5. Copy **Client ID** dan **Client Secret**- Klik icon **Trash** untuk menghapus



#### B. Google Drive Folders### Mengelola Google Forms

1. Buka [Google Drive](https://drive.google.com/)

2. Buat 4 folder:1. Di Dashboard, klik **"Tambah Form"** di section Google Forms

   - Kurikulum2. Isi **Judul Form** dan **URL Google Form**

   - Kesiswaan3. Klik **"Simpan Form"**

   - Sapras & Humas4. Form akan muncul di Dashboard

   - Tata Usaha

3. Copy **Folder ID** dari URL setiap folder## 🏗️ Struktur Folder

   - URL format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

```

#### C. Google Sheets DatabaseData-Base-Guru/

1. Buat **Google Spreadsheet** baru├── config.php              # Konfigurasi aplikasi & Google API

2. Buat 2 sheets dengan nama:├── login.php              # Halaman login dengan Google

   - **Links** (untuk link kegiatan)├── callback.php           # OAuth callback handler

   - **Forms** (untuk google forms)├── logout.php             # Logout handler

3. Di setiap sheet, tambahkan header di row 1:├── dashboard.php          # Dashboard utama

   ```├── category.php           # Halaman kategori & upload file

   Title | URL | Created At | Updated At├── manage_links.php       # Form tambah/edit link kegiatan

   ```├── manage_forms.php       # Form tambah/edit Google Forms

4. Copy **Spreadsheet ID** dari URL:├── composer.json          # Dependencies PHP

   - URL format: `https://docs.google.com/spreadsheets/d/SPREADSHEET_ID_HERE/edit`├── index.html             # Landing page (optional)

├── smk62.png             # Logo sekolah

### 4. Konfigurasi├── data/                  # Folder untuk database JSON

│   └── database.json     # Database file (auto-created)

Edit file `includes/config.php`:└── vendor/               # Composer dependencies (auto-created)

```

```php

// Google OAuth 2.0## 🔧 Troubleshooting

define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');### Error: "Invalid Client ID"

define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');- Pastikan Client ID dan Client Secret sudah benar di `config.php`

- Pastikan Redirect URI di Google Console sama dengan di `config.php`

// Google Drive Folder IDs

define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');### Error: "Access Denied"

define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');- Pastikan Google Drive API sudah di-enable

define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');- Pastikan akun Google yang login sudah ditambahkan sebagai Test User

define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');

### Error: "Folder not found"

// Google Sheets ID- Pastikan Folder ID sudah benar di `config.php`

define('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');- Pastikan folder sudah di-share dengan akun yang login

```

### File upload gagal

### 5. Web Server Setup- Pastikan folder Google Drive sudah di-set permission yang benar

- Cek ukuran file tidak melebihi limit PHP (`upload_max_filesize`)

#### Menggunakan PHP Built-in Server:

### Database tidak tersimpan

```bash- Pastikan folder `data/` sudah dibuat

php -S localhost:8000- Pastikan folder `data/` memiliki permission write (777 di Linux/Mac)

```

## 🔒 Keamanan

Akses: `http://localhost:8000/auth/login.php`

- Jangan commit file `config.php` dengan credentials ke repository

#### Menggunakan XAMPP:- Gunakan `.gitignore` untuk mengabaikan file sensitif

- Untuk production, gunakan HTTPS

1. Copy folder ke `C:\xampp\htdocs\`- Set permission folder `data/` dengan benar (tidak terlalu permissive)

2. Start Apache di XAMPP Control Panel

3. Akses: `http://localhost/Data-Base-Guru/auth/login.php`## 📝 Data Storage



## 📖 Cara PenggunaanAplikasi menggunakan file JSON (`data/database.json`) untuk menyimpan:

- Link kegiatan

### 🔐 Login- Link Google Forms



1. Buka `http://localhost/Data-Base-Guru/auth/login.php`File-file diupload langsung ke Google Drive, tidak tersimpan di server.

2. Klik **"Login dengan Google"**

3. Pilih akun Google## 🤝 Kontribusi

4. Izinkan akses aplikasi

5. Redirect otomatis ke DashboardUntuk berkontribusi:

1. Fork repository

### 🏠 Dashboard2. Buat branch baru (`git checkout -b feature/AmazingFeature`)

3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)

Dashboard menampilkan:4. Push ke branch (`git push origin feature/AmazingFeature`)

- **4 Kategori Database** - Card dengan warna & icon5. Buat Pull Request

- **Link Kegiatan** - Tabel dengan pagination

- **Google Forms** - Tabel dengan pagination## 📄 Lisensi

- **User Profile** - Nama dan foto di header

- **Logout Button** - Keluar dari aplikasiProject ini dibuat untuk SMKN 62 Jakarta.



### 📁 Upload File## 👥 Developer



1. Klik salah satu **kategori database**- **SMKN 62 Jakarta**

2. Pilih file dengan **"Choose File"**- Repository: [https://github.com/rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)

3. Klik **"Upload ke Google Drive"**

4. **Progress bar** akan muncul menunjukkan upload progress## 📞 Support

5. Setelah selesai, file muncul di tabel

6. File tersimpan di **Google Drive folder** yang sesuaiJika ada pertanyaan atau masalah, silakan buat issue di GitHub repository.



### 🔗 Kelola Link Kegiatan---



**Tambah Link:****Made with ❤️ for SMKN 62 Jakarta**

1. Di Dashboard, klik **"Tambah Link"**
2. Isi **Judul Kegiatan** dan **URL Link**
3. Klik **"Simpan Link"**
4. Data tersimpan di **Google Sheets**

**Edit Link:**
1. Klik tombol **Edit** (icon pensil)
2. Ubah judul/URL
3. Klik **"Update Link"**

**Hapus Link:**
1. Klik tombol **Delete** (icon trash)
2. Konfirmasi hapus
3. Data dihapus dari Google Sheets

### 📝 Kelola Google Forms

Sama seperti Link Kegiatan:
1. Klik **"Tambah Form"**
2. Isi **Judul Form** dan **URL Google Form**
3. Klik **"Simpan Form"**
4. Edit/Hapus dengan tombol di tabel

### 📊 Fitur Filter & Pagination

**Filter Files:**
- **Sort:** Newest, Oldest, A-Z, Z-A, Largest, Smallest
- **Date Filter:** Pilih tanggal untuk filter file by date
- **Clear Filter:** Klik X untuk reset filter

**Pagination:**
- Pilih jumlah data: 5, 10, 15, 20, 25, 50 per halaman
- Navigate dengan tombol Previous/Next
- Jump ke halaman tertentu

## 🔧 Troubleshooting

### ❌ Error: "Invalid Client ID"
**Solusi:**
- Pastikan Client ID dan Secret benar di `config.php`
- Redirect URI harus sama persis (cek slash di akhir)
- Pastikan OAuth consent screen sudah di-configure

### ❌ Error: "Access Denied"
**Solusi:**
- Enable Google Drive API & Sheets API di Google Cloud Console
- Tambahkan email sebagai Test User (saat OAuth consent = External)
- Coba logout dan login ulang

### ❌ Error: "Folder not found" / "Spreadsheet not found"
**Solusi:**
- Pastikan Folder ID/Spreadsheet ID benar (tanpa ?usp=sharing)
- Share folder/sheets dengan akun yang login
- Cek permission folder/sheets (minimal "View" access)

### ❌ File upload gagal
**Solusi:**
- Cek ukuran file < 100MB
- Cek `php.ini`: 
  ```ini
  upload_max_filesize = 100M
  post_max_size = 100M
  max_execution_time = 300
  ```
- Pastikan folder Google Drive accessible
- Cek internet connection

### ❌ Data tidak muncul di Google Sheets
**Solusi:**
- Pastikan sheet name persis "Links" dan "Forms" (case-sensitive)
- Pastikan header row 1 ada: Title | URL | Created At | Updated At
- Cek Spreadsheet ID di config.php
- Pastikan Google Sheets API enabled
- Logout dan login ulang untuk refresh token scope

### ❌ Session timeout terlalu cepat
**Solusi:**
- Edit `config.php`, ubah timeout (default 1800 detik = 30 menit):
  ```php
  ini_set('session.gc_maxlifetime', 3600); // 1 jam
  ```

## 🔒 Keamanan

### Best Practices:
- ✅ **Jangan commit** `config.php` dengan credentials ke Git
- ✅ Gunakan `.gitignore` untuk file sensitif
- ✅ **Production:** Gunakan HTTPS (SSL Certificate)
- ✅ **Production:** Set OAuth consent = Internal (jika organisasi)
- ✅ **Session:** Auto-logout setelah inactive
- ✅ **Protected routes:** Semua page cek `isLoggedIn()`
- ✅ **CSRF Protection:** Gunakan token untuk form submission (future)

### File Permissions:
```bash
# Linux/Mac
chmod 755 Data-Base-Guru/
chmod 644 Data-Base-Guru/*.php
chmod 644 Data-Base-Guru/includes/*.php
```

## 📊 Database Structure

### Google Sheets: "Links" Sheet
```
| Title         | URL                      | Created At          | Updated At          |
|---------------|--------------------------|---------------------|---------------------|
| Lomba 17 Agst | https://drive.google...  | 2025-10-21 10:30:00 | 2025-10-21 10:30:00 |
```

### Google Sheets: "Forms" Sheet
```
| Title              | URL                      | Created At          | Updated At          |
|--------------------|--------------------------|---------------------|---------------------|
| Form Pendaftaran   | https://forms.google...  | 2025-10-21 11:00:00 | 2025-10-21 11:00:00 |
```

## 🎨 Customization

### Ubah Warna Tema:
Edit `assets/css/common.css`:
```css
:root {
    --primary-green: #28a745;     /* Warna utama */
    --primary-green-hover: #218838; /* Hover color */
    --primary-green-light: #d4edda; /* Background light */
}
```

### Ubah Kategori:
Edit `includes/config.php` function `getDatabaseCategories()`:
```php
return [
    'kurikulum' => [
        'name' => 'Nama Custom',
        'icon' => 'fa-icon-name',
        'color' => '#hexcolor',
        'folder_id' => FOLDER_KURIKULUM
    ],
    // ...
];
```

### Ubah Max File Size:
Edit `pages/category.php`:
```javascript
const maxSize = 100 * 1024 * 1024; // Ubah 100 jadi nilai lain (dalam MB)
```

Dan edit `php.ini`:
```ini
upload_max_filesize = 100M  ; Ubah sesuai kebutuhan
post_max_size = 100M        ; Harus >= upload_max_filesize
```

## 🤝 Kontribusi

Kontribusi sangat diterima! Untuk berkontribusi:

1. **Fork** repository ini
2. **Buat branch** baru:
   ```bash
   git checkout -b feature/AmazingFeature
   ```
3. **Commit** perubahan:
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
4. **Push** ke branch:
   ```bash
   git push origin feature/AmazingFeature
   ```
5. **Buat Pull Request** di GitHub

## 📝 Changelog

### Version 2.0.0 (October 2025)
- ✨ Migrasi dari JSON ke Google Sheets API
- ✨ Tambah upload progress bar dengan animasi
- ✨ Tambah file management (rename, delete)
- ✨ Tambah filter & sort files
- ✨ Tambah search by date
- ✨ Full responsive design (7 breakpoints)
- ✨ Reorganize folder structure
- ✨ Session management & auto-logout
- ✨ AJAX lazy loading untuk files
- 🐛 Fix OAuth callback errors
- 🐛 Fix folder ID issues
- 🎨 Redesign UI dengan modern components

### Version 1.0.0
- 🎉 Initial release
- ✅ Google Drive upload
- ✅ Basic link management (JSON)
- ✅ Google OAuth login

## 📄 Lisensi

Project ini dibuat untuk **SMKN 62 Jakarta** - Internal Use.

## 👥 Tim Developer

- **SMKN 62 Jakarta** - IT Department
- **Created by:** [KTT Indonesia](https://kttindonesia.com)
- **Repository:** [github.com/rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)

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

**Made with ❤️ for SMKN 62 Jakarta**

⭐ **Star this repo** if you find it helpful!

[🏠 Homepage](https://github.com/rahmat43112/Data-Base-Guru) · [📖 Documentation](docs/SETUP.md) · [🐛 Report Bug](https://github.com/rahmat43112/Data-Base-Guru/issues) · [💡 Request Feature](https://github.com/rahmat43112/Data-Base-Guru/issues)

</div>
