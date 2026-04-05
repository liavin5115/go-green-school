<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>@yield('title', 'Go Green School')</title>
<meta name="description" content="@yield('meta_description', 'Go Green School — Building an Environmentally Conscious Generation. An environmental education portal for eco-friendly schools in Indonesia.')">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#11d442",
                    "background-light": "#f6f8f6",
                    "background-dark": "#102215",
                },
                fontFamily: {
                    sans: ["Lexend", "sans-serif"],
                },
            },
        },
    }
</script>
<style>
    /* Language & Mobile Menu */
    .lang-btn { transition: all 0.2s; }
    .lang-btn.active { background-color: #11d442; color: #0d1117; border-color: #11d442; }
    .mobile-menu { display: none; }
    .mobile-menu.open { display: flex; }

    /* Form Inputs */
    input, textarea, select {
        border: 1px solid #cbd5e1;
        border-radius: 0.5rem;
        background: white;
        padding: 0.65rem 1rem;
        width: 100%;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.3s ease;
    }
    input:focus, textarea:focus, select:focus {
        border-color: #11d442;
        box-shadow: 0 0 0 3px rgba(17, 212, 66, 0.1);
    }
    .dark input, .dark textarea, .dark select {
        background: #1e293b;
        border-color: #334155;
        color: #f1f5f9;
    }

    /* Global Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes slideInUp {
        from { transform: translateY(30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes slideInDown {
        from { transform: translateY(-30px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    @keyframes slideInLeft {
        from { transform: translateX(-40px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideInRight {
        from { transform: translateX(40px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes scaleIn {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-12px); }
    }
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.6; }
    }
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }

    /* Animation Utilities */
    .animate-fade-in { animation: fadeIn 0.6s ease-out; }
    .animate-slide-up { animation: slideInUp 0.6s ease-out; }
    .animate-slide-down { animation: slideInDown 0.6s ease-out; }
    .animate-slide-left { animation: slideInLeft 0.6s ease-out; }
    .animate-slide-right { animation: slideInRight 0.6s ease-out; }
    .animate-scale-in { animation: scaleIn 0.5s ease-out; }
    .animate-bounce-slow { animation: bounce 2s ease-in-out infinite; }
    .animate-pulse-slow { animation: pulse 3s ease-in-out infinite; }

    /* Stagger Animation for Lists */
    .animate-stagger > * { animation: slideInUp 0.6s ease-out backwards; }
    .animate-stagger > *:nth-child(1) { animation-delay: 0.1s; }
    .animate-stagger > *:nth-child(2) { animation-delay: 0.2s; }
    .animate-stagger > *:nth-child(3) { animation-delay: 0.3s; }
    .animate-stagger > *:nth-child(4) { animation-delay: 0.4s; }
    .animate-stagger > *:nth-child(5) { animation-delay: 0.5s; }
    .animate-stagger > *:nth-child(6) { animation-delay: 0.6s; }

    /* Smooth Hover Effects */
    .transition-smooth { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
    .hover-glow:hover { box-shadow: 0 0 20px rgba(17, 212, 66, 0.3); }
    .hover-scale:hover { transform: scale(1.05); }

    /* Button Animations */
    .btn-animated {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .btn-animated:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(17, 212, 66, 0.2); }
    .btn-animated:active { transform: translateY(0); }

    /* Card Entrance Animations */
    .card-entrance { animation: slideInUp 0.7s ease-out backwards; }
    .card-entrance:nth-child(1) { animation-delay: 0.1s; }
    .card-entrance:nth-child(2) { animation-delay: 0.2s; }
    .card-entrance:nth-child(3) { animation-delay: 0.3s; }

    /* Navigation Animation */
    nav { animation: slideInDown 0.5s ease-out; }

    /* Hero Section */
    .hero-title { animation: slideInUp 0.8s ease-out; }
    .hero-subtitle { animation: slideInUp 0.8s ease-out 0.2s both; }
    .hero-cta { animation: scaleIn 0.6s ease-out 0.4s both; }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark font-sans text-slate-900 dark:text-slate-100 antialiased min-h-screen flex flex-col">

{{-- HEADER --}}
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-md">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6 lg:px-10">
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 shrink-0">
            <div class="flex h-8 w-8 items-center justify-center text-primary">
                <span class="material-symbols-outlined text-3xl">eco</span>
            </div>
            <span class="text-lg font-bold text-slate-900 dark:text-slate-100 tracking-tight">Go Green School</span>
        </a>

        {{-- Desktop Nav --}}
        <nav class="hidden md:flex items-center gap-6 lg:gap-8">
            <a class="text-sm font-medium {{ request()->routeIs('home') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('home') }}" data-i18n="nav_home">Home</a>
            <a class="text-sm font-medium {{ request()->routeIs('about') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('about') }}" data-i18n="nav_about">About</a>
            <a class="text-sm font-medium {{ request()->routeIs('learn') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('learn') }}" data-i18n="nav_learn">Learn</a>
            <a class="text-sm font-medium {{ request()->routeIs('programs') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('programs') }}" data-i18n="nav_programs">Programs</a>
            <a class="text-sm font-medium {{ request()->routeIs('gallery') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('gallery') }}" data-i18n="nav_gallery">Gallery</a>
            <a class="text-sm font-medium {{ request()->routeIs('news') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('news') }}" data-i18n="nav_news">News</a>
            <a class="text-sm font-medium {{ request()->routeIs('calculator') ? 'text-primary' : 'text-slate-700 dark:text-slate-300 hover:text-primary dark:hover:text-primary' }} transition-colors" href="{{ route('calculator') }}" data-i18n="nav_calculator">Calculator</a>
            <a class="flex items-center justify-center rounded-lg h-9 px-5 bg-primary hover:bg-green-500 transition-colors text-slate-900 text-sm font-bold shadow-sm" href="https://wa.me/6281255585688" target="_blank" data-i18n="nav_join">Contact Us</a>

            {{-- Language Switcher --}}
            <div class="flex items-center border border-slate-200 dark:border-slate-700 rounded-full overflow-hidden ml-1">
                <button onclick="switchLang('en')" id="btn-en" class="lang-btn active px-3 py-1 text-xs font-bold border-r border-slate-200 dark:border-slate-700">EN</button>
                <button onclick="switchLang('id')" id="btn-id" class="lang-btn px-3 py-1 text-xs font-bold text-slate-600 dark:text-slate-400">ID</button>
            </div>

            {{-- Dark Mode Toggle --}}
            <button onclick="toggleDarkMode()" aria-label="Toggle Dark Mode" class="flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:border-primary hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-lg">dark_mode</span>
            </button>
        </nav>

        {{-- Mobile Controls --}}
        <div class="flex items-center gap-2 md:hidden">
            <div class="flex items-center border border-slate-200 dark:border-slate-700 rounded-full overflow-hidden">
                <button onclick="switchLang('en')" id="btn-en-m" class="lang-btn active px-2 py-1 text-xs font-bold border-r border-slate-200 dark:border-slate-700">EN</button>
                <button onclick="switchLang('id')" id="btn-id-m" class="lang-btn px-2 py-1 text-xs font-bold text-slate-600 dark:text-slate-400">ID</button>
            </div>
            <button onclick="toggleDarkMode()" aria-label="Toggle Dark Mode" class="flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300">
                <span class="material-symbols-outlined text-lg">dark_mode</span>
            </button>
            <button onclick="document.getElementById('mobile-menu').classList.toggle('open')" aria-expanded="false" aria-label="Toggle Mobile Menu" class="text-slate-700 dark:text-slate-300">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="mobile-menu flex-col border-t border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark px-6 py-4 md:hidden">
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('home') }}" data-i18n="nav_home">Home</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('about') }}" data-i18n="nav_about">About</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('learn') }}" data-i18n="nav_learn">Learn</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('programs') }}" data-i18n="nav_programs">Programs</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('gallery') }}" data-i18n="nav_gallery">Gallery</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('news') }}" data-i18n="nav_news">News</a>
        <a class="block py-3 text-sm font-medium text-slate-700 dark:text-slate-300 border-b border-slate-100 dark:border-slate-800" href="{{ route('calculator') }}" data-i18n="nav_calculator">Calculator</a>
        <a class="block mt-4 flex items-center justify-center rounded-lg h-10 bg-primary text-slate-900 text-sm font-bold shadow-sm" href="https://wa.me/6281255585688" target="_blank" data-i18n="nav_join">Contact Us</a>
    </div>
