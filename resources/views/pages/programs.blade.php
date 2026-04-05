@extends('layouts.app')

@section('title', 'Programs — Go Green School')
@section('meta_description', 'Learn how to properly sort waste by type: organic, inorganic, and B3. School waste management procedure for Go Green School program.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">recycling</span>
        <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight mb-2" data-i18n="procedure_heading">
            How to Dispose of Waste by Type (Organic, Inorganic, and B3)
        </h1>
        <p class="mt-2 text-primary font-bold tracking-wide uppercase text-sm" data-i18n="procedure_sub">School Waste Management Procedure</p>
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
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="procedure_intro">This procedure text aims to guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.</p>
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
        <a href="https://wa.me/6281255585688" target="_blank" class="flex items-center justify-center rounded-lg h-12 px-10 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-base font-bold shadow-sm">
            Contact Us for More Info
        </a>
    </div>
</section>

@endsection
