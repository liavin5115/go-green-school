<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Go Green School</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#556B2F",
                        secondary: "#8FA31E",
                        accent: "#C6D870",
                        highlight: "#EFF5D2",
                        paper: "#fdfdfd",
                    },
                    fontFamily: {
                        sans: ["Montserrat", "sans-serif"],
                    },
                    backgroundImage: {
                        'grid-paper': "linear-gradient(#e5e5e5 1px, transparent 1px), linear-gradient(90deg, #e5e5e5 1px, transparent 1px)",
                    },
                    backgroundSize: {
                        'grid-sm': '20px 20px',
                    },
                    boxShadow: {
                        'sketch': '2px 2px 0px 0px #000000',
                        'sketch-hover': '4px 4px 0px 0px #000000',
                    }
                },
            },
        }
    </script>
<style>
        .wireframe-border {
            border: 2px solid #000000;
            border-radius: 2px 2px 4px 2px;
        }
        .wireframe-input {
            border: 2px solid #000000;
            background: transparent;
        }
        .sketch-underline {
            text-decoration: underline;
            text-decoration-style: wavy;
            text-decoration-color: #8FA31E;
        }
        .lang-btn { transition: all 0.2s; }
        .lang-btn.active {
            background-color: #8FA31E;
            color: #fff;
            border-color: #8FA31E;
        }
    </style>
</head>
<body class="bg-paper bg-grid-paper bg-grid-sm font-sans text-gray-800 antialiased min-h-screen flex flex-col">
<header class="sticky top-0 z-50 w-full border-b-2 border-black bg-white/95 backdrop-blur-md">
<div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-12">
<div class="flex items-center gap-3">
<div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-primary bg-highlight text-primary">
<span class="material-symbols-outlined text-2xl">eco</span>
</div>
<h1 class="text-2xl font-bold text-primary tracking-tight">Go Green School</h1>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-base font-bold text-primary hover:text-secondary hover:underline decoration-secondary decoration-2 underline-offset-4 transition-colors" href="#" data-i18n="nav_home">Home</a>
<a class="text-base font-bold text-primary hover:text-secondary hover:underline decoration-secondary decoration-2 underline-offset-4 transition-colors" href="#" data-i18n="nav_about">About</a>
<a class="text-base font-bold text-primary hover:text-secondary hover:underline decoration-secondary decoration-2 underline-offset-4 transition-colors" href="#" data-i18n="nav_programs">Programs</a>
<a class="text-base font-bold text-primary hover:text-secondary hover:underline decoration-secondary decoration-2 underline-offset-4 transition-colors" href="#" data-i18n="nav_gallery">Gallery</a>
<a class="text-base font-bold text-primary hover:text-secondary hover:underline decoration-secondary decoration-2 underline-offset-4 transition-colors" href="#" data-i18n="nav_contact">Contact</a>
<!-- Language Switcher -->
<div class="flex items-center border-2 border-primary rounded-full overflow-hidden ml-2">
<button onclick="switchLang('en')" id="btn-en" class="lang-btn active px-3 py-1 text-xs font-bold border-r-2 border-primary">EN</button>
<button onclick="switchLang('id')" id="btn-id" class="lang-btn px-3 py-1 text-xs font-bold text-primary">ID</button>
</div>
</nav>
<div class="flex items-center gap-2 md:hidden">
<!-- Mobile Language Switcher -->
<div class="flex items-center border-2 border-primary rounded-full overflow-hidden">
<button onclick="switchLang('en')" id="btn-en-m" class="lang-btn active px-2 py-1 text-xs font-bold border-r-2 border-primary">EN</button>
<button onclick="switchLang('id')" id="btn-id-m" class="lang-btn px-2 py-1 text-xs font-bold text-primary">ID</button>
</div>
<button class="text-primary">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</div>
</header>
<main class="flex-grow">
<section class="relative w-full border-b-2 border-black bg-white">
<div class="relative mx-auto flex min-h-[500px] max-w-7xl flex-col items-center justify-center px-6 py-16 text-center lg:px-12">
<div class="absolute inset-0 z-0 opacity-20 bg-[url('https://lh3.googleusercontent.com/aida-public/AB6AXuD8LMSse0Q5norqllPzhuFjKPc9YB_rOv30EWSGQOdSn929jpZVZEEeELH6chtVb_43RVV0T-IQ3zPhU4oayKOdGWqpnuShNHPCE7JS4FkCGyx3p9aDlJGXtY7ljzGccFhhBZLUYMzY8TQj6Ho0c0b2aVrUbvqzLV7XUf99HtMyQCqAgZJG2iQbyngn2T369kpr37yXBGyc5XXSYAScbWafcV55JsEuJ6xyb9wEXepb7EiVCOAD2LSNPFfvU0_0jJqJ2VDeTvWrsV8')] bg-cover bg-center grayscale contrast-125"></div>
<div class="relative z-10 max-w-4xl rounded-xl border-2 border-black bg-white/90 p-8 shadow-sketch backdrop-blur-sm">
<h2 class="mb-4 text-4xl font-extrabold text-primary md:text-6xl tracking-tight">
                        Go Green School:<br/><span class="text-3xl md:text-5xl font-bold text-primary" data-i18n="hero_subtitle">Eco-Friendly School</span>
