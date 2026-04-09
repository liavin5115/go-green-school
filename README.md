# Go Green School

Website edukasi lingkungan untuk kampanye sekolah hijau (Go Green School), dibangun menggunakan Laravel + Blade + Tailwind/Vite.

## Informasi Umum

- Nama Proyek: Go Green School
- Tujuan: Menyediakan portal informasi, edukasi, dan kampanye lingkungan di sekolah.
- Framework: Laravel 12
- Bahasa: PHP 8.2+, JavaScript, Blade
- Frontend Build Tool: Vite
- Database default: SQLite (dapat diganti MySQL/PostgreSQL)

## Nama Kelompok

Kelompok 4 Go Green School (XII RPL - SMK Karya Bangsa Sintang)

### Anggota Kelompok 4

1. Rafa Satria Isyo Pratama (Full Stack Website)
2. Andrean Milano (Poster Designer dan Pembuatan Vidio)
3. Patrisia Kristianti Rifa (Pembuatan Vidio Dan Editor vidio)
4. Ilham (Poster Designer)

## Fitur

- Multi halaman profil kampanye Go Green School.
- Dukungan bahasa EN/ID (switch language di frontend).
- Tampilan responsif untuk desktop dan mobile.
- Halaman Calculator sampah kelas.
- Halaman Developers (tim pembuat website).
- Halaman Contact dengan opsi kirim Email dan WhatsApp.
- Integrasi Email SMTP (Gmail/App Password).
- Integrasi WhatsApp API (Fonnte) untuk kirim pesan otomatis.

## Daftar Halaman (Pages)

- / -> Home
- /about -> About
- /developers -> Developers
- /programs -> Programs
- /learn -> Learn
- /gallery -> Gallery
- /news -> News
- /news/{slug} -> News Detail
- /calculator -> Calculator
- /join -> Join
- /contact -> Contact

## Endpoint Form Contact

- POST /contact/email -> kirim pesan ke email
- POST /contact/whatsapp -> kirim pesan ke WhatsApp API

## Cara Instalasi

### 1. Clone repository

```bash
git clone <URL_REPOSITORY_KAMU>
cd go-green-school
```

### 2. Install dependency backend

```bash
composer install
```

### 3. Install dependency frontend

```bash
npm install
```

### 4. Siapkan environment

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Konfigurasi .env

Minimal sesuaikan bagian berikut:

- APP_URL
- DB_CONNECTION
- MAIL_MAILER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD
- WHATSAPP_API_URL, WHATSAPP_API_TOKEN, WHATSAPP_TARGET

Contoh target WhatsApp format internasional (tanpa 0 di depan):

```env
WHATSAPP_TARGET=6285250341098
```

### 6. Migrasi database

```bash
php artisan migrate
```

### 7. Jalankan project (mode development)

Jalankan server Laravel:

```bash
php artisan serve
```

Di terminal lain jalankan Vite:

```bash
npm run dev
```

Opsional (script gabungan dari composer):

```bash
composer run dev
```

## Struktur Singkat

- resources/views/pages -> halaman utama website
- resources/views/layouts -> layout utama + navbar/footer
- resources/views/emails -> template email contact
- app/Http/Controllers/ContactController.php -> logic kirim email/whatsapp
- routes/web.php -> routing halaman dan endpoint

## Live Demo

- Website Demo:
	https://go-green-school-main-en87ct.free.laravel.cloud/

## Link Poster dan Video Promosi

- Google Drive Poster:
	https://drive.google.com/drive/folders/139JwDc4bctpxvGRRXvgH933jPkkLPcEK?usp=sharing

- TikTok Video Promosi:
	https://vt.tiktok.com/ZSH5YuTQ2/

## Catatan Deploy

- Pastikan variable environment untuk email dan WhatsApp sudah valid.
- Jalankan cache clear setelah ubah .env:

```bash
php artisan optimize:clear
```

## Lisensi

Proyek ini dibuat untuk kebutuhan pembelajaran dan publikasi karya tim Go Green School.
