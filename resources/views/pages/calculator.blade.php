@extends('layouts.app')

@section('title', 'Kalkulator Sampah — Go Green School')
@section('meta_description', 'Kalkulator Sampah Kelas — Pantau dan hitung produksi sampah kelasmu. Proyek kolaborasi RPL × Matematika untuk Go Green School.')

@section('content')

<style>
    @keyframes slideScale {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-result {
        animation: slideScale 0.5s ease-out;
    }
</style>

{{-- HERO SECTION --}}
<header class="pt-32 pb-12 px-6 md:px-10 lg:px-20">
    <div class="mx-auto max-w-7xl">
        <div class="mb-8 text-center md:text-left">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-6">
                <span class="material-symbols-outlined text-4xl">recycling</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-black tracking-tight text-slate-900 dark:text-slate-100 leading-tight mb-4">
                <span data-i18n="calc_hero_title">Class Waste</span> <span class="text-primary" data-i18n="calc_hero_title_highlight">Calculator</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl font-light" data-i18n="calc_hero_desc">
                Track, analyze, and optimize your classroom's environmental footprint. Measure your impact to create a more sustainable learning environment for everyone.
            </p>
        </div>
    </div>
</header>

{{-- MAIN CONTENT --}}
<section class="px-6 md:px-10 lg:px-20 pb-20">
    <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 mb-20">

            {{-- LEFT: INPUT FORM --}}
            <div class="lg:col-span-5">
                <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-8 shadow-sm sticky top-28">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-8 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">edit_note</span>
                        <span data-i18n="calc_input_title">Input Data</span>
                    </h2>

                    <form class="space-y-6">
                        {{-- Class Name --}}
                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 uppercase tracking-wider" data-i18n="calc_label_class">Class Name</label>
                            <select id="calc-class" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent py-3 px-4 text-slate-900 dark:text-slate-100">
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
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 uppercase tracking-wider" data-i18n="calc_label_days">Observation Days</label>
                            <input type="number" id="calc-days" value="5" min="5" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent py-3 px-4 text-slate-900 dark:text-slate-100">
                        </div>

                        {{-- Waste Types --}}
                        <div class="space-y-4">
                            {{-- Organic --}}
                            <div>
                                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 uppercase tracking-wider flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                    <span data-i18n="calc_label_organic">Organic Waste (kg)</span>
                                </label>
                                <input type="number" id="calc-organic" value="12" min="0" step="0.1" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent py-3 px-4 text-slate-900 dark:text-slate-100">
                            </div>

                            {{-- Inorganic --}}
                            <div>
                                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 uppercase tracking-wider flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-blue-500"></span>
                                    <span data-i18n="calc_label_inorganic">Inorganic Waste (kg)</span>
                                </label>
                                <input type="number" id="calc-inorganic" value="8" min="0" step="0.1" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent py-3 px-4 text-slate-900 dark:text-slate-100">
                            </div>

                            {{-- Plastic --}}
                            <div>
                                <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2 uppercase tracking-wider flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                                    <span data-i18n="calc_label_plastic">Plastic Waste (kg)</span>
                                </label>
                                <input type="number" id="calc-plastic" value="5" min="0" step="0.1" class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent py-3 px-4 text-slate-900 dark:text-slate-100">
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="flex flex-col gap-3 pt-4">
                            <button type="button" onclick="calculateWaste()" class="w-full bg-primary hover:bg-green-500 transition-all text-slate-900 font-bold py-3 rounded-lg shadow-lg shadow-green-500/20" data-i18n="calc_btn">Calculate</button>
                            <button type="button" onclick="saveCalculation()" class="w-full bg-green-600 hover:bg-green-700 transition-colors text-white font-bold py-2 rounded-lg flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-lg">save</span>
                                <span data-i18n="calc_btn_save">Save Data</span>
                            </button>
                            <button type="button" onclick="clearAllData()" class="w-full bg-slate-300 dark:bg-slate-700 hover:bg-slate-400 dark:hover:bg-slate-600 transition-colors text-slate-900 dark:text-white font-bold py-2 rounded-lg flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-lg">delete_sweep</span>
                                <span data-i18n="calc_btn_clear">Clear All</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- RIGHT: RESULTS & VISUALIZATION --}}
            <div class="lg:col-span-7 space-y-8">
                {{-- Summary Cards --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-primary/10 dark:bg-primary/5 border border-primary/20 p-6 rounded-2xl">
                        <p class="text-sm font-bold uppercase tracking-widest text-slate-600 dark:text-slate-400 mb-2" data-i18n="calc_total">Total Waste</p>
                        <div class="text-4xl font-black text-primary" id="res-total">25 <span class="text-xl font-normal">kg</span></div>
                        <p class="text-xs mt-2 text-slate-600 dark:text-slate-400" data-i18n="calc_accumulated">Accumulated during observation</p>
                    </div>
                    <div class="bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-6 rounded-2xl">
                        <p class="text-sm font-bold uppercase tracking-widest text-slate-600 dark:text-slate-400 mb-2" data-i18n="calc_predict">30-Day Prediction</p>
                        <div class="text-4xl font-black text-slate-900 dark:text-slate-100" id="res-predict">150 <span class="text-xl font-normal">kg</span></div>
                        <p class="text-xs mt-2 text-slate-600 dark:text-slate-400" data-i18n="calc_estimated">Estimated monthly footprint</p>
                    </div>
                </div>

                {{-- Visualization --}}
                <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-8 rounded-2xl shadow-sm">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="font-bold text-xl text-slate-900 dark:text-slate-100" data-i18n="calc_distribution">Waste Distribution</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        {{-- Pie Chart --}}
                        <div class="flex justify-center">
                            <div class="w-64 h-64">
                                <canvas id="chart-pie"></canvas>
                            </div>
                        </div>
                        {{-- Bar Chart --}}
                        <div class="flex flex-col space-y-6">
                            <div>
                                <div class="flex justify-between text-sm font-bold text-slate-600 dark:text-slate-400 mb-2">
                                    <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-green-500"></span>Organic</span>
                                    <span id="res-pct-organic">48%</span>
                                </div>
                                <div class="h-3 w-full bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-green-500 rounded-full" style="width: 48%;" id="bar-organic"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-bold text-slate-600 dark:text-slate-400 mb-2">
                                    <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-blue-500"></span>Inorganic</span>
                                    <span id="res-pct-inorganic">32%</span>
                                </div>
                                <div class="h-3 w-full bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-blue-500 rounded-full" style="width: 32%;" id="bar-inorganic"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-bold text-slate-600 dark:text-slate-400 mb-2">
                                    <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-amber-500"></span>Plastic</span>
                                    <span id="res-pct-plastic">20%</span>
                                </div>
                                <div class="h-3 w-full bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-amber-500 rounded-full" style="width: 20%;" id="bar-plastic"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- SAVED CALCULATIONS TABLE --}}
