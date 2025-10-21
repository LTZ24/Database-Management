# 🔧 Setup Guide - Google Cloud Console & APIs# � Setup Guide - Google Cloud Console & APIs



Panduan lengkap untuk mengkonfigurasi **Google Drive API**, **Google Sheets API**, dan **OAuth 2.0** untuk aplikasi Database Management SMKN 62 Jakarta.Panduan lengkap untuk mengkonfigurasi **Google Drive API**, **Google Sheets API**, dan **OAuth 2.0** untuk aplikasi Database Management SMKN 62 Jakarta.



---## 📋 Yang Akan Dikonfigurasi



## 📋 Yang Akan Dikonfigurasi1. ✅ Google Cloud Console Project

2. ✅ Google Drive API (untuk upload & manage files)

1. ✅ Google Cloud Console Project3. ✅ Google Sheets API (untuk database Links & Forms)

2. ✅ Google Drive API (untuk upload & manage files)4. ✅ OAuth 2.0 Credentials

3. ✅ Google Sheets API (untuk database Links & Forms)5. ✅ Google Drive Folders (4 kategori)

4. ✅ OAuth 2.0 Credentials6. ✅ Google Sheets Database (Links & Forms)

5. ✅ Google Drive Folders (4 kategori)

6. ✅ Google Sheets Database (Links & Forms)---

7. ✅ Konfigurasi aplikasi

## 📝 Langkah 1: Buat Project di Google Cloud Console

**⏱️ Estimasi waktu:** ~15-20 menit

