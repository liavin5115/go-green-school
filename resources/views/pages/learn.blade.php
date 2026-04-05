@extends('layouts.app')

@section('title', 'Learn — Go Green School')
@section('meta_description', 'What is Go Green? An explanation of environmental sustainability and global warming for students and teachers.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-4xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">explore</span>
        <h1 class="mb-4 text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight" data-i18n="expl_title">
            What is Go Green? An Explanation of Environmental Sustainability and Global Warming
        </h1>
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
        <a href="https://wa.me/6281255585688" target="_blank" class="flex items-center justify-center rounded-lg h-11 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold" data-i18n="home_cta_btn">
            Contact Us
        </a>
    </div>
</section>

@endsection