<section class="px-6 md:px-10 lg:px-20 pb-20">
    <div class="mx-auto max-w-7xl">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-slate-100" data-i18n="calc_saved_title">Saved Calculations</h2>
                <span class="text-sm font-normal text-slate-500 dark:text-slate-400" id="saved-count">(0 entries)</span>
            </div>
            <button onclick="exportCSV()" class="flex items-center gap-2 text-primary font-bold hover:text-green-600 transition-colors">
                <span class="material-symbols-outlined">download</span>
                <span data-i18n="calc_btn_export">Export CSV</span>
            </button>
        </div>

        {{-- Table --}}
        <div class="overflow-hidden rounded-2xl shadow-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-100 dark:bg-slate-800 border-b border-slate-200 dark:border-slate-700">
                            <th class="px-8 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider" data-i18n="calc_table_no">#</th>
                            <th class="px-6 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider" data-i18n="calc_table_class">Class</th>
                            <th class="px-6 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider text-center" data-i18n="calc_waste_type_days">Days</th>
                            <th class="px-6 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider" data-i18n="calc_table_composition">Composition</th>
                            <th class="px-6 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider text-right" data-i18n="calc_table_total_weight">Total</th>
                            <th class="px-6 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider text-right" data-i18n="calc_table_date">Date</th>
                            <th class="px-8 py-5 text-sm font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider text-right" data-i18n="calc_table_action">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body" class="divide-y divide-slate-200 dark:divide-slate-700">
                        <tr class="text-center text-slate-500 h-16" id="empty-row">
                            <td colspan="7" class="py-8" data-i18n="calc_saved_empty">No saved data yet. Calculate and save to see entries here!</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


