@extends('layouts.app')

@section('title', 'Programs — Go Green School')
@section('meta_description', 'Learn how to properly sort waste by type: organic, inorganic, and B3. School waste management procedure for Go Green School program.')

@section('content')

<style>
    .program-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #e2e8f0;
        background: linear-gradient(128deg, #f6ffe8 0%, #fff8e5 48%, #eef8d8 100%);
    }
    .dark .program-hero {
        border-bottom-color: #1e293b;
        background: linear-gradient(128deg, #102215 0%, #1f2937 48%, #0f172a 100%);
    }
    .program-hero-grid {
        position: relative;
        z-index: 2;
        display: grid;
        gap: 1.5rem;
        align-items: center;
    }
    @media (min-width: 1024px) {
        .program-hero-grid {
            grid-template-columns: 1.08fr 0.92fr;
            gap: 2rem;
        }
    }
    .program-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        border-radius: 9999px;
        border: 1px solid rgba(22, 101, 52, 0.2);
        background: rgba(255, 255, 255, 0.78);
        padding: 0.34rem 0.78rem;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #166534;
    }
    .dark .program-hero-badge {
        border-color: rgba(148, 163, 184, 0.32);
        background: rgba(15, 23, 42, 0.62);
        color: #bbf7d0;
    }
    .program-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        border-radius: 9999px;
        border: 1px solid rgba(22, 101, 52, 0.18);
        background: rgba(255, 255, 255, 0.72);
        padding: 0.33rem 0.75rem;
        font-size: 0.72rem;
        font-weight: 700;
        color: #166534;
    }
    .dark .program-pill {
        border-color: rgba(148, 163, 184, 0.26);
        background: rgba(15, 23, 42, 0.58);
        color: #cbd5e1;
    }
    .program-hero-flow {
        border: 1px solid rgba(148, 163, 184, 0.35);
        border-radius: 1.05rem;
        background: rgba(255, 255, 255, 0.84);
        backdrop-filter: blur(8px);
        box-shadow: 0 18px 32px rgba(15, 23, 42, 0.13);
        padding: 1.1rem;
    }
    .dark .program-hero-flow {
        border-color: rgba(148, 163, 184, 0.28);
        background: rgba(15, 23, 42, 0.68);
        box-shadow: 0 20px 36px rgba(2, 6, 23, 0.35);
    }
    .program-flow-step {
        display: flex;
        align-items: center;
        gap: 0.7rem;
        border: 1px solid rgba(148, 163, 184, 0.26);
        border-radius: 0.85rem;
        background: rgba(255, 255, 255, 0.72);
        padding: 0.75rem;
    }
    .dark .program-flow-step {
        border-color: rgba(148, 163, 184, 0.22);
        background: rgba(15, 23, 42, 0.55);
    }
    .program-flow-arrow {
        display: flex;
        justify-content: center;
        color: #16a34a;
    }
    .program-hero-ring {
        position: absolute;
        right: -3.5rem;
        top: -3rem;
        width: 13rem;
        height: 13rem;
        border-radius: 9999px;
        border: 1px dashed rgba(22, 101, 52, 0.22);
        opacity: 0.5;
        pointer-events: none;
    }
    .dark .program-hero-ring {
        border-color: rgba(148, 163, 184, 0.24);
    }
</style>