</h2>
<p class="mb-8 text-xl font-bold text-secondary md:text-2xl tracking-wide" data-i18n="hero_tagline">
                        Building an Environmentally Conscious Generation
                    </p>
<button class="wireframe-border transform bg-secondary px-8 py-4 text-lg font-bold text-white shadow-sketch transition-transform hover:-translate-y-1 hover:shadow-sketch-hover tracking-wide" data-i18n="hero_cta">
                        Join Now
                    </button>
</div>
</div>
</section>

<!-- DESCRIPTION SECTION -->
<section class="mx-auto w-full max-w-7xl px-6 py-20 lg:px-12">
<div class="mb-12 text-center max-w-4xl mx-auto">
<span class="material-symbols-outlined mb-4 text-6xl text-secondary">eco</span>
<h3 class="mb-6 text-4xl font-extrabold text-primary tracking-tight">
    Go Green School
</h3>
<p class="text-xl text-gray-800 font-medium leading-relaxed" data-i18n="desc_intro">
    A Go Green School is a school that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities. The main goal of a Go Green School is to protect the environment and teach students how to live responsibly and sustainably.
</p>
</div>

<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2 mb-12">
    <!-- What is a Go Green Campaign -->
    <div class="wireframe-border bg-highlight/30 p-8 shadow-sketch flex flex-col h-full">
        <h4 class="text-2xl font-bold text-primary mb-4 border-b-2 border-secondary pb-2" data-i18n="desc_campaign_title">What is a Go Green Campaign?</h4>
        <p class="mb-4 text-gray-700 font-medium" data-i18n="desc_campaign_intro">A Go Green campaign in school is a program that encourages students, teachers, and staff to:</p>
        <ul class="list-disc list-inside space-y-2 text-gray-700 font-medium mb-4 flex-grow">
            <li data-i18n="desc_campaign_li1">Reduce waste</li>
            <li data-i18n="desc_campaign_li2">Recycle materials</li>
            <li data-i18n="desc_campaign_li3">Save electricity and water</li>
            <li data-i18n="desc_campaign_li4">Plant trees and maintain gardens</li>
            <li data-i18n="desc_campaign_li5">Avoid plastic use</li>
            <li data-i18n="desc_campaign_li6">Keep the school clean</li>
        </ul>
        <p class="text-gray-700 font-bold mt-2" data-i18n="desc_campaign_outro">These activities help reduce pollution and protect natural resources.</p>
    </div>

    <!-- What is Sustainability -->
    <div class="wireframe-border bg-accent/20 p-8 shadow-sketch flex flex-col h-full">
        <h4 class="text-2xl font-bold text-primary mb-4 border-b-2 border-secondary pb-2" data-i18n="desc_sus_title">What is Sustainability?</h4>
        <p class="mb-4 text-gray-700 font-medium" data-i18n="desc_sus_intro">Sustainability means using resources carefully so that future generations can also use them. In a Go Green School, sustainability includes:</p>
        <ul class="list-disc list-inside space-y-2 text-gray-700 font-medium flex-grow">
            <li data-i18n="desc_sus_li1">Using reusable items instead of disposable ones</li>
            <li data-i18n="desc_sus_li2">Conserving energy</li>
            <li data-i18n="desc_sus_li3">Planting trees</li>
            <li data-i18n="desc_sus_li4">Supporting eco-friendly projects</li>
        </ul>
    </div>

    <!-- What is a Go Green Decal -->
    <div class="wireframe-border bg-white p-8 shadow-sketch flex flex-col h-full">
        <h4 class="text-2xl font-bold text-primary mb-4 border-b-2 border-secondary pb-2" data-i18n="desc_decal_title">What is a Go Green Decal?</h4>
        <p class="mb-4 text-gray-700 font-medium" data-i18n="desc_decal_intro1">A Go Green decal is a sticker or sign displayed around the school to remind people to care for the environment.</p>
        <p class="mb-2 text-gray-700 font-medium" data-i18n="desc_decal_intro2">Examples of messages on decals:</p>
        <ul class="list-disc list-inside space-y-2 text-gray-700 font-medium mb-4 flex-grow">
            <li data-i18n="desc_decal_li1">“Save Water”</li>
            <li data-i18n="desc_decal_li2">“Switch Off Lights”</li>
            <li data-i18n="desc_decal_li3">“Recycle Here”</li>
            <li data-i18n="desc_decal_li4">“Keep Our School Clean”</li>
        </ul>
        <p class="text-gray-700 font-bold mt-2" data-i18n="desc_decal_outro">These decals help spread environmental awareness.</p>
    </div>

    <!-- Why is it Important -->
    <div class="wireframe-border bg-white p-8 shadow-sketch flex flex-col h-full">
        <h4 class="text-2xl font-bold text-primary mb-4 border-b-2 border-secondary pb-2" data-i18n="desc_why_title">Why is a Go Green School Important?</h4>
        <ul class="list-decimal list-inside space-y-4 text-gray-700 font-medium flex-grow">
            <li data-i18n="desc_why_li1">Teaches students responsibility</li>
            <li data-i18n="desc_why_li2">Reduces environmental damage</li>
            <li data-i18n="desc_why_li3">Creates a healthy and clean learning environment</li>
            <li data-i18n="desc_why_li4">Encourages teamwork and community involvement</li>
        </ul>
    </div>
