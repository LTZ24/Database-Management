# 🚀 Quick Setup Guide - Google Drive API

## ⚠️ Error: "The server cannot process the request because it is malformed"

Error ini muncul karena **Google API credentials belum dikonfigurasi**. Ikuti langkah-langkah di bawah ini:

---

## 📝 Langkah 1: Buat Project di Google Cloud Console

1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. Klik dropdown project (kiri atas) → **"NEW PROJECT"**
3. **Project name**: `SMKN62-Database` (atau nama lain)
4. Klik **"CREATE"**
5. Tunggu project dibuat, lalu pilih project tersebut

---

## 🔌 Langkah 2: Enable Google Drive API

1. Di menu kiri, pilih **"APIs & Services"** → **"Library"**
2. Cari: **"Google Drive API"**
3. Klik, lalu klik tombol **"ENABLE"**

---

## 🔐 Langkah 3: Configure OAuth Consent Screen

1. Di menu kiri, pilih **"APIs & Services"** → **"OAuth consent screen"**
2. Pilih **"External"**, klik **"CREATE"**
3. Isi form:
   - **App name**: `Database Management SMKN 62`
   - **User support email**: Pilih email Anda
   - **Developer contact**: Isi email Anda
4. Klik **"SAVE AND CONTINUE"**
5. **Scopes**: Klik **"ADD OR REMOVE SCOPES"**
   - Cari dan centang: `https://www.googleapis.com/auth/drive.file`
   - Klik **"UPDATE"**, lalu **"SAVE AND CONTINUE"**
6. **Test users**: Klik **"ADD USERS"**
   - Masukkan email Google yang akan Anda gunakan untuk testing
   - Klik **"ADD"**, lalu **"SAVE AND CONTINUE"**
7. Klik **"BACK TO DASHBOARD"**

---

## 🔑 Langkah 4: Buat OAuth Client ID

1. Di menu kiri, pilih **"APIs & Services"** → **"Credentials"**
2. Klik **"+ CREATE CREDENTIALS"** → **"OAuth client ID"**
3. **Application type**: Pilih **"Web application"**
4. **Name**: `SMKN62 Web Client`
5. **Authorized redirect URIs**: Klik **"+ ADD URI"**
   - Masukkan: `http://localhost/Data-Base-Guru/callback.php`
   - **PENTING**: Sesuaikan path dengan lokasi project Anda
   - Jika menggunakan port: `http://localhost:8080/Data-Base-Guru/callback.php`
6. Klik **"CREATE"**

7. **COPY CREDENTIALS** yang muncul:
   ```
   Your Client ID: 
   123456789-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com
   
   Your Client Secret:
   GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx
   ```
   
---

## 📂 Langkah 5: Buat Folder di Google Drive

1. Buka [Google Drive](https://drive.google.com/)
2. Buat **4 folder baru**:
   - 📚 **Kurikulum**
   - 👥 **Kesiswaan**  
   - 🏢 **Sapras dan Humas**
   - 📋 **Tata Usaha**

3. Untuk **setiap folder**, dapatkan Folder ID:
   - Klik kanan folder → **"Share"** → **"Anyone with the link"** → Copy link
   - URL format: `https://drive.google.com/drive/folders/1ABC...XYZ`
   - **Folder ID** = bagian setelah `/folders/` → contoh: `1ABC...XYZ`

---

## ⚙️ Langkah 6: Edit config.php

1. Buka file: `config.php`
2. Edit baris 8-9:

```php
// SEBELUM (Ganti ini):
define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');

// SESUDAH (Paste credentials Anda):
define('GOOGLE_CLIENT_ID', '123456789-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'GOCSPX-xxxxxxxxxxxxxxxxxxxxxxxx');
```

3. Edit baris 14-17 (Folder IDs):

```php
// SEBELUM:
define('FOLDER_KURIKULUM', 'FOLDER_ID_KURIKULUM');
define('FOLDER_KESISWAAN', 'FOLDER_ID_KESISWAAN');
define('FOLDER_SAPRAS_HUMAS', 'FOLDER_ID_SAPRAS_HUMAS');
define('FOLDER_TATA_USAHA', 'FOLDER_ID_TATA_USAHA');

// SESUDAH (Paste Folder IDs Anda):
define('FOLDER_KURIKULUM', '1ABC...XYZ123');
define('FOLDER_KESISWAAN', '1DEF...UVW456');
define('FOLDER_SAPRAS_HUMAS', '1GHI...RST789');
define('FOLDER_TATA_USAHA', '1JKL...OPQ012');
```

4. **SAVE** file `config.php`

---

## ✅ Langkah 7: Test Aplikasi

1. Buka browser
2. Akses: `http://localhost/Data-Base-Guru/login.php`
3. Seharusnya tidak ada error lagi
4. Klik **"Login dengan Google"**
5. Pilih akun Google (yang sudah didaftarkan di Test Users)
6. Klik **"Continue"** saat diminta izin akses Google Drive

---

## 🎉 Selesai!

Jika berhasil, Anda akan diredirect ke **Dashboard** dan bisa mulai upload file ke Google Drive!

---

## ❓ Troubleshooting

### Error: "Access blocked: This app's request is invalid"
- Pastikan **Redirect URI** di Google Console sama persis dengan di `config.php`
- Periksa tidak ada typo atau space tambahan

### Error: "Access denied"
- Pastikan email Anda sudah ditambahkan di **Test Users** (OAuth Consent Screen)

### Error: "Invalid client ID"
- Pastikan **Client ID** dan **Client Secret** sudah di-copy dengan benar
- Tidak ada space atau karakter tambahan

### Redirect URI mismatch
- URL di Google Console: `http://localhost/Data-Base-Guru/callback.php`
- URL di config.php line 10: `http://localhost/Data-Base-Guru/callback.php`
- **HARUS SAMA PERSIS** (case-sensitive)

---

**Need help?** Lihat `README.md` untuk dokumentasi lengkap atau buat issue di GitHub.
