@extends('layouts.app')

@section('title', 'Gallery — Go Green School')
@section('meta_description', 'Photos and moments from Go Green School activities across Indonesia. See eco-friendly schools in action.')

@section('content')

<style>
    .gallery-hero {
        position: relative;
        overflow: hidden;
        border-bottom: 1px solid #e2e8f0;
        background: linear-gradient(130deg, #eef8ff 0%, #f3ffe9 46%, #fff6e8 100%);
    }
    .gallery-hero-grid {
        position: relative;
        z-index: 2;
        display: grid;
        gap: 1.5rem;
        align-items: center;
    }
    @media (min-width: 1024px) {
        .gallery-hero-grid {
            grid-template-columns: 1.08fr 0.92fr;
            gap: 2rem;
        }
    }
    .gallery-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        border-radius: 9999px;
        border: 1px solid rgba(37, 99, 235, 0.2);
        background: rgba(255, 255, 255, 0.78);
        padding: 0.34rem 0.8rem;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #1d4ed8;
    }
    .gallery-pill {
        display: inline-flex;
        align-items: center;
        border-radius: 9999px;
        border: 1px solid rgba(30, 64, 175, 0.16);
        background: rgba(255, 255, 255, 0.72);
        padding: 0.32rem 0.75rem;
        font-size: 0.72rem;
        font-weight: 700;
        color: #1e3a8a;
    }
    .gallery-hero-mosaic {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.6rem;
    }
    .gallery-mosaic-item {
        position: relative;
        overflow: hidden;
        border-radius: 0.9rem;
        border: 1px solid rgba(148, 163, 184, 0.35);
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.16);
        min-height: 7rem;
    }
    .gallery-mosaic-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 360ms ease;
    }
    .gallery-mosaic-item:hover img {
        transform: scale(1.06);
    }
    .gallery-mosaic-item.wide {
        grid-column: span 2;
        min-height: 8.5rem;
    }
    .gallery-mosaic-label {
        position: absolute;
        left: 0.55rem;
        bottom: 0.55rem;
        border-radius: 9999px;
        background: rgba(15, 23, 42, 0.68);
        color: #f8fafc;
        padding: 0.25rem 0.55rem;
        font-size: 0.66rem;
        font-weight: 700;
        letter-spacing: 0.04em;
    }
    .gallery-hero-glow {
        position: absolute;
        width: 13rem;
        height: 13rem;
        border-radius: 9999px;
        right: -4rem;
        top: -3rem;
        background: radial-gradient(circle at 25% 25%, rgba(37, 99, 235, 0.28), transparent 70%);
        pointer-events: none;
    }
</style>

{{-- PAGE HEADER --}}
<section class="gallery-hero px-6 py-14 lg:px-10">
    <span class="gallery-hero-glow" aria-hidden="true"></span>

    <div class="mx-auto max-w-7xl gallery-hero-grid">
        <div class="space-y-5 text-center lg:text-left">
            <p class="gallery-hero-badge">
                <span class="material-symbols-outlined text-base">photo_library</span>
                <span data-i18n="gallery_title">Gallery</span>
            </p>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl" data-i18n="gallery_title">Gallery</h1>
            <p class="text-sm leading-relaxed text-slate-700 sm:text-base lg:text-lg max-w-3xl mx-auto lg:mx-0" data-i18n="gallery_subtitle">Documentation of student environmental cadres, sanitation and water conservation facilities, school flora diversity, and green open space arrangement.</p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2">
                <span class="gallery-pill" data-i18n="gallery_topic_participation">Active Student Participation (Environmental Cadres)</span>
                <span class="gallery-pill" data-i18n="gallery_topic_sanitation">Sanitation Facilities & Water Conservation</span>
                <span class="gallery-pill" data-i18n="gallery_topic_flora">School Flora Diversity</span>
                <span class="gallery-pill" data-i18n="gallery_topic_rth">Green Open Space & Environmental Layout</span>
            </div>
        </div>

        <div class="gallery-hero-mosaic">
            <div class="gallery-mosaic-item">
                <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%281%29.jpeg') }}" alt="Active student participation in environmental activities" />
                <span class="gallery-mosaic-label" data-i18n="gallery_topic_participation">Active Student Participation (Environmental Cadres)</span>
            </div>
            <div class="gallery-mosaic-item">
                <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%282%29.jpeg') }}" alt="Sanitation and water conservation facilities" />
                <span class="gallery-mosaic-label" data-i18n="gallery_topic_sanitation">Sanitation Facilities & Water Conservation</span>
            </div>
            <div class="gallery-mosaic-item wide">
                <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.49.jpeg') }}" alt="Green open space and school environmental layout" />
                <span class="gallery-mosaic-label" data-i18n="gallery_topic_rth">Green Open Space & Environmental Layout</span>
            </div>
        </div>
    </div>
</section>

{{-- GALLERY PHOTOS --}}
<section id="gallery-grid" class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 animate-stagger">

        {{-- Photo 1: Active Student Participation (Environmental Cadres) --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%281%29.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%281%29.jpeg') }}" alt="Active student participation in environmental activities" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo1_title">Active Student Participation (Environmental Cadres)</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo1_desc">Students actively care for plants and school environment.</p>
            </div>
        </a>

        {{-- Photo 2: Sanitation Facilities & Water Conservation --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%282%29.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50%20%282%29.jpeg') }}" alt="Sanitation facilities and water conservation at school" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo2_title">Sanitation Facilities & Water Conservation</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo2_desc">Handwashing facilities and water-use awareness in school.</p>
            </div>
        </a>

        {{-- Photo 3: School Flora Diversity (1) --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.50.jpeg') }}" alt="School flora diversity area one" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo3_title">School Flora Diversity (Area 1)</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo3_desc">Varied vegetation supports school biodiversity.</p>
            </div>
        </a>

        {{-- Photo 4: School Flora Diversity (2) --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.51.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.51.jpeg') }}" alt="School flora diversity area two" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo4_title">School Flora Diversity (Area 2)</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo4_desc">Trees and plants enrich the green school ecosystem.</p>
            </div>
        </a>

        {{-- Photo 5: Green Open Space & Environmental Layout (1) --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.49.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.06.49.jpeg') }}" alt="Green open space and environmental layout area one" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo5_title">Green Open Space & Environmental Layout (Area 1)</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo5_desc">Open green area with organized and clean school landscape.</p>
            </div>
        </a>

        {{-- Photo 6: Green Open Space & Environmental Layout (2) --}}
        <a href="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.27.58.jpeg') }}" target="_blank" rel="noopener noreferrer" class="rounded-xl border border-slate-200 overflow-hidden bg-white shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="{{ asset('images/galerry/WhatsApp%20Image%202026-04-20%20at%2009.27.58.jpeg') }}" alt="Green open space and environmental layout area two" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 text-sm" data-i18n="gallery_photo6_title">Green Open Space & Environmental Layout (Area 2)</h3>
                <p class="text-xs text-slate-600 mt-1" data-i18n="gallery_photo6_desc">School grounds arranged to support comfortable green activities.</p>
            </div>
        </a>

    </div>
</section>


@endsection