</div>

<div class="max-w-4xl mx-auto wireframe-border bg-secondary p-8 shadow-sketch text-white text-center">
    <h4 class="text-2xl font-bold mb-4" data-i18n="desc_conclusion_title">Conclusion</h4>
    <p class="text-lg font-medium leading-relaxed" data-i18n="desc_conclusion_text">
        A Go Green School plays an important role in building a better future. By practicing eco-friendly habits, students learn to respect and protect the environment. Small actions like saving water, recycling, and planting trees can make a big difference.
    </p>
</div>
</section>

<section class="mx-auto w-full max-w-7xl px-6 py-20 lg:px-12">
<div class="mb-12 text-center">
<h3 class="text-3xl font-extrabold text-primary tracking-tight" data-i18n="procedure_heading">
                    How to Dispose of Waste by Type (Organic, Inorganic, and B3)
                </h3>
<p class="mt-2 text-secondary font-bold tracking-wide uppercase text-sm" data-i18n="procedure_sub">School Waste Management Procedure</p>
</div>

<div class="mb-10 grid gap-8 md:grid-cols-2">
<div class="wireframe-border bg-white p-6 shadow-sketch">
<h4 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">info</span>
<span data-i18n="procedure_intro_title">Introduction</span>
</h4>
<p class="text-gray-700 font-medium leading-relaxed" data-i18n="procedure_intro">This procedure text aims to guide students to sort and dispose of waste according to its type, namely organic (wet), inorganic (dry), and B3 (hazardous and toxic materials). By sorting waste properly, the school environment becomes cleaner, healthier, and supports the Go Green School program.</p>
</div>
<div class="wireframe-border bg-highlight p-6 shadow-sketch">
<h4 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">inventory_2</span>
<span data-i18n="procedure_materials_title">Materials and Tools:</span>
</h4>
<ul class="list-disc list-inside space-y-2 text-gray-700 font-medium ml-4">
<li data-i18n="procedure_mat1">Three types of trash bins (organic, inorganic, and B3)</li>
<li data-i18n="procedure_mat2">Labels or markers on each trash bin</li>
<li data-i18n="procedure_mat3">Daily waste (food scraps, plastic, paper, used batteries, etc.)</li>
</ul>
</div>
</div>

<h4 class="text-2xl font-bold text-primary mb-6 border-b-2 border-primary pb-2" data-i18n="procedure_steps_title">Steps:</h4>

<div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">1</div>
<span class="material-symbols-outlined text-4xl text-accent">label</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step1">Prepare three labeled trash bins: organic, inorganic, and B3.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">2</div>
<span class="material-symbols-outlined text-4xl text-accent">search</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step2">Identify the type of waste before throwing it away.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">3</div>
<span class="material-symbols-outlined text-4xl text-accent" style="color: #556B2F">compost</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step3">Put food scraps, leaves, and fruit peels into the organic bin.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">4</div>
<span class="material-symbols-outlined text-4xl text-secondary">recycling</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step4">Put plastic, paper, and cans into the inorganic bin.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">5</div>
<span class="material-symbols-outlined text-4xl text-red-500">battery_alert</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step5">Put used batteries, broken glass, or other hazardous items into the B3 bin.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">6</div>
<span class="material-symbols-outlined text-4xl text-accent">check_circle</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step6">Ensure the waste is disposed of in the correct place.</p>
</div>
<div class="group relative flex flex-col gap-3 rounded-xl border-2 border-dashed border-primary bg-white p-6 transition-all hover:-translate-y-1 hover:border-solid hover:shadow-sketch lg:col-span-2">
<div class="absolute -left-3 -top-3 flex h-8 w-8 items-center justify-center rounded-full border-2 border-black bg-secondary text-white font-bold">7</div>
<span class="material-symbols-outlined text-4xl text-accent">group</span>
<p class="text-sm font-medium text-gray-700" data-i18n="procedure_step7">Make it a habit to sort waste every day and invite friends to do the same.</p>
</div>
</div>

