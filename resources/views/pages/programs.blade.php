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
    .program-hero-flow {
        border: 1px solid rgba(148, 163, 184, 0.35);
        border-radius: 1.05rem;
        background: rgba(255, 255, 255, 0.84);
        backdrop-filter: blur(8px);
        box-shadow: 0 18px 32px rgba(15, 23, 42, 0.13);
        padding: 1.1rem;
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
    .program-apply-shell {
        margin-top: 2.75rem;
        border: 1px solid #d1fae5;
        border-radius: 1rem;
        background: linear-gradient(135deg, #f0fdf4 0%, #ecfeff 100%);
        padding: 1.25rem;
    }
    .program-apply-accordion {
        margin-top: 1rem;
        display: grid;
        gap: 0.75rem;
    }
    .program-apply-item {
        border: 1px solid #cbd5e1;
        border-radius: 0.85rem;
        background: rgba(255, 255, 255, 0.82);
        overflow: hidden;
        transition: border-color 220ms ease, box-shadow 220ms ease;
    }
    .program-apply-item[open] {
        border-color: #16a34a;
        box-shadow: 0 8px 20px rgba(22, 101, 52, 0.16);
    }
    .program-apply-summary {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.7rem;
        cursor: pointer;
        padding: 0.9rem 1rem;
        font-weight: 700;
        color: #0f172a;
    }
    .program-apply-summary::-webkit-details-marker {
        display: none;
    }
    .program-apply-summary .material-symbols-outlined:last-child {
        transition: transform 200ms ease;
    }
    .program-apply-item[open] .program-apply-summary .material-symbols-outlined:last-child {
        transform: rotate(180deg);
    }
    .program-apply-body {
        padding: 0 1rem 1rem;
        color: #475569;
    }
    .program-apply-list {
        margin-top: 0.25rem;
        display: grid;
        gap: 0.5rem;
    }
    .program-apply-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.45rem;
        line-height: 1.55;
    }
    .program-apply-list li .material-symbols-outlined {
        margin-top: 0.1rem;
        font-size: 1rem;
        color: #16a34a;
    }
</style>

{{-- PAGE HEADER --}}
<section class="program-hero px-6 py-14 lg:px-10">
    <span class="program-hero-ring" aria-hidden="true"></span>

    <div class="mx-auto max-w-7xl program-hero-grid">
        <div class="space-y-5 text-center lg:text-left">
            <p class="program-hero-badge">
                <span class="material-symbols-outlined text-base">recycling</span>
                <span data-i18n="program_hero_badge">Go Green School Program Guide</span>
            </p>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl" data-i18n="program_hero_title">
                How to Implement Go Green School Program at School
            </h1>
            <p class="text-sm leading-relaxed text-slate-700 sm:text-base max-w-3xl mx-auto lg:mx-0" data-i18n="program_hero_intro">
                Learn practical steps to run Go Green School initiatives while maintaining proper waste sorting for organic, inorganic, and B3 waste.
            </p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2">
                <span class="program-pill"><span class="material-symbols-outlined text-sm">school</span><span data-i18n="program_hero_pill_apply">Program Implementation</span></span>
                <span class="program-pill"><span class="material-symbols-outlined text-sm">compost</span><span data-i18n="calc_label_organic">Organic Waste</span></span>
                <span class="program-pill"><span class="material-symbols-outlined text-sm">recycling</span><span data-i18n="calc_label_inorganic">Inorganic Waste</span></span>
                <span class="program-pill"><span class="material-symbols-outlined text-sm">battery_alert</span><span>B3</span></span>
            </div>
        </div>

        <aside class="program-hero-flow">
            <h2 class="text-base sm:text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">account_tree</span>
                <span data-i18n="procedure_steps_title">Steps:</span>
            </h2>
            <div class="space-y-2">
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">inventory_2</span>
                    <span class="text-sm md:text-base font-semibold text-slate-800" data-i18n="procedure_materials_title">Materials and Tools:</span>
                </div>
                <div class="program-flow-arrow"><span class="material-symbols-outlined">south</span></div>
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">format_list_numbered</span>
                    <span class="text-sm md:text-base font-semibold text-slate-800" data-i18n="procedure_steps_title">Steps:</span>
                </div>
                <div class="program-flow-arrow"><span class="material-symbols-outlined">south</span></div>
                <div class="program-flow-step">
                    <span class="material-symbols-outlined text-primary">school</span>
                    <span class="text-sm md:text-base font-semibold text-slate-800" data-i18n="program_hero_flow_apply">Implement Go Green Program</span>
                </div>
            </div>
        </aside>
    </div>
</section>

<section class="mx-auto w-full max-w-7xl px-6 py-12 lg:px-10">
    {{-- INTRO & MATERIALS --}}
    <div class="mb-10 grid gap-6 md:grid-cols-2 animate-stagger">
        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover-lift transition-smooth">
            <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">info</span>
                <span data-i18n="procedure_intro_title">Introduction</span>
            </h2>
            <p class="text-slate-600 leading-relaxed" data-i18n="procedure_intro">This procedure text aims to Guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.</p>
        </div>
        <div class="rounded-xl border border-slate-200 bg-primary/5 p-6 shadow-sm hover-lift transition-smooth">
            <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">inventory_2</span>
                <span data-i18n="procedure_materials_title">Materials and Tools:</span>
            </h2>
            <ul class="space-y-2 text-slate-600">
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat1">Three types of trash bins (organic, inorganic, and B3)</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat2">Labels or markers on each trash bin</span></li>
                <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-base mt-0.5">check_circle</span><span data-i18n="procedure_mat3">Daily waste (food scraps, plastic, paper, used batteries, etc.)</span></li>
            </ul>
        </div>
    </div>

    {{-- STEPS --}}
    <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-2">
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
        <div class="group relative flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary/50 transition-all hover-lift">
            <div class="absolute -left-3 -top-3 flex h-7 w-7 items-center justify-center rounded-full bg-primary text-slate-900 text-xs font-bold">{{ $i + 1 }}</div>
            <span class="material-symbols-outlined text-4xl {{ $step['color'] }}">{{ $step['icon'] }}</span>
            <p class="text-sm md:text-base leading-relaxed text-slate-600" data-i18n="{{ $step['key'] }}"></p>
        </div>
        @endforeach
        <div class="group relative flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary/50 transition-all hover-lift lg:col-span-2">
            <div class="absolute -left-3 -top-3 flex h-7 w-7 items-center justify-center rounded-full bg-primary text-slate-900 text-xs font-bold">7</div>
            <span class="material-symbols-outlined text-4xl text-primary">group</span>
            <p class="text-sm md:text-base leading-relaxed text-slate-600" data-i18n="procedure_step7">Make it a habit to sort waste every day and invite friends to do the same.</p>
        </div>
    </div>

    {{-- OUTRO --}}
    <div class="mt-10 rounded-xl border border-slate-200 bg-primary/5 p-6 flex gap-4 items-start">
        <span class="material-symbols-outlined text-4xl text-primary hidden sm:block">public</span>
        <p class="text-slate-700 leading-relaxed" data-i18n="procedure_outro">
            By throwing waste according to its type, we help maintain the cleanliness and sustainability of the school environment. This simple habit can have a massive impact on our collective health and comfort. Let's support the Go Green School program by diligently sorting our waste every day. 🌍✨
        </p>
    </div>

    {{-- ADDITIONAL GO GREEN IMPLEMENTATION PROGRAM --}}
    <div class="program-apply-shell animate-slide-up">
        <h3 class="text-2xl font-bold tracking-tight text-slate-900" data-i18n="program_hero_title">
            How to Implement the Go Green School Program at School
        </h3>
        <p class="mt-2 text-sm md:text-base text-slate-700" data-i18n="program_apply_intro">
            Use this framework to encourage students and all school members to build consistent eco-friendly habits.
        </p>

        <div class="program-apply-accordion">
            <details class="program-apply-item" open>
                <summary class="program-apply-summary">
                    <span class="inline-flex items-center gap-2"><span class="material-symbols-outlined text-primary">flag</span><span data-i18n="program_apply_objective_title">Objective</span></span>
                    <span class="material-symbols-outlined">expand_more</span>
                </summary>
                <div class="program-apply-body">
                    <p data-i18n="program_apply_objective_text">Encourage students and all school members to protect the environment by applying eco-friendly habits at school.</p>
                </div>
            </details>

            <details class="program-apply-item">
                <summary class="program-apply-summary">
                    <span class="inline-flex items-center gap-2"><span class="material-symbols-outlined text-primary">handyman</span><span data-i18n="program_apply_materials_title">Tools and Materials</span></span>
                    <span class="material-symbols-outlined">expand_more</span>
                </summary>
                <div class="program-apply-body">
                    <ul class="program-apply-list">
                        <li><span class="material-symbols-outlined">check_circle</span><span data-i18n="program_apply_material1">Separate trash bins (organic, inorganic, B3)</span></li>
                        <li><span class="material-symbols-outlined">check_circle</span><span data-i18n="program_apply_material2">Plants or tree seedlings</span></li>
                        <li><span class="material-symbols-outlined">check_circle</span><span data-i18n="program_apply_material3">Cleaning tools (brooms, dustpans, etc.)</span></li>
                        <li><span class="material-symbols-outlined">check_circle</span><span data-i18n="program_apply_material4">Go Green posters or campaign signs</span></li>
                        <li><span class="material-symbols-outlined">check_circle</span><span data-i18n="program_apply_material5">Used bottles or recycling containers</span></li>
                    </ul>
                </div>
            </details>

            <details class="program-apply-item">
                <summary class="program-apply-summary">
                    <span class="inline-flex items-center gap-2"><span class="material-symbols-outlined text-primary">route</span><span data-i18n="program_apply_steps_title">Implementation Steps</span></span>
                    <span class="material-symbols-outlined">expand_more</span>
                </summary>
                <div class="program-apply-body">
                    <ol class="program-apply-list">
                        <li><span class="font-semibold text-primary">1.</span><span data-i18n="program_apply_step1">Provide separate waste bins around the school based on waste type.</span></li>
                        <li><span class="font-semibold text-primary">2.</span><span data-i18n="program_apply_step2">Encourage students to dispose of waste according to category (organic, inorganic, B3).</span></li>
                        <li><span class="font-semibold text-primary">3.</span><span data-i18n="program_apply_step3">Run greening activities such as planting trees or plants in the school area.</span></li>
                        <li><span class="font-semibold text-primary">4.</span><span data-i18n="program_apply_step4">Reduce single-use plastic by encouraging students to bring their own drinking bottles.</span></li>
                        <li><span class="font-semibold text-primary">5.</span><span data-i18n="program_apply_step5">Organize routine weekly clean-up activities.</span></li>
                        <li><span class="font-semibold text-primary">6.</span><span data-i18n="program_apply_step6">Recycle waste into useful items, such as crafts made from used bottles.</span></li>
                        <li><span class="font-semibold text-primary">7.</span><span data-i18n="program_apply_step7">Install Go Green posters or slogans to increase student awareness.</span></li>
                    </ol>
                </div>
            </details>

            <details class="program-apply-item">
                <summary class="program-apply-summary">
                    <span class="inline-flex items-center gap-2"><span class="material-symbols-outlined text-primary">task_alt</span><span data-i18n="program_apply_closing_title">Closing</span></span>
                    <span class="material-symbols-outlined">expand_more</span>
                </summary>
                <div class="program-apply-body">
                    <p data-i18n="program_apply_closing_text">By applying these steps consistently, the school environment will become cleaner, healthier, and more comfortable for all school members.</p>
                </div>
            </details>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <a href="{{ route('contact') }}" class="flex items-center justify-center rounded-lg h-12 px-10 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-base font-bold shadow-sm">
            Contact Us for More Info
        </a>
    </div>
</section>

@endsection
