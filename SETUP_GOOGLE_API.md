# Panduan Setup Google OAuth API untuk Database Management SMKN 62 Jakarta

## 🔐 LANGKAH-LANGKAH SETUP GOOGLE CLOUD CONSOLE

### 1️⃣ Buat Project di Google Cloud Console

1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. Login dengan akun Google Anda
3. Klik **Select a project** → **NEW PROJECT**
4. Isi nama project: **Database Management SMKN 62-Test** (atau sesuai keinginan)
5. Klik **CREATE**

### 2️⃣ Enable Google Drive API

1. Di menu sebelah kiri, pilih **APIs & Services** → **Library**
2. Cari: **Google Drive API**
3. Klik **Google Drive API**
4. Klik tombol **ENABLE**

### 3️⃣ Buat OAuth 2.0 Credentials

1. Di menu sebelah kiri, pilih **APIs & Services** → **Credentials**
2. Klik **+ CREATE CREDENTIALS** → pilih **OAuth client ID**
3. Jika diminta, klik **CONFIGURE CONSENT SCREEN**:
   - User Type: **External**
   - Klik **CREATE**
   - App name: **Database Management SMKN 62-Test**
   - User support email: **[email Anda]**
   - Developer contact: **[email Anda]**
   - Klik **SAVE AND CONTINUE**
   - Scopes: Klik **ADD OR REMOVE SCOPES**
     - Cari dan centang: `https://www.googleapis.com/auth/drive.file`
     - Klik **UPDATE** → **SAVE AND CONTINUE**
   - Test users: Klik **+ ADD USERS**
     - Masukkan email yang akan digunakan untuk testing
     - Klik **ADD** → **SAVE AND CONTINUE**
   - Klik **BACK TO DASHBOARD**

4. Kembali ke **Credentials**, klik **+ CREATE CREDENTIALS** → **OAuth client ID**
5. Application type: **Web application**
6. Name: **Database Management SMKN 62 Web**
7. **Authorized redirect URIs**: Klik **+ ADD URI**
   - Masukkan: `http://localhost/Data-Base-Guru/auth/callback.php`
   - ⚠️ **PENTING:** Pastikan menggunakan `/auth/callback.php` (BUKAN `/callback.php`)
8. Klik **CREATE**
9. Copy **Client ID** dan **Client Secret**

### 4️⃣ Update Konfigurasi Aplikasi

Edit file `includes/config.php`:

```php
// Ganti dengan Client ID dan Client Secret Anda
define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');
define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');
```

### 5️⃣ Buat Folder di Google Drive

1. Buka [Google Drive](https://drive.google.com/)
2. Login dengan akun yang sama
3. Buat 4 folder untuk setiap kategori:
   - **Kurikulum**
   - **Kesiswaan**
   - **Sapras & Humas**
   - **Tata Usaha**

4. Untuk setiap folder:
   - Klik kanan folder → **Share**
   - Set **Anyone with the link** → **Editor** (untuk testing)
   - Copy **Folder ID** dari URL:
     - URL: `https://drive.google.com/drive/folders/1abc123xyz`
     - Folder ID: `1abc123xyz`

5. Update `includes/config.php`:

```php
define('FOLDER_KESISWAAN', 'FOLDER_ID_KESISWAAN');
define('FOLDER_KURIKULUM', 'FOLDER_ID_KURIKULUM');
define('FOLDER_SAPRAS_HUMAS', 'FOLDER_ID_SAPRAS_HUMAS');
define('FOLDER_TATA_USAHA', 'FOLDER_ID_TATA_USAHA');
```

## ✅ VERIFIKASI SETUP

Cek file `includes/config.php` Anda:

```php
<?php
// ✅ Pastikan semua sudah terisi dengan credentials Anda sendiri
define('GOOGLE_CLIENT_ID', 'YOUR_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'YOUR_CLIENT_SECRET_HERE');
define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/auth/callback.php');

define('FOLDER_KESISWAAN', 'YOUR_FOLDER_ID_HERE');
define('FOLDER_KURIKULUM', 'YOUR_FOLDER_ID_HERE');
define('FOLDER_SAPRAS_HUMAS', 'YOUR_FOLDER_ID_HERE');
define('FOLDER_TATA_USAHA', 'YOUR_FOLDER_ID_HERE');
?>
```

⚠️ **CATATAN FOLDER ID:**
Jika Folder ID Anda mengandung parameter `?usp=sharing` atau `?usp=drive_link`, hapus bagian tersebut:
- ❌ `1abc123xyz?usp=sharing`
- ✅ `1abc123xyz`

## 🧪 TEST APLIKASI

1. Buka: `http://localhost/Data-Base-Guru/`
2. Klik **Sign in with Google**
3. Pilih akun Google yang sudah ditambahkan sebagai Test User
4. Klik **Allow** untuk memberikan akses
5. Seharusnya redirect ke Dashboard

## 🔧 TROUBLESHOOTING

### Error 400: redirect_uri_mismatch

**Penyebab:** Redirect URI di Google Cloud Console tidak sesuai dengan aplikasi

**Solusi:**
1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. **APIs & Services** → **Credentials**
3. Klik OAuth Client ID yang Anda buat
4. Di **Authorized redirect URIs**, pastikan ada:
   ```
   http://localhost/Data-Base-Guru/auth/callback.php
   ```
5. **HAPUS** redirect URI lama jika ada:
   ```
   http://localhost/Data-Base-Guru/callback.php  ❌ HAPUS INI
   ```
6. Klik **SAVE**
7. Test lagi aplikasi

### Error 403: access_denied

**Penyebab:** Akun Google belum ditambahkan sebagai Test User

**Solusi:**
1. Buka [Google Cloud Console](https://console.cloud.google.com/)
2. **APIs & Services** → **OAuth consent screen**
3. Scroll ke **Test users**
4. Klik **+ ADD USERS**
5. Masukkan email akun Google yang akan digunakan
6. Klik **SAVE**

### Error: "This app hasn't been verified"

**Penyebab:** Aplikasi masih dalam mode Testing

**Solusi (untuk development):**
- Klik **Advanced** → **Go to Database Management SMKN 62-Test (unsafe)**
- Klik **Allow**

**Solusi (untuk production):**
- Submit app untuk verification di Google Cloud Console

### Error: "Invalid folder ID"

**Penyebab:** Folder ID salah atau tidak ada akses

**Solusi:**
1. Pastikan Folder ID benar (tanpa `?usp=...`)
2. Pastikan folder di-share dengan akun yang login
3. Set permission minimal **Viewer** (recommended: **Editor**)

## 📚 REFERENSI

- [Google Drive API Documentation](https://developers.google.com/drive/api/v3/about-sdk)
- [OAuth 2.0 for Web Apps](https://developers.google.com/identity/protocols/oauth2/web-server)
- [Google API PHP Client Library](https://github.com/googleapis/google-api-php-client)

---

**Created:** 2025-10-21  
**Status:** ✅ Panduan setup lengkap Google OAuth & Drive API
