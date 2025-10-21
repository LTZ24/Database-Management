# 📊 Database Management System SMKN 62 Jakarta# 📊 Database Management System SMKN 62 Jakarta# Database Management System SMKN 62 Jakarta



Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.



[![PHP Version](https://img.shields.io/badge/PHP-%3E%3D7.4-blue)](https://www.php.net/)Aplikasi web modern untuk mengelola database sekolah berbasis **Google Drive API** dan **Google Sheets API** dengan interface responsive dan fitur lengkap untuk manajemen dokumen, link kegiatan, dan formulir.Aplikasi web untuk mengelola database sekolah berbasis Google Drive dengan fitur upload file, manajemen link kegiatan, dan Google Forms.

[![Google Drive API](https://img.shields.io/badge/Google%20Drive%20API-v3-green)](https://developers.google.com/drive)

[![Google Sheets API](https://img.shields.io/badge/Google%20Sheets%20API-v4-green)](https://developers.google.com/sheets)

[![License](https://img.shields.io/badge/License-Internal%20Use-red)](LICENSE)

## ✨ Fitur Utama## 🚀 Fitur Utama

---



## ✨ Fitur Utama

### 🗂️ **Manajemen File dengan Google Drive**- ✅ **Pengelompokan Database** - 4 Kategori:

### 🗂️ Manajemen File dengan Google Drive

- ✅ **4 Kategori Database Terorganisir**- ✅ **4 Kategori Database Terorganisir:**  - 📚 Kurikulum

  - 📚 **Kurikulum** - Dokumen pembelajaran, RPP, silabus

  - 👥 **Kesiswaan** - Data siswa, absensi, prestasi  - 📚 **Kurikulum** - Dokumen pembelajaran, RPP, silabus  - 👥 Kesiswaan

  - 🏢 **Sapras & Humas** - Sarana prasarana dan hubungan masyarakat

  - 📋 **Tata Usaha** - Administrasi dan surat menyurat  - 👥 **Kesiswaan** - Data siswa, absensi, prestasi  - 🏢 Sapras & Humas



- ☁️ **Upload File Langsung ke Google Drive**  - 🏢 **Sapras & Humas** - Sarana prasarana dan hubungan masyarakat  - 📋 Tata Usaha

  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)

  - Real-time upload progress bar dengan animasi  - 📋 **Tata Usaha** - Administrasi dan surat menyurat

  - Maximum file size: 100MB

  - Auto-detect file type dengan icon- ☁️ **Upload File ke Google Drive** - Upload file langsung ke folder Google Drive



- 📁 **Manajemen File Lengkap**- ☁️ **Upload File Langsung ke Google Drive**- 🔗 **Manajemen Link Kegiatan** - Kelola link dokumentasi kegiatan sekolah

  - **View** - Lihat file langsung di Google Drive

  - **Rename** - Edit nama file dengan modal interface  - Dukungan semua tipe file (PDF, Word, Excel, Image, Video, dll)- 📝 **Manajemen Google Forms** - Kumpulan link Google Form untuk isian data

  - **Delete** - Hapus file dengan konfirmasi

  - **Filter & Sort** - Newest, Oldest, A-Z, Z-A, Largest, Smallest  - Real-time upload progress bar dengan animasi- 🔐 **Login dengan Google** - Autentikasi menggunakan akun Google

  - **Pagination** - Tampilkan 5-50 file per halaman

  - **Search by Date** - Filter file berdasarkan tanggal upload  - Maximum file size: 100MB

  - **File Info** - Size, created date, dan icon type

  - Auto-detect file type dengan icon## 📋 Prasyarat

### 🔗 Manajemen Link Kegiatan (Google Sheets)

- 💾 **Cloud Storage** - Data tersimpan di Google Sheets (bukan JSON)

- ➕ **CRUD Operations** - Create, Read, Update, Delete link kegiatan

- 📅 **Auto Timestamp** - Mencatat created_at dan updated_at otomatis- 📁 **Manajemen File Lengkap:**- PHP >= 7.4

- 🔄 **Real-time Sync** - Data langsung tersinkronisasi dengan Sheets

- 📊 **Pagination** - Tampilan tabel dengan pagination 5-50 data  - **View** - Lihat file langsung di Google Drive- Composer

- 🎯 **Quick Actions** - Tombol Edit, Delete, dan Open Link

  - **Rename** - Edit nama file dengan modal interface- Web Server (Apache/Nginx/XAMPP/WAMP)

### 📝 Manajemen Google Forms (Google Sheets)

- 📋 **Form Collection** - Kelola link Google Forms untuk isian data  - **Delete** - Hapus file dengan konfirmasi- Akun Google dengan akses Google Drive API

- 🔄 **Real-time Database** - Tersimpan di Google Sheets API

- ✏️ **Easy Management** - Tambah, edit, hapus form dengan mudah  - **Filter & Sort** - Berdasarkan tanggal, nama, ukuran (newest, oldest, A-Z, Z-A, largest, smallest)

- 📊 **Organized View** - Tabel terstruktur dengan pagination

- 🎨 **Icon Indicators** - Visual icon untuk setiap form  - **Pagination** - Tampilkan 5-50 file per halaman## 🛠️ Instalasi



### 🔐 Autentikasi & Keamanan  - **Search by Date** - Filter file berdasarkan tanggal upload

- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google

- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive  - **File Info** - Tampilan size, created date, dan icon type### 1. Clone Repository

- 🔒 **Protected Routes** - Semua halaman dilindungi autentikasi

- 👤 **User Info Display** - Menampilkan nama dan foto profil Google

- 🔄 **Session Regeneration** - Security dengan regenerate session ID

### 🔗 **Manajemen Link Kegiatan (Google Sheets)**```bash

### 🎨 User Interface & UX

- 📱 **Full Responsive Design** - Optimal di desktop, tablet, dan mobile- 💾 **Cloud Storage** - Data tersimpan di Google Sheets (bukan JSON)git clone https://github.com/rahmat43112/Data-Base-Guru.git

- 🎯 **7 Breakpoints Responsive**

  - 🖥️ 2560px (Ultra Wide)- ➕ **CRUD Operations** - Create, Read, Update, Delete link kegiatancd Data-Base-Guru

  - 🖥️ 1920px (Desktop HD)

  - 💻 1280px (Laptop)- 📅 **Auto Timestamp** - Mencatat created_at dan updated_at otomatis```

  - 📱 1024px (Tablet Landscape)

  - 📱 768px (Tablet Portrait)- 🔄 **Real-time Sync** - Data langsung tersinkronisasi dengan Sheets

  - 📱 480px (Mobile)

  - 📱 360px (Small Mobile)- 📊 **Pagination** - Tampilan tabel dengan pagination 5-50 data### 2. Install Dependencies



- ✨ **Modern Animations**- 🎯 **Quick Actions** - Tombol Edit, Delete, dan Open Link

  - Fade in & slide down effects

  - Hover transitions dengan transform```bash

  - Loading spinners

  - Progress bars dengan gradient### 📝 **Manajemen Google Forms (Google Sheets)**composer install

  - Logo float animation

- 📋 **Form Collection** - Kelola link Google Forms untuk isian data```

- 🎨 **Clean & Professional Design**

  - Gradient backgrounds- 🔄 **Real-time Database** - Tersimpan di Google Sheets API

  - Card-based layout

  - Icon-based navigation (Font Awesome 6.5.2)- ✏️ **Easy Management** - Tambah, edit, hapus form dengan mudah### 3. Setup Google Drive API

  - Color-coded categories

  - Shadow effects & borders- 📊 **Organized View** - Tabel terstruktur dengan pagination

  - Google Poppins font

- 🎨 **Icon Indicators** - Visual icon untuk setiap form#### A. Buat Project di Google Cloud Console

### ⚡ Performance & Optimization

- 🚀 **AJAX & Lazy Loading** - Load data file on-demand

- 📦 **Efficient API Calls** - Batch requests untuk Google API

- 🔄 **Smart Caching** - Mengurangi API calls yang tidak perlu### 🔐 **Autentikasi & Keamanan**1. Buka [Google Cloud Console](https://console.cloud.google.com/)

- ⏱️ **Fast Loading** - Optimized untuk loading cepat

- 📊 **Empty State Handling** - User-friendly ketika tidak ada data- 🔑 **OAuth 2.0 Google Login** - Login aman menggunakan akun Google2. Klik **"Create Project"** atau pilih project yang ada



---- 🛡️ **Session Management** - Auto-logout setelah 30 menit inactive3. Beri nama project (contoh: "SMKN62 Database")



## 🛠️ Teknologi- 🔒 **Protected Routes** - Semua halaman dilindungi autentikasi4. Klik **"Create"**



### Backend- 👤 **User Info Display** - Menampilkan nama dan foto profil Google

- **PHP** 7.4+

- **Composer** - Dependency Management- 🔄 **Session Regeneration** - Security dengan regenerate session ID#### B. Enable Google Drive API

- **Google API Client** ^2.15

  - Google Drive API v3

  - Google Sheets API v4

  - OAuth 2.0 Authentication### 🎨 **User Interface & UX**1. Di menu sidebar, pilih **"APIs & Services"** > **"Library"**



### Frontend- 📱 **Full Responsive Design** - Optimal di desktop, tablet, dan mobile2. Cari **"Google Drive API"**

- **HTML5** & **CSS3**

- **JavaScript** (Vanilla - No jQuery)- 🎯 **7 Breakpoints Responsive:**3. Klik dan tekan **"Enable"**

- **Font Awesome** 6.5.2

- **Google Fonts** - Poppins  - 🖥️ 2560px (Ultra Wide)



### Features  - 🖥️ 1920px (Desktop HD)#### C. Buat OAuth 2.0 Credentials

- CSS3 Flexbox & Grid

- CSS Animations & Transitions  - 💻 1280px (Laptop)

- Media Queries (7 breakpoints)

- AJAX for async operations  - 📱 1024px (Tablet Landscape)1. Di menu sidebar, pilih **"APIs & Services"** > **"Credentials"**

- Real-time upload progress

  - 📱 768px (Tablet Portrait)2. Klik **"Create Credentials"** > **"OAuth client ID"**

---

  - 📱 480px (Mobile)3. Jika diminta, configure consent screen:

## 📋 Prasyarat

  - 📱 360px (Small Mobile)   - User Type: **External**

- **PHP** >= 7.4

- **Composer** (Dependency Manager)   - App name: **SMKN62 Database Management**

- **Web Server** (Apache/Nginx/XAMPP/WAMP)

- **Akun Google** dengan akses Google Drive API & Sheets API- ✨ **Modern Animations:**   - User support email: email Anda

- **Google Cloud Console** project dengan OAuth 2.0

  - Fade in & slide down effects   - Developer contact: email Anda

---

  - Hover transitions dengan transform   - Klik **"Save and Continue"**

## 🚀 Instalasi

  - Loading spinners   - Scopes: Skip (klik **"Save and Continue"**)

### 1. Clone Repository

  - Progress bars dengan gradient   - Test users: Tambahkan email Anda untuk testing

```bash

git clone https://github.com/rahmat43112/Data-Base-Guru.git  - Logo float animation   - Klik **"Save and Continue"**

cd Data-Base-Guru

```



### 2. Install Dependencies- 🎨 **Clean & Professional Design:**4. Kembali ke **"Credentials"** > **"Create Credentials"** > **"OAuth client ID"**



```bash  - Gradient backgrounds5. Application type: **Web application**

composer install

```  - Card-based layout6. Name: **SMKN62 Database**



Ini akan menginstall:  - Icon-based navigation (Font Awesome 6.5.2)7. Authorized redirect URIs:

- `google/apiclient` ^2.15 (Google API Client)

- Dependencies lainnya  - Color-coded categories   ```



### 3. Setup Google API  - Shadow effects & borders   http://localhost/Data-Base-Guru/callback.php



Ikuti panduan lengkap di:  - Google Poppins font   ```

- 📖 [docs/SETUP.md](docs/SETUP.md) - Panduan lengkap instalasi

- 📖 [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md) - Setup Google Cloud Console   (sesuaikan dengan path project Anda)



**Ringkas:**### ⚡ **Performance & Optimization**8. Klik **"Create"**



#### A. Google Cloud Console- 🚀 **AJAX & Lazy Loading** - Load data file on-demand9. Copy **Client ID** dan **Client Secret** yang muncul

1. Buat project di [Google Cloud Console](https://console.cloud.google.com/)

2. Enable **Google Drive API** dan **Google Sheets API**- 📦 **Efficient API Calls** - Batch requests untuk Google API

3. Buat **OAuth 2.0 Credentials** (Web Application)

4. Tambahkan Redirect URI: `http://localhost/Data-Base-Guru/auth/callback.php`- 🔄 **Smart Caching** - Mengurangi API calls yang tidak perlu#### D. Buat Folder di Google Drive

5. Copy **Client ID** dan **Client Secret**

- ⏱️ **Fast Loading** - Optimized untuk loading cepat

#### B. Google Drive Folders

1. Buka [Google Drive](https://drive.google.com/)- 📊 **Empty State Handling** - User-friendly ketika tidak ada data1. Buka [Google Drive](https://drive.google.com/)

2. Buat 4 folder:

   - Kurikulum2. Buat 4 folder dengan nama:

   - Kesiswaan

   - Sapras & Humas### 🔧 **Developer Features**   - **Kurikulum**

   - Tata Usaha

3. Copy **Folder ID** dari URL setiap folder- 📚 **Google API Integration:**   - **Kesiswaan**



#### C. Google Sheets Database  - Google Drive API v3   - **Sapras & Humas**

1. Buat **Google Spreadsheet** baru

2. Buat 2 sheets dengan nama:  - Google Sheets API v4   - **Tata Usaha**

   - **Links** (untuk link kegiatan)

   - **Forms** (untuk google forms)  - OAuth 2.0 Authentication

3. Di setiap sheet, tambahkan header di row 1:

   ```  3. Untuk setiap folder:

   Title | URL | Created At | Updated At

   ```- 🛠️ **Built With:**   - Klik kanan folder > **"Share"**

4. Copy **Spreadsheet ID** dari URL

  - PHP 7.4+   - Ubah akses menjadi **"Anyone with the link"** (optional, sesuai kebutuhan)

### 4. Konfigurasi

  - Composer (Dependency Management)   - Copy **Folder ID** dari URL

Copy dan edit file konfigurasi:

  - Google API Client Library (google/apiclient ^2.15)     - URL format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

```bash

cp includes/config.example.php includes/config.php  - Font Awesome Icons 6.5.2     - Copy bagian `FOLDER_ID_HERE`

```

  - Modern CSS3 (Flexbox, Grid, Animations, Media Queries)

Edit `includes/config.php`:

  - Vanilla JavaScript (No jQuery)### 4. Konfigurasi Aplikasi

```php

// Google OAuth 2.0

define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');- 📁 **Clean Code Structure:**Edit file `config.php` dan isi dengan data Anda:

define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');

  ```

// Google Drive Folder IDs

define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');  Data-Base-Guru/```php

define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');

define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');  ├── auth/                   # Authentication files// Google API Credentials

define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');

  │   ├── login.php          # Google OAuth logindefine('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

// Google Sheets ID

define('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');  │   ├── callback.php       # OAuth callback handlerdefine('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

```

  │   └── logout.php         # Logout handlerdefine('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');

### 5. Web Server Setup

  ├── pages/                  # Application pages

#### Menggunakan PHP Built-in Server

  │   ├── dashboard.php      # Main dashboard// Folder IDs dari Google Drive

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
