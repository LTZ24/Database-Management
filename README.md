# 📊 Database Management System SMKN 62 Jakarta# 📊 Database Management System SMKN 62 Jakarta# 📊 Database Management System SMKN 62 Jakarta



Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.



[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap.Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)

[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)

---

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

## ✨ Fitur Utama

[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)

### 🗂️ Manajemen File dengan Google Drive

- **4 Kategori Database**: Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

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

- **Full Responsive**: 7 breakpoints (2560px - 360px)- **Filter & Sort**: By date, name, size (newest, oldest, A-Z, Z-A, largest, smallest)### 🗂️ **Manajemen File dengan Google Drive**- ✅ **Pengelompokan Database** - 4 Kategori:

- **Modern Design**: Gradient, animations, card-based layout

- **Clean UI**: Font Awesome icons, Google Poppins font- **Pagination**: 5-50 item per halaman



---- **Support All File Types**: PDF, Word, Excel, Image, Video, dll (max 100MB)### 🗂️ Manajemen File dengan Google Drive



## 📋 Prasyarat



- **PHP** >= 7.4### 🔗 Manajemen Link Kegiatan- ✅ **4 Kategori Database Terorganisir**- ✅ **4 Kategori Database Terorganisir:**  - 📚 Kurikulum

- **Composer** (Dependency Manager)

- **Web Server** (Apache/Nginx/XAMPP/WAMP)- **CRUD Operations**: Create, read, update, delete link kegiatan

- **Akun Google** dengan akses Google Drive API & Sheets API

- **Google Sheets Storage**: Data tersimpan di Google Sheets (real-time sync)  - 📚 **Kurikulum** - Dokumen pembelajaran, RPP, silabus

---

- **Auto Timestamp**: Mencatat created_at dan updated_at

## 🚀 Instalasi

- **Pagination**: Tabel terstruktur dengan quick actions  - 👥 **Kesiswaan** - Data siswa, absensi, prestasi  - 📚 **Kurikulum** - Dokumen pembelajaran, RPP, silabus  - 👥 Kesiswaan

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

**XAMPP/WAMP:**

- Akses: `http://localhost/Data-Base-Guru`- 📁 **Manajemen File Lengkap**- ☁️ **Upload File Langsung ke Google Drive**- 🔗 **Manajemen Link Kegiatan** - Kelola link dokumentasi kegiatan sekolah



**PHP Built-in Server:**- **PHP** >= 7.4

```bash

php -S localhost:8000- **Composer** (Dependency Manager)  - **View** - Lihat file langsung di Google Drive

```

- **Web Server** (Apache/Nginx/XAMPP/WAMP)

---

- **Akun Google** dengan akses Google Drive API & Sheets API  - **Rename** - Edit nama file dengan modal interface  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)- 📝 **Manajemen Google Forms** - Kumpulan link Google Form untuk isian data

## 📖 Dokumentasi



- 📘 **[Setup Google API](docs/SETUP_GOOGLE_API.md)** - Panduan lengkap OAuth 2.0, Drive API, dan Sheets API

- 📗 **[Setup Aplikasi](docs/SETUP.md)** - Konfigurasi aplikasi dan troubleshooting---  - **Delete** - Hapus file dengan konfirmasi



---



## 🎯 Penggunaan## 🚀 Instalasi  - **Filter & Sort** - Newest, Oldest, A-Z, Z-A, Largest, Smallest  - Real-time upload progress bar dengan animasi- 🔐 **Login dengan Google** - Autentikasi menggunakan akun Google



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

```

Data-Base-Guru/composer install- 💾 **Cloud Storage** - Data tersimpan di Google Sheets (bukan JSON)

├── assets/

│   ├── css/```

│   │   ├── common.css         # Global styles & variables

│   │   ├── components.css     # Header, footer, modals- ➕ **CRUD Operations** - Create, Read, Update, Delete link kegiatan

│   │   ├── category.css       # File upload & category

│   │   └── dashboard.css      # Dashboard & formsIni akan menginstall:

│   ├── js/

│   │   ├── modal.js          # Modal interactions- `google/apiclient` ^2.15 (Google Drive API, Sheets API, OAuth 2.0)- 📅 **Auto Timestamp** - Mencatat created_at dan updated_at otomatis- 📁 **Manajemen File Lengkap:**- PHP >= 7.4

│   │   ├── category.js       # File management

│   │   ├── dashboard.js      # Link & form CRUD- Dependencies lainnya (Guzzle, Monolog, PSR, dll)

│   │   └── common.js         # Shared utilities

│   └── images/               # Logo & icons- 🔄 **Real-time Sync** - Data langsung tersinkronisasi dengan Sheets

├── includes/

│   ├── config.php           # Configuration (gitignored)### 3. Setup Google API

│   ├── header.php           # Header component

│   └── footer.php           # Footer component- 📊 **Pagination** - Tampilan tabel dengan pagination 5-50 data  - **View** - Lihat file langsung di Google Drive- Composer

├── data/

│   └── database.json        # Legacy backup (tidak digunakan)**⚠️ PENTING:** Untuk setup Google Cloud Console, Google Drive API, Google Sheets API, dan OAuth 2.0 secara lengkap, silakan ikuti panduan di:

├── docs/

│   ├── SETUP_GOOGLE_API.md  # Google API setup guide- 🎯 **Quick Actions** - Tombol Edit, Delete, dan Open Link

│   └── SETUP.md             # Application setup guide

├── vendor/                  # Composer dependencies📖 **[docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md)**

├── index.html              # Landing page

├── login.php               # Login dengan OAuth  - **Rename** - Edit nama file dengan modal interface- Web Server (Apache/Nginx/XAMPP/WAMP)

├── callback.php            # OAuth callback handler

├── dashboard.php           # Dashboard utamaPanduan tersebut mencakup:

├── category.php            # File management per kategori

├── manage_links.php        # Link CRUD operations- Setup Google Cloud Console project### 📝 Manajemen Google Forms (Google Sheets)

├── manage_forms.php        # Form CRUD operations

├── logout.php              # Logout handler- Enable Google Drive API & Google Sheets API

└── composer.json           # PHP dependencies