</header>

{{-- MAIN CONTENT --}}
<main class="flex-grow">
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-10 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-10">
            {{-- Brand --}}
            <div class="md:col-span-1 flex flex-col gap-4">
                <div class="flex items-center gap-2 text-slate-900 dark:text-slate-100">
                    <span class="material-symbols-outlined text-3xl text-primary">eco</span>
                    <span class="text-lg font-bold">Go Green School</span>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed" data-i18n="footer_tagline">
                    Empowering the next generation to build a sustainable world through education and action.
                </p>
            </div>
            {{-- Quick Links --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 dark:text-slate-100 font-bold text-sm uppercase tracking-wider">Quick Links</h4>
                <nav class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_home">Home</a>
                    <a href="{{ route('about') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_about">About</a>
                    <a href="{{ route('learn') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_learn">Learn</a>
                    <a href="{{ route('programs') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_programs">Programs</a>
                    <a href="{{ route('gallery') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_gallery">Gallery</a>
                    <a href="{{ route('news') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_news">News</a>
                    <a href="{{ route('calculator') }}" class="text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm transition-colors" data-i18n="nav_calculator">Calculator</a>
                </nav>
            </div>
            {{-- Contact --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 dark:text-slate-100 font-bold text-sm uppercase tracking-wider" data-i18n="nav_contact">Contact</h4>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3 text-slate-500 dark:text-slate-400 text-sm">
                        <span class="material-symbols-outlined text-lg">location_on</span>
                        <span>Jl. Hijau No. 1, Indonesia</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-500 dark:text-slate-400 text-sm">
                        <span class="material-symbols-outlined text-lg">call</span>
                        <span>+62 (21) 123-4567</span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-500 dark:text-slate-400 text-sm">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        <span>hello@gogreenschool.id</span>
                    </div>
                </div>
            </div>
            {{-- Social --}}
            <div class="flex flex-col gap-4">
                <h4 class="text-slate-900 dark:text-slate-100 font-bold text-sm uppercase tracking-wider">Follow Us</h4>
                <div class="flex gap-3">
                    <a class="w-9 h-9 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="#" aria-label="Visit Website">
                        <span class="material-symbols-outlined text-lg">public</span>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="#" aria-label="Send Email">
                        <span class="material-symbols-outlined text-lg">alternate_email</span>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="#" aria-label="Follow us on Instagram">
                        <span class="material-symbols-outlined text-lg">photo_camera</span>
                    </a>
                    <a class="w-9 h-9 rounded-full border border-slate-200 dark:border-slate-700 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-primary hover:text-slate-900 hover:border-primary transition-all" href="#" aria-label="Watch our Videos">
                        <span class="material-symbols-outlined text-lg">smart_display</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between border-t border-slate-200 dark:border-slate-800 pt-8 gap-4">
            <p class="text-slate-500 dark:text-slate-500 text-sm">© 2026 Go Green School. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-slate-500 dark:text-slate-500 hover:text-primary text-sm transition-colors" href="#">Privacy Policy</a>
                <a class="text-slate-500 dark:text-slate-500 hover:text-primary text-sm transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

{{-- TRANSLATIONS & LANGUAGE SWITCHER --}}
<script>
// Initialize dark mode as early as possible to prevent flash
(function() {
    const isDarkMode = localStorage.getItem('ggs_dark_mode') === 'true';
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
    }
})();

const translations = {
    en: {
        nav_home: "Home", nav_about: "About", nav_programs: "Programs", nav_learn: "Learn",
        nav_gallery: "Gallery", nav_news: "News", nav_calculator: "Trash Calculator", nav_contact: "Contact", nav_join: "Contact Us",
        hero_subtitle: "Eco-Friendly School",
        hero_tagline: "Building an Environmentally Conscious Generation",
        hero_cta_join: "Contact Us", hero_cta_learn: "Learn More",
        home_mission_label: "Our Mission",
        home_mission_title: "What is Go Green School?",
        home_mission_text: "A school program that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities.",
        home_card1_title: "About Go Green", home_card1_desc: "Learn what Go Green School is and why it matters for our future.", home_card1_cta: "Learn More",
        home_card2_title: "Waste Sorting Guide", home_card2_desc: "Step-by-step guide to properly sort organic, inorganic & B3 waste.", home_card2_cta: "Discover",
        home_card3_title: "Go Green & Climate", home_card3_desc: "Understand the link between Go Green practices and global warming.", home_card3_cta: "View Projects",
        home_cta_title: "Ready to make your school greener?",
        home_cta_text: "Have questions or want to learn more about Go Green School? Contact us now!",
        home_cta_btn: "Contact Us",
        desc_intro: "A Go Green School is a school that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities. The main goal of a Go Green School is to protect the environment and teach students how to live responsibly and sustainably.",
        desc_campaign_title: "What is a Go Green Campaign?",
        desc_campaign_intro: "A Go Green campaign in school is a program that encourages students, teachers, and staff to:",
        desc_campaign_li1: "Reduce waste", desc_campaign_li2: "Recycle materials",
        desc_campaign_li3: "Save electricity and water", desc_campaign_li4: "Plant trees and maintain gardens",
        desc_campaign_li5: "Avoid plastic use", desc_campaign_li6: "Keep the school clean",
        desc_campaign_outro: "These activities help reduce pollution and protect natural resources.",
        desc_sus_title: "What is Sustainability?",
        desc_sus_intro: "Sustainability means using resources carefully so that future generations can also use them. In a Go Green School, sustainability includes:",
        desc_sus_li1: "Using reusable items instead of disposable ones", desc_sus_li2: "Conserving energy",
        desc_sus_li3: "Planting trees", desc_sus_li4: "Supporting eco-friendly projects",
        desc_decal_title: "What is a Go Green Decal?",
        desc_decal_intro1: "A Go Green decal is a sticker or sign displayed around the school to remind people to care for the environment.",
        desc_decal_intro2: "Examples of messages on decals:",
        desc_decal_li1: "\u201cSave Water\u201d", desc_decal_li2: "\u201cSwitch Off Lights\u201d",
        desc_decal_li3: "\u201cRecycle Here\u201d", desc_decal_li4: "\u201cKeep Our School Clean\u201d",
        desc_decal_outro: "These decals help spread environmental awareness.",
        desc_why_title: "Why is a Go Green School Important?",
        desc_why_li1: "Teaches students responsibility", desc_why_li2: "Reduces environmental damage",
        desc_why_li3: "Creates a healthy and clean learning environment", desc_why_li4: "Encourages teamwork and community involvement",
        desc_conclusion_title: "Conclusion",
        desc_conclusion_text: "A Go Green School plays an important role in building a better future. By practicing eco-friendly habits, students learn to respect and protect the environment. Small actions like saving water, recycling, and planting trees can make a big difference.",
        about_site_title: "About This Portal", about_site_heading: "Website Information",
        about_site_p1: "This is a community website or environmental education portal focused on environmentally conscious schools in Indonesia.",
        about_site_p2: "Providing information on environmental management and protection in schools, as well as green living tips.",
        about_site_p3: "The site features articles, activities, workshops, and programs that support schools in becoming more environmentally friendly.",
        about_site_p4: "The main goal is to integrate quality education with environmental awareness, such as water, waste, and energy management.",
        procedure_heading: "How to Dispose of Waste by Type (Organic, Inorganic, and B3)",
        procedure_sub: "School Waste Management Procedure",
        procedure_intro_title: "Introduction",
        procedure_intro: "This procedure text aims to guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.",
        procedure_materials_title: "Materials and Tools:",
        procedure_mat1: "Three types of trash bins (organic, inorganic, and B3)",
        procedure_mat2: "Labels or markers on each trash bin",
        procedure_mat3: "Daily waste (food scraps, plastic, paper, used batteries, etc.)",
        procedure_steps_title: "Steps:",
        procedure_step1: "Prepare three labeled trash bins: organic, inorganic, and B3.",
        procedure_step2: "Identify the type of waste before throwing it away.",
        procedure_step3: "Put food scraps, leaves, and fruit peels into the organic bin.",
        procedure_step4: "Put plastic, paper, and cans into the inorganic bin.",
        procedure_step5: "Put used batteries, broken glass, or other hazardous items into the B3 bin.",
        procedure_step6: "Ensure the waste is disposed of in the correct place.",
        procedure_step7: "Make it a habit to sort waste every day and invite friends to do the same.",
        procedure_outro: "By throwing waste according to its type, we help maintain the cleanliness and sustainability of the school environment. This simple habit can have a massive impact on our collective health and comfort. Let\u2019s support the Go Green School program by diligently sorting our waste every day. \ud83c\udf0d\u2728",
        procedure_cta: "Let's Start Sorting!",
        expl_title: "What is Go Green? An Explanation of Environmental Sustainability and Global Warming",
        expl_intro_title: "Purpose",
        expl_intro_text: "This explanation text aims to provide a clear understanding of the \"Go Green\" concept and its connection to global warming. It is designed for students, teachers, and school staff to grasp why adopting eco-friendly practices is crucial in our daily lives, especially within the Go Green School program. By learning about these topics, we can take informed actions to protect our planet and promote a sustainable future.",
        expl_keys_title: "Key Concepts",
        expl_gogreen_title: "What is Go Green?",
        expl_gogreen_text: "Go Green refers to a global movement and lifestyle that encourages individuals, communities, and organizations to adopt environmentally friendly practices. It involves reducing waste, conserving resources, and minimizing our ecological footprint. In the context of schools, Go Green means integrating sustainability into education, such as recycling programs, energy-saving initiatives, and nature-based learning. The goal is to create a \"green\" environment where actions like planting trees, using renewable energy, and reducing plastic use become everyday habits. This not only helps preserve natural resources but also educates the younger generation to become responsible stewards of the Earth.",
        expl_gw_title: "What is Global Warming?",
        expl_gw_text: "Global warming is the long-term increase in Earth\u2019s average surface temperature due to human activities that release greenhouse gases like carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O) into the atmosphere. These gases trap heat from the sun, creating a \"greenhouse effect\" that leads to climate change. Causes include burning fossil fuels for energy, deforestation, industrial processes, and excessive waste production. Effects of global warming are widespread: rising sea levels, extreme weather events (such as floods, droughts, and hurricanes), loss of biodiversity, and health risks like heat-related illnesses. For instance, melting polar ice caps threaten coastal communities, while warmer oceans disrupt marine ecosystems.",
        expl_link_title: "The Link Between Go Green and Global Warming",
        expl_link_text: "Adopting Go Green practices directly combats global warming by reducing greenhouse gas emissions. Simple school actions, like switching to LED lights, composting organic waste, or promoting cycling over car use, lower carbon footprints. Globally, if more schools and communities go green, we can slow down climate change, preserve habitats, and ensure a livable planet for future generations. Programs like Go Green School empower students to understand these issues through hands-on activities, fostering a sense of environmental responsibility.",
        expl_conclusion_title: "Reaffirmation",
        expl_conclusion_text: "Understanding Go Green and the realities of global warming empowers us to make positive changes. By embracing sustainable habits, we not only mitigate environmental damage but also build a healthier, more resilient world. Let\u2019s commit to the Go Green School initiative today\u2014every small action counts toward a greener tomorrow! \ud83c\udf0d\u2728",
        join_title: "Join Go Green School", join_subtitle: "Be part of the movement to make schools greener across Indonesia.",
        join_name: "Full Name", join_email: "Email Address", join_school: "School Name",
        join_role: "Your Role", join_role_student: "Student", join_role_teacher: "Teacher",
        join_role_parent: "Parent", join_role_other: "Other",
        join_message: "Why do you want to join?", join_submit: "Submit",
        gallery_title: "Gallery", gallery_subtitle: "Photos and moments from Go Green School activities across Indonesia.",
        gallery_photo1_title: "Students Planting Trees", gallery_photo1_desc: "Eco-friendly activity",
        gallery_photo2_title: "School Garden", gallery_photo2_desc: "Outdoor learning space",
        gallery_photo3_title: "Composting Program", gallery_photo3_desc: "Waste management",
        gallery_photo4_title: "Recycling Activities", gallery_photo4_desc: "Sorting materials",
        gallery_photo5_title: "Water Conservation", gallery_photo5_desc: "Sustainable practices",
        gallery_photo6_title: "Renewable Energy", gallery_photo6_desc: "Solar panels & green power",
        gallery_coming: "Coming Soon! We are collecting photos from participating schools.",
        contact_title: "Contact Us", contact_subtitle: "Have questions? Reach out to us.",
        contact_name: "Your Name", contact_email: "Email", contact_msg: "Message", contact_send: "Send Message",
        calc_title: "Class Waste Calculator", calc_tagline: "Monitor & Calculate Your Class Waste for Go Green School! ♻️",
        calc_hero_title: "Class Waste", calc_hero_title_highlight: "Calculator", calc_hero_desc: "Track, analyze, and optimize your classroom\'s environmental footprint. Measure your impact to create a more sustainable learning environment for everyone.",
        calc_class: "Class Name", calc_days: "Observation Days", calc_organic: "Organic Waste (kg)", calc_inorganic: "Inorganic Waste (kg)", calc_plastic: "Plastic Waste (kg)",
        calc_btn: "Calculate", calc_btn_save: "Save Data", calc_btn_clear: "Clear All", calc_btn_export: "Export CSV", calc_result_title: "CLASS WASTE CALCULATOR",
        calc_input_title: "Input Data", calc_results_title: "Calculation Results", calc_accumulated: "Accumulated during observation", calc_estimated: "Estimated monthly footprint",
        calc_saved_title: "Saved Calculations", calc_saved_empty: "No saved data yet. Calculate and save to see entries here!",
        calc_distribution: "Waste Distribution", calc_waste_type: "Waste Type", calc_table_no: "No.", calc_table_class: "Class", calc_table_composition: "Waste Composition",
        calc_table_total_weight: "Total Weight", calc_table_date: "Date", calc_table_action: "Action", calc_delete_btn: "Delete",
        calc_label_class: "Class Name", calc_label_days: "Observation Days", calc_label_organic: "Organic Waste", calc_label_inorganic: "Inorganic Waste", calc_label_plastic: "Plastic Waste",
        calc_total: "Total Waste", calc_avg: "Average per Day", calc_pct_organic: "% Organic", calc_pct_inorganic: "% Inorganic", calc_pct_plastic: "% Plastic", calc_predict: "30-Day Prediction",
        calc_formula_title: "Formulas Used", calc_chart_pie: "Waste Composition", calc_chart_bar: "Waste Statistics",
        calc_bar_total: "Total", calc_bar_avg: "Daily Avg", calc_bar_predict: "30-Day Prediction",
        calc_motivation: "By sorting & measuring waste, we create a greener school! 🌍 Let's support Go Green!",
        calc_validation_empty: "All fields must be filled!", calc_validation_negative: "Values cannot be negative!", calc_validation_days: "Minimum observation days is 5!",
        news_title: "Go Green School News", news_tagline: "Updates on activities, programs, and achievements of our eco-friendly school \u267b\ufe0f\ud83c\udf31",
        news_latest: "Latest News", news_latest_sub: "Recent updates from Go Green School activities",
        news_read_more: "Read More", news_view_all: "View All News",
        news_follow: "Stay tuned for more inspiration to live greener! \ud83c\udf0d",
        news_cat_student: "Student Activities", news_cat_program: "Go Green Program", news_cat_workshop: "Workshop", news_cat_collab: "Collaboration",
        news1_title: "XI RPL Students Launch Classroom Waste Calculator!",
        news1_summary: "Students of class XI RPL successfully developed a digital waste calculator that helps each class monitor and reduce their daily waste production.",
        news1_full: "Students of class XI RPL successfully developed a digital waste calculator application that helps each class monitor and reduce their daily waste production. This application allows students to input the type and weight of waste generated each day, then provides a weekly analysis and practical tips to reduce waste. The initiative started from a class project and has now been adopted school-wide. The calculator has helped reduce average classroom waste by 25% in just the first month of use.",
        news2_title: "Planting 100 Trees in the School Yard",
        news2_summary: "The school community planted 100 fruit and shade trees in a collaborative action to green the school environment and reduce carbon emissions.",
        news2_full: "In a massive collaborative effort, students, teachers, and parents joined forces to plant 100 fruit and shade trees across the school grounds. This tree planting event was the highlight of the Go Green School's environmental week. Each class was assigned an area to plant and maintain their trees. The initiative aims to create more green spaces, reduce carbon emissions on campus, and provide future fruit harvests for the school canteen. The event was supported by the local forestry department, who donated the seedlings and provided planting guidance.",
        news3_title: "Anti-Plastic Campaign: Waste Reduced by 40%!",
        news3_summary: "Through a month-long campaign, the school succeeded in reducing plastic waste by 40% by switching to reusable containers and tumblers.",
        news3_full: "Through an intensive month-long campaign, Go Green School achieved a remarkable 40% reduction in plastic waste. Students pledged to bring reusable containers and tumblers instead of single-use plastics. The school canteen also switched to biodegradable packaging. Motivational posters designed by art students were placed throughout the school, and weekly weigh-ins of plastic waste tracked progress. The campaign was so successful that neighboring schools have requested guidance to run similar programs.",
        news4_title: "B3 Waste Management Workshop a Success!",
        news4_summary: "Interactive workshop taught students how to safely identify, handle, and dispose of hazardous and toxic waste materials (B3) at school.",
        news4_full: "An interactive workshop on B3 (hazardous and toxic materials) waste management was held for all grade levels. Experts from the environmental agency demonstrated how to identify common B3 waste found in schools, such as used batteries, broken thermometers, and chemical lab waste. Students practiced proper handling techniques using safety equipment and learned about the environmental and health dangers of improper B3 disposal. The workshop concluded with each class creating a B3 waste collection point with proper labeling and safety instructions.",
        news5_title: "Student Workshop on Global Warming & Climate Action",
        news5_summary: "Over 200 students participated in a two-day workshop exploring the science of global warming and practical climate actions schools can take.",
        news5_full: "Over 200 students participated in a comprehensive two-day workshop about global warming and practical climate action. Day one featured presentations on climate science, greenhouse gases, and the impact of human activities on the environment. Day two was hands-on, with students calculating their personal carbon footprints and brainstorming solutions to reduce school-wide emissions. Guest speakers from environmental NGOs shared inspiring stories of youth-led climate initiatives around the world. The workshop resulted in a \"Climate Action Pledge\" signed by all participants.",
        news6_title: "RPL \u00d7 Mathematics Collaboration Creates Educational Tools",
        news6_summary: "An interdisciplinary collaboration between RPL and Mathematics students produced interactive web-based tools for learning environmental statistics.",
        news6_full: "In an exciting interdisciplinary project, students from RPL (Software Engineering) and Mathematics classes collaborated to create interactive web-based educational tools. The tools include a carbon footprint calculator, an interactive graph showing waste reduction progress, and a quiz game about environmental facts. The Mathematics students provided the statistical models and formulas, while RPL students handled the programming and user interface design. These tools are now available on the school website and have been praised by teachers for making environmental education more engaging and data-driven.",
    },
    id: {
        nav_home: "Beranda", nav_about: "Tentang", nav_programs: "Program", nav_learn: "Edukasi",
        nav_gallery: "Galeri", nav_news: "Berita", nav_calculator: "Kalkulator Sampah", nav_contact: "Kontak", nav_join: "Hubungi Kami",
        hero_subtitle: "Sekolah Ramah Lingkungan",
        hero_tagline: "Membangun Generasi Peduli Lingkungan",
        hero_cta_join: "Hubungi Kami", hero_cta_learn: "Pelajari Lebih Lanjut",
        home_mission_title: "Apa itu Go Green School?",
        home_mission_text: "Program sekolah yang mempromosikan kesadaran lingkungan, keberlanjutan, dan praktik ramah lingkungan dalam pembelajaran dan aktivitas sehari-hari.",
        home_mission_label: "Misi Kami",
        home_card1_title: "Tentang Go Green", home_card1_desc: "Pelajari apa itu Go Green School dan mengapa penting untuk masa depan kita.", home_card1_cta: "Pelajari Lebih Lanjut",
        home_card2_title: "Panduan Pilah Sampah", home_card2_desc: "Panduan langkah demi langkah untuk memilah sampah organik, anorganik & B3.", home_card2_cta: "Jelajahi",
        home_card3_title: "Go Green & Iklim", home_card3_desc: "Pahami hubungan antara praktik Go Green dan pemanasan global.", home_card3_cta: "Lihat Proyek",
        home_stats_title: "Buat Dampak Hari Ini",
        home_stat1_label: "Proyek Hijau",
        home_stat2_label: "Pohon Ditanam",
        home_stat3_label: "Sekolah",
        home_updates_label: "Berita Terbaru",
        home_cta_title: "Siap membuat sekolahmu lebih hijau?",
        home_cta_text: "Ada pertanyaan atau ingin tahu lebih lanjut tentang Go Green School? Hubungi kami sekarang!",
        home_cta_btn: "Hubungi Kami",
        desc_intro: "Go Green School adalah sekolah yang mempromosikan kesadaran lingkungan, keberlanjutan, dan praktik ramah lingkungan dalam pembelajaran dan aktivitas sehari-hari. Tujuan utama Go Green School adalah melindungi lingkungan dan mengajarkan siswa cara hidup bertanggung jawab dan berkelanjutan.",
        desc_campaign_title: "Apa itu Kampanye Go Green?",
        desc_campaign_intro: "Kampanye Go Green di sekolah adalah program yang mendorong siswa, guru, dan staf untuk:",
        desc_campaign_li1: "Mengurangi sampah", desc_campaign_li2: "Mendaur ulang bahan",
        desc_campaign_li3: "Menghemat listrik dan air", desc_campaign_li4: "Menanam pohon dan merawat kebun",
        desc_campaign_li5: "Menghindari penggunaan plastik", desc_campaign_li6: "Menjaga kebersihan sekolah",
        desc_campaign_outro: "Aktivitas-aktivitas ini membantu mengurangi polusi dan melindungi sumber daya alam.",
        desc_sus_title: "Apa itu Keberlanjutan (Sustainability)?",
        desc_sus_intro: "Keberlanjutan berarti menggunakan sumber daya dengan hati-hati agar generasi masa depan juga dapat menggunakannya. Di Go Green School, keberlanjutan meliputi:",
        desc_sus_li1: "Menggunakan barang yang dapat dipakai ulang alih-alih sekali pakai", desc_sus_li2: "Menghemat energi",
        desc_sus_li3: "Menanam pohon", desc_sus_li4: "Mendukung proyek ramah lingkungan",
        desc_decal_title: "Apa itu Stiker Go Green (Decal)?",
        desc_decal_intro1: "Stiker Go Green adalah tanda yang dipasang di sekitar sekolah untuk mengingatkan orang agar peduli terhadap lingkungan.",
        desc_decal_intro2: "Contoh pesan pada stiker:",
        desc_decal_li1: "\u201cHemat Air\u201d", desc_decal_li2: "\u201cMatikan Lampu\u201d",
        desc_decal_li3: "\u201cDaur Ulang di Sini\u201d", desc_decal_li4: "\u201cJaga Kebersihan Sekolah Kita\u201d",
        desc_decal_outro: "Stiker-stiker ini membantu menyebarkan kesadaran lingkungan.",
        desc_why_title: "Mengapa Go Green School Penting?",
        desc_why_li1: "Mengajarkan tanggung jawab kepada siswa", desc_why_li2: "Mengurangi kerusakan lingkungan",
        desc_why_li3: "Menciptakan lingkungan belajar yang sehat dan bersih", desc_why_li4: "Mendorong kerja sama tim dan keterlibatan komunitas",
        desc_conclusion_title: "Kesimpulan",
        desc_conclusion_text: "Go Green School memainkan peran penting dalam membangun masa depan yang lebih baik. Dengan mempraktikkan kebiasaan ramah lingkungan, siswa belajar menghargai dan melindungi lingkungan. Tindakan kecil seperti menghemat air, mendaur ulang, dan menanam pohon dapat membuat perbedaan besar.",
        about_site_title: "Tentang Portal Ini", about_site_heading: "Informasi Website",
        about_site_p1: "Ini adalah situs web komunitas atau portal pendidikan lingkungan yang berfokus pada sekolah berwawasan lingkungan di Indonesia.",
        about_site_p2: "Menyediakan informasi tentang pengelolaan dan perlindungan lingkungan di sekolah, serta tips hidup ramah lingkungan.",
        about_site_p3: "Situs ini menampilkan artikel, kegiatan, lokakarya, dan program yang mendukung sekolah untuk menjadi lebih ramah lingkungan.",
        about_site_p4: "Tujuan utamanya adalah mengintegrasikan pendidikan berkualitas dengan kesadaran lingkungan, seperti pengelolaan air, sampah, dan energi.",
        procedure_heading: "Cara Membuang Sampah Sesuai Jenisnya (Organik, Anorganik, dan B3)",
        procedure_sub: "Prosedur Pengelolaan Sampah Sekolah",
        procedure_intro_title: "Pengantar",
        procedure_intro: "Teks prosedur ini bertujuan untuk membimbing siswa dan siswi agar dapat memilah dan membuang sampah sesuai dengan jenisnya, yaitu sampah organik (basah), anorganik (kering), dan B3 (bahan berbahaya dan beracun). Dengan memilah sampah dengan benar, lingkungan sekolah akan menjadi lebih bersih, sehat, dan mendukung program Go Green School.",
        procedure_materials_title: "Bahan dan Alat:",
        procedure_mat1: "Tiga jenis tempat sampah (organik, anorganik, dan B3)",
        procedure_mat2: "Label atau penanda pada setiap tempat sampah",
        procedure_mat3: "Sampah dari kegiatan sehari-hari (sisa makanan, plastik, kertas, baterai bekas, dan lain-lain)",
        procedure_steps_title: "Langkah-langkah:",
        procedure_step1: "Siapkan tiga tempat sampah yang sudah diberi label: organik, anorganik, dan B3.",
        procedure_step2: "Kenali jenis sampah sebelum membuangnya.",
        procedure_step3: "Masukkan sisa makanan, daun, dan kulit buah ke tempat sampah organik.",
        procedure_step4: "Masukkan plastik, kertas, dan kaleng ke tempat sampah anorganik.",
        procedure_step5: "Masukkan baterai bekas, pecahan kaca, atau benda berbahaya lainnya ke tempat sampah B3.",
        procedure_step6: "Pastikan sampah dibuang pada tempat yang sesuai.",
        procedure_step7: "Biasakan memilah sampah setiap hari dan ajak teman untuk melakukan hal yang sama.",
        procedure_outro: "Dengan membuang sampah sesuai jenisnya, kita ikut menjaga kebersihan dan kelestarian lingkungan sekolah. Kebiasaan sederhana ini dapat memberikan dampak besar bagi kesehatan dan kenyamanan bersama. Mari kita bersama-sama mendukung program Go Green School dengan disiplin memilah sampah setiap hari. \ud83c\udf0d\u2728",
        procedure_cta: "Mari Mulai Memilah!",
        expl_title: "Apa itu Go Green? Penjelasan tentang Keberlanjutan Lingkungan dan Pemanasan Global",
        expl_intro_title: "Tujuan",
        expl_intro_text: "Teks eksplanasi ini bertujuan untuk memberikan pemahaman yang jelas tentang konsep \"Go Green\" dan hubungannya dengan pemanasan global. Teks ini dirancang bagi siswa, guru, dan staf sekolah untuk memahami mengapa menerapkan praktik ramah lingkungan sangat penting dalam kehidupan sehari-hari kita, terutama dalam program Go Green School. Dengan mempelajari topik-topik ini, kita dapat mengambil tindakan yang tepat untuk melindungi planet kita dan mempromosikan masa depan yang berkelanjutan.",
        expl_keys_title: "Konsep Utama",
        expl_gogreen_title: "Apa itu Go Green?",
        expl_gogreen_text: "Go Green mengacu pada gerakan global dan gaya hidup yang mendorong individu, komunitas, dan organisasi untuk mengadopsi praktik ramah lingkungan. Ini melibatkan pengurangan limbah, konservasi sumber daya, dan meminimalkan jejak ekologis kita. Dalam konteks sekolah, Go Green berarti mengintegrasikan keberlanjutan ke dalam pendidikan, seperti program daur ulang, inisiatif hemat energi, dan pembelajaran berbasis alam. Tujuannya adalah untuk menciptakan lingkungan \"hijau\" di mana tindakan seperti menanam pohon, menggunakan energi terbarukan, dan mengurangi penggunaan plastik menjadi kebiasaan sehari-hari. Hal ini tidak hanya membantu melestarikan sumber daya alam tetapi juga mendidik generasi muda untuk menjadi penjaga Bumi yang bertanggung jawab.",
        expl_gw_title: "Apa itu Pemanasan Global?",
        expl_gw_text: "Pemanasan global adalah peningkatan jangka panjang suhu rata-rata permukaan Bumi akibat aktivitas manusia yang melepaskan gas rumah kaca seperti karbon dioksida (CO2), metana (CH4), dan dinitrogen oksida (N2O) ke atmosfer. Gas-gas ini memerangkap panas dari matahari, menciptakan \"efek rumah kaca\" yang menyebabkan perubahan iklim. Penyebabnya meliputi pembakaran bahan bakar fosil untuk energi, penggundulan hutan, proses industri, dan produksi sampah yang berlebihan. Dampak pemanasan global sangat luas: naiknya permukaan laut, peristiwa cuaca ekstrem (seperti banjir, kekeringan, dan badai), hilangnya keanekaragaman hayati, dan risiko kesehatan seperti penyakit terkait panas. Misalnya, mencairnya lapisan es di kutub mengancam komunitas pesisir, sementara lautan yang memanas mengganggu ekosistem laut.",
        expl_link_title: "Hubungan Antara Go Green dan Pemanasan Global",
        expl_link_text: "Mengadopsi praktik Go Green secara langsung memerangi pemanasan global dengan mengurangi emisi gas rumah kaca. Tindakan sederhana di sekolah, seperti beralih ke lampu LED, membuat kompos dari sampah organik, atau mempromosikan bersepeda daripada menggunakan mobil, dapat menurunkan jejak karbon. Secara global, jika lebih banyak sekolah dan komunitas menjadi hijau (go green), kita dapat memperlambat perubahan iklim, melestarikan habitat, dan memastikan planet yang layak huni untuk generasi mendatang. Program seperti Go Green School memberdayakan siswa untuk memahami masalah ini melalui aktivitas langsung, menumbuhkan rasa tanggung jawab terhadap lingkungan.",
        expl_conclusion_title: "Penegasan Ulang",
        expl_conclusion_text: "Memahami Go Green dan realitas pemanasan global memberdayakan kita untuk membuat perubahan positif. Dengan mengadopsi kebiasaan berkelanjutan, kita tidak hanya mengurangi kerusakan lingkungan tetapi juga membangun dunia yang lebih sehat dan tangguh. Mari berkomitmen pada inisiatif Go Green School hari ini\u2014setiap tindakan kecil berarti menuju masa depan yang lebih hijau! \ud83c\udf0d\u2728",
        join_title: "Bergabung dengan Go Green School", join_subtitle: "Jadilah bagian dari gerakan untuk membuat sekolah lebih hijau di seluruh Indonesia.",
        join_name: "Nama Lengkap", join_email: "Alamat Email", join_school: "Nama Sekolah",
        join_role: "Peran Anda", join_role_student: "Siswa", join_role_teacher: "Guru",
        join_role_parent: "Orang Tua", join_role_other: "Lainnya",
        join_message: "Mengapa Anda ingin bergabung?", join_submit: "Kirim",
        gallery_title: "Galeri", gallery_subtitle: "Foto dan momen dari kegiatan Go Green School di seluruh Indonesia.",
        gallery_photo1_title: "Siswa Menanam Pohon", gallery_photo1_desc: "Kegiatan ramah lingkungan",
        gallery_photo2_title: "Taman Sekolah", gallery_photo2_desc: "Ruang belajar luar",
        gallery_photo3_title: "Program Kompos", gallery_photo3_desc: "Pengelolaan sampah",
        gallery_photo4_title: "Kegiatan Daur Ulang", gallery_photo4_desc: "Sortir materi",
        gallery_photo5_title: "Hemat Air", gallery_photo5_desc: "Praktik berkelanjutan",
        gallery_photo6_title: "Energi Terbarukan", gallery_photo6_desc: "Panel surya & energi hijau",
        gallery_coming: "Segera Hadir! Kami sedang mengumpulkan foto dari sekolah-sekolah yang berpartisipasi.",
        contact_title: "Hubungi Kami", contact_subtitle: "Punya pertanyaan? Hubungi kami.",
        contact_name: "Nama Anda", contact_email: "Email", contact_msg: "Pesan", contact_send: "Kirim Pesan",
        footer_tagline: "Memberdayakan generasi berikutnya untuk membangun dunia yang berkelanjutan melalui pendidikan dan aksi.",
        calc_title: "Kalkulator Sampah Kelas", calc_tagline: "Pantau & Hitung Sampah Kelasmu untuk Go Green School! ♻️",
        calc_hero_title: "Sampah Kelas", calc_hero_title_highlight: "Kalkulator", calc_hero_desc: "Pantau, analisis, dan optimalkan jejak lingkungan kelasmu. Ukur dampakmu untuk menciptakan lingkungan belajar yang lebih berkelanjutan bagi semua.",
        calc_class: "Nama Kelas", calc_days: "Jumlah Hari Pengamatan", calc_organic: "Sampah Organik (kg)", calc_inorganic: "Sampah Anorganik (kg)", calc_plastic: "Sampah Plastik (kg)",
        calc_btn: "Hitung", calc_btn_save: "Simpan Data", calc_btn_clear: "Hapus Semua", calc_btn_export: "Ekspor CSV", calc_result_title: "KALKULATOR SAMPAH KELAS",
        calc_input_title: "Input Data", calc_results_title: "Hasil Perhitungan", calc_accumulated: "Terakumulasi selama pengamatan", calc_estimated: "Perkiraan jejak bulanan",
        calc_saved_title: "Perhitungan Tersimpan", calc_saved_empty: "Belum ada data tersimpan. Hitung dan simpan untuk melihat entri di sini!",
        calc_distribution: "Distribusi Sampah", calc_waste_type: "Jenis Sampah", calc_table_no: "No.", calc_table_class: "Kelas", calc_table_composition: "Komposisi Sampah",
        calc_table_total_weight: "Total Berat", calc_table_date: "Tanggal", calc_table_action: "Aksi", calc_delete_btn: "Hapus",
        calc_label_class: "Nama Kelas", calc_label_days: "Jumlah Hari", calc_label_organic: "Sampah Organik", calc_label_inorganic: "Sampah Anorganik", calc_label_plastic: "Sampah Plastik",
        calc_total: "Total Sampah", calc_avg: "Rata-rata per Hari", calc_pct_organic: "% Organik", calc_pct_inorganic: "% Anorganik", calc_pct_plastic: "% Plastik", calc_predict: "Prediksi 30 Hari",
        calc_formula_title: "Rumus yang Digunakan", calc_chart_pie: "Komposisi Sampah", calc_chart_bar: "Statistik Sampah",
        calc_bar_total: "Total", calc_bar_avg: "Rata-rata Harian", calc_bar_predict: "Prediksi 30 Hari",
        calc_motivation: "Dengan memilah & mengukur sampah, kita ciptakan sekolah lebih hijau! 🌍 Mari dukung Go Green!",
        calc_validation_empty: "Semua field harus diisi!", calc_validation_negative: "Nilai tidak boleh negatif!", calc_validation_days: "Minimal jumlah hari pengamatan adalah 5!",
        news_title: "Berita Go Green School", news_tagline: "Update kegiatan, program, dan pencapaian sekolah ramah lingkungan kami \u267b\ufe0f\ud83c\udf31",
        news_latest: "Berita Terbaru", news_latest_sub: "Info terkini dari kegiatan Go Green School",
        news_read_more: "Baca Selengkapnya", news_view_all: "Lihat Semua Berita",
        news_follow: "Ikuti terus berita kami untuk inspirasi hidup lebih hijau! \ud83c\udf0d",
        news_cat_student: "Kegiatan Siswa", news_cat_program: "Program Go Green", news_cat_workshop: "Workshop", news_cat_collab: "Kolaborasi",
        news1_title: "Siswa XI RPL Luncurkan Kalkulator Sampah Kelas!",
        news1_summary: "Siswa kelas XI RPL berhasil mengembangkan kalkulator sampah digital yang membantu setiap kelas memantau dan mengurangi produksi sampah harian.",
        news1_full: "Siswa kelas XI RPL berhasil mengembangkan aplikasi kalkulator sampah digital yang membantu setiap kelas memantau dan mengurangi produksi sampah harian mereka. Aplikasi ini memungkinkan siswa memasukkan jenis dan berat sampah yang dihasilkan setiap hari, kemudian memberikan analisis mingguan dan tips praktis untuk mengurangi sampah. Inisiatif ini bermula dari proyek kelas dan kini telah diterapkan di seluruh sekolah. Kalkulator ini telah membantu mengurangi rata-rata sampah kelas sebesar 25% hanya dalam bulan pertama penggunaan.",
        news2_title: "Penanaman 100 Pohon di Pekarangan Sekolah",
        news2_summary: "Komunitas sekolah menanam 100 pohon buah dan peneduh dalam aksi kolaboratif untuk menghijaukan lingkungan sekolah dan mengurangi emisi karbon.",
        news2_full: "Dalam upaya kolaboratif besar-besaran, siswa, guru, dan orang tua bergabung untuk menanam 100 pohon buah dan peneduh di seluruh area sekolah. Acara penanaman pohon ini menjadi puncak dari pekan lingkungan Go Green School. Setiap kelas diberi area untuk menanam dan merawat pohon mereka. Inisiatif ini bertujuan untuk menciptakan lebih banyak ruang hijau, mengurangi emisi karbon di kampus, dan menyediakan panen buah untuk kantin sekolah di masa depan. Acara ini didukung oleh dinas kehutanan setempat yang menyumbangkan bibit dan memberikan panduan penanaman.",
        news3_title: "Kampanye Anti-Plastik: Sampah Berkurang 40%!",
        news3_summary: "Melalui kampanye sebulan penuh, sekolah berhasil mengurangi sampah plastik sebesar 40% dengan beralih ke wadah dan tumbler yang dapat digunakan ulang.",
        news3_full: "Melalui kampanye intensif selama satu bulan, Go Green School mencapai pengurangan sampah plastik yang luar biasa sebesar 40%. Siswa berjanji untuk membawa wadah dan tumbler yang dapat digunakan ulang alih-alih plastik sekali pakai. Kantin sekolah juga beralih ke kemasan yang dapat terurai secara hayati. Poster motivasi yang dirancang oleh siswa seni dipasang di seluruh sekolah, dan penimbangan sampah plastik mingguan melacak kemajuan. Kampanye ini begitu sukses sehingga sekolah-sekolah tetangga telah meminta bimbingan untuk menjalankan program serupa.",
        news4_title: "Workshop Pengelolaan Sampah B3 Sukses!",
        news4_summary: "Workshop interaktif mengajarkan siswa cara mengidentifikasi, menangani, dan membuang bahan berbahaya dan beracun (B3) dengan aman di sekolah.",
        news4_full: "Workshop interaktif tentang pengelolaan sampah B3 (bahan berbahaya dan beracun) diselenggarakan untuk semua tingkat kelas. Para ahli dari dinas lingkungan mendemonstrasikan cara mengidentifikasi sampah B3 umum yang ditemukan di sekolah, seperti baterai bekas, termometer pecah, dan limbah laboratorium kimia. Siswa berlatih teknik penanganan yang tepat menggunakan peralatan keselamatan dan belajar tentang bahaya lingkungan dan kesehatan dari pembuangan B3 yang tidak tepat. Workshop diakhiri dengan setiap kelas membuat titik pengumpulan sampah B3 dengan pelabelan dan instruksi keselamatan yang tepat.",
        news5_title: "Workshop Siswa tentang Pemanasan Global & Aksi Iklim",
        news5_summary: "Lebih dari 200 siswa berpartisipasi dalam workshop dua hari yang mengeksplorasi ilmu pemanasan global dan aksi iklim praktis yang dapat dilakukan sekolah.",
        news5_full: "Lebih dari 200 siswa berpartisipasi dalam workshop komprehensif dua hari tentang pemanasan global dan aksi iklim praktis. Hari pertama menampilkan presentasi tentang ilmu iklim, gas rumah kaca, dan dampak aktivitas manusia terhadap lingkungan. Hari kedua bersifat praktis, dengan siswa menghitung jejak karbon pribadi mereka dan mencari solusi untuk mengurangi emisi di seluruh sekolah. Pembicara tamu dari LSM lingkungan berbagi kisah inspiratif tentang inisiatif iklim yang dipimpin pemuda di seluruh dunia. Workshop menghasilkan \"Ikrar Aksi Iklim\" yang ditandatangani oleh semua peserta.",
        news6_title: "Kolaborasi RPL \u00d7 Matematika Hasilkan Tools Edukasi",
        news6_summary: "Kolaborasi interdisipliner antara siswa RPL dan Matematika menghasilkan alat berbasis web interaktif untuk mempelajari statistik lingkungan.",
        news6_full: "Dalam proyek interdisipliner yang menarik, siswa dari kelas RPL (Rekayasa Perangkat Lunak) dan Matematika berkolaborasi untuk membuat alat pendidikan berbasis web yang interaktif. Alat-alat ini mencakup kalkulator jejak karbon, grafik interaktif yang menunjukkan kemajuan pengurangan sampah, dan permainan kuis tentang fakta lingkungan. Siswa Matematika menyediakan model statistik dan rumus, sementara siswa RPL menangani pemrograman dan desain antarmuka pengguna. Alat-alat ini kini tersedia di situs web sekolah dan telah dipuji oleh guru karena membuat pendidikan lingkungan lebih menarik dan berbasis data.",
    }
};

let currentLang = localStorage.getItem('ggs_lang') || 'en';

// Dark mode toggle function with localStorage persistence
function toggleDarkMode() {
    document.documentElement.classList.toggle('dark');
    const isDark = document.documentElement.classList.contains('dark');
    localStorage.setItem('ggs_dark_mode', isDark ? 'true' : 'false');
}

// Restore dark mode preference on page load
function initializeDarkMode() {
    const isDarkMode = localStorage.getItem('ggs_dark_mode') === 'true';
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}

function switchLang(lang) {
    currentLang = lang;
    localStorage.setItem('ggs_lang', lang);
    document.documentElement.lang = lang;
    const dict = translations[lang];
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key]) {
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = dict[key];
            } else if (el.tagName === 'OPTION') {
                el.textContent = dict[key];
            } else {
                el.textContent = dict[key];
            }
        }
    });
    ['', '-m'].forEach(suffix => {
        const btnEn = document.getElementById('btn-en' + suffix);
        const btnId = document.getElementById('btn-id' + suffix);
        if (btnEn && btnId) {
            btnEn.classList.toggle('active', lang === 'en');
            btnId.classList.toggle('active', lang === 'id');
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initializeDarkMode();
    switchLang(currentLang);
});
</script>

</body>
</html>
