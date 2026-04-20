@extends('layouts.app')

@section('title', 'Tim Pengembang Web Go Green School | Young Eco Heroes')
@section('meta_description', 'Profil tim pengembang muda SMK Karya Bangsa Sintang yang membangun website Go Green School dengan semangat teknologi ramah lingkungan.')

@section('content')

<style>
    .eco-dev-page {
        position: relative;
        isolation: isolate;
    }
    .eco-dev-header-card {
        border: 2px solid #1f2937;
        border-radius: 20px 20px 28px 20px;
        background: linear-gradient(135deg, #fffaf0 0%, #f7f4e8 100%);
        box-shadow: 4px 4px 0 #1f2937;
    }
    .eco-dev-grid {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 1rem;
    }
    @media (min-width: 640px) {
        .eco-dev-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (min-width: 1024px) {
        .eco-dev-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 1.25rem;
        }
    }
    .eco-dev-card {
        border: 2px solid #1f2937;
        border-radius: 18px 18px 24px 18px;
        background: #fffdf7;
        box-shadow: 3px 3px 0 #1f2937;
        transition: transform 250ms ease, box-shadow 250ms ease;
        transform-origin: center;
        overflow: hidden;
        min-height: 100%;
    }
    .eco-dev-card:hover {
        transform: translateY(-8px) rotate(0.55deg);
        box-shadow: 8px 10px 0 #1f2937;
    }
    .eco-dev-card:nth-child(even):hover {
        transform: translateY(-8px) rotate(-0.55deg);
    }
    .eco-dev-photo-wrap {
        position: relative;
        aspect-ratio: 4/5;
        overflow: hidden;
        border-bottom: 2px solid #1f2937;
        background: #f1f5e8;
    }
    .eco-dev-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(1.02) contrast(1.03);
    }
    .eco-role-chip {
        position: absolute;
        left: 0.55rem;
        bottom: 0.55rem;
        border: 1.5px solid #1f2937;
        background: rgba(255, 251, 235, 0.92);
        color: #3f4f23;
        border-radius: 9999px;
        padding: 0.2rem 0.6rem;
        font-size: 0.64rem;
        font-weight: 700;
        letter-spacing: 0.02em;
    }
    .eco-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid #1f2937;
        background: #eaf6d0;
        width: 2rem;
        height: 2rem;
        border-radius: 9999px;
        color: #556b2f;
    }
    .eco-quote {
        border-left: 2px dashed #8fa31e;
        padding-left: 0.65rem;
        color: #556b2f;
        font-style: italic;
        line-height: 1.4;
    }
    .eco-cta-panel {
        border: 2px solid #1f2937;
        border-radius: 22px 22px 30px 22px;
        background: linear-gradient(135deg, #fffaf0 0%, #eaf6d0 100%);
        box-shadow: 4px 4px 0 #1f2937;
    }
    .eco-float-deco {
        position: absolute;
        color: rgba(85, 107, 47, 0.14);
        z-index: 0;
        pointer-events: none;
        animation: ecoDevFloat 9s ease-in-out infinite;
    }
    .eco-float-deco.alt {
        color: rgba(143, 163, 30, 0.16);
        animation-duration: 12s;
    }
    @keyframes ecoDevFloat {
        0% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, -10px, 0); }
        100% { transform: translate3d(0, 0, 0); }
    }
    .eco-stagger {
        opacity: 0;
        transform: translateY(14px);
        animation: ecoCardIn 650ms ease forwards;
    }
    .eco-stagger:nth-child(1) { animation-delay: 80ms; }
    .eco-stagger:nth-child(2) { animation-delay: 160ms; }
    .eco-stagger:nth-child(3) { animation-delay: 240ms; }
    .eco-stagger:nth-child(4) { animation-delay: 320ms; }
    @keyframes ecoCardIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    @media (max-width: 640px) {
        .eco-float-deco {
            display: none;
        }
    }
</style>