{{-- Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let pieChart;
const STORAGE_KEY = 'ggSchoolCalcData';

// Initialize data from localStorage
function loadSavedData() {
    const saved = localStorage.getItem(STORAGE_KEY);
    return saved ? JSON.parse(saved) : [];
}

// Save new calculation to localStorage
function saveCalculation() {
    const days = parseFloat(document.getElementById('calc-days').value);
    const organic = parseFloat(document.getElementById('calc-organic').value);
    const inorganic = parseFloat(document.getElementById('calc-inorganic').value);
    const plastic = parseFloat(document.getElementById('calc-plastic').value);
    const className = document.getElementById('calc-class').value;

    if (isNaN(days) || isNaN(organic) || isNaN(inorganic) || isNaN(plastic)) {
        alert('Please calculate first!');
        return;
    }

    const total = organic + inorganic + plastic;
    const avg = total / days;

    const newEntry = {
        id: Date.now(),
        class: className,
        days: days,
        organic: organic,
        inorganic: inorganic,
        plastic: plastic,
        total: total,
        avg: avg,
        date: new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' })
    };

    const data = loadSavedData();
    data.push(newEntry);
    localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

    renderTable();
    alert('Data saved successfully! ✓');
}

// Load entry values back into calculator form
function loadEntry(id) {
    const data = loadSavedData();
    const entry = data.find(e => e.id === id);

    if (entry) {
        document.getElementById('calc-class').value = entry.class;
        document.getElementById('calc-days').value = entry.days;
        document.getElementById('calc-organic').value = entry.organic;
        document.getElementById('calc-inorganic').value = entry.inorganic;
        document.getElementById('calc-plastic').value = entry.plastic;

        // Run calculation to update results
        calculateWaste();

        // Scroll to top of form
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

// Delete entry from localStorage
function deleteEntry(id) {
    if (confirm('Are you sure you want to delete this entry?')) {
        let data = loadSavedData();
        data = data.filter(entry => entry.id !== id);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
        renderTable();
    }
}

// Clear all data from localStorage
function clearAllData() {
    if (confirm('⚠️ This will delete ALL saved calculations. Are you sure?')) {
        localStorage.removeItem(STORAGE_KEY);
        renderTable();
        alert('All data cleared!');
    }
}

// Render table with saved data
function renderTable() {
    const data = loadSavedData();
    const tbody = document.getElementById('table-body');
    const countSpan = document.getElementById('saved-count');
    const emptyRow = document.getElementById('empty-row');

    // Update count if element exists
    if (countSpan) {
        countSpan.textContent = `(${data.length} ${data.length === 1 ? 'entry' : 'entries'})`;
    }

    if (data.length === 0) {
        if (emptyRow) {
            emptyRow.classList.remove('hidden');
        }
        tbody.innerHTML = '<tr class="text-center text-slate-500 h-16" id="empty-row"><td colspan="7" class="py-8">No saved data yet. Calculate and save to see entries here!</td></tr>';
        return;
    }

    // Clear and render data rows
    tbody.innerHTML = data.map((entry, index) => `
        <tr class="hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-b border-slate-200 dark:border-slate-700 animate-result">
            <td class="px-8 py-4 font-semibold text-slate-700 dark:text-slate-300">${index + 1}</td>
            <td class="px-6 py-4 font-bold text-slate-900 dark:text-slate-100">${entry.class}</td>
            <td class="px-6 py-4 text-center text-slate-700 dark:text-slate-300">${entry.days}</td>
            <td class="px-6 py-4">
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5">
                        <div class="w-2 h-2 rounded-full bg-green-500"></div>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">${entry.organic.toFixed(1)}kg</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">${entry.inorganic.toFixed(1)}kg</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">${entry.plastic.toFixed(1)}kg</span>
                    </div>
                </div>
            </td>
            <td class="px-6 py-4 text-right font-black text-primary text-lg">${entry.total.toFixed(1)}</td>
            <td class="px-6 py-4 text-right text-xs text-slate-500">${entry.date}</td>
            <td class="px-8 py-4 text-right">
                <div class="flex items-center justify-end gap-2">
                    <button onclick="loadEntry(${entry.id})" class="inline-flex items-center justify-center w-8 h-8 rounded-lg text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-950 transition-colors" title="Load">
                        <span class="material-symbols-outlined text-lg">upload</span>
                    </button>
                    <button onclick="deleteEntry(${entry.id})" class="inline-flex items-center justify-center w-8 h-8 rounded-lg text-red-600 hover:bg-red-50 dark:hover:bg-red-950 transition-colors" title="Delete">
                        <span class="material-symbols-outlined text-lg">delete</span>
                    </button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Export data to CSV
function exportCSV() {
    const data = loadSavedData();
    if (data.length === 0) {
        alert('No data to export!');
        return;
    }

    const headers = ['#', 'Class', 'Days', 'Organic (kg)', 'Inorganic (kg)', 'Plastic (kg)', 'Total (kg)', 'Avg/Day (kg)', 'Date'];
    const rows = data.map((entry, index) => [
        index + 1,
        entry.class,
        entry.days,
        entry.organic.toFixed(2),
        entry.inorganic.toFixed(2),
        entry.plastic.toFixed(2),
        entry.total.toFixed(2),
        entry.avg.toFixed(2),
        entry.date
    ]);

    let csv = headers.join(',') + '\n';
    rows.forEach(row => {
        csv += row.map(cell => `"${cell}"`).join(',') + '\n';
    });

    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = `calculator-data-${new Date().toISOString().split('T')[0]}.csv`;
    link.click();
}

function initCharts() {
    const pieCtx = document.getElementById('chart-pie').getContext('2d');
    pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Organic', 'Inorganic', 'Plastic'],
            datasets: [{
                data: [48, 32, 20],
                backgroundColor: ['#22c55e', '#3b82f6', '#f59e0b'],
                borderColor: '#fff',
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

    // Update result display with animation
    const resTotalEl = document.getElementById('res-total');
    const resPredictEl = document.getElementById('res-predict');

    // Trigger animation on total card
    if (resTotalEl) {
        resTotalEl.classList.remove('animate-result');
        void resTotalEl.offsetWidth; // Trigger reflow
        resTotalEl.classList.add('animate-result');
        resTotalEl.textContent = total.toFixed(2) + ' kg';
    }

    // Trigger animation on prediction card
    if (resPredictEl) {
        resPredictEl.classList.remove('animate-result');
        void resPredictEl.offsetWidth; // Trigger reflow
        resPredictEl.classList.add('animate-result');
        resPredictEl.textContent = predict.toFixed(2) + ' kg';
    }

    // Update percentages with animation
    const pctOrganicEl = document.getElementById('res-pct-organic');
    const pctInorganicEl = document.getElementById('res-pct-inorganic');
    const pctPlasticEl = document.getElementById('res-pct-plastic');

    if (pctOrganicEl) {
        pctOrganicEl.classList.remove('animate-result');
        void pctOrganicEl.offsetWidth;
        pctOrganicEl.classList.add('animate-result');
        pctOrganicEl.textContent = pctOrganic.toFixed(0) + '%';
    }
    if (pctInorganicEl) {
        pctInorganicEl.classList.remove('animate-result');
        void pctInorganicEl.offsetWidth;
        pctInorganicEl.classList.add('animate-result');
        pctInorganicEl.textContent = pctInorganic.toFixed(0) + '%';
    }
    if (pctPlasticEl) {
        pctPlasticEl.classList.remove('animate-result');
        void pctPlasticEl.offsetWidth;
        pctPlasticEl.classList.add('animate-result');
        pctPlasticEl.textContent = pctPlastic.toFixed(0) + '%';
    }

    // Update bar chart visualization
    document.getElementById('bar-organic').style.width = pctOrganic + '%';
    document.getElementById('bar-inorganic').style.width = pctInorganic + '%';
    document.getElementById('bar-plastic').style.width = pctPlastic + '%';

    // Update pie chart
    if (pieChart) {
        pieChart.data.datasets[0].data = [organic, inorganic, plastic];
        pieChart.update();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initCharts();
    // Render saved data table
    renderTable();
    // Run calculation with default values on load
    calculateWaste();
});
</script>

@endsection