<div class="mt-10 wireframe-border bg-accent/20 p-6 shadow-sketch flex gap-4 items-start">
<span class="material-symbols-outlined text-4xl text-primary hidden sm:block">public</span>
<p class="text-gray-800 font-medium leading-relaxed" data-i18n="procedure_outro">
By throwing waste according to its type, we help maintain the cleanliness and sustainability of the school environment. This simple habit can have a massive impact on our collective health and comfort. Let's support the Go Green School program by diligently sorting our waste every day. 🌍✨
</p>
</div>

<div class="mt-10 flex justify-center">
<button class="wireframe-border transform bg-secondary px-10 py-3 text-lg font-bold text-white shadow-sketch transition-transform hover:scale-105 tracking-wide" data-i18n="procedure_cta">
                    Let's Start Sorting!
                </button>
</div>
</section>

<!-- EXPLANATION SECTION -->
<section class="w-full border-t-2 border-y-2 border-black bg-white px-6 py-20">
    <div class="mx-auto max-w-7xl">
        <div class="mb-12 text-center max-w-4xl mx-auto">
            <span class="material-symbols-outlined mb-4 text-6xl text-secondary">explore</span>
            <h3 class="mb-4 text-3xl font-extrabold text-primary tracking-tight" data-i18n="expl_title">
                What is Go Green? An Explanation of Environmental Sustainability and Global Warming
            </h3>
        </div>

        <div class="wireframe-border bg-highlight/20 p-8 shadow-sketch mb-8">
            <h4 class="text-2xl font-bold text-primary mb-3 border-b-2 border-secondary pb-2" data-i18n="expl_intro_title">Purpose (Introduction)</h4>
            <p class="text-lg text-gray-800 font-medium leading-relaxed" data-i18n="expl_intro_text">
                This explanation text aims to provide a clear understanding of the "Go Green" concept and its connection to global warming. It is designed for students, teachers, and school staff to grasp why adopting eco-friendly practices is crucial in our daily lives, especially within the Go Green School program. By learning about these topics, we can take informed actions to protect our planet and promote a sustainable future.
            </p>
        </div>

        <h4 class="text-2xl font-bold text-primary mb-6" data-i18n="expl_keys_title">Key Concepts (Explanation)</h4>
        
        <div class="grid gap-8 md:grid-cols-2 mb-8">
            <!-- What is Go Green? -->
            <div class="wireframe-border bg-white p-8 shadow-sketch flex flex-col h-full border-l-8 border-l-secondary">
                <h5 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
                    <span class="material-symbols-outlined text-secondary">eco</span>
                    <span data-i18n="expl_gogreen_title">What is Go Green?</span>
                </h5>
                <p class="text-gray-700 font-medium leading-relaxed" data-i18n="expl_gogreen_text">
                    Go Green refers to a global movement and lifestyle that encourages individuals, communities, and organizations to adopt environmentally friendly practices. It involves reducing waste, conserving resources, and minimizing our ecological footprint. In the context of schools, Go Green means integrating sustainability into education, such as recycling programs, energy-saving initiatives, and nature-based learning. The goal is to create a "green" environment where actions like planting trees, using renewable energy, and reducing plastic use become everyday habits. This not only helps preserve natural resources but also educates the younger generation to become responsible stewards of the Earth.
                </p>
            </div>

            <!-- What is Global Warming? -->
            <div class="wireframe-border bg-white p-8 shadow-sketch flex flex-col h-full border-l-8 border-l-red-500">
                <h5 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
                    <span class="material-symbols-outlined text-red-500">thermostat</span>
                    <span data-i18n="expl_gw_title">What is Global Warming?</span>
                </h5>
                <p class="text-gray-700 font-medium leading-relaxed" data-i18n="expl_gw_text">
                    Global warming is the long-term increase in Earth's average surface temperature due to human activities that release greenhouse gases like carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O) into the atmosphere. These gases trap heat from the sun, creating a "greenhouse effect" that leads to climate change. Causes include burning fossil fuels for energy, deforestation, industrial processes, and excessive waste production. Effects of global warming are widespread: rising sea levels, extreme weather events (such as floods, droughts, and hurricanes), loss of biodiversity, and health risks like heat-related illnesses. For instance, melting polar ice caps threaten coastal communities, while warmer oceans disrupt marine ecosystems.
                </p>
            </div>
        </div>

        <!-- The Link Between... -->
        <div class="wireframe-border bg-accent/20 p-8 shadow-sketch mb-8">
            <h5 class="text-xl font-bold text-primary mb-3 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">link</span>
                <span data-i18n="expl_link_title">The Link Between Go Green and Global Warming</span>
            </h5>
            <p class="text-gray-700 font-medium leading-relaxed" data-i18n="expl_link_text">
                Adopting Go Green practices directly combats global warming by reducing greenhouse gas emissions. Simple school actions, like switching to LED lights, composting organic waste, or promoting cycling over car use, lower carbon footprints. Globally, if more schools and communities go green, we can slow down climate change, preserve habitats, and ensure a livable planet for future generations. Programs like Go Green School empower students to understand these issues through hands-on activities, fostering a sense of environmental responsibility.
            </p>
        </div>

        <!-- Conclusion -->
        <div class="wireframe-border bg-primary p-8 shadow-sketch text-white">
            <h4 class="text-2xl font-bold mb-3 flex items-center gap-2" data-i18n="expl_conclusion_title">
                <span class="material-symbols-outlined">stars</span>
                Reaffirmation (Conclusion)
            </h4>
            <p class="text-lg font-medium leading-relaxed" data-i18n="expl_conclusion_text">
                Understanding Go Green and the realities of global warming empowers us to make positive changes. By embracing sustainable habits, we not only mitigate environmental damage but also build a healthier, more resilient world. Let's commit to the Go Green School initiative today—every small action counts toward a greener tomorrow! 🌍✨
            </p>
        </div>
    </div>
