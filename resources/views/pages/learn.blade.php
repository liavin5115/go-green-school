@extends('layouts.app')

@section('title', 'Learn — Go Green School')
@section('meta_description', 'What is Go Green? An explanation of environmental sustainability and global warming for students and teachers.')

@section('content')

<style>
    .learn-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #e2e8f0;
        background: linear-gradient(130deg, #e8fbff 0%, #f3ffe8 45%, #f0f3ff 100%);
    }
    .dark .learn-hero {
        border-bottom-color: #1e293b;
        background: linear-gradient(130deg, #0f172a 0%, #102215 46%, #172554 100%);
    }
    .learn-hero-grid {
        position: relative;
        z-index: 2;
        display: grid;
        gap: 1.5rem;
        align-items: center;
    }
    @media (min-width: 1024px) {
        .learn-hero-grid {
            grid-template-columns: 1.12fr 0.88fr;
            gap: 2rem;
        }
    }
    .learn-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        border-radius: 9999px;
        border: 1px solid rgba(30, 64, 175, 0.2);
        background: rgba(255, 255, 255, 0.78);
        padding: 0.38rem 0.8rem;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #1d4ed8;
    }
    .dark .learn-hero-badge {
        border-color: rgba(148, 163, 184, 0.35);
        background: rgba(15, 23, 42, 0.64);
        color: #bfdbfe;
    }
    .learn-pill {
        display: inline-flex;
        align-items: center;
        border-radius: 9999px;
        border: 1px solid rgba(30, 64, 175, 0.16);
        background: rgba(255, 255, 255, 0.74);
        padding: 0.32rem 0.75rem;
        font-size: 0.72rem;
        font-weight: 700;
        color: #1e3a8a;
    }
    .dark .learn-pill {
        border-color: rgba(148, 163, 184, 0.26);
        background: rgba(15, 23, 42, 0.58);
        color: #cbd5e1;
    }
    .learn-hero-panel {
        border: 1px solid rgba(148, 163, 184, 0.35);
        border-radius: 1.1rem;
        background: rgba(255, 255, 255, 0.82);
        backdrop-filter: blur(8px);
        box-shadow: 0 18px 32px rgba(15, 23, 42, 0.14);
        padding: 1.1rem;
    }
    .dark .learn-hero-panel {
        border-color: rgba(148, 163, 184, 0.28);
        background: rgba(15, 23, 42, 0.7);
        box-shadow: 0 20px 36px rgba(2, 6, 23, 0.35);
    }
    .learn-hero-topic {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        border: 1px solid rgba(148, 163, 184, 0.28);
        border-radius: 0.85rem;
        padding: 0.75rem;
        background: rgba(255, 255, 255, 0.7);
    }
    .dark .learn-hero-topic {
        border-color: rgba(148, 163, 184, 0.22);
        background: rgba(15, 23, 42, 0.54);
    }
    .learn-dot {
        width: 0.55rem;
        height: 0.55rem;
        border-radius: 9999px;
        background: #22c55e;
        box-shadow: 0 0 0 6px rgba(34, 197, 94, 0.16);
        animation: learnDotPulse 2.2s ease-in-out infinite;
    }
    @keyframes learnDotPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.18); }
    }
</style>

