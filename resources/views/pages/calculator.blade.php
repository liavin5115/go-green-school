@extends('layouts.app')

@section('title', 'Kalkulator Sampah — Go Green School')
@section('meta_description', 'Kalkulator Sampah Kelas — Pantau dan hitung produksi sampah kelasmu. Proyek kolaborasi RPL × Matematika untuk Go Green School.')

@section('content')

{{-- HERO --}}
<section class="w-full border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-12">
    <div class="mx-auto max-w-7xl text-center">
        <span class="material-symbols-outlined mb-4 text-6xl text-primary">recycling</span>
        <h1 class="text-4xl font-bold text-slate-900 dark:text-slate-100 tracking-tight mb-3" data-i18n="calc_title">Class Waste Calculator</h1>
        <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto" data-i18n="calc_tagline">Monitor &amp; Calculate Your Class Waste for Go Green School! ♻️</p>
        <p class="mt-2 text-sm text-slate-400 font-semibold uppercase tracking-wide">RPL × Matematika Collaboration Project</p>
    </div>
</section>

{{-- MAIN SECTION --}}
<section class="mx-auto w-full max-w-7xl px-6 py-16 lg:px-10">
    <div class="grid gap-10 lg:grid-cols-5">

        {{-- FORM (left, 2 cols) --}}
        <div class="lg:col-span-2">
            <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm sticky top-28">
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">edit_note</span>
                    <span data-i18n="calc_title">Class Waste Calculator</span>
                </h2>

                <div class="space-y-5">
                    {{-- Class Name --}}
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="calc_class">Class Name</label>
                        <select id="calc-class">
                            <option value="XI RPL 1" selected>XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                            <option value="X Hotel 1">X Hotel 1</option>
                            <option value="XII Hotel 3">XII Hotel 3</option>
                            <option value="XI TSM 1">XI TSM 1</option>
                            <option value="XI TSM 2">XI TSM 2</option>
                            <option value="XI TSM 3">XI TSM 3</option>
                        </select>
                    </div>

                    {{-- Observation Days --}}
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5" data-i18n="calc_days">Observation Days</label>
                        <input type="number" id="calc-days" value="5" min="5">
                    </div>

                    {{-- Organic --}}
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 flex items-center gap-2">
                            <span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
                            <span data-i18n="calc_organic">Organic Waste (kg)</span>
                        </label>
                        <input type="number" id="calc-organic" value="12" min="0" step="0.1">
                    </div>

                    {{-- Inorganic --}}
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 flex items-center gap-2">
                            <span class="inline-block w-3 h-3 rounded-full bg-yellow-500"></span>
                            <span data-i18n="calc_inorganic">Inorganic Waste (kg)</span>
                        </label>
                        <input type="number" id="calc-inorganic" value="8" min="0" step="0.1">
                    </div>

                    {{-- Plastic --}}
                    <div>
                        <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 flex items-center gap-2">
                            <span class="inline-block w-3 h-3 rounded-full bg-pink-500"></span>
                            <span data-i18n="calc_plastic">Plastic Waste (kg)</span>
                        </label>
                        <input type="number" id="calc-plastic" value="5" min="0" step="0.1">
                    </div>

                    {{-- Button --}}
                    <button onclick="calculateWaste()" class="w-full flex items-center justify-center rounded-lg h-12 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold text-base" data-i18n="calc_btn">
                        Calculate
                    </button>
                </div>
            </div>
        </div>

        {{-- RESULTS (right, 3 cols) --}}
        <div class="lg:col-span-3 space-y-8">

            {{-- Result Card --}}
            <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm">
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-100 mb-6 flex items-center gap-2 border-b border-slate-200 dark:border-slate-800 pb-3">
                    <span class="material-symbols-outlined text-primary">assessment</span>
                    <span data-i18n="calc_result_title">CLASS WASTE CALCULATOR</span>
                </h2>

                <div class="grid gap-4 sm:grid-cols-2">
                    {{-- Info rows --}}
                    <div class="flex justify-between items-center py-2 border-b border-dashed border-slate-200 dark:border-slate-700">
                        <span class="text-sm font-semibold text-slate-500" data-i18n="calc_label_class">Class Name</span>
                        <span class="text-sm font-bold text-primary" id="res-class">XI RPL 1</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-dashed border-slate-200 dark:border-slate-700">
                        <span class="text-sm font-semibold text-slate-500" data-i18n="calc_label_days">Observation Days</span>
                        <span class="text-sm font-bold text-primary" id="res-days">5</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-dashed border-slate-200 dark:border-slate-700">
                        <span class="text-sm font-semibold text-slate-500 flex items-center gap-1"><span class="inline-block w-2 h-2 rounded-full bg-green-500"></span> <span data-i18n="calc_label_organic">Organic Waste</span></span>
                        <span class="text-sm font-bold text-primary" id="res-organic">12 kg</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-dashed border-slate-200 dark:border-slate-700">
                        <span class="text-sm font-semibold text-slate-500 flex items-center gap-1"><span class="inline-block w-2 h-2 rounded-full bg-yellow-500"></span> <span data-i18n="calc_label_inorganic">Inorganic Waste</span></span>
                        <span class="text-sm font-bold text-primary" id="res-inorganic">8 kg</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-dashed border-slate-200 dark:border-slate-700">
                        <span class="text-sm font-semibold text-slate-500 flex items-center gap-1"><span class="inline-block w-2 h-2 rounded-full bg-pink-500"></span> <span data-i18n="calc_label_plastic">Plastic Waste</span></span>
                        <span class="text-sm font-bold text-primary" id="res-plastic">5 kg</span>
                    </div>
                </div>

                {{-- Divider --}}
                <div class="my-6 border-t border-slate-200 dark:border-slate-800"></div>

                {{-- Computed values --}}
                <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_total">Total Waste</p>
                        <p class="text-2xl font-bold text-primary" id="res-total">25 kg</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_avg">Average per Day</p>
                        <p class="text-2xl font-bold text-primary" id="res-avg">5.00 kg</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_predict">30-Day Prediction</p>
                        <p class="text-2xl font-bold text-red-500" id="res-predict">150.00 kg</p>
                    </div>
                    <div class="rounded-xl border border-green-200 dark:border-green-900 bg-green-50 dark:bg-green-950 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_pct_organic">% Organic</p>
                        <p class="text-xl font-bold text-green-600" id="res-pct-organic">48.00%</p>
                    </div>
                    <div class="rounded-xl border border-yellow-200 dark:border-yellow-900 bg-yellow-50 dark:bg-yellow-950 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_pct_inorganic">% Inorganic</p>
                        <p class="text-xl font-bold text-yellow-600" id="res-pct-inorganic">32.00%</p>
                    </div>
                    <div class="rounded-xl border border-pink-200 dark:border-pink-900 bg-pink-50 dark:bg-pink-950 p-4 text-center">
                        <p class="text-xs font-bold text-slate-500 uppercase mb-1" data-i18n="calc_pct_plastic">% Plastic</p>
                        <p class="text-xl font-bold text-pink-600" id="res-pct-plastic">20.00%</p>
                    </div>
                </div>
            </div>

            {{-- CHARTS --}}
            <div class="grid gap-8 md:grid-cols-2">
                {{-- Pie Chart --}}
                <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm">
                    <h3 class="text-base font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">pie_chart</span>
                        <span data-i18n="calc_chart_pie">Waste Composition</span>
                    </h3>
                    <div class="relative" style="max-height: 280px;">
                        <canvas id="chart-pie"></canvas>
                    </div>
                </div>
                {{-- Bar Chart --}}
                <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm">
                    <h3 class="text-base font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">bar_chart</span>
                        <span data-i18n="calc_chart_bar">Waste Statistics</span>
                    </h3>
                    <div class="relative" style="max-height: 280px;">
                        <canvas id="chart-bar"></canvas>
                    </div>
                </div>
            </div>

            {{-- FORMULAS --}}
            <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm">
                <h3 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-4 flex items-center gap-2 border-b border-slate-200 dark:border-slate-800 pb-2">
                    <span class="material-symbols-outlined text-primary">functions</span>
                    <span data-i18n="calc_formula_title">Formulas Used</span>
                </h3>
                <div class="grid gap-3 sm:grid-cols-2 font-mono text-sm text-slate-700 dark:text-slate-300">
                    <div class="bg-slate-50 dark:bg-slate-800 p-3 rounded-lg">
                        <span class="font-bold text-primary">total</span> = organik + anorganik + plastik
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800 p-3 rounded-lg">
                        <span class="font-bold text-primary">rata-rata</span> = total / jumlah_hari
                    </div>
                    <div class="bg-green-50 dark:bg-green-950 p-3 rounded-lg">
                        <span class="font-bold text-green-700">% organik</span> = (organik / total) × 100
                    </div>
                    <div class="bg-yellow-50 dark:bg-yellow-950 p-3 rounded-lg">
                        <span class="font-bold text-yellow-700">% anorganik</span> = (anorganik / total) × 100
                    </div>
                    <div class="bg-pink-50 dark:bg-pink-950 p-3 rounded-lg">
                        <span class="font-bold text-pink-700">% plastik</span> = (plastik / total) × 100
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800 p-3 rounded-lg">
                        <span class="font-bold text-red-600">prediksi 30 hari</span> = rata-rata × 30
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- MOTIVATION --}}
    <div class="mt-16 rounded-2xl bg-background-dark px-8 py-10 text-center text-white">
        <span class="material-symbols-outlined text-5xl mb-3 text-primary">eco</span>
        <p class="text-lg font-semibold leading-relaxed" data-i18n="calc_motivation">Dengan memilah &amp; mengukur sampah, kita ciptakan sekolah lebih hijau! 🌍 Mari dukung Go Green!</p>
    </div>

    {{-- BACK --}}
    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="{{ route('programs') }}" class="inline-flex items-center justify-center rounded-lg h-11 px-8 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-semibold text-sm text-center" data-i18n="nav_programs">
            ← Programs
        </a>
        <a href="{{ route('news') }}" class="inline-flex items-center justify-center rounded-lg h-11 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold text-sm text-center" data-i18n="nav_news">
            News →
        </a>
    </div>