</section>

<section class="w-full bg-highlight px-6 py-20">
<div class="mx-auto max-w-7xl">
<div class="flex flex-col md:flex-row gap-10 items-center">
<div class="w-full md:w-1/3">
<div class="wireframe-border bg-white p-8 shadow-sketch flex flex-col items-center text-center">
<span class="material-symbols-outlined text-7xl text-primary mb-4">language</span>
<h3 class="text-2xl font-bold text-primary" data-i18n="about_site_title">About This Portal</h3>
</div>
</div>
<div class="w-full md:w-2/3 space-y-6">
<h3 class="text-3xl font-extrabold text-primary tracking-tight" data-i18n="about_site_heading">
    Website Information
</h3>
<ul class="space-y-4">
    <li class="flex gap-3 items-start">
        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
        <span class="text-gray-800 font-medium leading-relaxed" data-i18n="about_site_p1">This is a community website or environmental education portal focused on environmentally conscious schools in Indonesia.</span>
    </li>
    <li class="flex gap-3 items-start">
        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
        <span class="text-gray-800 font-medium leading-relaxed" data-i18n="about_site_p2">Providing information on environmental management and protection in schools, as well as green living tips.</span>
    </li>
    <li class="flex gap-3 items-start">
        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
        <span class="text-gray-800 font-medium leading-relaxed" data-i18n="about_site_p3">The site features articles, activities, workshops, and programs that support schools in becoming more environmentally friendly.</span>
    </li>
    <li class="flex gap-3 items-start">
        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
        <span class="text-gray-800 font-medium leading-relaxed" data-i18n="about_site_p4">The main goal is to integrate quality education with environmental awareness, such as water, waste, and energy management.</span>
    </li>
</ul>
</div>
</div>
</div>
</section>
</main>
<footer class="border-t-2 border-black bg-white px-6 py-10">
<div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 md:flex-row">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-2xl text-primary">copyright</span>
<span class="text-lg font-bold text-primary tracking-tight">Go Green School</span>
</div>
<div class="flex gap-6">
<a class="group flex h-10 w-10 items-center justify-center rounded-full border-2 border-primary text-primary transition-all hover:bg-primary hover:text-white hover:shadow-sketch" href="#">
<span class="material-symbols-outlined text-xl">social_leaderboard</span>
</a>
<a class="group flex h-10 w-10 items-center justify-center rounded-full border-2 border-primary text-primary transition-all hover:bg-primary hover:text-white hover:shadow-sketch" href="#">
<span class="material-symbols-outlined text-xl">photo_camera</span>
</a>
<a class="group flex h-10 w-10 items-center justify-center rounded-full border-2 border-primary text-primary transition-all hover:bg-primary hover:text-white hover:shadow-sketch" href="#">
<span class="material-symbols-outlined text-xl">smart_display</span>
</a>
<a class="group flex h-10 w-10 items-center justify-center rounded-full border-2 border-primary text-primary transition-all hover:bg-primary hover:text-white hover:shadow-sketch" href="#">
<span class="material-symbols-outlined text-xl">alternate_email</span>
</a>
</div>
</div>
<div class="mt-8 text-center text-xs text-gray-500 font-bold uppercase tracking-wide">
            Design Concept: Wireframe Sketch
        </div>
</footer>