1. Buka [Google Cloud Console](https://console.cloud.google.com/)

---2. Klik **dropdown project** (kiri atas) → **"NEW PROJECT"**

3. Isi form:

## 📝 Langkah 1: Buat Project di Google Cloud Console   - **Project name**: `SMKN62-Database` (atau nama lain sesuai keinginan)

   - **Organization**: Kosongkan (optional)

1. Buka [Google Cloud Console](https://console.cloud.google.com/)4. Klik **"CREATE"**

2. Klik **dropdown project** (kiri atas) → **"NEW PROJECT"**5. Tunggu beberapa detik hingga project dibuat

3. Isi form:6. Pastikan project Anda **sudah terpilih** (cek kiri atas)

   - **Project name**: `SMKN62-Database` (atau nama lain sesuai keinginan)

   - **Organization**: Kosongkan (optional)---

4. Klik **"CREATE"**

5. Tunggu beberapa detik hingga project dibuat## 🔌 Langkah 2: Enable Google Drive API & Google Sheets API

6. Pastikan project Anda **sudah terpilih** (cek kiri atas)

### A. Enable Google Drive API

---

1. Di menu kiri, pilih **"APIs & Services"** → **"Library"**

## 🔌 Langkah 2: Enable Google Drive API & Google Sheets API2. Di search bar, cari: **"Google Drive API"**

3. Klik hasil pertama: **"Google Drive API"**

### A. Enable Google Drive API4. Klik tombol **"ENABLE"**

5. Tunggu hingga API enabled (halaman akan berubah)

1. Di menu kiri, pilih **"APIs & Services"** → **"Library"**

2. Di search bar, cari: **"Google Drive API"**### B. Enable Google Sheets API

3. Klik hasil pertama: **"Google Drive API"**

4. Klik tombol **"ENABLE"**1. Kembali ke **"Library"** (klik **"Library"** di menu kiri)

5. Tunggu hingga API enabled (halaman akan berubah)2. Di search bar, cari: **"Google Sheets API"**

3. Klik hasil pertama: **"Google Sheets API"**

### B. Enable Google Sheets API4. Klik tombol **"ENABLE"**

5. Tunggu hingga API enabled

1. Kembali ke **"Library"** (klik **"Library"** di menu kiri)

2. Di search bar, cari: **"Google Sheets API"**> **💡 Info:** Google Sheets API digunakan untuk menyimpan data Links & Forms secara real-time, menggantikan database JSON.

3. Klik hasil pertama: **"Google Sheets API"**

4. Klik tombol **"ENABLE"**---

5. Tunggu hingga API enabled

## 🔐 Langkah 3: Configure OAuth Consent Screen

> **💡 Info:** Google Sheets API digunakan untuk menyimpan data Links & Forms secara real-time, menggantikan database JSON.

OAuth Consent Screen adalah halaman yang muncul saat user login dengan Google untuk memberikan izin akses ke aplikasi.

---

1. Di menu kiri, pilih **"APIs & Services"** → **"OAuth consent screen"**

## 🔐 Langkah 3: Configure OAuth Consent Screen2. **User Type**: Pilih **"External"**, lalu klik **"CREATE"**

3. **Tab "OAuth consent screen"** - Isi form:

OAuth Consent Screen adalah halaman yang muncul saat user login dengan Google untuk memberikan izin akses ke aplikasi.   - **App name**: `Database Management SMKN 62`

   - **User support email**: Pilih email Anda dari dropdown

1. Di menu kiri, pilih **"APIs & Services"** → **"OAuth consent screen"**   - **App logo**: (Optional) Upload logo jika ada

2. **User Type**: Pilih **"External"**, lalu klik **"CREATE"**   - **App domain**: (Optional) Kosongkan untuk testing

   - **Authorized domains**: (Optional) Kosongkan untuk testing

3. **Tab "OAuth consent screen"** - Isi form:   - **Developer contact information**: Isi email Anda

   - **App name**: `Database Management SMKN 62`4. Klik **"SAVE AND CONTINUE"**

   - **User support email**: Pilih email Anda dari dropdown

   - **App logo**: (Optional) Upload logo jika ada5. **Tab "Scopes"** - Tambahkan permission:

   - **App domain**: (Optional) Kosongkan untuk testing   - Klik **"ADD OR REMOVE SCOPES"**

   - **Authorized domains**: (Optional) Kosongkan untuk testing   - Cari dan centang scopes berikut:

   - **Developer contact information**: Isi email Anda     - ✅ `https://www.googleapis.com/auth/drive.file` (Google Drive - manage files)

   - Klik **"SAVE AND CONTINUE"**     - ✅ `https://www.googleapis.com/auth/spreadsheets` (Google Sheets - read & write)

     - ✅ `https://www.googleapis.com/auth/userinfo.profile` (User profile info)

4. **Tab "Scopes"** - Tambahkan permission:     - ✅ `https://www.googleapis.com/auth/userinfo.email` (User email)

   - Klik **"ADD OR REMOVE SCOPES"**   - Scroll ke bawah, klik **"UPDATE"**

   - Cari dan centang scopes berikut:   - Klik **"SAVE AND CONTINUE"**

     - ✅ `https://www.googleapis.com/auth/drive.file` (Google Drive - manage files)

     - ✅ `https://www.googleapis.com/auth/spreadsheets` (Google Sheets - read & write)6. **Tab "Test users"** - Tambahkan email untuk testing:

     - ✅ `https://www.googleapis.com/auth/userinfo.profile` (User profile info)   - Klik **"+ ADD USERS"**

     - ✅ `https://www.googleapis.com/auth/userinfo.email` (User email)   - Masukkan **email Google** yang akan Anda gunakan untuk login

   - Scroll ke bawah, klik **"UPDATE"**   - Klik **"ADD"**

   - Klik **"SAVE AND CONTINUE"**   - Klik **"SAVE AND CONTINUE"**



5. **Tab "Test users"** - Tambahkan email untuk testing:7. **Tab "Summary"** - Review:

   - Klik **"+ ADD USERS"**   - Periksa semua informasi sudah benar

   - Masukkan **email Google** yang akan Anda gunakan untuk login   - Klik **"BACK TO DASHBOARD"**

   - Klik **"ADD"**

   - Klik **"SAVE AND CONTINUE"**> **⚠️ PENTING:** Saat OAuth consent screen masih dalam mode "Testing", hanya email yang didaftarkan di **Test users** yang bisa login. Untuk production, Anda perlu submit app untuk verification atau ubah ke Internal (jika organisasi).



6. **Tab "Summary"** - Review:---

   - Periksa semua informasi sudah benar

   - Klik **"BACK TO DASHBOARD"**## 🔑 Langkah 4: Buat OAuth 2.0 Client ID



> **⚠️ PENTING:** Saat OAuth consent screen masih dalam mode "Testing", hanya email yang didaftarkan di **Test users** yang bisa login. Untuk production, Anda perlu submit app untuk verification atau ubah ke Internal (jika organisasi).1. Di menu kiri, pilih **"APIs & Services"** → **"Credentials"**

2. Klik **"+ CREATE CREDENTIALS"** → pilih **"OAuth client ID"**

---3. **Application type**: Pilih **"Web application"**

4. **Name**: `SMKN62 Web Client` (atau nama lain)

## 🔑 Langkah 4: Buat OAuth 2.0 Client ID5. **Authorized JavaScript origins**: (Optional untuk project ini, skip)

6. **Authorized redirect URIs**: Klik **"+ ADD URI"**

1. Di menu kiri, pilih **"APIs & Services"** → **"Credentials"**   - Masukkan: `http://localhost/Data-Base-Guru/callback.php`

2. Klik **"+ CREATE CREDENTIALS"** → pilih **"OAuth client ID"**   - **⚠️ PENTING:** Sesuaikan path dengan lokasi project Anda

3. **Application type**: Pilih **"Web application"**   - Jika menggunakan **port khusus**: `http://localhost:8000/callback.php`

4. **Name**: `SMKN62 Web Client` (atau nama lain)   - Jika menggunakan **XAMPP**: `http://localhost/Data-Base-Guru/callback.php`

5. **Authorized JavaScript origins**: (Optional untuk project ini, skip)   - Jika menggunakan **custom domain**: `https://yourdomain.com/callback.php`

6. **Authorized redirect URIs**: Klik **"+ ADD URI"**7. Klik **"CREATE"**

   - Masukkan: `http://localhost/Data-Base-Guru/callback.php`

   - **⚠️ PENTING:** Sesuaikan path dengan lokasi project Anda### 📋 Simpan Credentials

   - Jika menggunakan **port khusus**: `http://localhost:8000/callback.php`

   - Jika menggunakan **XAMPP**: `http://localhost/Data-Base-Guru/callback.php`Setelah klik Create, popup akan muncul dengan:

   - Jika menggunakan **custom domain**: `https://yourdomain.com/callback.php`

7. Klik **"CREATE"**```

Your Client ID: 

### 📋 Simpan Credentials123456789-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com



Setelah klik Create, popup akan muncul dengan:Your Client Secret:

GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx

``````

Your Client ID: 

123456789-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com**‼️ COPY DAN SIMPAN** kedua nilai ini dengan aman!

- **Client ID**: String panjang yang diakhiri `.apps.googleusercontent.com`

Your Client Secret:- **Client Secret**: String yang dimulai dengan `GOCSPX-`

GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx

```> **💡 Tip:** Jika lupa atau hilang, Anda bisa lihat lagi di **Credentials** → klik nama OAuth client yang sudah dibuat.

   

**‼️ COPY DAN SIMPAN** kedua nilai ini dengan aman!---

- **Client ID**: String panjang yang diakhiri `.apps.googleusercontent.com`

- **Client Secret**: String yang dimulai dengan `GOCSPX-`## 📂 Langkah 5: Setup Google Drive Folders



> **💡 Tip:** Jika lupa atau hilang, Anda bisa lihat lagi di **Credentials** → klik nama OAuth client yang sudah dibuat.Aplikasi menggunakan 4 kategori folder untuk menyimpan file berdasarkan kategori database.



---### A. Buat Folder di Google Drive



## 📂 Langkah 5: Setup Google Drive Folders1. Buka [Google Drive](https://drive.google.com/)

2. Klik **"+ New"** → **"New folder"**

Aplikasi menggunakan 4 kategori folder untuk menyimpan file berdasarkan kategori database.3. Buat **4 folder** dengan nama:

   - 📚 **Kurikulum**

### A. Buat Folder di Google Drive   - 👥 **Kesiswaan**

   - 🏢 **Sapras dan Humas**

1. Buka [Google Drive](https://drive.google.com/)   - 📋 **Tata Usaha**

2. Klik **"+ New"** → **"New folder"**

3. Buat **4 folder** dengan nama:### B. Dapatkan Folder ID

   - 📚 **Kurikulum**

   - 👥 **Kesiswaan**Untuk **setiap folder** yang baru dibuat:

   - 🏢 **Sapras dan Humas**

   - 📋 **Tata Usaha**1. Klik kanan folder → **"Share"**

2. (Optional) Ubah akses:

### B. Dapatkan Folder ID   - **"Restricted"** = Hanya Anda yang bisa akses (recommended untuk production)

   - **"Anyone with the link"** = Siapa saja dengan link bisa akses (untuk testing)

Untuk **setiap folder** yang baru dibuat:3. Klik **"Copy link"**

4. Link format: `https://drive.google.com/drive/folders/1ABC...XYZ123?usp=sharing`

1. Klik kanan folder → **"Share"**5. **Folder ID** = bagian setelah `/folders/` dan sebelum `?`

2. (Optional) Ubah akses:   - Contoh: Jika link = `https://drive.google.com/drive/folders/1ABC...XYZ123?usp=sharing`

   - **"Restricted"** = Hanya Anda yang bisa akses (recommended untuk production)   - Maka Folder ID = `1ABC...XYZ123`

   - **"Anyone with the link"** = Siapa saja dengan link bisa akses (untuk testing)

3. Klik **"Copy link"**### C. Catat Folder IDs

4. Link format: `https://drive.google.com/drive/folders/1ABC...XYZ123?usp=sharing`

5. **Folder ID** = bagian setelah `/folders/` dan sebelum `?`Simpan keempat Folder IDs dengan format:

   - Contoh: Jika link = `https://drive.google.com/drive/folders/1ABC...XYZ123?usp=sharing`

   - Maka Folder ID = `1ABC...XYZ123````

Kurikulum      = 1ABC...XYZ123

### C. Catat Folder IDsKesiswaan      = 1DEF...UVW456

Sapras & Humas = 1GHI...RST789

Simpan keempat Folder IDs dengan format:Tata Usaha     = 1JKL...OPQ012

```

```

Kurikulum      = 1ABC...XYZ123> **💡 Tip:** Folder ID adalah string unik ~40 karakter yang terdiri dari huruf, angka, underscore, dan dash.

Kesiswaan      = 1DEF...UVW456

Sapras & Humas = 1GHI...RST789---

Tata Usaha     = 1JKL...OPQ012

```## 📊 Langkah 6: Setup Google Sheets Database



> **💡 Tip:** Folder ID adalah string unik ~40 karakter yang terdiri dari huruf, angka, underscore, dan dash.Aplikasi menggunakan Google Sheets untuk menyimpan data **Links Kegiatan** dan **Google Forms**.



---### A. Buat Spreadsheet Baru



## 📊 Langkah 6: Setup Google Sheets Database1. Buka [Google Sheets](https://sheets.google.com/)

2. Klik **"+ Blank"** untuk membuat spreadsheet baru

Aplikasi menggunakan Google Sheets untuk menyimpan data **Links Kegiatan** dan **Google Forms**.3. Rename spreadsheet (klik title di kiri atas):

   - Nama: **`SMKN62 - Database Management`** (atau nama lain)

### A. Buat Spreadsheet Baru

### B. Buat Sheet "Links"

1. Buka [Google Sheets](https://sheets.google.com/)

2. Klik **"+ Blank"** untuk membuat spreadsheet baru1. Di bagian bawah, sudah ada **Sheet1** (default sheet)

3. Rename spreadsheet (klik title di kiri atas):2. Klik kanan **Sheet1** → **"Rename"**

   - Nama: **`SMKN62 - Database Management`** (atau nama lain)3. Ubah nama menjadi: **`Links`** (case-sensitive, tanpa spasi di awal/akhir)

4. Di **cell A1**, masukkan header berikut (pisahkan dengan Tab):

### B. Buat Sheet "Links"

| A | B | C | D |

1. Di bagian bawah, sudah ada **Sheet1** (default sheet)|---|---|---|---|

2. Klik kanan **Sheet1** → **"Rename"**| **Title** | **URL** | **Created At** | **Updated At** |

3. Ubah nama menjadi: **`Links`** (case-sensitive, tanpa spasi di awal/akhir)

4. Di **cell A1**, masukkan header berikut (pisahkan dengan Tab):**Cara input header:**

- Cell A1: `Title`

| A | B | C | D |- Cell B1: `URL`

|---|---|---|---|- Cell C1: `Created At`

| **Title** | **URL** | **Created At** | **Updated At** |- Cell D1: `Updated At`



**Cara input header:**5. (Optional) Bold header row (blok A1:D1, klik **B** di toolbar)

- Cell A1: `Title`6. (Optional) Freeze header row (View → Freeze → 1 row)

- Cell B1: `URL`

- Cell C1: `Created At`### C. Buat Sheet "Forms"

- Cell D1: `Updated At`

1. Klik **"+"** di bagian bawah (samping tab "Links") untuk menambah sheet baru

5. (Optional) Bold header row (blok A1:D1, klik **B** di toolbar)2. Sheet baru akan muncul dengan nama **Sheet2**

6. (Optional) Freeze header row (View → Freeze → 1 row)3. Klik kanan **Sheet2** → **"Rename"**

4. Ubah nama menjadi: **`Forms`** (case-sensitive, tanpa spasi di awal/akhir)

### C. Buat Sheet "Forms"5. Di **cell A1**, masukkan header yang sama seperti sheet Links:



1. Klik **"+"** di bagian bawah (samping tab "Links") untuk menambah sheet baru| A | B | C | D |

2. Sheet baru akan muncul dengan nama **Sheet2**|---|---|---|---|

3. Klik kanan **Sheet2** → **"Rename"**| **Title** | **URL** | **Created At** | **Updated At** |

4. Ubah nama menjadi: **`Forms`** (case-sensitive, tanpa spasi di awal/akhir)

5. Di **cell A1**, masukkan header yang sama seperti sheet Links:6. (Optional) Bold & freeze header row seperti di sheet Links



| A | B | C | D |### D. Set Permission (Optional)

|---|---|---|---|

| **Title** | **URL** | **Created At** | **Updated At** |1. Klik tombol **"Share"** (kanan atas)

2. Pilih permission:

6. (Optional) Bold & freeze header row seperti di sheet Links   - **"Restricted"** = Hanya Anda yang bisa akses (recommended)

   - **"Anyone with the link"** = Siapa saja dengan link bisa view/edit (untuk testing)

### D. Set Permission (Optional)3. Klik **"Done"**



1. Klik tombol **"Share"** (kanan atas)### E. Dapatkan Spreadsheet ID

2. Pilih permission:

   - **"Restricted"** = Hanya Anda yang bisa akses (recommended)1. Lihat URL di browser:

   - **"Anyone with the link"** = Siapa saja dengan link bisa view/edit (untuk testing)   ```

3. Klik **"Done"**   https://docs.google.com/spreadsheets/d/1Abc...XYZ123/edit

   ```

### E. Dapatkan Spreadsheet ID2. **Spreadsheet ID** = bagian setelah `/d/` dan sebelum `/edit`

   - Contoh URL: `https://docs.google.com/spreadsheets/d/1Abc...XYZ123/edit`

1. Lihat URL di browser:   - Spreadsheet ID: `1Abc...XYZ123`

   ```

   https://docs.google.com/spreadsheets/d/1Abc...XYZ123/edit3. **COPY dan SIMPAN** Spreadsheet ID ini

   ```

2. **Spreadsheet ID** = bagian setelah `/d/` dan sebelum `/edit`### F. Verifikasi Setup

   - Contoh URL: `https://docs.google.com/spreadsheets/d/1Abc...XYZ123/edit`

   - Spreadsheet ID: `1Abc...XYZ123`Pastikan:

- ✅ Spreadsheet memiliki **2 sheets**: `Links` dan `Forms` (nama harus persis)

3. **COPY dan SIMPAN** Spreadsheet ID ini- ✅ Setiap sheet memiliki **4 kolom header** di row 1: `Title | URL | Created At | Updated At`

- ✅ Header di row 1 (bukan row 2 atau lainnya)

### F. Verifikasi Setup- ✅ Tidak ada data dummy di row 2 (biarkan kosong, nanti akan diisi otomatis oleh aplikasi)



Pastikan:> **⚠️ PENTING:** Nama sheet **case-sensitive**! Harus persis `Links` dan `Forms` (bukan `links`, `LINKS`, atau `Link`).

- ✅ Spreadsheet memiliki **2 sheets**: `Links` dan `Forms` (nama harus persis)

- ✅ Setiap sheet memiliki **4 kolom header** di row 1: `Title | URL | Created At | Updated At`> **💡 Info:** Aplikasi akan otomatis menambahkan data ke sheet ini saat Anda menambah/edit/hapus link atau form dari dashboard.

- ✅ Header di row 1 (bukan row 2 atau lainnya)

- ✅ Tidak ada data dummy di row 2 (biarkan kosong, nanti akan diisi otomatis oleh aplikasi)---



> **⚠️ PENTING:** Nama sheet **case-sensitive**! Harus persis `Links` dan `Forms` (bukan `links`, `LINKS`, atau `Link`).## ⚙️ Langkah 7: Konfigurasi Aplikasi



> **💡 Info:** Aplikasi akan otomatis menambahkan data ke sheet ini saat Anda menambah/edit/hapus link atau form dari dashboard.Sekarang saatnya memasukkan semua credentials ke file konfigurasi aplikasi.



---### A. Copy File Config Example



## ⚙️ Langkah 7: Konfigurasi AplikasiJika belum, copy file config example:



Sekarang saatnya memasukkan semua credentials ke file konfigurasi aplikasi.```bash

# Linux/Mac

### A. Copy File Config Examplecp includes/config.example.php includes/config.php



Jika belum, copy file config example:# Windows (PowerShell)

Copy-Item includes/config.example.php includes/config.php

```bash

# Linux/Mac# Windows (CMD)

cp includes/config.example.php includes/config.phpcopy includes\config.example.php includes\config.php

```

# Windows (PowerShell)

Copy-Item includes/config.example.php includes/config.php### B. Edit File config.php



# Windows (CMD)1. Buka file: `includes/config.php` dengan text editor

copy includes\config.example.php includes\config.php2. Cari dan edit bagian berikut:

```

#### 1️⃣ Google OAuth 2.0 Credentials

### B. Edit File config.php

Ganti `YOUR_CLIENT_ID_HERE` dan `YOUR_CLIENT_SECRET_HERE` dengan credentials dari **Langkah 4**:

1. Buka file: `includes/config.php` dengan text editor

2. Cari dan edit bagian berikut:```php

// SEBELUM:

#### 1️⃣ Google OAuth 2.0 Credentialsdefine('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');

define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

Ganti `YOUR_CLIENT_ID_HERE` dan `YOUR_CLIENT_SECRET_HERE` dengan credentials dari **Langkah 4**:define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');



```php// SESUDAH (contoh):

// SEBELUM:define('GOOGLE_CLIENT_ID', '123456789-abc...xyz.apps.googleusercontent.com');

define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');define('GOOGLE_CLIENT_SECRET', 'GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx');

define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php'); // Sesuaikan path Anda

define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');```



// SESUDAH (contoh):> **⚠️ PENTING:** `GOOGLE_REDIRECT_URI` harus **sama persis** dengan **Authorized redirect URI** yang Anda masukkan di Google Console!

define('GOOGLE_CLIENT_ID', '123456789-abc...xyz.apps.googleusercontent.com');

define('GOOGLE_CLIENT_SECRET', 'GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx');#### 2️⃣ Google Drive Folder IDs

define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php'); // Sesuaikan path Anda

```Ganti `YOUR_FOLDER_ID_HERE` dengan Folder IDs dari **Langkah 5**:



> **⚠️ PENTING:** `GOOGLE_REDIRECT_URI` harus **sama persis** dengan **Authorized redirect URI** yang Anda masukkan di Google Console!```php

// SEBELUM:

#### 2️⃣ Google Drive Folder IDsdefine('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');

define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');

Ganti `YOUR_FOLDER_ID_HERE` dengan Folder IDs dari **Langkah 5**:define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');

define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');

```php

// SEBELUM:// SESUDAH (contoh):

define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');define('FOLDER_KURIKULUM', '1ABC...XYZ123');

define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');define('FOLDER_KESISWAAN', '1DEF...UVW456');

define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');define('FOLDER_SAPRAS_HUMAS', '1GHI...RST789');

define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');define('FOLDER_TATA_USAHA', '1JKL...OPQ012');

```

// SESUDAH (contoh):

define('FOLDER_KURIKULUM', '1ABC...XYZ123');#### 3️⃣ Google Sheets Spreadsheet ID

define('FOLDER_KESISWAAN', '1DEF...UVW456');

define('FOLDER_SAPRAS_HUMAS', '1GHI...RST789');Ganti `YOUR_SPREADSHEET_ID_HERE` dengan Spreadsheet ID dari **Langkah 6**:

define('FOLDER_TATA_USAHA', '1JKL...OPQ012');

``````php

// SEBELUM:

#### 3️⃣ Google Sheets Spreadsheet IDdefine('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');



Ganti `YOUR_SPREADSHEET_ID_HERE` dengan Spreadsheet ID dari **Langkah 6**:// SESUDAH (contoh):

define('GOOGLE_SHEETS_ID', '1Abc...XYZ123');

```php```

// SEBELUM:

define('GOOGLE_SHEETS_ID', 'YOUR_SPREADSHEET_ID_HERE');### C. Simpan File



// SESUDAH (contoh):1. **Save** file `includes/config.php`

define('GOOGLE_SHEETS_ID', '1Abc...XYZ123');2. **Jangan commit** file ini ke Git (sudah ada di `.gitignore`)

```

### D. Verifikasi Konfigurasi

### C. Simpan File

Pastikan:

1. **Save** file `includes/config.php`- ✅ Tidak ada placeholder `YOUR_..._HERE` yang tersisa

2. **Jangan commit** file ini ke Git (sudah ada di `.gitignore`)- ✅ Client ID diakhiri dengan `.apps.googleusercontent.com`

- ✅ Client Secret dimulai dengan `GOCSPX-`

### D. Verifikasi Konfigurasi- ✅ Semua Folder IDs memiliki format string ~40 karakter

- ✅ Spreadsheet ID memiliki format string ~40 karakter

Pastikan:- ✅ Redirect URI **sama persis** dengan di Google Console

- ✅ Tidak ada placeholder `YOUR_..._HERE` yang tersisa

- ✅ Client ID diakhiri dengan `.apps.googleusercontent.com`---

- ✅ Client Secret dimulai dengan `GOCSPX-`

- ✅ Semua Folder IDs memiliki format string ~40 karakter## ✅ Langkah 7: Test Aplikasi

- ✅ Spreadsheet ID memiliki format string ~40 karakter

- ✅ Redirect URI **sama persis** dengan di Google Console1. Buka browser

2. Akses: `http://localhost/Data-Base-Guru/login.php`

---3. Seharusnya tidak ada error lagi

4. Klik **"Login dengan Google"**

## ✅ Langkah 8: Testing Aplikasi5. Pilih akun Google (yang sudah didaftarkan di Test Users)

6. Klik **"Continue"** saat diminta izin akses Google Drive

Sekarang saatnya test apakah semua konfigurasi sudah benar!

---

### A. Start Web Server

## 🎉 Selesai!

**Menggunakan PHP Built-in Server:**

Jika berhasil, Anda akan diredirect ke **Dashboard** dan bisa mulai upload file ke Google Drive!

```bash

php -S localhost:8000---

```

## ❓ Troubleshooting

Akses: `http://localhost:8000/login.php`

### Error: "Access blocked: This app's request is invalid"

**Menggunakan XAMPP:**- Pastikan **Redirect URI** di Google Console sama persis dengan di `config.php`

- Periksa tidak ada typo atau space tambahan

1. Start Apache di XAMPP Control Panel

2. Akses: `http://localhost/Data-Base-Guru/login.php`### Error: "Access denied"

- Pastikan email Anda sudah ditambahkan di **Test Users** (OAuth Consent Screen)

### B. Test OAuth Login

### Error: "Invalid client ID"

1. Buka browser, akses URL aplikasi (sesuai server yang Anda gunakan)- Pastikan **Client ID** dan **Client Secret** sudah di-copy dengan benar

2. Seharusnya tampil **halaman login** dengan tombol **"Login dengan Google"**- Tidak ada space atau karakter tambahan

3. Klik tombol **"Login dengan Google"**

4. **Pilih akun Google** (yang sudah didaftarkan di Test Users)### Redirect URI mismatch

5. Halaman consent screen akan muncul:- URL di Google Console: `http://localhost/Data-Base-Guru/callback.php`

   - **"Database Management SMKN 62 wants to access your Google Account"**- URL di config.php line 10: `http://localhost/Data-Base-Guru/callback.php`

   - Review permissions yang diminta:- **HARUS SAMA PERSIS** (case-sensitive)

     - View and manage Google Drive files

     - View and manage Google Sheets---

     - View your email address

     - View your basic profile info**Need help?** Lihat `README.md` untuk dokumentasi lengkap atau buat issue di GitHub.

6. Klik **"Continue"** atau **"Allow"**

### C. Verifikasi Login Berhasil

Jika berhasil:
- ✅ Anda akan di-redirect ke **Dashboard**
- ✅ Nama dan foto profil Google Anda muncul di header
- ✅ Tampil **4 kategori database** (Kurikulum, Kesiswaan, Sapras, Tata Usaha)
- ✅ Tampil section **Link Kegiatan** (masih kosong)
- ✅ Tampil section **Google Forms** (masih kosong)

### D. Test Upload File

1. Di Dashboard, klik salah satu **kategori database** (misal: Kurikulum)
2. Halaman category akan terbuka
3. Klik **"Choose File"**, pilih file test (misal: PDF < 100MB)
4. Klik **"Upload ke Google Drive"**
5. **Progress bar** akan muncul
6. Setelah selesai:
   - ✅ File muncul di tabel
   - ✅ Buka [Google Drive](https://drive.google.com/), file ada di folder yang sesuai

### E. Test Tambah Link Kegiatan

1. Kembali ke **Dashboard**
2. Scroll ke section **Link Kegiatan**
3. Klik tombol **"Tambah Link"**
4. Isi form:
   - **Judul Kegiatan**: Contoh `Lomba 17 Agustus`
   - **URL Link**: Contoh `https://drive.google.com/...`
5. Klik **"Simpan Link"**
6. Jika berhasil:
   - ✅ Link muncul di tabel
   - ✅ Buka [Google Sheets](https://sheets.google.com/), data ada di sheet **Links**

### F. Test Tambah Google Form

1. Di Dashboard, scroll ke section **Google Forms**
2. Klik tombol **"Tambah Form"**
3. Isi form:
   - **Judul Form**: Contoh `Form Pendaftaran Siswa Baru`
   - **URL Google Form**: Contoh `https://forms.google.com/...`
4. Klik **"Simpan Form"**
5. Jika berhasil:
   - ✅ Form muncul di tabel
   - ✅ Buka [Google Sheets](https://sheets.google.com/), data ada di sheet **Forms**

---

## ❓ Troubleshooting

### ❌ Error: "The server cannot process the request because it is malformed"

**Penyebab:** Credentials belum dikonfigurasi atau salah

**Solusi:**
- Periksa `includes/config.php`:
  - Pastikan `GOOGLE_CLIENT_ID` dan `GOOGLE_CLIENT_SECRET` sudah diisi dengan benar
  - Tidak ada placeholder `YOUR_..._HERE` yang tersisa
  - Tidak ada spasi atau karakter tambahan

### ❌ Error: "Access blocked: This app's request is invalid"

**Penyebab:** Redirect URI tidak match

**Solusi:**
- Buka Google Cloud Console → **Credentials** → Klik OAuth client yang Anda buat
- Cek **Authorized redirect URIs**, harus **sama persis** dengan `GOOGLE_REDIRECT_URI` di `config.php`
- Tidak boleh ada perbedaan sedikit pun (case-sensitive, slash, port, dll)

### ❌ Error: "Access denied" atau "This app is blocked"

**Penyebab:** Email belum ditambahkan sebagai Test User

**Solusi:**
- Buka Google Cloud Console → **OAuth consent screen** → Tab **"Test users"**
- Klik **"+ ADD USERS"**
- Masukkan email Google yang Anda gunakan untuk login
- Klik **"ADD"**, lalu **"SAVE"**
- Logout dari aplikasi dan coba login lagi

### ❌ Error: "Invalid client ID" atau "Invalid client secret"

**Penyebab:** Client ID atau Client Secret salah

**Solusi:**
- Buka Google Cloud Console → **Credentials**
- Klik OAuth client yang Anda buat
- Lihat **Client ID** dan **Client secret**
- Copy ulang ke `includes/config.php`
- Pastikan tidak ada spasi atau karakter tambahan saat copy-paste

### ❌ Error: "Folder not found" / "File not uploaded"

**Penyebab:** Folder ID salah atau folder tidak accessible

**Solusi:**
- Periksa Folder IDs di `includes/config.php`
- Pastikan Folder ID **tanpa** `?usp=sharing` atau query parameter lainnya
- Buka folder di Google Drive dengan akun yang sama dengan akun login
- Pastikan folder **masih ada** dan tidak dihapus
- (Optional) Share folder dengan akun yang login jika berbeda

### ❌ Error: "Spreadsheet not found" atau data tidak tersimpan di Sheets

**Penyebab:** Spreadsheet ID salah atau sheet name salah

**Solusi:**
- Periksa `GOOGLE_SHEETS_ID` di `includes/config.php`
- Pastikan Spreadsheet ID **tanpa** `/edit` atau query parameter
- Buka spreadsheet di Google Sheets
- Pastikan ada **2 sheets** dengan nama persis: `Links` dan `Forms` (case-sensitive)
- Pastikan setiap sheet ada **header row** di row 1: `Title | URL | Created At | Updated At`
- Pastikan Google Sheets API sudah **enabled** di Google Cloud Console

### ❌ File upload gagal / "Maximum file size exceeded"

**Penyebab:** File terlalu besar atau konfigurasi PHP limit kecil

**Solusi:**
- Pastikan file < 100MB
- Edit `php.ini`:
  ```ini
  upload_max_filesize = 100M
  post_max_size = 100M
  max_execution_time = 300
  max_input_time = 300
  memory_limit = 256M
  ```
- Restart web server (Apache/PHP built-in server)

### ❌ Session timeout terlalu cepat

**Penyebab:** Session lifetime terlalu pendek

**Solusi:**
- Edit `includes/config.php`, cari baris `ini_set('session.gc_maxlifetime', ...)`
- Ubah nilai (default 1800 detik = 30 menit):
  ```php
  ini_set('session.gc_maxlifetime', 3600); // 1 jam
  ini_set('session.cookie_lifetime', 3600); // 1 jam
  ```

### ❌ Data tidak sinkron antara database dan Google Sheets

**Penyebab:** API call gagal atau error tidak terdeteksi

**Solusi:**
- Buka browser **Developer Tools** (F12) → Tab **Console**
- Cek error messages
- Logout dan login ulang untuk refresh token
- Pastikan **Google Sheets API** enabled di Google Cloud Console
- Cek koneksi internet stabil

---

## 🎉 Setup Selesai!

Selamat! Anda berhasil mengkonfigurasi:
- ✅ Google Cloud Console Project
- ✅ Google Drive API
- ✅ Google Sheets API
- ✅ OAuth 2.0 Authentication
- ✅ Google Drive Folders (4 kategori)
- ✅ Google Sheets Database (Links & Forms)
- ✅ Aplikasi Database Management

Sekarang Anda bisa:
- 📁 Upload file ke Google Drive (4 kategori)
- 🔗 Manage link kegiatan (tersimpan di Google Sheets)
- 📝 Manage Google Forms (tersimpan di Google Sheets)
- 🔐 Login aman dengan Google OAuth 2.0
- 📊 Data real-time sync dengan Google Sheets

---

## 📚 Dokumentasi Tambahan

- 📖 [README.md](../README.md) - Panduan lengkap aplikasi
- 📖 [docs/SETUP.md](SETUP.md) - Panduan instalasi umum
- 🐛 [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues) - Report bug atau request fitur

---

## 🙏 Credits

- **Google Cloud Platform** - Google Drive API, Sheets API, OAuth 2.0
- **PHP** - Backend language
- **Composer** - Dependency management
- **SMKN 62 Jakarta** - End user & testing

---

**Need more help?** 

- 📧 Email: info@kttindonesia.com
- 🐛 Report bug: [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues)
- 💡 Feature request: [GitHub Issues](https://github.com/LTZ24/Database-Management-/issues) (label: `enhancement`)

---

<div align="center">

**Made with ❤️ for SMKN 62 Jakarta**

[🏠 Back to README](../README.md)

</div>