</section>

{{-- Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let pieChart, barChart;

function initCharts() {
    const pieCtx = document.getElementById('chart-pie').getContext('2d');
    pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Organik', 'Anorganik', 'Plastik'],
            datasets: [{
                data: [48, 32, 20],
                backgroundColor: ['#22c55e', '#eab308', '#ec4899'],
                borderColor: '#000',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: { font: { family: 'Lexend', weight: 'bold', size: 12 }, padding: 16 }
                },
                tooltip: {
                    callbacks: { label: ctx => ' ' + ctx.label + ': ' + ctx.parsed.toFixed(1) + '%' }
                }
            }
        }
    });

    const barCtx = document.getElementById('chart-bar').getContext('2d');
    barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Total', 'Rata-rata Harian', 'Prediksi 30 Hari'],
            datasets: [{
                label: 'kg',
                data: [25, 5, 150],
                backgroundColor: ['#556B2F', '#8FA31E', '#ef4444'],
                borderColor: '#000',
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                y: { beginAtZero: true, ticks: { font: { family: 'Lexend', weight: 'bold' } } },
                x: { ticks: { font: { family: 'Lexend', weight: 'bold', size: 11 } } }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: { label: ctx => ' ' + ctx.parsed.y.toFixed(2) + ' kg' }
                }
            }
        }
    });
}