<script>
const translations = {
    en: {
        nav_home: "Home",
        nav_about: "About",
        nav_programs: "Programs",
        nav_gallery: "Gallery",
        nav_contact: "Contact",
        hero_subtitle: "Eco-Friendly School",
        hero_tagline: "Building an Environmentally Conscious Generation",
        hero_cta: "Join Now",
        desc_intro: "A Go Green School is a school that promotes environmental awareness, sustainability, and eco-friendly practices in everyday learning and activities. The main goal of a Go Green School is to protect the environment and teach students how to live responsibly and sustainably.",
        desc_campaign_title: "What is a Go Green Campaign?",
        desc_campaign_intro: "A Go Green campaign in school is a program that encourages students, teachers, and staff to:",
        desc_campaign_li1: "Reduce waste",
        desc_campaign_li2: "Recycle materials",
        desc_campaign_li3: "Save electricity and water",
        desc_campaign_li4: "Plant trees and maintain gardens",
        desc_campaign_li5: "Avoid plastic use",
        desc_campaign_li6: "Keep the school clean",
        desc_campaign_outro: "These activities help reduce pollution and protect natural resources.",
        desc_decal_title: "What is a Go Green Decal?",
        desc_decal_intro1: "A Go Green decal is a sticker or sign displayed around the school to remind people to care for the environment.",
        desc_decal_intro2: "Examples of messages on decals:",
        desc_decal_li1: "“Save Water”",
        desc_decal_li2: "“Switch Off Lights”",
        desc_decal_li3: "“Recycle Here”",
        desc_decal_li4: "“Keep Our School Clean”",
        desc_decal_outro: "These decals help spread environmental awareness.",
        desc_sus_title: "What is Sustainability?",
        desc_sus_intro: "Sustainability means using resources carefully so that future generations can also use them. In a Go Green School, sustainability includes:",
        desc_sus_li1: "Using reusable items instead of disposable ones",
        desc_sus_li2: "Conserving energy",
        desc_sus_li3: "Planting trees",
        desc_sus_li4: "Supporting eco-friendly projects",
        desc_why_title: "Why is a Go Green School Important?",
        desc_why_li1: "Teaches students responsibility",
        desc_why_li2: "Reduces environmental damage",
        desc_why_li3: "Creates a healthy and clean learning environment",
        desc_why_li4: "Encourages teamwork and community involvement",
        desc_conclusion_title: "Conclusion",
        desc_conclusion_text: "A Go Green School plays an important role in building a better future. By practicing eco-friendly habits, students learn to respect and protect the environment. Small actions like saving water, recycling, and planting trees can make a big difference.",
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
        procedure_outro: "By throwing waste according to its type, we help maintain the cleanliness and sustainability of the school environment. This simple habit can have a massive impact on our collective health and comfort. Let's support the Go Green School program by diligently sorting our waste every day. 🌍✨",
        procedure_cta: "Let's Start Sorting!",
        expl_title: "What is Go Green? An Explanation of Environmental Sustainability and Global Warming",
        expl_intro_title: "Purpose (Introduction)",
        expl_intro_text: "This explanation text aims to provide a clear understanding of the \"Go Green\" concept and its connection to global warming. It is designed for students, teachers, and school staff to grasp why adopting eco-friendly practices is crucial in our daily lives, especially within the Go Green School program. By learning about these topics, we can take informed actions to protect our planet and promote a sustainable future.",
        expl_keys_title: "Key Concepts (Explanation)",
        expl_gogreen_title: "What is Go Green?",
        expl_gogreen_text: "Go Green refers to a global movement and lifestyle that encourages individuals, communities, and organizations to adopt environmentally friendly practices. It involves reducing waste, conserving resources, and minimizing our ecological footprint. In the context of schools, Go Green means integrating sustainability into education, such as recycling programs, energy-saving initiatives, and nature-based learning. The goal is to create a \"green\" environment where actions like planting trees, using renewable energy, and reducing plastic use become everyday habits. This not only helps preserve natural resources but also educates the younger generation to become responsible stewards of the Earth.",
        expl_gw_title: "What is Global Warming?",
        expl_gw_text: "Global warming is the long-term increase in Earth's average surface temperature due to human activities that release greenhouse gases like carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O) into the atmosphere. These gases trap heat from the sun, creating a \"greenhouse effect\" that leads to climate change. Causes include burning fossil fuels for energy, deforestation, industrial processes, and excessive waste production. Effects of global warming are widespread: rising sea levels, extreme weather events (such as floods, droughts, and hurricanes), loss of biodiversity, and health risks like heat-related illnesses. For instance, melting polar ice caps threaten coastal communities, while warmer oceans disrupt marine ecosystems.",
        expl_link_title: "The Link Between Go Green and Global Warming",
        expl_link_text: "Adopting Go Green practices directly combats global warming by reducing greenhouse gas emissions. Simple school actions, like switching to LED lights, composting organic waste, or promoting cycling over car use, lower carbon footprints. Globally, if more schools and communities go green, we can slow down climate change, preserve habitats, and ensure a livable planet for future generations. Programs like Go Green School empower students to understand these issues through hands-on activities, fostering a sense of environmental responsibility.",
        expl_conclusion_title: "Reaffirmation (Conclusion)",
        expl_conclusion_text: "Understanding Go Green and the realities of global warming empowers us to make positive changes. By embracing sustainable habits, we not only mitigate environmental damage but also build a healthier, more resilient world. Let's commit to the Go Green School initiative today—every small action counts toward a greener tomorrow! 🌍✨",
        about_site_title: "About This Portal",
        about_site_heading: "Website Information",
        about_site_p1: "This is a community website or environmental education portal focused on environmentally conscious schools in Indonesia.",
        about_site_p2: "Providing information on environmental management and protection in schools, as well as green living tips.",
        about_site_p3: "The site features articles, activities, workshops, and programs that support schools in becoming more environmentally friendly.",
        about_site_p4: "The main goal is to integrate quality education with environmental awareness, such as water, waste, and energy management.",
    },
    id: {
        nav_home: "Beranda",
        nav_about: "Tentang",
        nav_programs: "Program",
        nav_gallery: "Galeri",
        nav_contact: "Kontak",
        hero_subtitle: "Sekolah Ramah Lingkungan",
        hero_tagline: "Membangun Generasi Peduli Lingkungan",
        hero_cta: "Bergabung Sekarang",
        desc_intro: "Go Green School adalah sekolah yang mempromosikan kesadaran lingkungan, keberlanjutan, dan praktik ramah lingkungan dalam pembelajaran dan aktivitas sehari-hari. Tujuan utama Go Green School adalah melindungi lingkungan dan mengajarkan siswa cara hidup bertanggung jawab dan berkelanjutan.",
        desc_campaign_title: "Apa itu Kampanye Go Green?",
        desc_campaign_intro: "Kampanye Go Green di sekolah adalah program yang mendorong siswa, guru, dan staf untuk:",
        desc_campaign_li1: "Mengurangi sampah",
        desc_campaign_li2: "Mendaur ulang bahan",
        desc_campaign_li3: "Menghemat listrik dan air",
        desc_campaign_li4: "Menanam pohon dan merawat kebun",
        desc_campaign_li5: "Menghindari penggunaan plastik",
        desc_campaign_li6: "Menjaga kebersihan sekolah",
        desc_campaign_outro: "Aktivitas-aktivitas ini membantu mengurangi polusi dan melindungi sumber daya alam.",
        desc_decal_title: "Apa itu Stiker Go Green (Decal)?",
        desc_decal_intro1: "Stiker Go Green adalah tanda yang dipasang di sekitar sekolah untuk mengingatkan orang agar peduli terhadap lingkungan.",
        desc_decal_intro2: "Contoh pesan pada stiker:",
        desc_decal_li1: "“Hemat Air”",
        desc_decal_li2: "“Matikan Lampu”",
        desc_decal_li3: "“Daur Ulang di Sini”",
        desc_decal_li4: "“Jaga Kebersihan Sekolah Kita”",
        desc_decal_outro: "Stiker-stiker ini membantu menyebarkan kesadaran lingkungan.",
        desc_sus_title: "Apa itu Keberlanjutan (Sustainability)?",
        desc_sus_intro: "Keberlanjutan berarti menggunakan sumber daya dengan hati-hati agar generasi masa depan juga dapat menggunakannya. Di Go Green School, keberlanjutan meliputi:",
        desc_sus_li1: "Menggunakan barang yang dapat dipakai ulang alih-alih sekali pakai",
        desc_sus_li2: "Menghemat energi",
        desc_sus_li3: "Menanam pohon",
        desc_sus_li4: "Mendukung proyek ramah lingkungan",
        desc_why_title: "Mengapa Go Green School Penting?",
        desc_why_li1: "Mengajarkan tanggung jawab kepada siswa",
        desc_why_li2: "Mengurangi kerusakan lingkungan",
        desc_why_li3: "Menciptakan lingkungan belajar yang sehat dan bersih",
        desc_why_li4: "Mendorong kerja sama tim dan keterlibatan komunitas",
        desc_conclusion_title: "Kesimpulan",
        desc_conclusion_text: "Go Green School memainkan peran penting dalam membangun masa depan yang lebih baik. Dengan mempraktikkan kebiasaan ramah lingkungan, siswa belajar menghargai dan melindungi lingkungan. Tindakan kecil seperti menghemat air, mendaur ulang, dan menanam pohon dapat membuat perbedaan besar.",
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
        procedure_outro: "Dengan membuang sampah sesuai jenisnya, kita ikut menjaga kebersihan dan kelestarian lingkungan sekolah. Kebiasaan sederhana ini dapat memberikan dampak besar bagi kesehatan dan kenyamanan bersama. Mari kita bersama-sama mendukung program Go Green School dengan disiplin memilah sampah setiap hari. 🌍✨",
        procedure_cta: "Mari Mulai Memilah!",
        expl_title: "Apa itu Go Green? Penjelasan tentang Keberlanjutan Lingkungan dan Pemanasan Global",
        expl_intro_title: "Tujuan (Pengantar)",
        expl_intro_text: "Teks eksplanasi ini bertujuan untuk memberikan pemahaman yang jelas tentang konsep \"Go Green\" dan hubungannya dengan pemanasan global. Teks ini dirancang bagi siswa, guru, dan staf sekolah untuk memahami mengapa menerapkan praktik ramah lingkungan sangat penting dalam kehidupan sehari-hari kita, terutama dalam program Go Green School. Dengan mempelajari topik-topik ini, kita dapat mengambil tindakan yang tepat untuk melindungi planet kita dan mempromosikan masa depan yang berkelanjutan.",
        expl_keys_title: "Konsep Utama (Penjelasan)",
        expl_gogreen_title: "Apa itu Go Green?",
        expl_gogreen_text: "Go Green mengacu pada gerakan global dan gaya hidup yang mendorong individu, komunitas, dan organisasi untuk mengadopsi praktik ramah lingkungan. Ini melibatkan pengurangan limbah, konservasi sumber daya, dan meminimalkan jejak ekologis kita. Dalam konteks sekolah, Go Green berarti mengintegrasikan keberlanjutan ke dalam pendidikan, seperti program daur ulang, inisiatif hemat energi, dan pembelajaran berbasis alam. Tujuannya adalah untuk menciptakan lingkungan \"hijau\" di mana tindakan seperti menanam pohon, menggunakan energi terbarukan, dan mengurangi penggunaan plastik menjadi kebiasaan sehari-hari. Hal ini tidak hanya membantu melestarikan sumber daya alam tetapi juga mendidik generasi muda untuk menjadi penjaga Bumi yang bertanggung jawab.",
        expl_gw_title: "Apa itu Pemanasan Global?",
        expl_gw_text: "Pemanasan global adalah peningkatan jangka panjang suhu rata-rata permukaan Bumi akibat aktivitas manusia yang melepaskan gas rumah kaca seperti karbon dioksida (CO2), metana (CH4), dan dinitrogen oksida (N2O) ke atmosfer. Gas-gas ini memerangkap panas dari matahari, menciptakan \"efek rumah kaca\" yang menyebabkan perubahan iklim. Penyebabnya meliputi pembakaran bahan bakar fosil untuk energi, penggundulan hutan, proses industri, dan produksi sampah yang berlebihan. Dampak pemanasan global sangat luas: naiknya permukaan laut, peristiwa cuaca ekstrem (seperti banjir, kekeringan, dan badai), hilangnya keanekaragaman hayati, dan risiko kesehatan seperti penyakit terkait panas. Misalnya, mencairnya lapisan es di kutub mengancam komunitas pesisir, sementara lautan yang memanas mengganggu ekosistem laut.",
        expl_link_title: "Hubungan Antara Go Green dan Pemanasan Global",
        expl_link_text: "Mengadopsi praktik Go Green secara langsung memerangi pemanasan global dengan mengurangi emisi gas rumah kaca. Tindakan sederhana di sekolah, seperti beralih ke lampu LED, membuat kompos dari sampah organik, atau mempromosikan bersepeda daripada menggunakan mobil, dapat menurunkan jejak karbon. Secara global, jika lebih banyak sekolah dan komunitas menjadi hijau (go green), kita dapat memperlambat perubahan iklim, melestarikan habitat, dan memastikan planet yang layak huni untuk generasi mendatang. Program seperti Go Green School memberdayakan siswa untuk memahami masalah ini melalui aktivitas langsung, menumbuhkan rasa tanggung jawab terhadap lingkungan.",
        expl_conclusion_title: "Penegasan Ulang (Kesimpulan)",
        expl_conclusion_text: "Memahami Go Green dan realitas pemanasan global memberdayakan kita untuk membuat perubahan positif. Dengan mengadopsi kebiasaan berkelanjutan, kita tidak hanya mengurangi kerusakan lingkungan tetapi juga membangun dunia yang lebih sehat dan tangguh. Mari berkomitmen pada inisiatif Go Green School hari ini—setiap tindakan kecil berarti menuju masa depan yang lebih hijau! 🌍✨",
        about_site_title: "Tentang Portal Ini",
        about_site_heading: "Informasi Website",
        about_site_p1: "Ini adalah situs web komunitas atau portal pendidikan lingkungan yang berfokus pada sekolah berwawasan lingkungan di Indonesia.",
        about_site_p2: "Menyediakan informasi tentang pengelolaan dan perlindungan lingkungan di sekolah, serta tips hidup ramah lingkungan.",
        about_site_p3: "Situs ini menampilkan artikel, kegiatan, lokakarya, dan program yang mendukung sekolah untuk menjadi lebih ramah lingkungan.",
        about_site_p4: "Tujuan utamanya adalah mengintegrasikan pendidikan berkualitas dengan kesadaran lingkungan, seperti pengelolaan air, sampah, dan energi.",
    }
};

let currentLang = 'en';

function switchLang(lang) {
    currentLang = lang;
    document.documentElement.lang = lang;
    const dict = translations[lang];
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (dict[key]) {
            el.textContent = dict[key];
        }
    });
    // Update active button styles (desktop + mobile)
    ['', '-m'].forEach(suffix => {
        const btnEn = document.getElementById('btn-en' + suffix);
        const btnId = document.getElementById('btn-id' + suffix);
        if (btnEn && btnId) {
            btnEn.classList.toggle('active', lang === 'en');
            btnId.classList.toggle('active', lang === 'id');
        }
    });
}
</script>

</body></html> 