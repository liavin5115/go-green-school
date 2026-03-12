@extends('layouts.app')

@section('title', 'Gallery — Go Green School')
@section('meta_description', 'Photos and moments from Go Green School activities across Indonesia. See eco-friendly schools in action.')

@section('content')

{{-- PAGE HEADER --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-14">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">photo_library</span>
        <h1 class="text-3xl font-bold text-slate-900 dark:text-slate-100 tracking-tight mb-2" data-i18n="gallery_title">Gallery</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400" data-i18n="gallery_subtitle">Photos and moments from Go Green School activities across Indonesia.</p>
    </div>
</section>

{{-- GALLERY PLACEHOLDER --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach(['eco', 'park', 'compost', 'recycling', 'water_drop', 'energy_savings_leaf'] as $icon)
        <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-10 shadow-sm flex flex-col items-center justify-center text-center min-h-[200px] hover:border-primary/50 hover:shadow-md transition-all">
            <span class="material-symbols-outlined text-6xl text-primary mb-4">{{ $icon }}</span>
            <p class="text-sm text-slate-500 dark:text-slate-400" data-i18n="gallery_coming">Coming Soon! We are collecting photos from participating schools.</p>
        </div>
        @endforeach
    </div>

    <div class="mt-12 text-center">
        <p class="text-slate-600 dark:text-slate-400 mb-5">Want to share your school's Go Green activities?</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-lg h-11 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold" data-i18n="nav_contact">
            Contact Us
        </a>
    </div>
</section>

@endsection
