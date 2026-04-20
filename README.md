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


### Anggota & Pembagian Tugas

**1. Rafa Satria Isyo Pratama**  
- Bertanggung jawab dalam pembuatan website, meliputi perancangan awal tampilan dan pengembangan fitur-fitur web.  
- Mengembangkan sistem backend menggunakan Laravel serta integrasi frontend dengan Blade, Tailwind, dan Vite.  
- Mengimplementasikan fitur seperti calculator, multi halaman, serta integrasi API (Email dan WhatsApp).  

**2. Andrean Milano**  
- Bertanggung jawab dalam pembuatan poster Go Green School untuk kebutuhan promosi.  
- Turut membantu dalam pembuatan dan pengeditan video promosi.  
- Melakukan pengujian (testing) terhadap fitur-fitur website untuk memastikan berjalan dengan baik.  

**3. Patrisia Kristianti Rifa**  
- Bertanggung jawab dalam pembuatan dan pengeditan video promosi Go Green School.  
- Mengelola akun media sosial untuk keperluan publikasi dan kampanye TikTok.  
- Membantu dalam penyebaran konten promosi agar menjangkau audiens yang lebih luas.  

**4. Ilham**  
- Bertanggung jawab dalam pembuatan desain poster Go Green School untuk kebutuhan visual kampanye.  
- Membantu memastikan desain sesuai dengan tema lingkungan dan branding proyek.  
- Melakukan pengujian (testing) pada tampilan dan fitur website.  


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

## Poster dan Video Promosi

### Preview Poster (Tampil Langsung di GitHub)

#### Poster Andrean Milano

<p>
	<img src="public/images/ANDRE%20POSTER/Promosi%20Andre.jpeg" alt="Poster Andrean Milano" width="380" />
</p>

#### Poster Ilham

<p>
	<img src="public/images/ILHAM%20POSTER/Poster%201%20Ilham.jpg" alt="Poster Ilham 1" width="260" />
	<img src="public/images/ILHAM%20POSTER/Poster%202%20Ilham.jpg" alt="Poster Ilham 2" width="260" />
	<img src="public/images/ILHAM%20POSTER/Poster%203%20Ilham%20.jpg" alt="Poster Ilham 3" width="260" />
	<img src="public/images/ILHAM%20POSTER/Poster%204%20Ilham.jpg" alt="Poster Ilham 4" width="260" />
	<img src="public/images/ILHAM%20POSTER/Poster%20Bi%20Ilham.jpg" alt="Poster Ilham BI" width="260" />
	<img src="public/images/ILHAM%20POSTER/promosi%20web%20Ilham.png" alt="Poster Promosi Web Ilham" width="260" />
</p>

### Link Eksternal

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
