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
    .dark .gallery-hero {
        border-bottom-color: #1e293b;
        background: linear-gradient(130deg, #0f172a 0%, #102215 45%, #172554 100%);
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
    .dark .gallery-hero-badge {
        border-color: rgba(148, 163, 184, 0.32);
        background: rgba(15, 23, 42, 0.62);
        color: #bfdbfe;
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
    .dark .gallery-pill {
        border-color: rgba(148, 163, 184, 0.26);
        background: rgba(15, 23, 42, 0.58);
        color: #cbd5e1;
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
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-slate-100 sm:text-4xl lg:text-5xl" data-i18n="gallery_title">Gallery</h1>
            <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300 sm:text-base lg:text-lg max-w-3xl mx-auto lg:mx-0" data-i18n="gallery_subtitle">Photos and moments from Go Green School activities across Indonesia.</p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2">
                <span class="gallery-pill" data-i18n="gallery_photo1_title">Students Planting Trees</span>
                <span class="gallery-pill" data-i18n="gallery_photo3_title">Composting Program</span>
                <span class="gallery-pill" data-i18n="gallery_photo6_title">Renewable Energy</span>
            </div>
        </div>

        <div class="gallery-hero-mosaic">
            <div class="gallery-mosaic-item">
                <img src="https://ssww-blog.s3.amazonaws.com/blog/wp-content/uploads/earth-day-plant-a-tree1.jpg" alt="Students planting trees" />
                <span class="gallery-mosaic-label" data-i18n="gallery_photo1_title">Students Planting Trees</span>
            </div>
            <div class="gallery-mosaic-item">
                <img src="https://cleanriver.com/wp-content/uploads/2023/09/kidsandbin2.jpg" alt="Composting program" />
                <span class="gallery-mosaic-label" data-i18n="gallery_photo3_title">Composting Program</span>
            </div>
            <div class="gallery-mosaic-item wide">
                <img src="https://www.nyc.gov/assets/dcas/images/press-releases/newly-installed-solar-panels-on-school-roof-drone-photo.jpg" alt="Renewable energy at school" />
                <span class="gallery-mosaic-label" data-i18n="gallery_photo6_title">Renewable Energy</span>
            </div>
        </div>
    </div>
</section>

{{-- GALLERY PHOTOS --}}
<section id="gallery-grid" class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 animate-stagger">

        {{-- Photo 1: Eco (Students planting trees) --}}
        <a href="https://ssww-blog.s3.amazonaws.com/blog/wp-content/uploads/earth-day-plant-a-tree1.jpg" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://ssww-blog.s3.amazonaws.com/blog/wp-content/uploads/earth-day-plant-a-tree1.jpg" alt="Student planting trees" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo1_title">Students Planting Trees</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo1_desc">Eco-friendly activity</p>
            </div>
        </a>

        {{-- Photo 2: Park (School garden) --}}
        <a href="https://www.plt.org/wp-content/uploads/2016/11/students-adults-working-to-create-outdoor-classroom-500x333.jpg" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://www.plt.org/wp-content/uploads/2016/11/students-adults-working-to-create-outdoor-classroom-500x333.jpg" alt="School garden outdoor learning" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo2_title">School Garden</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo2_desc">Outdoor learning space</p>
            </div>
        </a>

        {{-- Photo 3: Compost (Waste management) --}}
        <a href="https://cleanriver.com/wp-content/uploads/2023/09/kidsandbin2.jpg" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://cleanriver.com/wp-content/uploads/2023/09/kidsandbin2.jpg" alt="Composting program kids" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo3_title">Composting Program</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo3_desc">Waste management</p>
            </div>
        </a>

        {{-- Photo 4: Recycling (Students sorting) --}}
        <a href="https://media.istockphoto.com/id/1991886236/id/foto/kelompok-amal-sukarela-sekolah-anak-anak-dengan-kantong-sampah-membersihkan-di-pantai.jpg?s=612x612&w=0&k=20&c=aCv6eTAORHXHCsmxUfJy9CkoGSfq_Gj3KLfSBAqpXJ4=" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://media.istockphoto.com/id/1991886236/id/foto/kelompok-amal-sukarela-sekolah-anak-anak-dengan-kantong-sampah-membersihkan-di-pantai.jpg?s=612x612&w=0&k=20&c=aCv6eTAORHXHCsmxUfJy9CkoGSfq_Gj3KLfSBAqpXJ4=" alt="Students sorting recycling materials" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo4_title">Recycling Activities</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo4_desc">Sorting materials</p>
            </div>
        </a>

        {{-- Photo 5: Water Conservation --}}
        <a href="https://i4di.org/wp-content/uploads/2025/02/vecteezy_little-asian-girl-wash-her-hands-before-eating-at-school_2966655-1024x620.jpg" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://i4di.org/wp-content/uploads/2025/02/vecteezy_little-asian-girl-wash-her-hands-before-eating-at-school_2966655-1024x620.jpg" alt="Water conservation at school" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo5_title">Water Conservation</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo5_desc">Sustainable practices</p>
            </div>
        </a>

        {{-- Photo 6: Solar Panels & Energy --}}
        <a href="https://www.nyc.gov/assets/dcas/images/press-releases/newly-installed-solar-panels-on-school-roof-drone-photo.jpg" target="_blank" class="rounded-xl border border-slate-200 dark:border-slate-800 overflow-hidden bg-white dark:bg-slate-900 shadow-sm hover:shadow-md hover:border-primary/50 transition-all group hover-lift">
            <img src="https://www.nyc.gov/assets/dcas/images/press-releases/newly-installed-solar-panels-on-school-roof-drone-photo.jpg" alt="Solar panels on school roof" class="w-full h-56 object-cover group-hover:scale-105 transition-transform">
            <div class="p-4">
                <h3 class="font-bold text-slate-900 dark:text-slate-100 text-sm" data-i18n="gallery_photo6_title">Renewable Energy</h3>
                <p class="text-xs text-slate-600 dark:text-slate-400 mt-1" data-i18n="gallery_photo6_desc">Solar panels & green power</p>
            </div>
        </a>

    </div>
</section>


@endsection