<div class="eco-dev-page px-4 py-10 sm:px-6 lg:px-10">
    <span class="material-symbols-outlined eco-float-deco text-7xl top-12 left-4">eco</span>
    <span class="material-symbols-outlined eco-float-deco alt text-6xl top-44 right-8">energy_savings_leaf</span>
    <span class="material-symbols-outlined eco-float-deco text-6xl bottom-28 left-10">recycling</span>
    <span class="material-symbols-outlined eco-float-deco alt text-7xl bottom-16 right-6">compost</span>

    <section class="relative z-10 mx-auto w-full max-w-7xl">
        <div class="eco-dev-header-card px-6 py-10 text-center sm:px-10">
            <p class="mb-3 inline-flex items-center gap-2 rounded-full border border-[#556B2F] bg-[#eaf6d0] px-4 py-1 text-xs font-bold uppercase tracking-[0.18em] text-[#556B2F]">
                <span class="material-symbols-outlined text-base">forest</span>
                <span data-i18n="dev_badge">Young Eco Heroes</span>
            </p>
            <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl" data-i18n="dev_title">
                Meet Our Young Eco Web Developers
            </h1>
            <p class="mx-auto mt-4 max-w-4xl text-sm leading-relaxed text-slate-700 sm:text-base lg:text-lg" data-i18n="dev_subtitle">
                Siswa SMK Karya Bangsa Sintang yang menciptakan website Go Green School ini dengan penuh semangat lingkungan 🌱
            </p>
        </div>
    </section>

    <section class="relative z-10 mx-auto mt-8 w-full max-w-7xl">
        <div class="eco-dev-grid">
            <article class="eco-dev-card eco-stagger">
                <div class="eco-dev-photo-wrap">
                    <img src="{{ asset('images/Rafa.jpg') }}" alt="Rafa Satria Isyo Pratama portrait" class="eco-dev-photo" />
                    <span class="eco-role-chip" data-i18n="dev_raka_chip">Lead Web Development</span>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="mb-2 flex items-start justify-between gap-3">
                        <h2 class="text-sm font-bold text-slate-900 sm:text-base">Rafa Satria Isyo Pratama</h2>
                        <span class="eco-badge"><span class="material-symbols-outlined text-base">code</span></span>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-[#556B2F]" data-i18n="dev_raka_meta">XII RPL - 18 Years</p>
                    <p class="mt-2 text-xs font-semibold text-[#8FA31E] sm:text-sm" data-i18n="dev_raka_role">Lead Web Developer</p>
                    <p class="mt-3 text-xs leading-relaxed text-slate-700 sm:text-sm" data-i18n="dev_raka_bio">
                        Built the core website architecture, developed Laravel backend features, and integrated Blade, Tailwind, Vite, calculator, multi-page flow, plus Email and WhatsApp APIs.
                    </p>
                    <p class="eco-quote mt-3 text-xs sm:text-sm" data-i18n="dev_raka_quote">
                        "Teknologi harus membantu, bukan merusak lingkungan."
                    </p>
                </div>
            </article>

            <article class="eco-dev-card eco-stagger">
                <div class="eco-dev-photo-wrap">
                    <img src="{{ asset('images/andre.jpeg') }}" alt="Andrean Milano portrait" class="eco-dev-photo" />
                    <span class="eco-role-chip" data-i18n="dev_sinta_chip">Poster + QA Support</span>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="mb-2 flex items-start justify-between gap-3">
                        <h2 class="text-sm font-bold text-slate-900 sm:text-base">Andrean Milano</h2>
                        <span class="eco-badge"><span class="material-symbols-outlined text-base">edit_note</span></span>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-[#556B2F]" data-i18n="dev_sinta_meta">XII RPL - 18 Years</p>
                    <p class="mt-2 text-xs font-semibold text-[#8FA31E] sm:text-sm" data-i18n="dev_sinta_role">Poster Designer & QA Tester</p>
                    <p class="mt-3 text-xs leading-relaxed text-slate-700 sm:text-sm" data-i18n="dev_sinta_bio">
                        Designed Go Green promotional posters, supported promotion video editing, and tested website features to ensure they run properly.
                    </p>
                    <p class="eco-quote mt-3 text-xs sm:text-sm" data-i18n="dev_sinta_quote">
                        "teknologi hanya alat"
                    </p>
                </div>
            </article>

            <article class="eco-dev-card eco-stagger">
                <div class="eco-dev-photo-wrap">
                    <img src="{{ asset('images/rifa.jpeg') }}" alt="Patrisia Kristianti Rifa portrait" class="eco-dev-photo" />
                    <span class="eco-role-chip" data-i18n="dev_andi_chip">Video + Social Media</span>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="mb-2 flex items-start justify-between gap-3">
                        <h2 class="text-sm font-bold text-slate-900 sm:text-base">Patrisia Kristianti Rifa</h2>
                        <span class="eco-badge"><span class="material-symbols-outlined text-base">palette</span></span>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-[#556B2F]" data-i18n="dev_andi_meta">XII RPL - 18 Years</p>
                    <p class="mt-2 text-xs font-semibold text-[#8FA31E] sm:text-sm" data-i18n="dev_andi_role">Video Editor & Social Campaign</p>
                    <p class="mt-3 text-xs leading-relaxed text-slate-700 sm:text-sm" data-i18n="dev_andi_bio">
                        Produced and edited Go Green promotional videos, managed TikTok publication for the campaign, and helped distribute promo content to a wider audience.
                    </p>
                    <p class="eco-quote mt-3 text-xs sm:text-sm" data-i18n="dev_andi_quote">
                        "Small progress every day leads to big success."
                    </p>
                </div>
            </article>

            <article class="eco-dev-card eco-stagger">
                <div class="eco-dev-photo-wrap">
                    <img src="{{ asset('images/Ilham.jpeg') }}" alt="Ilham portrait" class="eco-dev-photo" />
                    <span class="eco-role-chip" data-i18n="dev_nadia_chip">Poster Design + UI QA</span>
                </div>
                <div class="p-4 sm:p-5">
                    <div class="mb-2 flex items-start justify-between gap-3">
                        <h2 class="text-sm font-bold text-slate-900 sm:text-base">Ilham</h2>
                        <span class="eco-badge"><span class="material-symbols-outlined text-base">database</span></span>
                    </div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-[#556B2F]" data-i18n="dev_nadia_meta">XII RPL - 18 Years</p>
                    <p class="mt-2 text-xs font-semibold text-[#8FA31E] sm:text-sm" data-i18n="dev_nadia_role">Visual Campaign Designer</p>
                    <p class="mt-3 text-xs leading-relaxed text-slate-700 sm:text-sm" data-i18n="dev_nadia_bio">
                        Designed Go Green visual campaign posters, ensured visuals stayed aligned with environmental theme and project branding, and tested website interface and features.
                    </p>
                    <p class="eco-quote mt-3 text-xs sm:text-sm" data-i18n="dev_nadia_quote">
                        "Teruslah optimistis dan berpikir positif dalam hidupmu".
                    </p>
                </div>
            </article>
        </div>
    </section>

    <section class="relative z-10 mx-auto mt-10 w-full max-w-5xl">
        <div class="eco-cta-panel p-6 text-center sm:p-8">
            <h3 class="text-xl font-bold tracking-tight text-slate-900 sm:text-2xl" data-i18n="dev_closing_title">
                Mereka adalah bukti bahwa siswa SMK Karya Bangsa Sintang mampu menciptakan teknologi ramah lingkungan.
            </h3>
            <p class="mt-3 text-sm text-slate-700 sm:text-base" data-i18n="dev_closing_subtitle">
                Dibuat pada tahun 2026 sebagai proyek akhir kelas RPL.
            </p>
            <a href="{{ route('contact') }}" class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl border-2 border-[#1f2937] bg-[#8FA31E] px-6 py-3 text-sm font-bold text-white shadow-[3px_3px_0_#1f2937] transition-all hover:-translate-y-1 hover:bg-[#556B2F] hover:shadow-[6px_6px_0_#1f2937]">
                <span class="material-symbols-outlined text-base">eco</span>
                <span data-i18n="dev_cta">Ingin bergabung dengan tim kami? Hubungi kami!</span>
            </a>
        </div>
    </section>
</div>

@endsection