```- Buat OAuth 2.0 credentials- 📋 **Form Collection** - Kelola link Google Forms untuk isian data  - **Delete** - Hapus file dengan konfirmasi- Akun Google dengan akses Google Drive API



---- Setup Google Drive folders



## 🛠️ Tech Stack- Setup Google Sheets database- 🔄 **Real-time Database** - Tersimpan di Google Sheets API



- **Backend**: PHP 7.4+- Konfigurasi lengkap dengan screenshot

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)

- **API Integration**: Google Drive API v3, Google Sheets API v4- ✏️ **Easy Management** - Tambah, edit, hapus form dengan mudah  - **Filter & Sort** - Berdasarkan tanggal, nama, ukuran (newest, oldest, A-Z, Z-A, largest, smallest)

- **Authentication**: OAuth 2.0

- **Dependencies**: ### 4. Konfigurasi Aplikasi

  - `google/apiclient` - Google API Client

  - `monolog/monolog` - Logging- 📊 **Organized View** - Tabel terstruktur dengan pagination

- **UI/UX**: 

  - Font Awesome 6.4.0Copy file konfigurasi:

  - Google Fonts (Poppins)

  - CSS Animations & Transitions- 🎨 **Icon Indicators** - Visual icon untuk setiap form  - **Pagination** - Tampilkan 5-50 file per halaman## 🛠️ Instalasi



---```bash



## 🐛 Troubleshootingcp includes/config.example.php includes/config.php



### Login Error: "Redirect URI Mismatch"```

✅ **Solusi**: Pastikan Authorized Redirect URI di Google Console sama dengan URL callback

```### 🔐 Autentikasi & Keamanan  - **Search by Date** - Filter file berdasarkan tanggal upload

http://localhost/Data-Base-Guru/callback.php

```Edit `includes/config.php` dan isi kredensial Anda:



### Upload Gagal: "Permission Denied"- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google

✅ **Solusi**: Service account harus punya akses **Editor** ke folder Google Drive

```php

### Data Link/Form Tidak Muncul

✅ **Solusi**: Cek akses Google Sheets - Service account harus punya permission **Editor**// Google OAuth 2.0- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive  - **File Info** - Tampilan size, created date, dan icon type### 1. Clone Repository



**Detail troubleshooting**: [docs/SETUP.md](docs/SETUP.md)define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');



---define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');- 🔒 **Protected Routes** - Semua halaman dilindungi autentikasi



## 🤝 Contributingdefine('GOOGLE_REDIRECT_URI', 'http://localhost/Database-Management-/callback.php');



Project ini untuk internal SMKN 62 Jakarta. Untuk kontribusi:- 👤 **User Info Display** - Menampilkan nama dan foto profil Google



1. Fork repository// Google Drive Folder IDs

2. Create feature branch: `git checkout -b feature/NamaFitur`

3. Commit changes: `git commit -m 'Add: Deskripsi fitur'`define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');- 🔄 **Session Regeneration** - Security dengan regenerate session ID

4. Push branch: `git push origin feature/NamaFitur`

5. Submit Pull Requestdefine('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');



---define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');### 🔗 **Manajemen Link Kegiatan (Google Sheets)**```bash



## 📄 Lisensidefine('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');



Project ini dibuat untuk **SMKN 62 Jakarta** - Internal Use Only.### 🎨 User Interface & UX



---// Google Sheets ID



## 👥 Tim Developer & Supportdefine('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');- 📱 **Full Responsive Design** - Optimal di desktop, tablet, dan mobile- 💾 **Cloud Storage** - Data tersimpan di Google Sheets (bukan JSON)git clone https://github.com/rahmat43112/Data-Base-Guru.git



