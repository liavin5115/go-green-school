@extends('layouts.app')

@section('title', 'Go Green School — Eco-Friendly School')
@section('meta_description', 'Go Green School: Building an environmentally conscious generation. Join the movement for eco-friendly schools in Indonesia.')

@section('content')

{{-- HERO SECTION --}}
<div class="w-full">
    <div class="flex min-h-[580px] flex-col gap-6 bg-cover bg-center bg-no-repeat items-center justify-center p-4 relative"
         style='background-image: linear-gradient(rgba(16, 34, 21, 0.65) 0%, rgba(16, 34, 21, 0.75) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBfgB3QbHrFJtcXwaR8SFg9_DD_-QFpTET-ZLOEDh9_ZUZnDZaPpfJoEQTjmk6JRP7StQTZgJENTY5y3vPLknIjLT0wl8DX8dwiNso5CN1GLMNEM5D7Vyr5Lgwrz4iXypreuxVxvhKYWNoa0dDzksHMV8kkV5Df_U1mdgnjK3S4driXHkgRdcYOnBySmmpI-RNCnGXGF5y3_cNWa0YSYZAzxpntkaXX0OShq5v25GMS0R2jv3MHfF2tFXRaXKgCpq2Ht3bMBSEYiumA");'>
        <div class="flex flex-col gap-5 text-center max-w-[820px] z-10">
            <h1 class="text-white text-4xl font-black leading-tight tracking-tight md:text-5xl lg:text-6xl drop-shadow-sm">
                Go Green School:<br/>
                <span data-i18n="hero_tagline">Building an Environmentally Conscious Generation</span>
            </h1>
            <p class="text-slate-200 text-base font-normal leading-relaxed md:text-lg max-w-[600px] mx-auto" data-i18n="home_mission_text">
                A school program that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center mt-2">
                <a href="https://wa.me/6281255585688" target="_blank" class="flex items-center justify-center rounded-lg h-12 px-8 bg-primary hover:bg-green-500 transition-all text-slate-900 text-base font-bold shadow-lg" data-i18n="hero_cta_join">Contact Us</a>
                <a href="{{ route('about') }}" class="flex items-center justify-center rounded-lg h-12 px-8 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 transition-all text-white text-base font-medium" data-i18n="hero_cta_learn">Learn More</a>
            </div>
        </div>
    </div>
</div>

