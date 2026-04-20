<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title', 'Go Green School')</title>
<meta name="description" content="@yield('meta_description', 'Go Green School — Building an Environmentally Conscious Generation. An environmental education portal for eco-friendly schools in Indonesia.')">
<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}"/>
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: "#11d442",
                    "background-light": "#f6f8f6",
                    "background-forest": "#102215",
                },
                fontFamily: {
                    sans: ["Lexend", "sans-serif"],
                },
            },
        },
    }
</script>
<style>
    /* Global Responsive Baseline */
    :root {
        --page-gutter: clamp(1rem, 3vw, 2.5rem);
    }
    *, *::before, *::after {
        box-sizing: border-box;
    }
    html {
        -webkit-text-size-adjust: 100%;
        text-size-adjust: 100%;
    }
    body {
        min-width: 320px;
        overflow-x: clip;
    }
    main {
        width: 100%;
    }
    :where(section, article, aside, header, footer, nav, div) {
        min-width: 0;
    }
    :where(h1, h2, h3, h4, p, li, td, th) {
        overflow-wrap: anywhere;
    }
    img, svg, video, canvas, iframe {
        max-width: 100%;
        height: auto;
    }

    /* Language & Mobile Menu */
    .lang-btn { transition: all 0.2s; }
    .lang-btn.active { background-color: #11d442; color: #0d1117; border-color: #11d442; }
    .mobile-menu { display: none; }
    .mobile-menu.open { display: flex; }

    /* Floating Quick Controls */
    .floating-quick-controls {
        position: fixed;
        right: 1rem;
        bottom: 1rem;
        z-index: 70;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.55rem;
        padding: 0.65rem;
        border: 1px solid #cbd5e1;
        border-radius: 1rem;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(8px);
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.14);
    }
    .floating-lang-switch {
        display: flex;
        align-items: center;
        overflow: hidden;
        border: 1px solid #cbd5e1;
        border-radius: 9999px;
        background: #ffffff;
    }
    @media (max-width: 640px) {
        .floating-quick-controls {
            right: 0.65rem;
            bottom: 0.65rem;
            gap: 0.4rem;
            padding: 0.5rem;
            border-radius: 0.85rem;
        }
        .floating-lang-switch .lang-btn {
            padding: 0.3rem 0.6rem;
            font-size: 0.68rem;
        }
    }

    /* Form Inputs */
    input, textarea, select {
        border: 1px solid #cbd5e1;
        border-radius: 0.5rem;
        background: white;
        padding: 0.65rem 1rem;
        width: 100%;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.3s ease;
    }
    input:focus, textarea:focus, select:focus {
        border-color: #11d442;
        box-shadow: 0 0 0 3px rgba(17, 212, 66, 0.1);
    }

    /* Global Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideInUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes slideInDown {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes slideInLeft {
        from { transform: translateX(-40px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideInRight {
        from { transform: translateX(40px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes scaleIn {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.6; }
    }
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }

    /* Animation Utilities */
    .animate-fade-in { animation: fadeIn 0.6s ease-out; }
    .animate-slide-up { animation: slideInUp 0.6s ease-out; }
    .animate-slide-down { animation: slideInDown 0.6s ease-out; }
    .animate-slide-left { animation: slideInLeft 0.6s ease-out; }
    .animate-slide-right { animation: slideInRight 0.6s ease-out; }
    .animate-scale-in { animation: scaleIn 0.5s ease-out; }
    .animate-bounce-slow { animation: bounce 2s ease-in-out infinite; }
    .animate-pulse-slow { animation: pulse 3s ease-in-out infinite; }

    /* Stagger Animation for Lists */
    .animate-stagger > * { animation: slideInUp 0.6s ease-out backwards; }
    .animate-stagger > *:nth-child(1) { animation-delay: 0.1s; }
    .animate-stagger > *:nth-child(2) { animation-delay: 0.2s; }
    .animate-stagger > *:nth-child(3) { animation-delay: 0.3s; }
    .animate-stagger > *:nth-child(4) { animation-delay: 0.4s; }
    .animate-stagger > *:nth-child(5) { animation-delay: 0.5s; }
    .animate-stagger > *:nth-child(6) { animation-delay: 0.6s; }

    /* Smooth Hover Effects */
    .transition-smooth { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
    .hover-glow:hover { box-shadow: 0 0 20px rgba(17, 212, 66, 0.3); }
    .hover-scale:hover { transform: scale(1.05); }

    /* Button Animations */
    .btn-animated {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .btn-animated:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(17, 212, 66, 0.2); }
    .btn-animated:active { transform: translateY(0); }

    /* Card Entrance Animations */
    .card-entrance { animation: slideInUp 0.7s ease-out backwards; }
    .card-entrance:nth-child(1) { animation-delay: 0.1s; }
    .card-entrance:nth-child(2) { animation-delay: 0.2s; }
    .card-entrance:nth-child(3) { animation-delay: 0.3s; }

    /* Navigation Animation */
    nav { animation: slideInDown 0.5s ease-out; }

    /* Hero Section */
    .hero-title { animation: slideInUp 0.8s ease-out; }
    .hero-subtitle { animation: slideInUp 0.8s ease-out 0.2s both; }
    .hero-cta { animation: scaleIn 0.6s ease-out 0.4s both; }

    /* Animated Eco Pattern For Non-Home Pages */
    .site-floating-eco-area {
        position: relative;
        isolation: isolate;
        overflow: hidden;
    }
    .site-floating-eco-bg {
        --eco-tile-size: 320px;
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        overflow: hidden;
        background-color: #f8f3e8;
        opacity: 0.3;
        display: grid;
        grid-template-rows: repeat(6, minmax(0, 1fr));
    }
    .site-floating-eco-row {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        opacity: 0.95;
    }
    .site-floating-eco-row::before {
        content: "";
        position: absolute;
        top: 0;
        left: calc(0px - var(--eco-tile-size));
        width: calc(100% + (var(--eco-tile-size) * 2));
        height: 100%;
        background-image: url('/images/eco-doodle-tile.svg');
        background-size: var(--eco-tile-size) var(--eco-tile-size);
        background-repeat: repeat;
        background-position: 0 0;
        transform: translate3d(0, 0, 0);
        animation: siteEcoRowLeft var(--row-duration, 24s) linear infinite;
        will-change: transform;
        backface-visibility: hidden;
    }
    .site-floating-eco-row:nth-child(even)::before {
        animation-name: siteEcoRowRight;
    }
    @keyframes siteEcoRowLeft {
        from { transform: translate3d(0, 0, 0); }
        to { transform: translate3d(calc(0px - var(--eco-tile-size)), 0, 0); }
    }
    @keyframes siteEcoRowRight {
        from { transform: translate3d(calc(0px - var(--eco-tile-size)), 0, 0); }
        to { transform: translate3d(0, 0, 0); }
    }
    @media (max-width: 768px) {
        .site-floating-eco-bg {
            --eco-tile-size: 200px;
        }
        .site-floating-eco-bg {
            opacity: 0.22;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .site-floating-eco-row::before {
            animation-duration: 36s;
        }
    }
</style>
</head>
<body class="bg-background-light font-sans text-slate-900 antialiased min-h-screen flex flex-col relative overflow-x-hidden">

{{-- HEADER --}}
<header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-background-light/95 backdrop-blur-md">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6 lg:px-10">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0">
            <div class="flex h-8 w-8 items-center justify-center text-primary">
                <span class="material-symbols-outlined text-3xl">eco</span>
            </div>
            <span class="text-sm sm:text-lg font-bold text-slate-900 tracking-tight whitespace-nowrap">Go Green School</span>
        </a>

        {{-- Desktop Nav --}}
        <nav class="hidden lg:flex items-center gap-6 xl:gap-8">
            <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('home') }}" data-i18n="nav_home">Home</a>
            <a class="text-sm font-medium {{ request()->routeIs('about') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('about') }}" data-i18n="nav_about">About</a>
            <a class="text-sm font-medium {{ request()->routeIs('developers') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('developers') }}" data-i18n="nav_developers">Developers</a>
            <a class="text-sm font-medium {{ request()->routeIs('learn') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('learn') }}" data-i18n="nav_learn">Learn</a>
            <a class="text-sm font-medium {{ request()->routeIs('programs') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('programs') }}" data-i18n="nav_programs">Programs</a>
            <a class="text-sm font-medium {{ request()->routeIs('gallery') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('gallery') }}" data-i18n="nav_gallery">Gallery</a>
            <a class="text-sm font-medium {{ request()->routeIs('news') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('news') }}" data-i18n="nav_news">News</a>
            <a class="text-sm font-medium {{ request()->routeIs('calculator') ? 'text-primary' : 'text-slate-700 hover:text-primary' }} transition-colors" href="{{ route('calculator') }}" data-i18n="nav_calculator">Calculator</a>
            <a class="flex items-center justify-center rounded-lg h-9 px-5 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-sm font-bold shadow-sm" href="{{ route('contact') }}" data-i18n="nav_join">Contact Us</a>
        </nav>

        {{-- Mobile Controls --}}
        <div class="flex items-center lg:hidden">
            <button onclick="document.getElementById('mobile-menu').classList.toggle('open')" aria-expanded="false" aria-label="Toggle Mobile Menu" class="text-slate-700">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="mobile-menu flex-col border-t border-slate-200 bg-background-light px-6 py-4 lg:hidden">
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('home') }}" data-i18n="nav_home">Home</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('about') }}" data-i18n="nav_about">About</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('developers') }}" data-i18n="nav_developers">Developers</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('learn') }}" data-i18n="nav_learn">Learn</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('programs') }}" data-i18n="nav_programs">Programs</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('gallery') }}" data-i18n="nav_gallery">Gallery</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('news') }}" data-i18n="nav_news">News</a>
        <a class="block py-3 text-sm font-medium text-slate-700 border-b border-slate-100" href="{{ route('calculator') }}" data-i18n="nav_calculator">Calculator</a>
        <a class="mt-4 flex items-center justify-center rounded-lg h-10 bg-primary text-slate-900 text-sm font-bold shadow-sm" href="{{ route('contact') }}" data-i18n="nav_join">Contact Us</a>
    </div>
