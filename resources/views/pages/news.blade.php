@extends('layouts.app')

@section('title', 'Berita — Go Green School')
@section('meta_description', 'Berita dan update terbaru dari kegiatan Go Green School. Aktivitas siswa, program lingkungan, workshop, dan kolaborasi sekolah ramah lingkungan.')

@section('content')

{{-- PAGE HEADER --}}
<section class="max-w-4xl mx-auto text-center px-6 mb-20 pt-8">
    <div class="inline-flex items-center justify-center p-3 bg-primary/10 rounded-full mb-6">
        <span class="material-symbols-outlined text-primary text-4xl">newspaper</span>
    </div>
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-slate-900 dark:text-slate-100 mb-6 leading-tight" data-i18n="news_title">
        Go Green School News
    </h1>
    <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto" data-i18n="news_tagline">
        Update kegiatan, program, dan pencapaian sekolah ramah lingkungan kami ♻️🌱
    </p>
</section>

{{-- NEWS GRID --}}
<section class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-stagger">

        {{-- News Item 1 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80" alt="Waste Calculator" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_student">Student Activities</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>9 Maret 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news1_title">Siswa XI RPL Luncurkan Kalkulator Sampah Kelas!</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news1_summary">Sebuah inovasi digital ramah lingkungan hasil kolaborasi siswa RPL untuk membantu tracking jejak karbon harian di area kelas.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'calculator-sampah') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>

        {{-- News Item 2 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8QF5FpDOnYcjRP12PLLTDAq5NBXlpJN9thTpv6AXppVwwjzCJvQ4Ta73Wd2LKy6Ps397Z5dQ3Hp4xJbUHT-nO6ZCCqPEZBbH9lO49V3XkKeReOF0psI0Y0wTxSlVdYoTfOwZ9xYV84vUcP_D-EvMEHSo1O-5iF_SHxihNtbX9-cq-08USLk6V6O0oF8zn9O6w0QZ28zyyWA2Nv8XzPHdnDTGiVrfS7My2bqunqcvFTWtsa1aftYAUp-k8y7HO-UdWS-Cc28j90Uuw" alt="Tree Planting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_program">Go Green Program</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>5 Maret 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news2_title">Penanaman 100 Pohon di Pekarangan Sekolah</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news2_summary">Mewujudkan paru-paru sekolah yang lebih sehat dengan aksi nyata penanaman pohon endemik oleh seluruh warga sekolah.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'penanaman-pohon') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>

        {{-- News Item 3 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" alt="Anti Plastic Campaign" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_program">Go Green Program</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>28 Februari 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news3_title">Kampanye Anti-Plastik: Sampah Berkurang 40%!</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news3_summary">Hasil evaluasi bulanan menunjukkan penurunan signifikan penggunaan plastik sekali pakai di area kantin dan koperasi sekolah.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'kampanye-anti-plastik') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>

        {{-- News Item 4 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=800&q=80" alt="B3 Workshop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_workshop">Workshop</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>20 Februari 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news4_title">Workshop Pengelolaan Sampah B3 Sukses!</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news4_summary">Edukasi mendalam tentang penanganan sampah elektronik dan bahan berbahaya lainnya bagi staf dan siswa tingkat akhir.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'workshop-b3') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>

        {{-- News Item 5 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBK2hJXCRtNCXpaxIYucNhP4ropjNrGQko2AFlXYfKl0xnzI5bmXzkETLSxuduv4VqhqjYVG7qbQxd78xTK8Y2NcKlt1Aei3NW29fv5GZIkBpzzOTnIP0RtcM0__bZBd9b0LLR0AMvdtm4rrJY5AxdWYVEjsbr1d0vHjuroTdJrUuh8Xqkm35aOks2fyxHNv801ltKl3liyBe5pHIGzAg-lUzesN1fd4tbTwW_AEVwh0LORIoBzQI0i6maLkHbH48GPbszl4B1dxN_f" alt="Global Warming Workshop" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_workshop">Workshop</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>14 Februari 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news5_title">Workshop Siswa tentang Pemanasan Global & Aksi Iklim</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news5_summary">Membekali generasi muda dengan pengetahuan dan langkah taktis menghadapi krisis iklim melalui diskusi interaktif.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'pemanasan-global') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>

        {{-- News Item 6 --}}
        <article class="group bg-white dark:bg-slate-900 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300 border border-slate-200 dark:border-slate-800 hover:border-primary/20 hover-lift">
            <div class="relative h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="RPL x Math Collaboration" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute top-4 left-4 bg-primary/90 backdrop-blur-sm text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider" data-i18n="news_cat_collab">Collaboration</span>
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 text-slate-500 text-sm mb-3">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>7 Februari 2026</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 leading-snug group-hover:text-primary transition-colors" data-i18n="news6_title">Kolaborasi RPL × Matematika Hasilkan Tools Edukasi</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm line-clamp-2 mb-4 leading-relaxed" data-i18n="news6_summary">Integrasi kurikulum yang menghasilkan aplikasi pembelajaran statistik lingkungan yang inovatif dan mudah digunakan.</p>
                <a class="inline-flex items-center gap-1 text-primary font-bold hover:underline underline-offset-4 transition-all" href="{{ route('news.show', 'kolaborasi-rpl') }}">
                    <span data-i18n="news_read_more">Read More</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </article>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="max-w-7xl mx-auto px-6 lg:px-10 mt-24 mb-32">
    <div class="bg-primary/5 rounded-3xl p-12 lg:p-20 text-center relative overflow-hidden border border-primary/10">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-primary/10 rounded-full blur-3xl"></div>
        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-100 mb-6 relative z-10" data-i18n="news_follow">
            Ikuti terus berita kami untuk inspirasi hidup lebih hijau! 🌍
        </h2>
        <div class="flex flex-col sm:flex-row gap-4 justify-center relative z-10">
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center h-11 px-8 bg-white border-2 border-primary text-primary rounded-lg font-bold hover:bg-primary/5 transition-colors">
                ← Home
            </a>
            <a href="https://wa.me/6281255585688" target="_blank" class="inline-flex items-center justify-center h-11 px-8 bg-primary text-slate-900 rounded-lg font-bold shadow-lg shadow-green-500/25 hover:bg-green-500 transition-all">
                Contact Us →
            </a>
        </div>
    </div>
</section>

@endsection