**Created by:** [KTT Indonesia](https://kttindonesia.com)  ```

**Repository:** [github.com/rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)  

**Forked by:** [LTZ24](https://github.com/LTZ24/Database-Management-)- 🎯 **7 Breakpoints Responsive**



### 📞 Support> **💡 Tip:** Cara mendapatkan Client ID, Folder ID, dan Spreadsheet ID ada di [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md)



- 📧 **Email**: info@kttindonesia.com  - 🖥️ 2560px (Ultra Wide)- ➕ **CRUD Operations** - Create, Read, Update, Delete link kegiatancd Data-Base-Guru

- 🐛 **Bug Reports**: [GitHub Issues](https://github.com/rahmat43112/Data-Base-Guru/issues)

- 💡 **Feature Requests**: [GitHub Issues](https://github.com/rahmat43112/Data-Base-Guru/issues) dengan label `enhancement`### 5. Jalankan Web Server



---  - 🖥️ 1920px (Desktop HD)



## 🙏 Credits#### Menggunakan PHP Built-in Server (Development):



- **Google** - Google Drive API, Sheets API, OAuth 2.0  - 💻 1280px (Laptop)- 📅 **Auto Timestamp** - Mencatat created_at dan updated_at otomatis```

- **Font Awesome** - Icons library

- **Google Fonts** - Poppins font family```bash

- **Composer** - PHP dependency management

php -S localhost:8000  - 📱 1024px (Tablet Landscape)

---

```

<div align="center">

  - 📱 768px (Tablet Portrait)- 🔄 **Real-time Sync** - Data langsung tersinkronisasi dengan Sheets

**Made with ❤️ for SMKN 62 Jakarta**

Akses: `http://localhost:8000/login.php`

[![GitHub](https://img.shields.io/badge/GitHub-rahmat43112-black?logo=github)](https://github.com/rahmat43112/Data-Base-Guru)

[![KTT Indonesia](https://img.shields.io/badge/KTT-Indonesia-blue)](https://kttindonesia.com)  - 📱 480px (Mobile)



</div>#### Menggunakan XAMPP:


  - 📱 360px (Small Mobile)- 📊 **Pagination** - Tampilan tabel dengan pagination 5-50 data### 2. Install Dependencies

1. Copy folder ke `C:\xampp\htdocs\`

2. Start Apache di XAMPP Control Panel

3. Akses: `http://localhost/Database-Management-/login.php`

- ✨ **Modern Animations**- 🎯 **Quick Actions** - Tombol Edit, Delete, dan Open Link

---

  - Fade in & slide down effects

## 📖 Cara Penggunaan

  - Hover transitions dengan transform```bash

### 🔐 Login

  - Loading spinners

1. Buka `http://localhost/Database-Management-/login.php`

2. Klik **"Login dengan Google"**  - Progress bars dengan gradient### 📝 **Manajemen Google Forms (Google Sheets)**composer install

3. Pilih akun Google Anda

4. Izinkan akses ke Google Drive  - Logo float animation

5. Anda akan diarahkan ke Dashboard

- 📋 **Form Collection** - Kelola link Google Forms untuk isian data```

### 🏠 Dashboard

- 🎨 **Clean & Professional Design**

Dashboard menampilkan:

- **4 Kategori Database** dengan card berwarna  - Gradient backgrounds- 🔄 **Real-time Database** - Tersimpan di Google Sheets API

- **Daftar Link Kegiatan** dengan pagination

- **Daftar Google Forms** dengan pagination  - Card-based layout

- **User Profile** (nama & foto) di header

  - Icon-based navigation (Font Awesome 6.5.2)- ✏️ **Easy Management** - Tambah, edit, hapus form dengan mudah### 3. Setup Google Drive API

### 📁 Upload File ke Google Drive

  - Color-coded categories

1. Klik salah satu **kategori database** (Kurikulum/Kesiswaan/Sapras/Tata Usaha)

2. Klik **"Choose File"** dan pilih file (max 100MB)  - Shadow effects & borders- 📊 **Organized View** - Tabel terstruktur dengan pagination

3. Klik **"Upload ke Google Drive"**

4. **Progress bar** akan muncul selama upload  - Google Poppins font

5. File akan muncul di tabel setelah selesai

6. File tersimpan di **Google Drive folder** yang sesuai- 🎨 **Icon Indicators** - Visual icon untuk setiap form#### A. Buat Project di Google Cloud Console



### 🔗 Mengelola Link Kegiatan### ⚡ Performance & Optimization



**Tambah Link:**- 🚀 **AJAX & Lazy Loading** - Load data file on-demand

1. Di Dashboard, klik **"Tambah Link"**

2. Isi **Judul Kegiatan** dan **URL Link**- 📦 **Efficient API Calls** - Batch requests untuk Google API

3. Klik **"Simpan Link"**

4. Data tersimpan di **Google Sheets**- 🔄 **Smart Caching** - Mengurangi API calls yang tidak perlu### 🔐 **Autentikasi & Keamanan**1. Buka [Google Cloud Console](https://console.cloud.google.com/)



**Edit/Hapus:**- ⏱️ **Fast Loading** - Optimized untuk loading cepat

- Klik icon **✏️ Edit** untuk mengubah link

- Klik icon **🗑️ Delete** untuk menghapus link- 📊 **Empty State Handling** - User-friendly ketika tidak ada data- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google2. Klik **"Create Project"** atau pilih project yang ada



### 📝 Mengelola Google Forms



Cara yang sama seperti Link Kegiatan:---- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive3. Beri nama project (contoh: "SMKN62 Database")

1. Klik **"Tambah Form"**

2. Isi **Judul Form** dan **URL Google Form**

3. Klik **"Simpan Form"**

4. Edit/Hapus dengan icon di tabel## 🛠️ Teknologi- 🔒 **Protected Routes** - Semua halaman dilindungi autentikasi4. Klik **"Create"**



### 📊 Filter & Pagination



- **Sort**: Newest, Oldest, A-Z, Z-A, Largest, Smallest### Backend- 👤 **User Info Display** - Menampilkan nama dan foto profil Google

- **Date Filter**: Pilih tanggal untuk filter file by upload date

- **Pagination**: Pilih 5-50 item per halaman- **PHP** 7.4+

- Navigate dengan **Previous/Next** atau jump ke halaman tertentu

- **Composer** - Dependency Management- 🔄 **Session Regeneration** - Security dengan regenerate session ID#### B. Enable Google Drive API

---

- **Google API Client** ^2.15

## 📁 Struktur Project

  - Google Drive API v3

```

Database-Management-/  - Google Sheets API v4

├── login.php                  # Halaman login dengan Google OAuth

├── callback.php               # OAuth callback handler  - OAuth 2.0 Authentication### 🎨 **User Interface & UX**1. Di menu sidebar, pilih **"APIs & Services"** > **"Library"**

├── logout.php                 # Logout handler

├── dashboard.php              # Dashboard utama (home)

├── category.php               # Halaman kategori & upload file

├── manage_links.php           # Form tambah/edit link kegiatan### Frontend- 📱 **Full Responsive Design** - Optimal di desktop, tablet, dan mobile2. Cari **"Google Drive API"**

├── manage_forms.php           # Form tambah/edit Google Forms

├── includes/- **HTML5** & **CSS3**

│   ├── config.php            # Konfigurasi & Google API functions

│   ├── header.php            # Header component- **JavaScript** (Vanilla - No jQuery)- 🎯 **7 Breakpoints Responsive:**3. Klik dan tekan **"Enable"**

│   └── footer.php            # Footer component

├── assets/- **Font Awesome** 6.5.2

│   ├── css/

│   │   ├── common.css        # CSS variables & global styles- **Google Fonts** - Poppins  - 🖥️ 2560px (Ultra Wide)

│   │   ├── components.css    # Header & footer styles

│   │   ├── login.css         # Login page styles

│   │   ├── dashboard.css     # Dashboard styles

│   │   └── category.css      # Category page styles### Features  - 🖥️ 1920px (Desktop HD)#### C. Buat OAuth 2.0 Credentials

│   └── images/

│       └── smk62.png         # Logo sekolah- CSS3 Flexbox & Grid

├── docs/

│   ├── SETUP.md              # Panduan instalasi lengkap- CSS Animations & Transitions  - 💻 1280px (Laptop)

│   └── SETUP_GOOGLE_API.md   # Setup Google Cloud & APIs (DETAIL)

├── data/- Media Queries (7 breakpoints)

│   └── database.json         # Backup database (optional)

├── vendor/                    # Composer dependencies (auto-generated)- AJAX for async operations  - 📱 1024px (Tablet Landscape)1. Di menu sidebar, pilih **"APIs & Services"** > **"Credentials"**

├── composer.json              # PHP dependencies

├── .gitignore                # Git ignore rules- Real-time upload progress

└── README.md                 # File ini

```  - 📱 768px (Tablet Portrait)2. Klik **"Create Credentials"** > **"OAuth client ID"**



------



## 🔧 Troubleshooting  - 📱 480px (Mobile)3. Jika diminta, configure consent screen:



### ❌ Error: "Invalid Client ID"## 📋 Prasyarat



**Solusi:**  - 📱 360px (Small Mobile)   - User Type: **External**

- Pastikan `GOOGLE_CLIENT_ID` dan `GOOGLE_CLIENT_SECRET` benar di `config.php`

- Redirect URI di `config.php` harus **sama persis** dengan di Google Console- **PHP** >= 7.4

- Pastikan OAuth consent screen sudah dikonfigurasi

- **Composer** (Dependency Manager)   - App name: **SMKN62 Database Management**

### ❌ Error: "Access Denied"

- **Web Server** (Apache/Nginx/XAMPP/WAMP)

**Solusi:**

- Enable **Google Drive API** & **Google Sheets API** di Google Cloud Console- **Akun Google** dengan akses Google Drive API & Sheets API- ✨ **Modern Animations:**   - User support email: email Anda

- Tambahkan email sebagai **Test User** (jika OAuth consent = External)

- Logout dan login ulang- **Google Cloud Console** project dengan OAuth 2.0



### ❌ Error: "Folder not found" / "Spreadsheet not found"  - Fade in & slide down effects   - Developer contact: email Anda



**Solusi:**---

- Pastikan Folder ID dan Spreadsheet ID benar (tanpa `?usp=sharing`)

- **Share folder/sheets** dengan akun Google yang digunakan login  - Hover transitions dengan transform   - Klik **"Save and Continue"**

- Cek permission: minimal **"View"** access

## 🚀 Instalasi

### ❌ File upload gagal

  - Loading spinners   - Scopes: Skip (klik **"Save and Continue"**)

**Solusi:**

- Cek ukuran file < 100MB### 1. Clone Repository

- Edit `php.ini`:

  ```ini  - Progress bars dengan gradient   - Test users: Tambahkan email Anda untuk testing

  upload_max_filesize = 100M

  post_max_size = 100M```bash

  max_execution_time = 300

  ```git clone https://github.com/rahmat43112/Data-Base-Guru.git  - Logo float animation   - Klik **"Save and Continue"**

- Pastikan folder Google Drive accessible

- Cek koneksi internetcd Data-Base-Guru



### ❌ Data tidak muncul di Google Sheets```



**Solusi:**

- Pastikan sheet name **persis**: `Links` dan `Forms` (case-sensitive)

- Header row 1 harus ada: `Title | URL | Created At | Updated At`### 2. Install Dependencies- 🎨 **Clean & Professional Design:**4. Kembali ke **"Credentials"** > **"Create Credentials"** > **"OAuth client ID"**

- Cek `GOOGLE_SHEETS_ID` di `config.php`

- Pastikan **Google Sheets API** sudah enabled

- Logout dan login ulang untuk refresh token

```bash  - Gradient backgrounds5. Application type: **Web application**

### ❌ Session timeout terlalu cepat

composer install

**Solusi:**

- Edit `config.php`, ubah timeout (default 1800 detik = 30 menit):```  - Card-based layout6. Name: **SMKN62 Database**

  ```php

  ini_set('session.gc_maxlifetime', 3600); // 1 jam

  ```

Ini akan menginstall:  - Icon-based navigation (Font Awesome 6.5.2)7. Authorized redirect URIs:

**📖 Untuk troubleshooting lebih lengkap, lihat:** [docs/SETUP.md](docs/SETUP.md)

- `google/apiclient` ^2.15 (Google API Client)

---

- Dependencies lainnya  - Color-coded categories   ```

## 🔒 Keamanan



### Best Practices:

- ✅ **Jangan commit** `includes/config.php` dengan credentials ke Git### 3. Setup Google API  - Shadow effects & borders   http://localhost/Data-Base-Guru/callback.php

- ✅ Gunakan `.gitignore` untuk file sensitif (sudah dikonfigurasi)

- ✅ **Production**: Gunakan HTTPS (SSL Certificate)

- ✅ **Production**: Set OAuth consent = Internal (jika organisasi)

- ✅ Session auto-logout setelah 30 menit inactiveIkuti panduan lengkap di:  - Google Poppins font   ```

- ✅ Protected routes: Semua halaman cek `isLoggedIn()`

- 📖 [docs/SETUP.md](docs/SETUP.md) - Panduan lengkap instalasi

### File Permissions (Linux/Mac):

```bash- 📖 [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md) - Setup Google Cloud Console   (sesuaikan dengan path project Anda)

chmod 755 Database-Management-/

chmod 644 Database-Management-/*.php

chmod 644 Database-Management-/includes/*.php

```**Ringkas:**### ⚡ **Performance & Optimization**8. Klik **"Create"**



---



## 🛠️ Teknologi#### A. Google Cloud Console- 🚀 **AJAX & Lazy Loading** - Load data file on-demand9. Copy **Client ID** dan **Client Secret** yang muncul



**Backend:**1. Buat project di [Google Cloud Console](https://console.cloud.google.com/)

- PHP 7.4+

- Composer2. Enable **Google Drive API** dan **Google Sheets API**- 📦 **Efficient API Calls** - Batch requests untuk Google API

- Google API Client (`google/apiclient` ^2.15)

  - Google Drive API v33. Buat **OAuth 2.0 Credentials** (Web Application)

  - Google Sheets API v4

  - OAuth 2.0 Authentication4. Tambahkan Redirect URI: `http://localhost/Data-Base-Guru/auth/callback.php`- 🔄 **Smart Caching** - Mengurangi API calls yang tidak perlu#### D. Buat Folder di Google Drive



**Frontend:**5. Copy **Client ID** dan **Client Secret**

- HTML5 & CSS3

- Vanilla JavaScript (No jQuery)- ⏱️ **Fast Loading** - Optimized untuk loading cepat

- Font Awesome 6.5.2

- Google Fonts (Poppins)#### B. Google Drive Folders



**Features:**1. Buka [Google Drive](https://drive.google.com/)- 📊 **Empty State Handling** - User-friendly ketika tidak ada data1. Buka [Google Drive](https://drive.google.com/)

- CSS3 Flexbox & Grid

- CSS Animations & Transitions2. Buat 4 folder:

- Media Queries (7 responsive breakpoints)

- AJAX for async operations   - Kurikulum2. Buat 4 folder dengan nama:

- Real-time upload progress

   - Kesiswaan

---

   - Sapras & Humas### 🔧 **Developer Features**   - **Kurikulum**

## 🤝 Kontribusi

   - Tata Usaha

Kontribusi sangat diterima! Untuk berkontribusi:

3. Copy **Folder ID** dari URL setiap folder- 📚 **Google API Integration:**   - **Kesiswaan**

1. **Fork** repository ini

2. **Buat branch** baru:

   ```bash

   git checkout -b feature/AmazingFeature#### C. Google Sheets Database  - Google Drive API v3   - **Sapras & Humas**

   ```

3. **Commit** perubahan:1. Buat **Google Spreadsheet** baru

   ```bash

   git commit -m 'Add: Amazing new feature'2. Buat 2 sheets dengan nama:  - Google Sheets API v4   - **Tata Usaha**

   ```

4. **Push** ke branch:   - **Links** (untuk link kegiatan)

   ```bash

   git push origin feature/AmazingFeature   - **Forms** (untuk google forms)  - OAuth 2.0 Authentication

   ```

5. **Buat Pull Request** di GitHub3. Di setiap sheet, tambahkan header di row 1:



---   ```  3. Untuk setiap folder:



## 📝 Changelog   Title | URL | Created At | Updated At



### Version 2.0.0 (October 2025)   ```- 🛠️ **Built With:**   - Klik kanan folder > **"Share"**

- ✨ Migrasi dari JSON ke Google Sheets API

- ✨ Upload progress bar dengan animasi4. Copy **Spreadsheet ID** dari URL

- ✨ File management (rename, delete)

- ✨ Filter & sort files  - PHP 7.4+   - Ubah akses menjadi **"Anyone with the link"** (optional, sesuai kebutuhan)

- ✨ Search by date

- ✨ Full responsive design (7 breakpoints)### 4. Konfigurasi

- ✨ Session management & auto-logout

- ✨ AJAX lazy loading untuk files  - Composer (Dependency Management)   - Copy **Folder ID** dari URL

- 🐛 Fix OAuth callback errors

- 🎨 Redesign UI modernCopy dan edit file konfigurasi:



### Version 1.0.0  - Google API Client Library (google/apiclient ^2.15)     - URL format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

- 🎉 Initial release

- ✅ Google Drive upload```bash

- ✅ Basic link management

- ✅ Google OAuth logincp includes/config.example.php includes/config.php  - Font Awesome Icons 6.5.2     - Copy bagian `FOLDER_ID_HERE`



---```



## 📄 Lisensi  - Modern CSS3 (Flexbox, Grid, Animations, Media Queries)



Project ini dibuat untuk **SMKN 62 Jakarta** - Internal Use.Edit `includes/config.php`:



---  - Vanilla JavaScript (No jQuery)### 4. Konfigurasi Aplikasi



## 👥 Developer```php



- **SMKN 62 Jakarta** - IT Department// Google OAuth 2.0

- **Created by:** [KTT Indonesia](https://kttindonesia.com)

- **Forked by:** [LTZ24](https://github.com/LTZ24)define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');



**Original Repository:** [rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');- 📁 **Clean Code Structure:**Edit file `config.php` dan isi dengan data Anda:



**Fork Repository:** [LTZ24/Database-Management-](https://github.com/LTZ24/Database-Management-.git)define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');



---  ```



## 📞 Support & Kontak// Google Drive Folder IDs



Jika ada pertanyaan, bug, atau request fitur:define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');  Data-Base-Guru/```php

- 📧 **Email:** info@kttindonesia.com

- 🐛 **Bug Reports:** [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues)define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');

- 💡 **Feature Requests:** [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues) (label: `enhancement`)

- 📖 **Documentation:** Lihat folder [docs/](docs/)define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');  ├── auth/                   # Authentication files// Google API Credentials



---define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');



## 🙏 Credits  │   ├── login.php          # Google OAuth logindefine('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');



- **Google** - Google Drive API, Sheets API, OAuth 2.0// Google Sheets ID

- **Font Awesome** - Icons library

- **Google Fonts** - Poppins font familydefine('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');  │   ├── callback.php       # OAuth callback handlerdefine('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

- **Composer** - PHP dependency management

```

---

  │   └── logout.php         # Logout handlerdefine('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');

<div align="center">

### 5. Web Server Setup

**Made with ❤️ for SMKN 62 Jakarta**

  ├── pages/                  # Application pages

⭐ **Star this repo** if you find it helpful!

#### Menggunakan PHP Built-in Server

[🏠 Homepage](https://github.com/LTZ24/Database-Management-) • [📖 Documentation](docs/SETUP.md) • [🔧 Setup Google API](docs/SETUP_GOOGLE_API.md) • [🐛 Report Bug](https://github.com/LTZ24/Database-Management-/issues)

  │   ├── dashboard.php      # Main dashboard// Folder IDs dari Google Drive

</div>

```bash

php -S localhost:8000  │   ├── category.php       # Category & file managementdefine('FOLDER_KURIKULUM', 'FOLDER_ID_KURIKULUM');

```

  │   ├── manage_links.php   # Link management formdefine('FOLDER_KESISWAAN', 'FOLDER_ID_KESISWAAN');

Akses: `http://localhost:8000/auth/login.php`

  │   └── manage_forms.php   # Form management formdefine('FOLDER_SAPRAS_HUMAS', 'FOLDER_ID_SAPRAS_HUMAS');

#### Menggunakan XAMPP

  ├── includes/              # Core filesdefine('FOLDER_TATA_USAHA', 'FOLDER_ID_TATA_USAHA');

1. Copy folder ke `C:\xampp\htdocs\`

2. Start Apache di XAMPP Control Panel  │   ├── config.php         # Configuration & functions```

3. Akses: `http://localhost/Data-Base-Guru/auth/login.php`

  │   ├── header.php         # Header component

---

  │   └── footer.php         # Footer component### 5. Buat Folder Data

## 📖 Cara Penggunaan

  ├── assets/                # Static assets

### 🔐 Login

  │   ├── css/              # Stylesheets```bash

1. Buka `http://localhost/Data-Base-Guru/auth/login.php`

2. Klik **"Login dengan Google"**  │   │   ├── common.css    # Common styles & variablesmkdir data

3. Pilih akun Google

4. Izinkan akses aplikasi  │   │   ├── components.css # Header & footerchmod 777 data

5. Redirect otomatis ke Dashboard

  │   │   ├── login.css     # Login page styles```

### 🏠 Dashboard

  │   │   ├── dashboard.css # Dashboard styles

Dashboard menampilkan:

- **4 Kategori Database** - Card dengan warna & icon  │   │   └── category.css  # Category page stylesAtau di Windows (PowerShell):

- **Link Kegiatan** - Tabel dengan pagination

- **Google Forms** - Tabel dengan pagination  │   └── images/           # Images & icons```powershell

- **User Profile** - Nama dan foto di header

- **Logout Button** - Keluar dari aplikasi  │       └── smk62.png     # School logoNew-Item -ItemType Directory -Path "data"



### 📁 Upload File  ├── docs/                  # Documentation```



1. Klik salah satu **kategori database**  │   ├── SETUP.md          # Setup guide

2. Pilih file dengan **"Choose File"**

3. Klik **"Upload ke Google Drive"**  │   └── SETUP_GOOGLE_API.md # Google API setup### 6. Setup Web Server

4. **Progress bar** akan muncul menunjukkan upload progress

5. Setelah selesai, file muncul di tabel  ├── vendor/                # Composer dependencies

6. File tersimpan di **Google Drive folder** yang sesuai

  ├── composer.json          # PHP dependencies#### Menggunakan PHP Built-in Server (untuk development):

### 🔗 Kelola Link Kegiatan

  ├── .gitignore            # Git ignore rules

**Tambah Link:**

1. Di Dashboard, klik **"Tambah Link"**  ├── .htaccess             # Apache configuration```bash

2. Isi **Judul Kegiatan** dan **URL Link**

3. Klik **"Simpan Link"**  └── index.php             # Entry pointphp -S localhost:8000

4. Data tersimpan di **Google Sheets**

  ``````

**Edit Link:**

1. Klik tombol **Edit** (icon pensil)

2. Ubah judul/URL

3. Klik **"Update Link"**## 📋 PrasyaratAkses aplikasi di: `http://localhost:8000/login.php`



**Hapus Link:**

1. Klik tombol **Delete** (icon trash)

2. Konfirmasi hapus- **PHP** >= 7.4#### Menggunakan XAMPP/WAMP:

3. Data dihapus dari Google Sheets

- **Composer** (Dependency Manager)

### 📝 Kelola Google Forms

- **Web Server** (Apache/Nginx/XAMPP/WAMP)1. Copy folder project ke `htdocs` (XAMPP) atau `www` (WAMP)

Sama seperti Link Kegiatan:

1. Klik **"Tambah Form"**- **Akun Google** dengan akses Google Drive API & Sheets API2. Akses aplikasi di: `http://localhost/Data-Base-Guru/login.php`

2. Isi **Judul Form** dan **URL Google Form**

3. Klik **"Simpan Form"**- **Google Cloud Console** project dengan OAuth 2.0

4. Edit/Hapus dengan tombol di tabel

## 📖 Cara Penggunaan

### 📊 Fitur Filter & Pagination

## 🛠️ Instalasi

**Filter Files:**

- **Sort:** Newest, Oldest, A-Z, Z-A, Largest, Smallest### Login

- **Date Filter:** Pilih tanggal untuk filter file by date

- **Clear Filter:** Klik X untuk reset filter### 1. Clone Repository



**Pagination:**1. Buka `http://localhost/Data-Base-Guru/login.php`

- Pilih jumlah data: 5, 10, 15, 20, 25, 50 per halaman

- Navigate dengan tombol Previous/Next```bash2. Klik **"Login dengan Google"**

- Jump ke halaman tertentu

git clone https://github.com/rahmat43112/Data-Base-Guru.git3. Pilih akun Google Anda

---

cd Data-Base-Guru4. Izinkan akses ke Google Drive

## 📁 Struktur Project

```5. Anda akan diarahkan ke Dashboard

```

Data-Base-Guru/

├── auth/                   # Authentication files

│   ├── login.php          # Google OAuth login### 2. Install Dependencies### Dashboard

│   ├── callback.php       # OAuth callback handler

│   └── logout.php         # Logout handler

├── pages/                  # Application pages

│   ├── dashboard.php      # Main dashboard```bashDashboard menampilkan:

│   ├── category.php       # Category & file management

│   ├── manage_links.php   # Link management formcomposer install- 4 Kategori database (Kurikulum, Kesiswaan, Sapras & Humas, Tata Usaha)

│   ├── manage_forms.php   # Form management form

│   ├── api_get_files.php  # API: Get files from Drive```- Daftar link kegiatan

│   ├── api_rename_file.php # API: Rename file

│   └── api_delete_file.php # API: Delete file- Daftar Google Forms

├── includes/              # Core files

│   ├── config.php         # Configuration & functionsIni akan menginstall:

│   ├── header.php         # Header component

│   └── footer.php         # Footer component- `google/apiclient` ^2.15 (Google API Client)### Upload File ke Google Drive

├── assets/                # Static assets

│   ├── css/              # Stylesheets- Dependencies lainnya

│   │   ├── common.css    # Common styles & variables

│   │   ├── components.css # Header & footer1. Klik salah satu kategori database

│   │   ├── login.css     # Login page styles

│   │   ├── dashboard.css # Dashboard styles### 3. Setup Google API2. Klik **"Choose File"** dan pilih file

│   │   └── category.css  # Category page styles

│   └── images/           # Images & icons3. Klik **"Upload ke Google Drive"**

│       └── smk62.png     # School logo

├── docs/                  # DocumentationIkuti panduan lengkap di:4. File akan tersimpan di folder Google Drive yang sesuai

│   ├── SETUP.md          # Setup guide

│   └── SETUP_GOOGLE_API.md # Google API setup- 📖 [docs/SETUP.md](docs/SETUP.md) - Panduan lengkap instalasi

├── vendor/                # Composer dependencies

├── composer.json          # PHP dependencies- 📖 [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md) - Setup Google Cloud Console### Mengelola Link Kegiatan

├── .gitignore            # Git ignore rules

├── .htaccess             # Apache configuration

├── index.php             # Entry point

└── README.md             # This file**Ringkas:**1. Di Dashboard, klik **"Tambah Link"** di section Link Kegiatan

```

2. Isi **Judul Kegiatan** dan **URL Link**

---

#### A. Google Cloud Console3. Klik **"Simpan Link"**

## 🔧 Troubleshooting

1. Buat project di [Google Cloud Console](https://console.cloud.google.com/)4. Link akan muncul di Dashboard

### ❌ Error: "Invalid Client ID"

**Solusi:**2. Enable **Google Drive API** dan **Google Sheets API**

- Pastikan Client ID dan Secret benar di `config.php`

- Redirect URI harus sama persis (cek slash di akhir)3. Buat **OAuth 2.0 Credentials** (Web Application)Untuk edit/hapus:

- Pastikan OAuth consent screen sudah di-configure

4. Tambahkan Redirect URI: `http://localhost/Data-Base-Guru/auth/callback.php`- Klik icon **Edit** untuk mengubah

### ❌ Error: "Access Denied"

**Solusi:**5. Copy **Client ID** dan **Client Secret**- Klik icon **Trash** untuk menghapus

- Enable Google Drive API & Sheets API di Google Cloud Console

- Tambahkan email sebagai Test User (saat OAuth consent = External)

- Coba logout dan login ulang

#### B. Google Drive Folders### Mengelola Google Forms

### ❌ Error: "Folder not found" / "Spreadsheet not found"

**Solusi:**1. Buka [Google Drive](https://drive.google.com/)

- Pastikan Folder ID/Spreadsheet ID benar (tanpa `?usp=sharing`)

- Share folder/sheets dengan akun yang login2. Buat 4 folder:1. Di Dashboard, klik **"Tambah Form"** di section Google Forms

- Cek permission folder/sheets (minimal "View" access)

   - Kurikulum2. Isi **Judul Form** dan **URL Google Form**

### ❌ File upload gagal

**Solusi:**   - Kesiswaan3. Klik **"Simpan Form"**

- Cek ukuran file < 100MB

- Cek `php.ini`:    - Sapras & Humas4. Form akan muncul di Dashboard

  ```ini

  upload_max_filesize = 100M   - Tata Usaha

  post_max_size = 100M

  max_execution_time = 3003. Copy **Folder ID** dari URL setiap folder## 🏗️ Struktur Folder

  ```

- Pastikan folder Google Drive accessible   - URL format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

- Cek internet connection

```

### ❌ Data tidak muncul di Google Sheets

**Solusi:**#### C. Google Sheets DatabaseData-Base-Guru/

- Pastikan sheet name persis "Links" dan "Forms" (case-sensitive)

- Pastikan header row 1 ada: `Title | URL | Created At | Updated At`1. Buat **Google Spreadsheet** baru├── config.php              # Konfigurasi aplikasi & Google API

- Cek Spreadsheet ID di `config.php`

- Pastikan Google Sheets API enabled2. Buat 2 sheets dengan nama:├── login.php              # Halaman login dengan Google

- Logout dan login ulang untuk refresh token scope

   - **Links** (untuk link kegiatan)├── callback.php           # OAuth callback handler

### ❌ Session timeout terlalu cepat

**Solusi:**   - **Forms** (untuk google forms)├── logout.php             # Logout handler

- Edit `config.php`, ubah timeout (default 1800 detik = 30 menit):

  ```php3. Di setiap sheet, tambahkan header di row 1:├── dashboard.php          # Dashboard utama

  ini_set('session.gc_maxlifetime', 3600); // 1 jam

  ```   ```├── category.php           # Halaman kategori & upload file



---   Title | URL | Created At | Updated At├── manage_links.php       # Form tambah/edit link kegiatan



## 🔒 Keamanan   ```├── manage_forms.php       # Form tambah/edit Google Forms



### Best Practices4. Copy **Spreadsheet ID** dari URL:├── composer.json          # Dependencies PHP

- ✅ **Jangan commit** `includes/config.php` dengan credentials ke Git

- ✅ Gunakan `.gitignore` untuk file sensitif   - URL format: `https://docs.google.com/spreadsheets/d/SPREADSHEET_ID_HERE/edit`├── index.html             # Landing page (optional)

- ✅ **Production:** Gunakan HTTPS (SSL Certificate)

- ✅ **Production:** Set OAuth consent = Internal (jika organisasi)├── smk62.png             # Logo sekolah

- ✅ **Session:** Auto-logout setelah inactive

- ✅ **Protected routes:** Semua page cek `isLoggedIn()`### 4. Konfigurasi├── data/                  # Folder untuk database JSON



### File Permissions (Linux/Mac)│   └── database.json     # Database file (auto-created)

```bash

chmod 755 Data-Base-Guru/Edit file `includes/config.php`:└── vendor/               # Composer dependencies (auto-created)

chmod 644 Data-Base-Guru/*.php

chmod 644 Data-Base-Guru/includes/*.php```

```

```php

---

// Google OAuth 2.0## 🔧 Troubleshooting

## 📊 Database Structure

define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

### Google Sheets: "Links" Sheet

```define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');### Error: "Invalid Client ID"

| Title         | URL                      | Created At          | Updated At          |

|---------------|--------------------------|---------------------|---------------------|define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');- Pastikan Client ID dan Client Secret sudah benar di `config.php`

| Lomba 17 Agst | https://drive.google...  | 2025-10-21 10:30:00 | 2025-10-21 10:30:00 |

```- Pastikan Redirect URI di Google Console sama dengan di `config.php`



### Google Sheets: "Forms" Sheet// Google Drive Folder IDs

```

| Title              | URL                      | Created At          | Updated At          |define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');### Error: "Access Denied"

|--------------------|--------------------------|---------------------|---------------------|

| Form Pendaftaran   | https://forms.google...  | 2025-10-21 11:00:00 | 2025-10-21 11:00:00 |define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');- Pastikan Google Drive API sudah di-enable

```

define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');- Pastikan akun Google yang login sudah ditambahkan sebagai Test User

---

define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');

## 🎨 Customization

### Error: "Folder not found"

### Ubah Warna Tema

Edit `assets/css/common.css`:// Google Sheets ID- Pastikan Folder ID sudah benar di `config.php`

```css

:root {define('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');- Pastikan folder sudah di-share dengan akun yang login

    --primary-green: #28a745;     /* Warna utama */

    --primary-green-hover: #218838; /* Hover color */```

    --primary-green-light: #d4edda; /* Background light */

}### File upload gagal

```

### 5. Web Server Setup- Pastikan folder Google Drive sudah di-set permission yang benar

### Ubah Kategori

Edit `includes/config.php` function `getDatabaseCategories()`:- Cek ukuran file tidak melebihi limit PHP (`upload_max_filesize`)

```php

return [#### Menggunakan PHP Built-in Server:

    'kurikulum' => [

        'name' => 'Nama Custom',### Database tidak tersimpan

        'icon' => 'fa-icon-name',

        'color' => '#hexcolor',```bash- Pastikan folder `data/` sudah dibuat

        'folder_id' => FOLDER_KURIKULUM

    ],php -S localhost:8000- Pastikan folder `data/` memiliki permission write (777 di Linux/Mac)

    // ...

];```

```

## 🔒 Keamanan

### Ubah Max File Size

Edit `pages/category.php`:Akses: `http://localhost:8000/auth/login.php`

```javascript

const maxSize = 100 * 1024 * 1024; // Ubah 100 jadi nilai lain (dalam MB)- Jangan commit file `config.php` dengan credentials ke repository

```

#### Menggunakan XAMPP:- Gunakan `.gitignore` untuk mengabaikan file sensitif

Dan edit `php.ini`:

```ini- Untuk production, gunakan HTTPS

upload_max_filesize = 100M  ; Ubah sesuai kebutuhan

post_max_size = 100M        ; Harus >= upload_max_filesize1. Copy folder ke `C:\xampp\htdocs\`- Set permission folder `data/` dengan benar (tidak terlalu permissive)

```

2. Start Apache di XAMPP Control Panel

---

3. Akses: `http://localhost/Data-Base-Guru/auth/login.php`## 📝 Data Storage

## 🤝 Kontribusi



Kontribusi sangat diterima! Untuk berkontribusi:

## 📖 Cara PenggunaanAplikasi menggunakan file JSON (`data/database.json`) untuk menyimpan:

1. **Fork** repository ini

2. **Buat branch** baru:- Link kegiatan

   ```bash

   git checkout -b feature/AmazingFeature### 🔐 Login- Link Google Forms

   ```

3. **Commit** perubahan:

   ```bash

   git commit -m 'Add some AmazingFeature'1. Buka `http://localhost/Data-Base-Guru/auth/login.php`File-file diupload langsung ke Google Drive, tidak tersimpan di server.

   ```

4. **Push** ke branch:2. Klik **"Login dengan Google"**

   ```bash

   git push origin feature/AmazingFeature3. Pilih akun Google## 🤝 Kontribusi

   ```

5. **Buat Pull Request** di GitHub4. Izinkan akses aplikasi



---5. Redirect otomatis ke DashboardUntuk berkontribusi:



## 📝 Changelog1. Fork repository



### Version 2.0.0 (October 2025)### 🏠 Dashboard2. Buat branch baru (`git checkout -b feature/AmazingFeature`)

- ✨ Migrasi dari JSON ke Google Sheets API

- ✨ Tambah upload progress bar dengan animasi3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)

- ✨ Tambah file management (rename, delete)

- ✨ Tambah filter & sort filesDashboard menampilkan:4. Push ke branch (`git push origin feature/AmazingFeature`)

- ✨ Tambah search by date

- ✨ Full responsive design (7 breakpoints)- **4 Kategori Database** - Card dengan warna & icon5. Buat Pull Request

- ✨ Reorganize folder structure

- ✨ Session management & auto-logout- **Link Kegiatan** - Tabel dengan pagination

- ✨ AJAX lazy loading untuk files

- 🐛 Fix OAuth callback errors- **Google Forms** - Tabel dengan pagination## 📄 Lisensi

- 🐛 Fix folder ID issues

- 🎨 Redesign UI dengan modern components- **User Profile** - Nama dan foto di header



### Version 1.0.0- **Logout Button** - Keluar dari aplikasiProject ini dibuat untuk SMKN 62 Jakarta.

- 🎉 Initial release

- ✅ Google Drive upload

- ✅ Basic link management (JSON)

- ✅ Google OAuth login### 📁 Upload File## 👥 Developer



---



## 📄 Lisensi1. Klik salah satu **kategori database**- **SMKN 62 Jakarta**



Project ini dibuat untuk **SMKN 62 Jakarta** - Internal Use.2. Pilih file dengan **"Choose File"**- Repository: [https://github.com/rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)



---3. Klik **"Upload ke Google Drive"**



## 👥 Tim Developer4. **Progress bar** akan muncul menunjukkan upload progress## 📞 Support



- **SMKN 62 Jakarta** - IT Department5. Setelah selesai, file muncul di tabel

- **Created by:** [KTT Indonesia](https://kttindonesia.com)

- **Repository:** [github.com/rahmat43112/Data-Base-Guru](https://github.com/rahmat43112/Data-Base-Guru)6. File tersimpan di **Google Drive folder** yang sesuaiJika ada pertanyaan atau masalah, silakan buat issue di GitHub repository.



---



## 📞 Support & Kontak### 🔗 Kelola Link Kegiatan---



Jika ada pertanyaan, bug, atau request fitur:

- 📧 **Email:** info@kttindonesia.com

- 🐛 **Bug Reports:** [GitHub Issues](https://github.com/rahmat43112/Data-Base-Guru/issues)**Tambah Link:****Made with ❤️ for SMKN 62 Jakarta**

- 💡 **Feature Requests:** [GitHub Issues](https://github.com/rahmat43112/Data-Base-Guru/issues) dengan label `enhancement`

- 📖 **Documentation:** Lihat folder [docs/](docs/)1. Di Dashboard, klik **"Tambah Link"**

2. Isi **Judul Kegiatan** dan **URL Link**

---3. Klik **"Simpan Link"**

4. Data tersimpan di **Google Sheets**

## 🙏 Credits

**Edit Link:**

- **Google** - Google Drive API, Sheets API, OAuth 2.01. Klik tombol **Edit** (icon pensil)

- **Font Awesome** - Icons library2. Ubah judul/URL

- **Google Fonts** - Poppins font family3. Klik **"Update Link"**

- **Composer** - PHP dependency management

**Hapus Link:**

---1. Klik tombol **Delete** (icon trash)

2. Konfirmasi hapus

<div align="center">3. Data dihapus dari Google Sheets



**Made with ❤️ for SMKN 62 Jakarta**### 📝 Kelola Google Forms



⭐ **Star this repo** if you find it helpful!Sama seperti Link Kegiatan:

1. Klik **"Tambah Form"**

[🏠 Homepage](https://github.com/rahmat43112/Data-Base-Guru) • [📖 Documentation](docs/SETUP.md) • [🐛 Report Bug](https://github.com/rahmat43112/Data-Base-Guru/issues) • [💡 Request Feature](https://github.com/rahmat43112/Data-Base-Guru/issues)2. Isi **Judul Form** dan **URL Google Form**

3. Klik **"Simpan Form"**

</div>4. Edit/Hapus dengan tombol di tabel


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