{{-- PAGE HEADER --}}
<section class="learn-hero px-6 py-14 lg:px-10">
    <div class="mx-auto max-w-7xl learn-hero-grid">
        <div class="space-y-5 text-center lg:text-left">
            <p class="learn-hero-badge">
                <span class="material-symbols-outlined text-base">explore</span>
                <span data-i18n="expl_keys_title">Key Concepts</span>
            </p>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100 sm:text-4xl lg:text-5xl" data-i18n="expl_title">
                What is Go Green? An Explanation of Environmental Sustainability and Global Warming
            </h1>
            <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300 sm:text-base max-w-3xl mx-auto lg:mx-0" data-i18n="expl_intro_text">
                This explanation text aims to provide a clear understanding of the "Go Green" concept and its connection to global warming. It is designed for students, teachers, and school staff to grasp why adopting eco-friendly practices is crucial in our daily lives, especially within the Go Green School program.
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2">
                <span class="learn-pill" data-i18n="expl_gogreen_title">What is Go Green?</span>
                <span class="learn-pill" data-i18n="expl_gw_title">What is Global Warming?</span>
                <span class="learn-pill" data-i18n="expl_link_title">The Link Between Go Green and Global Warming</span>
            </div>
        </div>

        <aside class="learn-hero-panel">
            <h2 class="text-base sm:text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">hub</span>
                <span data-i18n="expl_keys_title">Key Concepts</span>
            </h2>
            <div class="space-y-3">
                <div class="learn-hero-topic">
                    <span class="material-symbols-outlined text-primary">eco</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="expl_gogreen_title">What is Go Green?</span>
                </div>
                <div class="learn-hero-topic">
                    <span class="material-symbols-outlined text-red-500">thermostat</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="expl_gw_title">What is Global Warming?</span>
                </div>
                <div class="learn-hero-topic">
                    <span class="material-symbols-outlined text-blue-500">link</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="expl_link_title">The Link Between Go Green and Global Warming</span>
                </div>
                <div class="mt-2 inline-flex items-center gap-2 text-xs font-semibold text-slate-600 dark:text-slate-300">
                    <span class="learn-dot" aria-hidden="true"></span>
                    <span data-i18n="expl_intro_title">Purpose</span>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="mx-auto w-full max-w-7xl px-6 py-12 lg:px-10">

    {{-- PURPOSE / INTRODUCTION --}}
    <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-primary/5 dark:bg-primary/10 p-8 shadow-sm mb-8 animate-slide-up">
        <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">lightbulb</span>
            <span data-i18n="expl_intro_title">Purpose</span>
        </h2>
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="expl_intro_text">
            This explanation text aims to provide a clear understanding of the "Go Green" concept and its connection to global warming. It is designed for students, teachers, and school staff to grasp why adopting eco-friendly practices is crucial in our daily lives, especially within the Go Green School program.
        </p>
    </div>

    {{-- KEY CONCEPTS --}}
    <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-6" data-i18n="expl_keys_title">Key Concepts</h2>

    <div class="grid gap-6 md:grid-cols-2 mb-8 animate-stagger">
        {{-- What is Go Green? --}}
        <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm flex flex-col h-full border-l-4 border-l-primary hover-lift transition-smooth">
            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">eco</span>
                <span data-i18n="expl_gogreen_title">What is Go Green?</span>
            </h3>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="expl_gogreen_text">
                Go Green refers to a global movement and lifestyle that encourages individuals, communities, and organizations to adopt environmentally friendly practices. In the context of schools, Go Green means integrating sustainability into education, such as recycling programs, energy-saving initiatives, and nature-based learning.
            </p>
        </div>

        {{-- What is Global Warming? --}}
        <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm flex flex-col h-full border-l-4 border-l-red-500 hover-lift transition-smooth">
            <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-red-500">thermostat</span>
                <span data-i18n="expl_gw_title">What is Global Warming?</span>
            </h3>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="expl_gw_text">
                Global warming is the long-term increase in Earth's average surface temperature due to human activities that release greenhouse gases like carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O) into the atmosphere. Effects of global warming are widespread: rising sea levels, extreme weather events, loss of biodiversity, and health risks.
            </p>
        </div>
    </div>

    {{-- THE LINK --}}
    <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm mb-8 animate-slide-up">
        <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">link</span>
            <span data-i18n="expl_link_title">The Link Between Go Green and Global Warming</span>
        </h3>
        <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="expl_link_text">
            Adopting Go Green practices directly combats global warming by reducing greenhouse gas emissions. Simple school actions, like switching to LED lights, composting organic waste, or promoting cycling over car use, lower carbon footprints. Programs like Go Green School empower students to understand these issues through hands-on activities, fostering a sense of environmental responsibility.
        </p>
    </div>

    {{-- CONCLUSION --}}
    <div class="rounded-xl bg-background-dark dark:bg-slate-950 p-8 text-white animate-slide-up">
        <h3 class="text-xl font-bold mb-3 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary">stars</span>
            <span data-i18n="expl_conclusion_title">Reaffirmation</span>
        </h3>
        <p class="text-slate-300 leading-relaxed" data-i18n="expl_conclusion_text">
            Understanding Go Green and the realities of global warming empowers us to make positive changes. By embracing sustainable habits, we not only mitigate environmental damage but also build a healthier, more resilient world. Let's commit to the Go Green School initiative today—every small action counts toward a greener tomorrow! 🌍✨
        </p>
    </div>

    {{-- RELATED LINKS --}}
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('programs') }}" class="flex items-center justify-center gap-2 rounded-lg h-11 px-8 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:border-primary hover:text-primary transition-colors font-medium">
            <span class="material-symbols-outlined text-base">arrow_back</span> Waste Sorting Guide
        </a>
        <a href="{{ route('contact') }}" class="flex items-center justify-center rounded-lg h-11 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold" data-i18n="home_cta_btn">
            Contact Us
        </a>
    </div>
</section>

@endsection