</header>

{{-- MAIN CONTENT --}}
    <main class="grow">
    @if (request()->routeIs('home'))
        @yield('content')
    @else
        <div class="site-floating-eco-area">
            <div class="site-floating-eco-bg" aria-hidden="true">
                <div class="site-floating-eco-row" style="--row-duration: 16s;"></div>
                <div class="site-floating-eco-row" style="--row-duration: 22s;"></div>
                <div class="site-floating-eco-row" style="--row-duration: 18s;"></div>
                <div class="site-floating-eco-row" style="--row-duration: 24s;"></div>
                <div class="site-floating-eco-row" style="--row-duration: 20s;"></div>
                <div class="site-floating-eco-row" style="--row-duration: 26s;"></div>
            </div>
            <div class="relative z-10">
                @yield('content')
            </div>
        </div>
    @endif
</main>

{{-- FOOTER --}}
<footer class="border-t border-slate-200 bg-white">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
            {{-- Brand --}}
            <div class="md:col-span-1 flex flex-col gap-4">
                <div class="flex items-center gap-2 text-slate-900">
                    <span class="material-symbols-outlined text-3xl text-primary">eco</span>
                    <span class="text-lg font-bold">Go Green School</span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed" data-i18n="footer_tagline">
                    Empowering the next generation to build a sustainable world through education and action.
                </p>
            </div>
            {{-- Quick Links --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 font-bold text-sm uppercase tracking-wider">Quick Links</h4>
                <nav class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_home">Home</a>
                    <a href="{{ route('about') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_about">About</a>
                    <a href="{{ route('developers') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_developers">Developers</a>
                    <a href="{{ route('learn') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_learn">Learn</a>
                    <a href="{{ route('programs') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_programs">Programs</a>
                    <a href="{{ route('gallery') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_gallery">Gallery</a>
                    <a href="{{ route('news') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_news">News</a>
                    <a href="{{ route('calculator') }}" class="text-slate-500 hover:text-primary text-sm transition-colors" data-i18n="nav_calculator">Calculator</a>
                </nav>
            </div>
            {{-- Contact --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 font-bold text-sm uppercase tracking-wider" data-i18n="nav_contact">Contact</h4>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-lg">location_on</span>
                        <span>Jl. Sintang - Pontianak (KM. 7), Kelurahan Balai Agung, Kecamatan Sungai Tebelian, Kabupaten Sintang, Kalimantan Barat.</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-lg">call</span>
                        <span>085250341098</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        <span>gogreenschoolk4@gmail.com</span>
                    </div>
                </div>
            </div>
            {{-- Social --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 font-bold text-sm uppercase tracking-wider">Follow Us</h4>
                <div class="flex gap-3">
                    <a class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="https://go-green-school-main-en87ct.free.laravel.cloud/" target="_blank" rel="noopener noreferrer" aria-label="Visit Website">
                        <span class="material-symbols-outlined text-lg">public</span>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="https://wa.me/6285250341098" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="h-4 w-4 fill-current" aria-hidden="true">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 8.016 0C3.648 0 .102 3.547.1 7.916c0 1.39.363 2.747 1.053 3.944L0 16l4.24-1.111a7.91 7.91 0 0 0 3.776.963h.003c4.367 0 7.914-3.547 7.916-7.916a7.863 7.863 0 0 0-2.334-5.61zm-5.585 12.19h-.003a6.57 6.57 0 0 1-3.35-.92l-.24-.142-2.517.66.672-2.454-.157-.252a6.57 6.57 0 0 1-1.009-3.492c.002-3.626 2.953-6.577 6.58-6.577a6.54 6.54 0 0 1 4.65 1.929 6.54 6.54 0 0 1 1.925 4.654c-.002 3.626-2.953 6.577-6.58 6.577zm3.61-4.929c-.198-.099-1.172-.579-1.354-.645-.182-.066-.314-.099-.447.099-.132.198-.512.645-.628.777-.116.132-.231.149-.429.05-.198-.099-.835-.307-1.59-.98-.587-.523-.984-1.168-1.1-1.366-.116-.198-.012-.305.087-.404.089-.088.198-.231.297-.347.099-.116.132-.198.198-.331.066-.132.033-.248-.017-.347-.05-.099-.447-1.079-.612-1.477-.161-.387-.324-.334-.447-.34-.116-.006-.248-.007-.38-.007-.132 0-.347.05-.529.248-.182.198-.694.678-.694 1.653s.711 1.918.81 2.05c.099.132 1.4 2.137 3.393 2.995.474.205.843.327 1.131.418.476.151.909.13 1.252.079.382-.057 1.172-.479 1.337-.942.165-.463.165-.86.116-.942-.05-.083-.182-.132-.38-.231z"/>
                        </svg>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="https://www.tiktok.com/@googreen_schoolfour4?_r=1&amp;_t=ZS-95HnxddUVBF" target="_blank" rel="noopener noreferrer" aria-label="Follow us on TikTok">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="h-4 w-4 fill-current" aria-hidden="true">
                            <path d="M9.995 0h2.717c.164 1.514 1.01 2.74 2.288 2.913v2.464a4.887 4.887 0 0 1-2.279-.548v4.623A5.44 5.44 0 1 1 7.3 4.01v2.57a2.87 2.87 0 1 0 2.694 2.869V0Z"/>
                        </svg>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="#" aria-label="Watch our Videos">
                        <span class="material-symbols-outlined text-lg">smart_display</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between border-t border-slate-200 pt-8 gap-4">
            <p class="text-slate-500 text-sm">&copy; 2026 Go Green School. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-slate-500 hover:text-primary text-sm transition-colors" href="#">Privacy Policy</a>
                <a class="text-slate-500 hover:text-primary text-sm transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<div class="floating-quick-controls" aria-label="Quick Language Controls">
    <div class="floating-lang-switch">
        <button onclick="switchLang('en')" id="btn-en" class="lang-btn active px-3 py-1 text-xs font-bold border-r border-slate-200">EN</button>
        <button onclick="switchLang('id')" id="btn-id" class="lang-btn px-3 py-1 text-xs font-bold text-slate-600">ID</button>
    </div>
</div>

{{-- TRANSLATIONS & LANGUAGE SWITCHER --}}
<script src="{{ asset('js/translations.js') }}"></script>
<script>
const translations = window.ggsTranslations || { en: {}, id: {} };
const pageTranslations = window.ggsPageTranslations || {};

['en', 'id'].forEach((locale) => {
    if (!translations[locale]) {
        translations[locale] = {};
    }
    if (pageTranslations[locale] && typeof pageTranslations[locale] === 'object') {
        Object.assign(translations[locale], pageTranslations[locale]);
    }
});

let currentLang = localStorage.getItem('ggs_lang') || 'en';
let i18nObserver = null;

function applyTranslations(root = document) {
    const dict = translations[currentLang] || {};
    const hasOwn = Object.prototype.hasOwnProperty;

    const translateElement = (el) => {
        const key = el.getAttribute('data-i18n');
        if (!key || !hasOwn.call(dict, key)) {
            return;
        }
        const translated = dict[key];
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
            if (el.placeholder !== translated) {
                el.placeholder = translated;
            }
        } else {
            if (el.textContent !== translated) {
                el.textContent = translated;
            }
        }
    };

    if (root.nodeType === 1 && root.matches('[data-i18n]')) {
        translateElement(root);
    }
    root.querySelectorAll('[data-i18n]').forEach(translateElement);
}

function initializeI18nObserver() {
    if (i18nObserver || !document.body) {
        return;
    }

    i18nObserver = new MutationObserver((mutations) => {
        for (const mutation of mutations) {
            if (mutation.type === 'attributes') {
                applyTranslations(mutation.target);
                continue;
            }

            if (mutation.target && mutation.target.nodeType === 1 && mutation.target.matches('[data-i18n]')) {
                applyTranslations(mutation.target);
            }

            for (const node of mutation.addedNodes) {
                if (node.nodeType !== 1) {
                    continue;
                }
                if (node.matches('[data-i18n]') || node.querySelector('[data-i18n]')) {
                    applyTranslations(node);
                }
            }
        }
    });

    i18nObserver.observe(document.body, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['data-i18n']
    });
}

function switchLang(lang) {
    currentLang = lang;
    localStorage.setItem('ggs_lang', lang);
    document.documentElement.lang = lang;
    applyTranslations();
    ['', '-m'].forEach(suffix => {
        const btnEn = document.getElementById('btn-en' + suffix);
        const btnId = document.getElementById('btn-id' + suffix);
        if (btnEn && btnId) {
            btnEn.classList.toggle('active', lang === 'en');
            btnId.classList.toggle('active', lang === 'id');
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initializeI18nObserver();
    switchLang(currentLang);
});
</script>

</body>
</html>

