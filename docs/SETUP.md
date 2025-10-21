# Setup Cepat - Database Management SMKN 62

## Langkah-Langkah Setup

### 1️⃣ Install Composer Dependencies

```bash
composer install
```

### 2️⃣ Setup Google Drive API

#### Buat Project & Enable API:
1. Buka https://console.cloud.google.com/
2. Create new project: "SMKN62 Database"
3. Enable "Google Drive API"

#### Buat OAuth Credentials:
1. APIs & Services > Credentials
2. Create Credentials > OAuth client ID
3. Configure Consent Screen (jika perlu):
   - External
   - App name: SMKN62 Database
   - Add your email as test user
4. Web application
5. Authorized redirect URIs:
   ```
   http://localhost/Data-Base-Guru/callback.php
   ```
   (sesuaikan dengan path Anda)
6. Save Client ID & Client Secret

#### Buat Folder di Google Drive:
1. Buka https://drive.google.com/
2. Buat 4 folder:
   - Kurikulum
   - Kesiswaan
   - Sapras & Humas
   - Tata Usaha
3. Copy Folder ID dari URL setiap folder
   - Format: `https://drive.google.com/drive/folders/FOLDER_ID_HERE`

### 3️⃣ Konfigurasi Aplikasi

```bash
# Copy config example
cp config.example.php config.php
```

Edit `config.php` dengan data Anda:
- GOOGLE_CLIENT_ID
- GOOGLE_CLIENT_SECRET
- GOOGLE_REDIRECT_URI
- Folder IDs (4 folder)

### 4️⃣ Buat Folder Data

**Linux/Mac:**
```bash
mkdir data
chmod 777 data
```

**Windows (PowerShell):**
```powershell
New-Item -ItemType Directory -Path "data"
```

### 5️⃣ Jalankan Aplikasi

**PHP Built-in Server:**
```bash
php -S localhost:8000
```
Akses: http://localhost:8000/login.php

**XAMPP/WAMP:**
- Copy project ke htdocs/www
- Akses: http://localhost/Data-Base-Guru/login.php

---

## ✅ Checklist Setup

- [ ] Composer installed
- [ ] Dependencies installed (`composer install`)
- [ ] Google Cloud Project created
- [ ] Google Drive API enabled
- [ ] OAuth credentials created
- [ ] 4 folders created in Google Drive
- [ ] config.php configured with all credentials & folder IDs
- [ ] data/ folder created
- [ ] Web server running
- [ ] Tested login with Google account

---

## 🚀 Quick Test

1. Buka login.php
2. Login dengan Google
3. Upload test file ke salah satu kategori
4. Tambah link kegiatan
5. Tambah Google Form

---

## ❓ Troubleshooting

### Error: vendor/autoload.php not found
```bash
composer install
```

### Error: Invalid Client ID
- Periksa GOOGLE_CLIENT_ID di config.php
- Pastikan OAuth credentials sudah dibuat

### Error: Redirect URI mismatch
- Pastikan URI di Google Console sama dengan config.php
- Format: http://localhost/Data-Base-Guru/callback.php

### Error: data/database.json cannot be created
- Pastikan folder data/ sudah dibuat
- Cek permission folder data/

---

## 📖 Dokumentasi Lengkap

Lihat README.md untuk dokumentasi lengkap.

---

**Good luck! 🎉**
