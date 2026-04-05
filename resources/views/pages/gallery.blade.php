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

{{-- GALLERY PHOTOS --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-6 sm:grid-cols--2 lg:grid-cols-3 animate-stagger">

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
