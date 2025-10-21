# Quick Setup Config

## 1. Copy Template Config
```bash
copy includes\config.example.php includes\config.php
```

## 2. Isi Credential dari Google Cloud Console

### A. Client ID & Secret
1. Buka [Google Cloud Console](https://console.cloud.google.com)
2. Pilih project atau buat baru
3. APIs & Services → Credentials
4. Buat OAuth 2.0 Client ID (Web application)
5. Copy **Client ID** dan **Client Secret**

### B. Authorized Redirect URI
Tambahkan di Google Console:
```
http://localhost/Data-Base-Guru/callback.php
```

### C. Enable APIs
1. APIs & Services → Library
2. Enable: **Google Drive API**
3. Enable: **Google Sheets API v4**

## 3. Setup Google Drive Folders

1. Buka [Google Drive](https://drive.google.com)
2. Buat 4 folder:
   - Kurikulum
   - Kesiswaan
   - Sapras & Humas
   - Tata Usaha
3. Klik folder → Get link → Copy ID dari URL
   ```
   https://drive.google.com/drive/folders/FOLDER_ID_HERE
   ```

## 4. Setup Google Sheets

1. Buat [Google Sheets baru](https://sheets.google.com)
2. Buat 2 sheets:
   - **Links** dengan header: `Title | URL | Created At | Updated At`
   - **Forms** dengan header: `Title | URL | Created At | Updated At`
3. Copy Spreadsheet ID dari URL:
   ```
   https://docs.google.com/spreadsheets/d/SPREADSHEET_ID_HERE/edit
   ```

## 5. Update includes/config.php

```php
define('GOOGLE_CLIENT_ID', 'your-actual-client-id');
define('GOOGLE_CLIENT_SECRET', 'your-actual-client-secret');
define('GOOGLE_REDIRECT_URI', 'http://localhost/Data-Base-Guru/callback.php');

define('FOLDER_KURIKULUM', 'folder-id-kurikulum');
define('FOLDER_KESISWAAN', 'folder-id-kesiswaan');
define('FOLDER_SAPRAS_HUMAS', 'folder-id-sapras-humas');
define('FOLDER_TATA_USAHA', 'folder-id-tata-usaha');

define('GOOGLE_SHEETS_ID', 'your-spreadsheet-id');
```

## 6. Test Aplikasi

1. Jalankan web server (XAMPP/WAMP)
2. Buka: `http://localhost/Data-Base-Guru/login.php`
3. Login dengan Google
4. Test upload file & manage links

## Troubleshooting

### Error: "Redirect URI Mismatch"
✅ Pastikan redirect URI di Google Console sama persis:
```
http://localhost/Data-Base-Guru/callback.php
```

### Error: "Access Denied"
✅ Pastikan akun Google Anda:
- Punya akses ke folder Google Drive
- Punya akses ke Google Sheets
- Terdaftar sebagai Test User di OAuth Consent Screen (jika masih testing)

### Error: "The server cannot process the request because it is malformed"
✅ Penyebab:
- Client ID atau Client Secret salah/kosong
- Spreadsheet ID atau Folder ID salah
- API belum di-enable

## Panduan Lengkap

Lihat dokumentasi lengkap di:
- [docs/SETUP.md](docs/SETUP.md)
- [docs/SETUP_GOOGLE_API.md](docs/SETUP_GOOGLE_API.md)
