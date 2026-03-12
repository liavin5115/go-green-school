@extends('layouts.app')

@section('title', 'Berita — Go Green School')
@section('meta_description', 'Berita dan update terbaru dari kegiatan Go Green School. Aktivitas siswa, program lingkungan, workshop, dan kolaborasi sekolah ramah lingkungan.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">newspaper</span>
        <h1 class="text-4xl font-bold text-slate-900 dark:text-slate-100 tracking-tight mb-3" data-i18n="news_title">Go Green School News</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto" data-i18n="news_tagline">Update kegiatan, program, dan pencapaian sekolah ramah lingkungan kami ♻️🌱</p>
    </div>
</section>

{{-- NEWS GRID --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

        {{-- Berita 1 --}}
        <article id="berita-1" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80" alt="Waste Calculator" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">9 Maret 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_student">Student Activities</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news1_title">Siswa XI RPL Luncurkan Kalkulator Sampah Kelas!</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news1_full">Siswa kelas XI RPL berhasil mengembangkan aplikasi kalkulator sampah digital yang membantu setiap kelas memantau dan mengurangi produksi sampah harian mereka. Aplikasi ini memungkinkan siswa memasukkan jenis dan berat sampah yang dihasilkan setiap hari, kemudian memberikan analisis mingguan dan tips praktis untuk mengurangi sampah. Inisiatif ini bermula dari proyek kelas dan kini telah diterapkan di seluruh sekolah. Kalkulator ini telah membantu mengurangi rata-rata sampah kelas sebesar 25% hanya dalam bulan pertama penggunaan.</p>
            </div>
        </article>

        {{-- Berita 2 --}}
        <article id="berita-2" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1542601098-8fc9e5bac1f5?auto=format&fit=crop&w=800&q=80" alt="Tree Planting" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">5 Maret 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_program">Go Green Program</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news2_title">Penanaman 100 Pohon di Pekarangan Sekolah</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news2_full">Dalam upaya kolaboratif besar-besaran, siswa, guru, dan orang tua bergabung untuk menanam 100 pohon buah dan peneduh di seluruh area sekolah. Acara penanaman pohon ini menjadi puncak dari pekan lingkungan Go Green School. Setiap kelas diberi area untuk menanam dan merawat pohon mereka. Inisiatif ini bertujuan untuk menciptakan lebih banyak ruang hijau, mengurangi emisi karbon di kampus, dan menyediakan panen buah untuk kantin sekolah di masa depan. Acara ini didukung oleh dinas kehutanan setempat yang menyumbangkan bibit dan memberikan panduan penanaman.</p>
            </div>
        </article>

        {{-- Berita 3 --}}
        <article id="berita-3" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" alt="Anti Plastic Campaign" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">28 Februari 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_program">Go Green Program</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news3_title">Kampanye Anti-Plastik: Sampah Berkurang 40%!</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news3_full">Melalui kampanye intensif selama satu bulan, Go Green School mencapai pengurangan sampah plastik yang luar biasa sebesar 40%. Siswa berjanji untuk membawa wadah dan tumbler yang dapat digunakan ulang alih-alih plastik sekali pakai. Kantin sekolah juga beralih ke kemasan yang dapat terurai secara hayati. Poster motivasi yang dirancang oleh siswa seni dipasang di seluruh sekolah, dan penimbangan sampah plastik mingguan melacak kemajuan. Kampanye ini begitu sukses sehingga sekolah-sekolah tetangga telah meminta bimbingan untuk menjalankan program serupa.</p>
            </div>
        </article>

        {{-- Berita 4 --}}
        <article id="berita-4" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=800&q=80" alt="B3 Workshop" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">20 Februari 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_workshop">Workshop</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news4_title">Workshop Pengelolaan Sampah B3 Sukses!</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news4_full">Workshop interaktif tentang pengelolaan sampah B3 (bahan berbahaya dan beracun) diselenggarakan untuk semua tingkat kelas. Para ahli dari dinas lingkungan mendemonstrasikan cara mengidentifikasi sampah B3 umum yang ditemukan di sekolah, seperti baterai bekas, termometer pecah, dan limbah laboratorium kimia. Siswa berlatih teknik penanganan yang tepat menggunakan peralatan keselamatan dan belajar tentang bahaya lingkungan dan kesehatan dari pembuangan B3 yang tidak tepat. Workshop diakhiri dengan setiap kelas membuat titik pengumpulan sampah B3 dengan pelabelan dan instruksi keselamatan yang tepat.</p>
            </div>
        </article>

        {{-- Berita 5 --}}
        <article id="berita-5" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1569163139394-de4e4f43e4e3?auto=format&fit=crop&w=800&q=80" alt="Global Warming Workshop" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">14 Februari 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_workshop">Workshop</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news5_title">Workshop Siswa tentang Pemanasan Global & Aksi Iklim</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news5_full">Lebih dari 200 siswa berpartisipasi dalam workshop komprehensif dua hari tentang pemanasan global dan aksi iklim praktis. Hari pertama menampilkan presentasi tentang ilmu iklim, gas rumah kaca, dan dampak aktivitas manusia terhadap lingkungan. Hari kedua bersifat praktis, dengan siswa menghitung jejak karbon pribadi mereka dan mencari solusi untuk mengurangi emisi di seluruh sekolah. Pembicara tamu dari LSM lingkungan berbagi kisah inspiratif tentang inisiatif iklim yang dipimpin pemuda di seluruh dunia. Workshop menghasilkan "Ikrar Aksi Iklim" yang ditandatangani oleh semua peserta.</p>
            </div>
        </article>

        {{-- Berita 6 --}}
        <article id="berita-6" class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm flex flex-col overflow-hidden transition-all hover:shadow-md hover:border-primary/50">
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="RPL x Math Collaboration" class="w-full h-56 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <div class="flex items-center gap-3 mb-3">
                    <div class="flex items-center gap-1 text-slate-400">
                        <span class="material-symbols-outlined text-sm">calendar_month</span>
                        <span class="text-xs font-medium">7 Februari 2026</span>
                    </div>
                    <span class="text-xs font-bold text-primary bg-primary/10 px-2 py-0.5 rounded-full" data-i18n="news_cat_collab">Collaboration</span>
                </div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3" data-i18n="news6_title">Kolaborasi RPL × Matematika Hasilkan Tools Edukasi</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news6_full">Dalam proyek interdisipliner yang menarik, siswa dari kelas RPL (Rekayasa Perangkat Lunak) dan Matematika berkolaborasi untuk membuat alat pendidikan berbasis web yang interaktif. Alat-alat ini mencakup kalkulator jejak karbon, grafik interaktif yang menunjukkan kemajuan pengurangan sampah, dan permainan kuis tentang fakta lingkungan. Siswa Matematika menyediakan model statistik dan rumus, sementara siswa RPL menangani pemrograman dan desain antarmuka pengguna. Alat-alat ini kini tersedia di situs web sekolah dan telah dipuji oleh guru karena membuat pendidikan lingkungan lebih menarik dan berbasis data.</p>
            </div>
        </article>

    </div>

    {{-- CLOSING MESSAGE --}}
    <div class="mt-16 rounded-2xl bg-background-dark px-8 py-10 text-center text-white">
        <span class="material-symbols-outlined text-5xl mb-3 text-primary">eco</span>
        <p class="text-lg font-semibold leading-relaxed" data-i18n="news_follow">Ikuti terus berita kami untuk inspirasi hidup lebih hijau! 🌍</p>
    </div>

    {{-- BACK / CTA --}}
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-lg h-11 px-8 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-semibold text-sm text-center" data-i18n="nav_home">
            ← Home
        </a>
        <a href="{{ route('join') }}" class="inline-flex items-center justify-center rounded-lg h-11 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold text-sm text-center" data-i18n="home_cta_btn">
            Join Now →
        </a>
    </div>
</section>

@endsection