{{-- CORE PILLARS --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-slate-200 dark:border-slate-800 pb-6 mb-10">
        <div class="flex flex-col gap-2">
            <h4 class="text-primary font-bold uppercase tracking-widest text-sm" data-i18n="home_mission_label">Our Mission</h4>
            <h2 class="text-slate-900 dark:text-slate-100 tracking-tight text-3xl font-bold leading-tight md:text-4xl max-w-[720px]" data-i18n="home_mission_title">What is Go Green School?</h2>
        </div>
        <p class="text-slate-600 dark:text-slate-400 text-base leading-normal max-w-[400px]" data-i18n="home_mission_text">
            A school program that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 animate-stagger">
        {{-- Card 1 --}}
        <a href="{{ route('about') }}" class="group flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-slate-900 transition-colors">
                <span class="material-symbols-outlined text-2xl">eco</span>
            </div>
            <div class="flex flex-col gap-2 flex-1">
                <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-tight" data-i18n="home_card1_title">About Go Green</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed" data-i18n="home_card1_desc">Learn what Go Green School is and why it matters for our future.</p>
            </div>
            <span class="text-primary text-sm font-bold flex items-center gap-1 mt-auto group-hover:gap-2 transition-all" data-i18n="home_card1_cta">Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span></span>
        </a>
        {{-- Card 2 --}}
        <a href="{{ route('programs') }}" class="group flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-slate-900 transition-colors">
                <span class="material-symbols-outlined text-2xl">recycling</span>
            </div>
            <div class="flex flex-col gap-2 flex-1">
                <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-tight" data-i18n="home_card2_title">Waste Sorting Guide</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed" data-i18n="home_card2_desc">Step-by-step guide to properly sort organic, inorganic &amp; B3 waste.</p>
            </div>
            <span class="text-primary text-sm font-bold flex items-center gap-1 mt-auto group-hover:gap-2 transition-all" data-i18n="home_card2_cta">Discover <span class="material-symbols-outlined text-sm">arrow_forward</span></span>
        </a>
        {{-- Card 3 --}}
        <a href="{{ route('learn') }}" class="group flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-slate-900 transition-colors">
                <span class="material-symbols-outlined text-2xl">thermostat</span>
            </div>
            <div class="flex flex-col gap-2 flex-1">
                <h3 class="text-slate-900 dark:text-slate-100 text-lg font-bold leading-tight" data-i18n="home_card3_title">Go Green &amp; Climate</h3>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed" data-i18n="home_card3_desc">Understand the link between Go Green practices and global warming.</p>
            </div>
            <span class="text-primary text-sm font-bold flex items-center gap-1 mt-auto group-hover:gap-2 transition-all" data-i18n="home_card3_cta">View Projects <span class="material-symbols-outlined text-sm">arrow_forward</span></span>
        </a>
    </div>
</section>

{{-- STATS BANNER --}}
<section class="w-full bg-white dark:bg-slate-900 border-y border-slate-200 dark:border-slate-800 animate-slide-up">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-10 flex flex-col md:flex-row gap-8 items-center">
        <div class="flex-1 space-y-4">
            <h3 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-slate-100" data-i18n="home_stats_title">Make an Impact Today</h3>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="home_cta_text">Join hundreds of schools across Indonesia in the Go Green School movement.</p>
            <div class="flex gap-6 pt-2">
                <div class="flex flex-col">
                    <span class="text-3xl font-bold text-primary">50+</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wider" data-i18n="home_stat1_label">Green Projects</span>
                </div>
                <div class="w-px h-12 bg-slate-200 dark:bg-slate-700"></div>
                <div class="flex flex-col">
                    <span class="text-3xl font-bold text-primary">12k</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wider" data-i18n="home_stat2_label">Trees Planted</span>
                </div>
                <div class="w-px h-12 bg-slate-200 dark:bg-slate-700"></div>
                <div class="flex flex-col">
                    <span class="text-3xl font-bold text-primary">500+</span>
                    <span class="text-xs text-slate-500 uppercase tracking-wider" data-i18n="home_stat3_label">Schools</span>
                </div>
            </div>
        </div>
        <div class="flex-1 w-full h-64 rounded-xl overflow-hidden">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8QF5FpDOnYcjRP12PLLTDAq5NBXlpJN9thTpv6AXppVwwjzCJvQ4Ta73Wd2LKy6Ps397Z5dQ3Hp4xJbUHT-nO6ZCCqPEZBbH9lO49V3XkKeReOF0psI0Y0wTxSlVdYoTfOwZ9xYV84vUcP_D-EvMEHSo1O-5iF_SHxihNtbX9-cq-08USLk6V6O0oF8zn9O6w0QZ28zyyWA2Nv8XzPHdnDTGiVrfS7My2bqunqcvFTWtsa1aftYAUp-k8y7HO-UdWS-Cc28j90Uuw" alt="Students planting trees">
        </div>
    </div>
</section>

{{-- LATEST NEWS --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
        <div>
            <h4 class="text-primary font-bold uppercase tracking-widest text-sm mb-2" data-i18n="home_updates_label">Updates</h4>
            <h2 class="text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight" data-i18n="news_latest">Latest News</h2>
            <p class="mt-1 text-slate-600 dark:text-slate-400" data-i18n="news_latest_sub">Recent updates from Go Green School activities</p>
        </div>
        <a href="{{ route('news') }}" class="flex items-center gap-1 text-primary font-bold text-sm hover:gap-2 transition-all" data-i18n="news_view_all">
            View All News <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 animate-stagger">
        <a href="{{ route('news.show', 'calculator-sampah') }}" class="group flex flex-col rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=800&q=80" alt="Waste Calculator" class="w-full h-44 object-cover">
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-sm text-slate-400">calendar_month</span>
                    <span class="text-xs text-slate-500">9 Maret 2026</span>
                </div>
                <h4 class="text-sm font-bold text-slate-900 dark:text-slate-100 mb-2 group-hover:text-primary transition-colors" data-i18n="news1_title">XI RPL Students Launch Classroom Waste Calculator!</h4>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news1_summary">Students of class XI RPL successfully developed a digital waste calculator.</p>
                <span class="mt-3 text-primary font-bold text-xs flex items-center gap-1" data-i18n="news_read_more">Read More <span class="material-symbols-outlined text-xs">arrow_forward</span></span>
            </div>
        </a>
        <a href="{{ route('news.show', 'penanaman-pohon') }}" class="group flex flex-col rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8QF5FpDOnYcjRP12PLLTDAq5NBXlpJN9thTpv6AXppVwwjzCJvQ4Ta73Wd2LKy6Ps397Z5dQ3Hp4xJbUHT-nO6ZCCqPEZBbH9lO49V3XkKeReOF0psI0Y0wTxSlVdYoTfOwZ9xYV84vUcP_D-EvMEHSo1O-5iF_SHxihNtbX9-cq-08USLk6V6O0oF8zn9O6w0QZ28zyyWA2Nv8XzPHdnDTGiVrfS7My2bqunqcvFTWtsa1aftYAUp-k8y7HO-UdWS-Cc28j90Uuw" alt="Tree Planting" class="w-full h-44 object-cover">
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-sm text-slate-400">calendar_month</span>
                    <span class="text-xs text-slate-500">5 Maret 2026</span>
                </div>
                <h4 class="text-sm font-bold text-slate-900 dark:text-slate-100 mb-2 group-hover:text-primary transition-colors" data-i18n="news2_title">Planting 100 Trees in the School Yard</h4>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news2_summary">The school community planted 100 fruit and shade trees in a collaborative action.</p>
                <span class="mt-3 text-primary font-bold text-xs flex items-center gap-1" data-i18n="news_read_more">Read More <span class="material-symbols-outlined text-xs">arrow_forward</span></span>
            </div>
        </a>
        <a href="{{ route('news.show', 'kampanye-anti-plastik') }}" class="group flex flex-col rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=800&q=80" alt="Anti-Plastic Campaign" class="w-full h-44 object-cover">
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-sm text-slate-400">calendar_month</span>
                    <span class="text-xs text-slate-500">28 Februari 2026</span>
                </div>
                <h4 class="text-sm font-bold text-slate-900 dark:text-slate-100 mb-2 group-hover:text-primary transition-colors" data-i18n="news3_title">Anti-Plastic Campaign: Waste Reduced by 40%!</h4>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news3_summary">Through a month-long campaign, the school succeeded in reducing plastic waste by 40%.</p>
                <span class="mt-3 text-primary font-bold text-xs flex items-center gap-1" data-i18n="news_read_more">Read More <span class="material-symbols-outlined text-xs">arrow_forward</span></span>
            </div>
        </a>
        <a href="{{ route('news.show', 'workshop-b3') }}" class="group flex flex-col rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm hover:shadow-md transition-all hover:border-primary/50 hover-lift">
            <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=800&q=80" alt="B3 Workshop" class="w-full h-44 object-cover">
            <div class="p-5 flex flex-col flex-grow">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-sm text-slate-400">calendar_month</span>
                    <span class="text-xs text-slate-500">20 Februari 2026</span>
                </div>
                <h4 class="text-sm font-bold text-slate-900 dark:text-slate-100 mb-2 group-hover:text-primary transition-colors" data-i18n="news4_title">B3 Waste Management Workshop a Success!</h4>
                <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed flex-grow" data-i18n="news4_summary">Interactive workshop taught students how to safely handle hazardous waste (B3).</p>
                <span class="mt-3 text-primary font-bold text-xs flex items-center gap-1" data-i18n="news_read_more">Read More <span class="material-symbols-outlined text-xs">arrow_forward</span></span>
            </div>
        </a>
    </div>
</section>

{{-- CTA BANNER --}}
<section class="w-full bg-background-dark dark:bg-slate-950 px-6 py-16 animate-slide-up">
    <div class="mx-auto max-w-4xl text-center text-white">
        <h2 class="text-3xl font-bold mb-4 tracking-tight" data-i18n="home_cta_title">Ready to make your school greener?</h2>
        <p class="text-lg mb-8 text-slate-300 leading-relaxed" data-i18n="home_cta_text">Have questions or want to learn more about Go Green School? Contact us now!</p>
        <a href="https://wa.me/6281255585688" target="_blank" class="inline-flex items-center justify-center rounded-lg h-12 px-10 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-base font-bold shadow-lg" data-i18n="home_cta_btn">
            Contact Us
        </a>
    </div>
</section>

@endsection