{{-- PAGE HEADER --}}
<section class="program-hero px-6 py-14 lg:px-10">
    <span class="program-hero-ring" aria-hidden="true"></span>

    <div class="mx-auto max-w-7xl program-hero-grid">
        <div class="space-y-5 text-center lg:text-left">
            <p class="program-hero-badge">
                <span class="material-symbols-outlined text-base">recycling</span>
                <span data-i18n="procedure_sub">School Waste Management Procedure</span>
            </p>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100 sm:text-4xl lg:text-5xl" data-i18n="procedure_heading">
                How to Dispose of Waste by Type (Organic, Inorganic, and B3)
            </h1>
            <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300 sm:text-base max-w-3xl mx-auto lg:mx-0" data-i18n="procedure_intro_hero">
                Guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2">
                <span class="program-pill"><span class="material-symbols-outlined text-sm">compost</span><span data-i18n="calc_label_organic">Organic Waste</span></span>
                <span class="program-pill"><span class="material-symbols-outlined text-sm">recycling</span><span data-i18n="calc_label_inorganic">Inorganic Waste</span></span>
                <span class="program-pill"><span class="material-symbols-outlined text-sm">battery_alert</span><span>B3</span></span>
            </div>
        </div>

        <aside class="program-hero-flow">
            <h2 class="text-base sm:text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">account_tree</span>
                <span data-i18n="procedure_steps_title">Steps:</span>
            </h2>
            <div class="space-y-2">
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">inventory_2</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="procedure_materials_title">Materials and Tools:</span>
                </div>
                <div class="program-flow-arrow"><span class="material-symbols-outlined">south</span></div>
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">format_list_numbered</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="procedure_steps_title">Steps:</span>
                </div>
                <div class="program-flow-arrow"><span class="material-symbols-outlined">south</span></div>
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">public</span>
                    <span class="text-sm font-semibold text-slate-800 dark:text-slate-200" data-i18n="procedure_cta">Let's Start Sorting!</span>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="mx-auto w-full max-w-7xl px-6 py-12 lg:px-10">
    {{-- INTRO & MATERIALS --}}
    <div class="mb-10 grid gap-6 md:grid-cols-2 animate-stagger">
        <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover-lift transition-smooth">
            <h2 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">info</span>
                <span data-i18n="procedure_intro_title">Introduction</span>
            </h2>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="procedure_intro">This procedure text aims to Guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.</p>
        </div>
        <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-primary/5 dark:bg-primary/10 p-6 shadow-sm hover-lift transition-smooth">
            <h2 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">inventory_2</span>
                <span data-i18n="procedure_materials_title">Materials and Tools:</span>
            </h2>
            <ul class="space-y-2 text-slate-600 dark:text-slate-400">
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat1">Three types of trash bins (organic, inorganic, and B3)</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat2">Labels or markers on each trash bin</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat3">Daily waste (food scraps, plastic, paper, used batteries, etc.)</span></li>
            </ul>
        </div>
    </div>

    {{-- STEPS --}}
    <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-6 flex items-center gap-2">
        <span class="material-symbols-outlined text-primary">format_list_numbered</span>
        <span data-i18n="procedure_steps_title">Steps:</span>
    </h2>
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 animate-stagger">
        @php $steps = [
            ['icon' => 'label', 'key' => 'procedure_step1', 'color' => 'text-primary'],
            ['icon' => 'search', 'key' => 'procedure_step2', 'color' => 'text-primary'],
            ['icon' => 'compost', 'key' => 'procedure_step3', 'color' => 'text-green-500'],
            ['icon' => 'recycling', 'key' => 'procedure_step4', 'color' => 'text-blue-500'],
            ['icon' => 'battery_alert', 'key' => 'procedure_step5', 'color' => 'text-red-500'],
            ['icon' => 'check_circle', 'key' => 'procedure_step6', 'color' => 'text-primary'],
        ]; @endphp
        @foreach($steps as $i => $step)
        <div class="group relative flex flex-col gap-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-primary/50 transition-all hover-lift">
            <div class="absolute -left-3 -top-3 flex h-7 w-7 items-center justify-center rounded-full bg-primary text-slate-900 text-xs font-bold">{{ $i + 1 }}</div>
            <span class="material-symbols-outlined text-4xl {{ $step['color'] }}">{{ $step['icon'] }}</span>
            <p class="text-sm text-slate-600 dark:text-slate-400" data-i18n="{{ $step['key'] }}"></p>
        </div>
        @endforeach
        <div class="group relative flex flex-col gap-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-primary/50 transition-all hover-lift lg:col-span-2">
            <div class="absolute -left-3 -top-3 flex h-7 w-7 items-center justify-center rounded-full bg-primary text-slate-900 text-xs font-bold">7</div>
            <span class="material-symbols-outlined text-4xl text-primary">group</span>
            <p class="text-sm text-slate-600 dark:text-slate-400" data-i18n="procedure_step7">Make it a habit to sort waste every day and invite friends to do the same.</p>
        </div>
    </div>

    {{-- OUTRO --}}
    <div class="mt-10 rounded-xl border border-slate-200 dark:border-slate-800 bg-primary/5 dark:bg-primary/10 p-6 flex gap-4 items-start">
        <span class="material-symbols-outlined text-4xl text-primary hidden sm:block">public</span>
        <p class="text-slate-700 dark:text-slate-300 leading-relaxed" data-i18n="procedure_outro">
            By throwing waste according to its type, we help maintain the cleanliness and sustainability of the school environment. This simple habit can have a massive impact on our collective health and comfort. Let's support the Go Green School program by diligently sorting our waste every day. 🌍✨
        </p>
    </div>

    <div class="mt-10 flex justify-center">
        <a href="{{ route('contact') }}" class="flex items-center justify-center rounded-lg h-12 px-10 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-base font-bold shadow-sm">
            Contact Us for More Info
        </a>
    </div>
</section>

@endsection
