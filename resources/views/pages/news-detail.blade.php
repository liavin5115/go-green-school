@extends('layouts.app')

@php
$articles = [
    'calculator-sampah' => [
        'title' => 'news1_title',
        'category' => 'news_cat_student',
        'date' => '9 Maret 2026',
        'image' => 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'news1_summary',
        'full' => 'news1_full',
    ],
    'penanaman-pohon' => [
        'title' => 'news2_title',
        'category' => 'news_cat_program',
        'date' => '5 Maret 2026',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8QF5FpDOnYcjRP12PLLTDAq5NBXlpJN9thTpv6AXppVwwjzCJvQ4Ta73Wd2LKy6Ps397Z5dQ3Hp4xJbUHT-nO6ZCCqPEZBbH9lO49V3XkKeReOF0psI0Y0wTxSlVdYoTfOwZ9xYV84vUcP_D-EvMEHSo1O-5iF_SHxihNtbX9-cq-08USLk6V6O0oF8zn9O6w0QZ28zyyWA2Nv8XzPHdnDTGiVrfS7My2bqunqcvFTWtsa1aftYAUp-k8y7HO-UdWS-Cc28j90Uuw',
        'summary' => 'news2_summary',
        'full' => 'news2_full',
    ],
    'kampanye-anti-plastik' => [
        'title' => 'news3_title',
        'category' => 'news_cat_program',
        'date' => '28 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'news3_summary',
        'full' => 'news3_full',
    ],
    'workshop-b3' => [
        'title' => 'news4_title',
        'category' => 'news_cat_workshop',
        'date' => '20 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'news4_summary',
        'full' => 'news4_full',
    ],
    'pemanasan-global' => [
        'title' => 'news5_title',
        'category' => 'news_cat_workshop',
        'date' => '14 Februari 2026',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBK2hJXCRtNCXpaxIYucNhP4ropjNrGQko2AFlXYfKl0xnzI5bmXzkETLSxuduv4VqhqjYVG7qbQxd78xTK8Y2NcKlt1Aei3NW29fv5GZIkBpzzOTnIP0RtcM0__bZBd9b0LLR0AMvdtm4rrJY5AxdWYVEjsbr1d0vHjuroTdJrUuh8Xqkm35aOks2fyxHNv801ltKl3liyBe5pHIGzAg-lUzesN1fd4tbTwW_AEVwh0LORIoBzQI0i6maLkHbH48GPbszl4B1dxN_f',
        'summary' => 'news5_summary',
        'full' => 'news5_full',
    ],
    'kolaborasi-rpl' => [
        'title' => 'news6_title',
        'category' => 'news_cat_collab',
        'date' => '7 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=80',
        'summary' => 'news6_summary',
        'full' => 'news6_full',
    ],
];

$article = $articles[$slug] ?? null;
@endphp

@if ($article)
    @section('title', 'Berita — Go Green School')
    @section('meta_description', 'Berita detail dari Go Green School')

    @section('content')

    {{-- HERO with Featured Image --}}
    <div class="w-full h-96 bg-cover bg-center bg-no-repeat relative overflow-hidden">
        <img src="{{ $article['image'] }}" alt="Article Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>

        <div class="absolute bottom-0 left-0 right-0 px-6 py-12">
            <div class="max-w-4xl mx-auto">
                <span class="inline-block bg-primary text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4" data-i18n="{{ $article['category'] }}">Category</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4" data-i18n="{{ $article['title'] }}">Article Title</h1>
                <div class="flex items-center gap-4 text-slate-200">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>{{ $article['date'] }}</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ARTICLE CONTENT --}}
    <section class="max-w-4xl mx-auto px-6 py-16 lg:px-10">
        {{-- Summary --}}
        <div class="mb-10 pb-10 border-b border-slate-200 dark:border-slate-800">
            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed italic" data-i18n="{{ $article['summary'] }}">Article summary goes here</p>
        </div>

        {{-- Full Content --}}
        <div class="prose prose-slate dark:prose-invert max-w-none mb-12">
            <div class="text-slate-600 dark:text-slate-400 leading-relaxed space-y-4">
                <p data-i18n="{{ $article['full'] }}">Full article content goes here</p>
            </div>
        </div>

        {{-- Related Links --}}
        <div class="bg-primary/5 dark:bg-primary/10 rounded-xl border border-primary/20 p-8 mb-12">
            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-4">📚 Baca Juga</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="{{ route('news') }}" class="flex items-center gap-3 group">
                    <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">newspaper</span>
                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Kembali ke Berita</span>
                </a>
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">home</span>
                    <span class="text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Kembali ke Beranda</span>
                </a>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="bg-background-dark dark:bg-slate-950 rounded-xl p-10 text-center text-white">
            <h3 class="text-2xl font-bold mb-3">Tertarik untuk bergabung?</h3>
            <p class="text-slate-300 mb-6">Jadilah bagian dari gerakan Go Green School dan buat perbedaan untuk lingkungan kita.</p>
            <a href="{{ route('join') }}" class="inline-flex items-center justify-center h-12 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold rounded-lg shadow-lg">
                <span data-i18n="home_cta_btn">Bergabung Sekarang</span>
            </a>
        </div>
    </section>

    @endsection
@else
    {{-- Article Not Found --}}
    @section('content')
    <div class="max-w-4xl mx-auto px-6 py-20 text-center">
        <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 mb-4">Berita Tidak Ditemukan</h1>
        <p class="text-slate-600 dark:text-slate-400 mb-6">Maaf, artikel yang Anda cari tidak tersedia.</p>
        <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
            <span class="material-symbols-outlined">arrow_back</span>
            Kembali ke Berita
        </a>
    </div>
    @endsection
@endif