function calculateWaste() {
    const days = parseFloat(document.getElementById('calc-days').value);
    const organic = parseFloat(document.getElementById('calc-organic').value);
    const inorganic = parseFloat(document.getElementById('calc-inorganic').value);
    const plastic = parseFloat(document.getElementById('calc-plastic').value);
    const className = document.getElementById('calc-class').value;

    const lang = (typeof currentLang !== 'undefined') ? currentLang : 'en';
    const t = (typeof translations !== 'undefined' && translations[lang]) ? translations[lang] : {};

    // Validation
    if (isNaN(days) || isNaN(organic) || isNaN(inorganic) || isNaN(plastic)) {
        alert(t.calc_validation_empty || 'All fields must be filled!');
        return;
    }
    if (organic < 0 || inorganic < 0 || plastic < 0) {
        alert(t.calc_validation_negative || 'Values cannot be negative!');
        return;
    }
    if (days < 5) {
        alert(t.calc_validation_days || 'Minimum observation days is 5!');
        return;
    }

    const total = organic + inorganic + plastic;
    const avg = total / days;
    const pctOrganic = total > 0 ? (organic / total) * 100 : 0;
    const pctInorganic = total > 0 ? (inorganic / total) * 100 : 0;
    const pctPlastic = total > 0 ? (plastic / total) * 100 : 0;
    const predict = avg * 30;

    // Update result display
    document.getElementById('res-class').textContent = className;
    document.getElementById('res-days').textContent = days;
    document.getElementById('res-organic').textContent = organic + ' kg';
    document.getElementById('res-inorganic').textContent = inorganic + ' kg';
    document.getElementById('res-plastic').textContent = plastic + ' kg';
    document.getElementById('res-total').textContent = total.toFixed(2) + ' kg';
    document.getElementById('res-avg').textContent = avg.toFixed(2) + ' kg';
    document.getElementById('res-predict').textContent = predict.toFixed(2) + ' kg';
    document.getElementById('res-pct-organic').textContent = pctOrganic.toFixed(2) + '%';
    document.getElementById('res-pct-inorganic').textContent = pctInorganic.toFixed(2) + '%';
    document.getElementById('res-pct-plastic').textContent = pctPlastic.toFixed(2) + '%';

    // Update pie chart
    pieChart.data.datasets[0].data = [pctOrganic, pctInorganic, pctPlastic];
    pieChart.update();

    // Update bar chart labels based on lang
    barChart.data.labels = [
        t.calc_bar_total || 'Total',
        t.calc_bar_avg || 'Daily Avg',
        t.calc_bar_predict || '30-Day Prediction'
    ];
    barChart.data.datasets[0].data = [total, avg, predict];
    barChart.update();
}

document.addEventListener('DOMContentLoaded', () => {
    initCharts();
    // Run calculation with default values on load
    calculateWaste();
});
</script>

@endsection
