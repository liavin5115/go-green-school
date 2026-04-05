@extends('layouts.app')

@section('title', 'About — Go Green School')
@section('meta_description', 'Learn what Go Green School is, what sustainability means, and why eco-friendly schools are important for Indonesia.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">eco</span>
        <h1 class="mb-4 text-4xl font-bold text-slate-900 dark:text-slate-100 tracking-tight">Go Green School</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-3xl mx-auto" data-i18n="desc_intro">
            A Go Green School is a school that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities.
        </p>
    </div>
</section>

{{-- 4 INFO CARDS --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-6 md:grid-cols-2 mb-8 animate-stagger">
        {{-- What is a Go Green Campaign --}}
        <div class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm h-full hover-lift transition-smooth">
            <div class="flex items-center gap-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-xl">campaign</span>
                </div>
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100" data-i18n="desc_campaign_title">What is a Go Green Campaign?</h2>
            </div>
            <p class="text-slate-600 dark:text-slate-400" data-i18n="desc_campaign_intro">A Go Green campaign in school is a program that encourages students, teachers, and staff to:</p>
            <ul class="space-y-2 text-slate-600 dark:text-slate-400 flex-grow">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li1">Reduce waste</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li2">Recycle materials</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li3">Save electricity and water</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li4">Plant trees and maintain gardens</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li5">Avoid plastic use</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_campaign_li6">Keep the school clean</span></li>
            </ul>
            <p class="text-slate-600 dark:text-slate-400 font-medium mt-2" data-i18n="desc_campaign_outro">These activities help reduce pollution and protect natural resources.</p>
        </div>

        {{-- What is Sustainability --}}
        <div class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm h-full hover-lift transition-smooth">
            <div class="flex items-center gap-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-xl">recycling</span>
                </div>
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100" data-i18n="desc_sus_title">What is Sustainability?</h2>
            </div>
            <p class="text-slate-600 dark:text-slate-400" data-i18n="desc_sus_intro">Sustainability means using resources carefully so that future generations can also use them. In a Go Green School, sustainability includes:</p>
            <ul class="space-y-2 text-slate-600 dark:text-slate-400 flex-grow">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_sus_li1">Using reusable items instead of disposable ones</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_sus_li2">Conserving energy</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_sus_li3">Planting trees</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_sus_li4">Supporting eco-friendly projects</span></li>
            </ul>
        </div>

        {{-- What is a Go Green Decal --}}
        <div class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm h-full hover-lift transition-smooth">
            <div class="flex items-center gap-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-xl">label</span>
                </div>
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100" data-i18n="desc_decal_title">What is a Go Green Decal?</h2>
            </div>
            <p class="text-slate-600 dark:text-slate-400" data-i18n="desc_decal_intro1">A Go Green decal is a sticker or sign displayed around the school to remind people to care for the environment.</p>
            <p class="text-slate-600 dark:text-slate-400" data-i18n="desc_decal_intro2">Examples of messages on decals:</p>
            <ul class="space-y-2 text-slate-600 dark:text-slate-400 flex-grow">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_decal_li1">&ldquo;Save Water&rdquo;</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_decal_li2">&ldquo;Switch Off Lights&rdquo;</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_decal_li3">&ldquo;Recycle Here&rdquo;</span></li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span><span data-i18n="desc_decal_li4">&ldquo;Keep Our School Clean&rdquo;</span></li>
            </ul>
            <p class="text-slate-600 dark:text-slate-400 font-medium" data-i18n="desc_decal_outro">These decals help spread environmental awareness.</p>
        </div>

        {{-- Why is it Important --}}
        <div class="flex flex-col gap-4 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm h-full hover-lift transition-smooth">
            <div class="flex items-center gap-3 pb-3 border-b border-slate-100 dark:border-slate-800">
                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-xl">help</span>
                </div>
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100" data-i18n="desc_why_title">Why is a Go Green School Important?</h2>
            </div>
            <ul class="space-y-3 text-slate-600 dark:text-slate-400 flex-grow">
                <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary mt-0.5 text-base">check_circle</span><span data-i18n="desc_why_li1">Teaches students responsibility</span></li>
                <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary mt-0.5 text-base">check_circle</span><span data-i18n="desc_why_li2">Reduces environmental damage</span></li>
                <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary mt-0.5 text-base">check_circle</span><span data-i18n="desc_why_li3">Creates a healthy and clean learning environment</span></li>
                <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary mt-0.5 text-base">check_circle</span><span data-i18n="desc_why_li4">Encourages teamwork and community involvement</span></li>
            </ul>
        </div>
    </div>

    {{-- Conclusion --}}
    <div class="max-w-4xl mx-auto rounded-xl bg-background-dark dark:bg-slate-950 p-8 text-center text-white">
        <span class="material-symbols-outlined text-primary text-3xl mb-3">stars</span>
        <h3 class="text-2xl font-bold mb-4" data-i18n="desc_conclusion_title">Conclusion</h3>
        <p class="text-slate-300 leading-relaxed" data-i18n="desc_conclusion_text">
            A Go Green School plays an important role in building a better future. By practicing eco-friendly habits, students learn to respect and protect the environment. Small actions like saving water, recycling, and planting trees can make a big difference.
        </p>
    </div>
</section>

{{-- ABOUT THIS PORTAL --}}
<section class="w-full bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 px-6 py-16">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col md:flex-row gap-10 items-center">
            <div class="w-full md:w-1/3">
                <div class="rounded-2xl bg-primary/5 dark:bg-primary/10 p-10 flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-7xl text-primary mb-4">language</span>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-slate-100" data-i18n="about_site_title">About This Portal</h3>
                </div>
            </div>
            <div class="w-full md:w-2/3 space-y-5">
                <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight" data-i18n="about_site_heading">Website Information</h3>
                <ul class="space-y-4">
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                        <span class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="about_site_p1">This is a community website or environmental education portal focused on environmentally conscious schools in Indonesia.</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                        <span class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="about_site_p2">Providing information on environmental management and protection in schools, as well as green living tips.</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                        <span class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="about_site_p3">The site features articles, activities, workshops, and programs that support schools in becoming more environmentally friendly.</span>
                    </li>
                    <li class="flex gap-3 items-start">
                        <span class="material-symbols-outlined text-primary mt-0.5">check_circle</span>
                        <span class="text-slate-600 dark:text-slate-400 leading-relaxed" data-i18n="about_site_p4">The main goal is to integrate quality education with environmental awareness, such as water, waste, and energy management.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
