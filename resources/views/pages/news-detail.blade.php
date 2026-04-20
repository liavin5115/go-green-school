@extends('layouts.app')

@php
$articles = [
    'calculator-sampah' => [
        'title' => 'news1_title',
        'category' => 'news_cat_student',
        'date' => '9 Maret 2026',
        'image' => 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=1200&q=80',
        'detail_image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news1_summary',
        'id' => [
            'headline' => 'Dari Proyek Kelas ke Kebijakan Sekolah: Kalkulator Sampah XI RPL Mengubah Cara Sekolah Membaca Data Lingkungan',
            'lead_title' => 'Lead',
            'lead' => 'Inovasi digital sering lahir dari kebutuhan sederhana. Di Go Green School, kebutuhan itu muncul ketika guru dan siswa menyadari bahwa data sampah harian di kelas hanya menjadi catatan tempel yang mudah hilang. Melalui proyek akhir mata pelajaran produktif, siswa XI RPL merancang Kalkulator Sampah Kelas yang bukan hanya menghitung berat organik, anorganik, dan plastik, tetapi juga menyajikan tren mingguan, estimasi bulanan, serta rekomendasi aksi. Dalam dua bulan implementasi, aplikasi ini mengubah budaya sekolah: diskusi lingkungan menjadi berbasis data, bukan sekadar slogan.',
            'sections' => [
                [
                    'title' => 'Latar Belakang dan Alasan Program',
                    'paragraphs' => [
                        'Sebelum aplikasi diterapkan, proses pencatatan dilakukan manual melalui lembar piket kelas. Metode ini menimbulkan masalah yang berulang: data tidak konsisten antar kelas, satuan pengukuran berbeda-beda, dan evaluasi sulit dilakukan oleh tim adiwiyata. Akibatnya, sekolah kesulitan menentukan prioritas kebijakan, misalnya apakah perlu fokus pada pengurangan plastik kantin atau peningkatan komposter organik.',
                        'Tim pengembang kemudian memetakan kebutuhan pengguna melalui wawancara singkat dengan wali kelas, petugas kebersihan, dan pengurus OSIS. Hasilnya jelas: sekolah membutuhkan alat yang sederhana, cepat, dan bisa dipakai tanpa pelatihan teknis panjang. Prinsip inilah yang mendorong desain antarmuka dibuat ringkas, dengan input utama berupa jenis sampah, berat, dan jumlah hari pengamatan.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Implementasi Teknis dan Opini Ahli',
                    'paragraphs' => [
                        'Secara teknis, aplikasi membangun logika perhitungan rata-rata harian, persentase komposisi, dan prediksi 30 hari. Menurut guru pembimbing informatika, nilai utama aplikasi ini bukan pada kompleksitas algoritma, tetapi pada kemampuan mengubah kebiasaan. Data yang ditampilkan dalam bentuk grafik membuat siswa lebih mudah memahami dampak perilaku konsumsi mereka di kelas.',
                        'Seorang pendamping dari komunitas lingkungan lokal menilai proyek ini sebagai contoh literasi data yang aplikatif. Ia menekankan bahwa sekolah-sekolah sering memiliki semangat tinggi untuk kampanye hijau, tetapi gagal bertahan karena tidak memiliki indikator. Dengan adanya dashboard sederhana, indikator menjadi terlihat: kelas mana yang progresif, kelas mana yang stagnan, dan tindakan apa yang paling efektif.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak Nyata di Lapangan',
                    'paragraphs' => [
                        'Setelah delapan pekan uji coba, tim evaluasi sekolah mencatat beberapa perubahan perilaku yang konsisten. Siswa mulai membawa wadah makan sendiri, petugas kelas menyortir lebih disiplin, dan guru lebih aktif mengintegrasikan isu sampah ke kegiatan belajar proyek.'
                    ],
                    'points' => [
                        'Rata-rata sampah campuran turun karena pemilahan meningkat di titik sumber.',
                        'Data mingguan memudahkan kelas membandingkan progres secara sehat.',
                        'Komunikasi antara OSIS, tim kebersihan, dan wali kelas menjadi lebih terarah.',
                        'Sekolah memiliki dasar kuat untuk membuat target pengurangan sampah semesteran.'
                    ]
                ],
                [
                    'title' => 'Pandangan ke Depan',
                    'paragraphs' => [
                        'Ke depan, tim pengembang merencanakan integrasi fitur pelaporan antar sekolah, sehingga benchmark tidak berhenti di tingkat internal. Ada juga usulan modul edukasi mini yang otomatis muncul berdasarkan pola sampah, misalnya rekomendasi pengurangan plastik saat proporsi plastik naik drastis. Dengan arah ini, Kalkulator Sampah tidak berhenti sebagai tugas kelas, melainkan berkembang menjadi infrastruktur pembelajaran lingkungan berbasis bukti.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Kalkulator Sampah XI RPL membuktikan bahwa transformasi hijau dapat dimulai dari langkah sederhana: mencatat dengan benar, membaca data dengan jujur, lalu bertindak secara terukur. Saat sekolah memiliki data yang konsisten, keputusan lingkungan menjadi lebih tepat sasaran dan berdampak jangka panjang.',
        ],
        'en' => [
            'headline' => 'From Class Project to School Policy: The XI Software Engineering Waste Calculator Changes How Schools Read Environmental Data',
            'lead_title' => 'Lead',
            'lead' => 'Meaningful digital innovation often starts from a simple operational problem. At Go Green School, that problem appeared when teachers and students realized daily waste records were scattered across paper notes that were easy to lose. Through a final class project, XI Software Engineering students built a Classroom Waste Calculator that does more than add numbers. It tracks organic, inorganic, and plastic streams, shows weekly trends, projects monthly outcomes, and recommends practical actions. Within two months of implementation, the tool shifted environmental discussions from slogans to evidence-based decisions.',
            'sections' => [
                [
                    'title' => 'Background and Program Rationale',
                    'paragraphs' => [
                        'Before the platform existed, each class used manual duty sheets to report waste. The process created recurring issues: inconsistent logging formats, different measurement assumptions, and fragmented reporting across departments. As a result, the school struggled to prioritize interventions, such as whether to focus first on canteen plastic reduction or expanding compost capacity for organics.',
                        'The student team conducted short user interviews with homeroom teachers, cleaning staff, and student council coordinators. Their findings were practical and clear: users needed a fast, intuitive tool that worked without long training sessions. This requirement shaped the interface into a compact workflow centered on three essential inputs: waste type, weight, and observation period.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Technical Implementation and Expert Perspective',
                    'paragraphs' => [
                        'On the technical side, the system calculates daily averages, composition percentages, and a 30-day projection. According to the supervising IT teacher, the project strength is not algorithm complexity but behavioral influence. Visual charts made environmental impact easier to understand for students who previously viewed waste management as an abstract concept.',
                        'An advisor from a local environmental community described the project as a strong case of practical data literacy. In many schools, enthusiasm for green campaigns fades because progress indicators are unclear. With a simple dashboard, indicators become visible: which classes improve consistently, which classes plateau, and which interventions produce measurable change.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Measurable Impact on School Operations',
                    'paragraphs' => [
                        'After eight weeks of pilot use, the evaluation team observed consistent shifts in classroom habits. Students brought reusable containers more often, class officers sorted waste more carefully, and teachers integrated waste data into project-based activities.'
                    ],
                    'points' => [
                        'Mixed waste volume declined as sorting accuracy improved at source.',
                        'Weekly dashboards enabled healthy competition between classes.',
                        'Coordination among student council, cleaning staff, and teachers became more focused.',
                        'The school gained a stronger baseline for semester-level waste reduction targets.'
                    ]
                ],
                [
                    'title' => 'Forward Outlook',
                    'paragraphs' => [
                        'The next phase includes inter-school reporting so benchmarking can extend beyond one campus. The team also proposes a contextual micro-learning feature that appears automatically based on waste patterns, such as plastic reduction tips when plastic share spikes. With this roadmap, the calculator moves beyond a student assignment and evolves into a long-term evidence-driven learning infrastructure.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'The XI Waste Calculator demonstrates that green transformation can begin with disciplined recording, honest interpretation, and targeted action. Once schools own reliable data, environmental policies become sharper, fairer, and more sustainable over time.',
        ],
    ],
    'penanaman-pohon' => [
        'title' => 'news2_title',
        'category' => 'news_cat_program',
        'date' => '5 Maret 2026',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB8QF5FpDOnYcjRP12PLLTDAq5NBXlpJN9thTpv6AXppVwwjzCJvQ4Ta73Wd2LKy6Ps397Z5dQ3Hp4xJbUHT-nO6ZCCqPEZBbH9lO49V3XkKeReOF0psI0Y0wTxSlVdYoTfOwZ9xYV84vUcP_D-EvMEHSo1O-5iF_SHxihNtbX9-cq-08USLk6V6O0oF8zn9O6w0QZ28zyyWA2Nv8XzPHdnDTGiVrfS7My2bqunqcvFTWtsa1aftYAUp-k8y7HO-UdWS-Cc28j90Uuw',
        'detail_image' => 'https://images.unsplash.com/photo-1473447198193-daa9d2b7fbf4?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news2_summary',
        'id' => [
            'headline' => 'Penanaman 100 Pohon: Dari Seremoni Simbolik Menjadi Program Perawatan Berbasis Komunitas Sekolah',
            'lead_title' => 'Lead',
            'lead' => 'Aksi tanam pohon sering berhenti pada dokumentasi hari pertama. Go Green School mencoba pendekatan berbeda: menanam 100 pohon sekaligus menyusun sistem perawatan lintas kelas selama satu tahun ajaran. Program ini melibatkan guru biologi, wali kelas, petugas sarana, serta perwakilan orang tua. Setiap pohon diberi kode, lokasi, dan jadwal pemantauan kelembapan tanah. Dengan desain ini, kegiatan tidak berhenti sebagai upacara lingkungan, tetapi berubah menjadi laboratorium belajar hidup tentang ekologi, disiplin kolektif, dan tanggung jawab antargenerasi.',
            'sections' => [
                [
                    'title' => 'Konteks Lingkungan dan Alasan Intervensi',
                    'paragraphs' => [
                        'Sekolah menghadapi dua masalah utama: area teduh yang terbatas dan suhu siang hari yang meningkat signifikan di beberapa titik lapangan. Kondisi ini berdampak pada kenyamanan belajar luar ruang dan kualitas mikroiklim kampus. Tim sekolah kemudian memutuskan bahwa penanaman pohon harus menjadi intervensi prioritas, bukan sekadar agenda tahunan.',
                        'Pemilihan jenis pohon dilakukan bersama dinas terkait dengan mempertimbangkan daya tahan lokal, kebutuhan perawatan, serta manfaat jangka panjang seperti penyerapan karbon, keteduhan, dan potensi buah edukatif. Ini penting agar program tidak gagal karena jenis tanaman yang tidak sesuai dengan karakter tanah sekolah.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Pendekatan Pelaksanaan dan Tinjauan Ahli',
                    'paragraphs' => [
                        'Pelaksanaan dibagi dalam tiga tahap: persiapan lahan, penanaman bersama, dan perawatan pasca tanam. Menurut guru biologi, fase perawatan adalah titik paling krusial karena keberhasilan program pohon di sekolah biasanya ditentukan oleh tiga bulan pertama. Karena itu, setiap kelas mendapat area tanggung jawab yang jelas dan jurnal pemeliharaan mingguan.',
                        'Seorang praktisi kehutanan sosial yang mendampingi kegiatan menilai model ini kuat karena menggabungkan aksi fisik dengan tata kelola. Ia menekankan bahwa pohon membutuhkan sistem, bukan semangat sesaat. Ketika siswa melihat pertumbuhan dari minggu ke minggu, mereka memahami bahwa keberlanjutan adalah proses yang menuntut konsistensi.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak Program pada Budaya Sekolah',
                    'paragraphs' => [
                        'Dalam evaluasi awal, perubahan terlihat bukan hanya pada lanskap fisik, tetapi juga pada pola partisipasi siswa. Kegiatan perawatan mendorong koordinasi antar kelas dan membuka ruang pembelajaran lintas mata pelajaran, mulai dari biologi, geografi, hingga statistik sederhana untuk monitoring pertumbuhan.'
                    ],
                    'points' => [
                        'Zona panas di area tertentu mulai berkurang berkat peningkatan tutupan vegetasi.',
                        'Siswa belajar membaca indikator kesehatan tanaman secara praktis.',
                        'Kolaborasi orang tua meningkat melalui dukungan bibit, kompos, dan jadwal perawatan.',
                        'Sekolah memiliki dasar baru untuk program adaptasi iklim skala kampus.'
                    ]
                ],
                [
                    'title' => 'Pandangan ke Depan',
                    'paragraphs' => [
                        'Tahap berikutnya adalah membangun peta digital pohon yang memuat data umur tanam, tinggi, dan status kesehatan. Dengan data ini, sekolah dapat menghubungkan program penanaman dengan kurikulum berbasis proyek secara lebih kuat. Jika model ini stabil, Go Green School berencana membagikan panduan implementasi kepada sekolah mitra di wilayah sekitar.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Program 100 pohon menunjukkan bahwa keberhasilan aksi hijau ditentukan oleh kualitas perawatan, bukan jumlah bibit saat seremoni. Dengan sistem pemantauan dan keterlibatan komunitas, penanaman pohon berubah menjadi investasi pendidikan dan iklim yang nyata.',
        ],
        'en' => [
            'headline' => 'Planting 100 Trees: Turning a Symbolic Ceremony into a Community-Based Maintenance Program',
            'lead_title' => 'Lead',
            'lead' => 'Tree planting campaigns often end with day-one photos and little follow-up. Go Green School chose a different route by pairing the 100-tree initiative with a year-long care system across classes. The program involves biology teachers, homeroom teams, facility staff, and parent representatives. Every tree receives a code, location record, and soil-moisture monitoring schedule. With this design, the activity moves beyond symbolic celebration and becomes a living learning lab about ecology, shared discipline, and intergenerational responsibility.',
            'sections' => [
                [
                    'title' => 'Environmental Context and Rationale',
                    'paragraphs' => [
                        'The school faced two practical concerns: limited shaded zones and rising daytime heat across key activity areas. This directly affected outdoor learning comfort and local campus microclimate quality. School leadership concluded that tree planting should be treated as a strategic intervention rather than a routine annual event.',
                        'Species selection was coordinated with relevant agencies based on local resilience, maintenance needs, and long-term benefits such as carbon uptake, shade quality, and educational fruit potential. This reduced the common risk of project failure caused by unsuitable species-to-soil matching.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Implementation Method and Expert Review',
                    'paragraphs' => [
                        'Implementation was organized into three phases: land preparation, collective planting, and post-planting maintenance. According to the biology department, the maintenance phase is decisive because most school tree programs succeed or fail within the first three months. Each class therefore received clear responsibility zones and weekly care logs.',
                        'A social forestry practitioner supporting the activity described the model as robust because it combines physical action with governance. In her words, trees need systems, not momentary enthusiasm. When students observe growth week by week, sustainability becomes tangible, measurable, and personal.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Program Impact on School Culture',
                    'paragraphs' => [
                        'Early evaluation shows impact beyond physical landscape improvements. Maintenance routines encouraged cross-class coordination and opened interdisciplinary learning opportunities, from biology and geography to simple statistical tracking of growth progress.'
                    ],
                    'points' => [
                        'Heat concentration in certain open zones began to decline as canopy cover increased.',
                        'Students gained practical skill in reading plant health indicators.',
                        'Parent engagement improved through seedling, compost, and maintenance support.',
                        'The school now has a stronger baseline for campus-level climate adaptation planning.'
                    ]
                ],
                [
                    'title' => 'Forward Outlook',
                    'paragraphs' => [
                        'The next phase is a digital tree map containing planting age, height progression, and health status. This data layer will strengthen project-based curriculum integration. If the model remains stable, Go Green School plans to share a practical implementation toolkit with partner schools in the surrounding region.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'The 100-tree program confirms a simple truth: green action is measured by maintenance quality, not ceremonial scale. With clear monitoring systems and community participation, tree planting becomes a real investment in climate resilience and education.',
        ],
    ],
    'kampanye-anti-plastik' => [
        'title' => 'news3_title',
        'category' => 'news_cat_program',
        'date' => '28 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=1200&q=80',
        'detail_image' => 'https://images.unsplash.com/photo-1618477462146-050d2767eac4?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news3_summary',
        'id' => [
            'headline' => 'Kampanye Anti-Plastik 40 Persen: Bagaimana Sekolah Mengubah Kebiasaan Konsumsi Harian Menjadi Gerakan Kolektif',
            'lead_title' => 'Lead',
            'lead' => 'Pengurangan plastik sekali pakai kerap gagal karena intervensi berhenti pada imbauan. Go Green School memilih strategi yang lebih sistemik: menggabungkan aturan operasional kantin, edukasi perilaku, dan audit mingguan berbasis data. Dalam satu bulan, volume sampah plastik turun sekitar 40 persen dibanding baseline awal semester. Capaian ini tidak terjadi secara instan, melainkan hasil kombinasi kebijakan kecil yang konsisten, komunikasi publik yang jelas, dan komitmen siswa untuk membawa alternatif pakai ulang setiap hari.',
            'sections' => [
                [
                    'title' => 'Latar Belakang Masalah dan Desain Intervensi',
                    'paragraphs' => [
                        'Audit awal menunjukkan puncak sampah plastik berasal dari kemasan minuman, sendok sekali pakai, dan kantong belanja kecil dari koperasi. Tim sekolah menyadari bahwa larangan total tanpa alternatif praktis hanya memindahkan masalah. Karena itu, kampanye dirancang dengan prinsip transisi: mengurangi dulu yang paling dominan, sambil menyediakan opsi pengganti yang terjangkau.',
                        'Kantin mulai menerapkan skema insentif untuk siswa yang membawa wadah sendiri. Koperasi menambah stok tumbler dan kotak makan dengan harga pelajar. Di saat yang sama, tim komunikasi OSIS memasang materi edukasi visual yang menjelaskan dampak plastik sekali pakai pada drainase, tanah, dan kesehatan lingkungan sekolah.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Opini Ahli dan Respon Warga Sekolah',
                    'paragraphs' => [
                        'Menurut pendamping perilaku lingkungan yang diundang sekolah, intervensi paling efektif adalah yang mempermudah perilaku baik, bukan hanya menghukum perilaku lama. Ia menilai kampanye ini berhasil karena siswa mendapat jalur tindakan yang jelas, dari membawa tumbler hingga memilih kemasan isi ulang.',
                        'Dari sisi internal, wali kelas melaporkan perubahan percakapan di kelas. Siswa tidak lagi memperdebatkan apakah kampanye ini penting, tetapi berdiskusi cara paling realistis menjalankannya. Pergeseran ini menandakan bahwa isu plastik telah berpindah dari ranah seremonial ke kebiasaan harian yang terukur.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak dan Indikator Perubahan',
                    'paragraphs' => [
                        'Penurunan 40 persen tidak hanya terlihat pada timbangan akhir pekan, tetapi juga pada kondisi lingkungan fisik sekolah yang lebih bersih. Petugas kebersihan melaporkan waktu pemilahan berkurang karena komposisi sampah lebih mudah dipisahkan dari sumber.'
                    ],
                    'points' => [
                        'Antrian pengisian ulang minuman meningkat di area dispenser sekolah.',
                        'Kelas dengan kepatuhan tinggi menunjukkan volume plastik paling rendah.',
                        'Biaya pengelolaan sampah campuran menurun karena kualitas pemilahan membaik.',
                        'Kampanye memicu inisiatif siswa untuk membuat bank wadah pakai ulang antar kelas.'
                    ]
                ],
                [
                    'title' => 'Arah Lanjutan Program',
                    'paragraphs' => [
                        'Sekolah menyiapkan fase kedua dengan fokus pada rantai pasok kantin, termasuk negosiasi dengan pemasok agar mengurangi kemasan berlapis. Selain itu, dashboard plastik akan ditampilkan per kelas setiap bulan agar akuntabilitas tetap terjaga. Dengan pendekatan ini, target berikutnya bukan hanya menurunkan angka, tetapi menstabilkan kebiasaan rendah plastik secara permanen.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Keberhasilan kampanye anti-plastik menunjukkan bahwa perubahan besar lahir dari desain kebijakan kecil yang konsisten. Ketika aturan, alternatif, dan data berjalan bersamaan, budaya konsumsi sekolah dapat berubah secara nyata dan berkelanjutan.',
        ],
        'en' => [
            'headline' => 'The 40 Percent Anti-Plastic Campaign: How a School Turned Daily Consumption Habits into Collective Action',
            'lead_title' => 'Lead',
            'lead' => 'Single-use plastic reduction often fails when schools rely on slogans alone. Go Green School adopted a systemic approach by combining canteen operations, behavior education, and weekly data audits. In one month, plastic volume dropped by around 40 percent compared with the early-semester baseline. The result did not come from a single policy shock, but from consistent micro-decisions, clear public communication, and student commitment to reusable alternatives in everyday routines.',
            'sections' => [
                [
                    'title' => 'Problem Mapping and Intervention Design',
                    'paragraphs' => [
                        'Initial audits showed that plastic peaks came from beverage packaging, disposable utensils, and small shopping bags from the cooperative store. School leaders recognized that total bans without practical alternatives would simply shift the burden elsewhere. The campaign therefore used a transition model: reduce the largest sources first while making substitutes accessible and affordable.',
                        'The canteen introduced incentives for students bringing reusable containers. The school cooperative expanded low-cost tumbler and lunchbox options. In parallel, student council communication teams deployed visual education materials explaining how single-use plastic affects drainage systems, soil quality, and overall campus hygiene.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Expert Perspective and School Response',
                    'paragraphs' => [
                        'An invited environmental behavior advisor noted that the most effective intervention is one that makes better behavior easier, not one that merely punishes old habits. In her assessment, the campaign worked because students were given actionable pathways, from carrying tumblers to choosing refill-friendly packaging.',
                        'Internally, homeroom teachers observed a notable shift in student conversation. Instead of debating whether the campaign mattered, students began discussing what implementation method was most realistic. This signals a cultural move from ceremonial awareness to measurable daily practice.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Impact and Change Indicators',
                    'paragraphs' => [
                        'The 40 percent drop appears not only in weekly weighing records but also in cleaner physical school spaces. Cleaning teams reported shorter sorting time because waste composition became easier to separate at source.'
                    ],
                    'points' => [
                        'Refill station usage increased significantly among students.',
                        'Classes with stronger compliance showed the lowest plastic output.',
                        'Mixed-waste handling cost declined as sorting quality improved.',
                        'Students initiated reusable-container exchange support between classes.'
                    ]
                ],
                [
                    'title' => 'Next-Phase Outlook',
                    'paragraphs' => [
                        'The second phase will focus on canteen supply chains, including supplier engagement to reduce multilayer packaging. A class-level plastic dashboard will also be published monthly to maintain accountability. The next target is not just lower numbers, but long-term stabilization of low-plastic behavior across campus operations.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'This campaign proves that major environmental gains can emerge from consistent policy details. When rules, alternatives, and transparent data work together, school consumption culture can change in measurable and lasting ways.',
        ],
    ],
    'workshop-b3' => [
        'title' => 'news4_title',
        'category' => 'news_cat_workshop',
        'date' => '20 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=1200&q=80',
        'detail_image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news4_summary',
        'id' => [
            'headline' => 'Workshop B3 di Sekolah: Membangun Budaya Aman dalam Menangani Limbah Berbahaya Sejak Dini',
            'lead_title' => 'Lead',
            'lead' => 'Limbah B3 sering dianggap isu industri, padahal jejaknya hadir di sekolah melalui baterai bekas, lampu, cairan laboratorium, dan perangkat elektronik rusak. Go Green School mengadakan workshop pengelolaan B3 untuk memastikan siswa memahami risiko, prosedur keselamatan, dan jalur pembuangan yang benar. Kegiatan ini menekankan satu pesan penting: keamanan lingkungan tidak boleh ditunda sampai dewasa. Dengan pengetahuan dasar yang kuat, siswa dapat mencegah paparan berbahaya, melindungi teman sekelas, dan membantu sekolah memenuhi standar tata kelola limbah yang bertanggung jawab.',
            'sections' => [
                [
                    'title' => 'Mengapa B3 Menjadi Prioritas di Lingkungan Sekolah',
                    'paragraphs' => [
                        'Audit internal menunjukkan limbah berisiko sering tercampur dengan sampah umum karena minimnya pemahaman kategori B3. Baterai, cairan pembersih tertentu, serta residu praktikum menjadi contoh paling sering ditemukan tanpa pelabelan. Jika pola ini dibiarkan, risiko kontaminasi meningkat, baik pada petugas kebersihan maupun siswa yang melakukan pemilahan manual.',
                        'Workshop dirancang untuk menutup celah tersebut melalui simulasi nyata. Peserta tidak hanya mendengar teori, tetapi mempraktikkan identifikasi simbol bahaya, teknik penyimpanan sementara, dan penggunaan alat pelindung sederhana. Pendekatan praktik dipilih agar prosedur mudah diingat dalam situasi harian.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Pendapat Ahli dan Penguatan Prosedur',
                    'paragraphs' => [
                        'Narasumber dari dinas lingkungan menekankan bahwa kegagalan pengelolaan B3 umumnya bukan karena kurang aturan, melainkan lemahnya disiplin pelaksanaan. Ia menyarankan sekolah menyusun alur yang sangat sederhana: kenali, pisahkan, labeli, simpan, dan serahkan ke pengelola resmi. Alur ini kemudian dijadikan standar operasional ringkas yang ditempel di titik pengumpulan.',
                        'Guru laboratorium menambahkan bahwa edukasi B3 sekaligus melatih literasi sains terapan. Siswa belajar bahwa data komposisi bahan, simbol risiko, dan prosedur keselamatan bukan materi hafalan, tetapi pengetahuan hidup yang memengaruhi keputusan nyata di ruang kelas.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak Setelah Workshop',
                    'paragraphs' => [
                        'Dalam evaluasi dua pekan, sekolah mencatat peningkatan signifikan pada kualitas pemilahan limbah berisiko. Titik pengumpulan B3 mulai tertata, dan pelabelan dilakukan lebih konsisten oleh petugas piket kelas.'
                    ],
                    'points' => [
                        'Siswa mampu membedakan limbah umum dan limbah B3 dengan lebih akurat.',
                        'Residu praktikum tidak lagi dibuang ke saluran pembuangan biasa.',
                        'Koordinasi antara laboran dan tim kebersihan berjalan lebih terstruktur.',
                        'Sekolah memiliki catatan inventaris B3 awal untuk audit lingkungan berikutnya.'
                    ]
                ],
                [
                    'title' => 'Arah Pengembangan Program',
                    'paragraphs' => [
                        'Tahap lanjutan akan mencakup simulasi insiden kecil dan pelatihan refresh per semester agar standar keselamatan tidak menurun. Go Green School juga menargetkan kolaborasi dengan mitra pengelola limbah berizin untuk memastikan alur akhir tetap sesuai regulasi. Dengan demikian, edukasi B3 tidak berhenti pada workshop, tetapi menjadi budaya keamanan yang terus dipelihara.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Workshop B3 memperlihatkan bahwa sekolah dapat menjadi ruang aman sekaligus laboratorium tanggung jawab lingkungan. Ketika siswa memahami risiko dan prosedur, pengelolaan limbah berbahaya berubah dari potensi masalah menjadi praktik perlindungan bersama.',
        ],
        'en' => [
            'headline' => 'B3 Waste Workshop at School: Building a Safety Culture for Hazardous Materials from an Early Stage',
            'lead_title' => 'Lead',
            'lead' => 'Hazardous waste is often framed as an industrial issue, yet schools generate risk points through used batteries, lamps, laboratory residues, and damaged electronics. Go Green School launched a dedicated B3 waste workshop so students can understand hazards, safety procedures, and proper disposal channels. The core message was direct: environmental safety cannot wait until adulthood. With strong foundational literacy, students can reduce exposure risk, protect peers, and help schools meet responsible waste governance standards.',
            'sections' => [
                [
                    'title' => 'Why B3 Became a School Priority',
                    'paragraphs' => [
                        'Internal audits indicated that risk-bearing materials were often mixed with regular waste due to limited category awareness. Used batteries, specific cleaning agents, and practical-lab residues were among the most common items found without clear labeling. If this pattern continues, contamination risk increases for both cleaning teams and students handling manual sorting.',
                        'The workshop addressed these gaps through practical simulation. Participants did not only receive theory; they practiced hazard-symbol recognition, temporary storage methods, and basic protective equipment use. The practical format ensured procedures were memorable and immediately applicable in daily school routines.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Expert Input and Procedure Reinforcement',
                    'paragraphs' => [
                        'Environmental agency speakers stressed that B3 failure rarely comes from missing rules, but from weak execution discipline. They recommended a simple school protocol: identify, separate, label, store, and hand over to licensed handlers. This sequence was translated into concise operating guidance posted at collection points.',
                        'Laboratory teachers added that B3 education strengthens applied science literacy. Students learn that composition data, hazard symbols, and safety steps are not abstract memorization topics; they are practical knowledge that shapes real decisions inside classrooms and labs.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Post-Workshop Impact',
                    'paragraphs' => [
                        'Within two weeks, evaluations showed meaningful improvement in hazardous-waste sorting quality. B3 collection points became more organized, and class duty teams handled labeling with stronger consistency.'
                    ],
                    'points' => [
                        'Students distinguished regular and hazardous waste with better accuracy.',
                        'Laboratory residues were no longer discharged through ordinary drainage.',
                        'Coordination between lab assistants and cleaning staff became structured.',
                        'The school established an initial B3 inventory baseline for future audits.'
                    ]
                ],
                [
                    'title' => 'Program Roadmap',
                    'paragraphs' => [
                        'The next phase will include minor incident simulations and semester refresh sessions to prevent safety standard decline. Go Green School is also preparing partnerships with licensed waste operators so final disposal remains compliant. In this model, B3 literacy is not a one-time event but a maintained safety culture.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'The B3 workshop proves that schools can be both safe spaces and practical laboratories of environmental responsibility. When students understand risk and procedure, hazardous waste management shifts from hidden risk to collective protection practice.',
        ],
    ],
    'pemanasan-global' => [
        'title' => 'news5_title',
        'category' => 'news_cat_workshop',
        'date' => '14 Februari 2026',
        'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBK2hJXCRtNCXpaxIYucNhP4ropjNrGQko2AFlXYfKl0xnzI5bmXzkETLSxuduv4VqhqjYVG7qbQxd78xTK8Y2NcKlt1Aei3NW29fv5GZIkBpzzOTnIP0RtcM0__bZBd9b0LLR0AMvdtm4rrJY5AxdWYVEjsbr1d0vHjuroTdJrUuh8Xqkm35aOks2fyxHNv801ltKl3liyBe5pHIGzAg-lUzesN1fd4tbTwW_AEVwh0LORIoBzQI0i6maLkHbH48GPbszl4B1dxN_f',
        'detail_image' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news5_summary',
        'id' => [
            'headline' => 'Workshop Pemanasan Global dan Aksi Iklim: Dari Teori Sains ke Rencana Aksi Sekolah yang Terukur',
            'lead_title' => 'Lead',
            'lead' => 'Isu pemanasan global sering terdengar besar, tetapi terasa jauh dari keseharian siswa. Workshop dua hari di Go Green School dirancang untuk menjembatani jarak itu: mengubah istilah ilmiah menjadi tindakan konkret di lingkungan sekolah. Lebih dari 200 siswa mengikuti sesi sains iklim, simulasi jejak karbon, dan perancangan aksi berbasis kelas. Fokus utama kegiatan bukan sekadar menambah pengetahuan, melainkan menumbuhkan keberanian mengambil keputusan yang lebih ramah iklim dalam aktivitas harian, dari transportasi hingga pola konsumsi energi dan plastik.',
            'sections' => [
                [
                    'title' => 'Kerangka Materi dan Kebutuhan Edukasi',
                    'paragraphs' => [
                        'Sebelum workshop, survei internal menunjukkan banyak siswa mengenal istilah perubahan iklim, tetapi belum memahami hubungan antara kebiasaan sehari-hari dan emisi. Karena itu, materi disusun bertahap: konsep dasar efek rumah kaca, sumber emisi yang relevan dengan kehidupan sekolah, lalu simulasi dampak lokal seperti banjir, suhu ekstrem, dan kualitas udara.',
                        'Pendekatan pedagogi menekankan kombinasi visual, diskusi kelompok, dan permainan peran. Tujuannya agar siswa tidak merasa sedang menerima kuliah satu arah. Dengan metode interaktif, peserta lebih mudah mengaitkan data ilmiah dengan pilihan praktis yang bisa mereka ubah mulai minggu itu juga.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Pendapat Pakar dan Perspektif Kritis',
                    'paragraphs' => [
                        'Pembicara dari komunitas iklim menegaskan bahwa literasi iklim di sekolah harus melampaui kampanye simbolik. Menurutnya, anak muda membutuhkan alat untuk membaca data dan menilai dampak kebijakan, bukan hanya narasi ketakutan. Ia menilai workshop ini efektif karena peserta diajak menghitung emisi sederhana, lalu menyusun target aksi yang realistis.',
                        'Dari sisi guru, workshop membantu memperkuat pembelajaran lintas disiplin. Guru sains mengaitkan topik dengan konsep energi, sementara guru sosial menyoroti aspek keadilan iklim. Integrasi ini penting agar siswa melihat krisis iklim sebagai isu teknis sekaligus sosial, bukan masalah tunggal yang berdiri sendiri.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak pada Perilaku dan Tata Kelola Sekolah',
                    'paragraphs' => [
                        'Usai workshop, sejumlah kelas menyusun komitmen aksi mikro yang diverifikasi mingguan. Sekolah juga mulai meninjau ulang kebijakan energi ruangan, jadwal penggunaan perangkat elektronik, serta sistem pemantauan sampah untuk memastikan target iklim diterjemahkan ke praktik operasional.'
                    ],
                    'points' => [
                        'Siswa lebih paham hubungan antara konsumsi harian dan jejak karbon.',
                        'Diskusi iklim di kelas menjadi berbasis data, bukan asumsi.',
                        'Kelas mulai mengusulkan target pengurangan emisi skala kecil namun terukur.',
                        'Sekolah memiliki fondasi untuk menyusun roadmap aksi iklim tahunan.'
                    ]
                ],
                [
                    'title' => 'Pandangan ke Depan',
                    'paragraphs' => [
                        'Program lanjutan mencakup publikasi laporan emisi sekolah yang disederhanakan untuk siswa. Selain itu, tim Go Green School merencanakan forum iklim triwulan agar capaian tidak berhenti pada satu acara. Dengan ritme evaluasi berkala, aksi iklim sekolah dapat bergerak dari inisiatif sporadis menuju sistem perbaikan berkelanjutan.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Workshop ini menegaskan bahwa pendidikan iklim paling efektif ketika menghubungkan ilmu, empati, dan tindakan terukur. Saat siswa memahami data dan memiliki ruang aksi, mereka bukan hanya peserta kampanye, melainkan agen perubahan yang relevan untuk masa depan sekolah.',
        ],
        'en' => [
            'headline' => 'Global Warming and Climate Action Workshop: Turning Science Theory into Measurable School Action',
            'lead_title' => 'Lead',
            'lead' => 'Climate change is often discussed as a global crisis, yet many students still experience it as a distant concept. Go Green School designed a two-day workshop to close that gap by translating scientific language into practical school-level action. More than 200 students joined climate science sessions, personal footprint simulations, and class-based action planning. The central objective was not only knowledge transfer, but confidence building: helping students make climate-friendly decisions in daily routines, from mobility choices to energy use and consumption habits.',
            'sections' => [
                [
                    'title' => 'Learning Framework and Educational Need',
                    'paragraphs' => [
                        'Pre-workshop surveys showed that students recognized climate terms but lacked clarity on how daily behavior contributes to emissions. The curriculum was therefore staged: core greenhouse concepts, school-relevant emission sources, and localized impact scenarios such as flooding, heat spikes, and air-quality decline.',
                        'Teaching methods combined visual explanation, group discussion, and role-based activities to avoid one-direction lectures. The interactive design helped participants connect scientific evidence to practical choices they could adopt immediately, making climate literacy more actionable.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Expert Opinion and Critical Perspective',
                    'paragraphs' => [
                        'Climate community speakers stressed that school climate education must go beyond symbolic messaging. Young people need tools for reading data and evaluating policy impact, not fear-based narratives alone. In their view, this workshop worked because students were asked to calculate simple emission indicators and then set realistic action targets.',
                        'Teachers also observed stronger interdisciplinary relevance. Science classes linked to energy concepts, while social studies highlighted climate justice dimensions. This integration matters because climate risk is both technical and social, and students need to understand both layers to make informed decisions.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Behavioral and Governance Impact',
                    'paragraphs' => [
                        'Following the workshop, several classes launched micro-action commitments with weekly verification. School management also began reviewing room-energy policies, electronic usage schedules, and waste-monitoring systems to ensure climate goals were reflected in operations.'
                    ],
                    'points' => [
                        'Students better understood links between daily consumption and carbon footprint.',
                        'Classroom climate discussions became more data-driven and practical.',
                        'Classes proposed measurable small-scale emission reduction targets.',
                        'The school gained a foundation for an annual climate action roadmap.'
                    ]
                ],
                [
                    'title' => 'Forward Outlook',
                    'paragraphs' => [
                        'Next steps include publishing a student-friendly school emissions brief and running quarterly climate forums so momentum does not fade after one event. With regular evaluation cycles, school climate action can move from isolated campaigns to a sustained improvement system.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'The workshop confirms that climate education is most effective when science, empathy, and measurable action are integrated. When students can interpret data and act on it, they become more than campaign participants; they become relevant change agents for the school future.',
        ],
    ],
    'kolaborasi-rpl' => [
        'title' => 'news6_title',
        'category' => 'news_cat_collab',
        'date' => '7 Februari 2026',
        'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=80',
        'detail_image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1400&q=80',
        'summary' => 'news6_summary',
        'id' => [
            'headline' => 'Kolaborasi RPL x Matematika: Ketika Model Statistik Bertemu Pengembangan Web untuk Edukasi Lingkungan',
            'lead_title' => 'Lead',
            'lead' => 'Kolaborasi lintas mata pelajaran sering terdengar ideal, tetapi sulit diwujudkan dalam produk nyata. Di Go Green School, kelas RPL dan Matematika membuktikan sebaliknya dengan membangun rangkaian tools web interaktif untuk literasi lingkungan. Matematika menyusun model, variabel, dan logika analisis, sementara tim RPL menerjemahkannya menjadi antarmuka yang mudah dipahami siswa. Hasilnya bukan sekadar aplikasi demonstrasi, melainkan perangkat belajar yang dipakai langsung di kelas untuk membaca tren sampah, memahami jejak karbon, dan mensimulasikan skenario pengurangan emisi.',
            'sections' => [
                [
                    'title' => 'Awal Kolaborasi dan Rumusan Masalah',
                    'paragraphs' => [
                        'Proyek dimulai dari pertanyaan sederhana: bagaimana membuat statistik lingkungan terasa relevan dan tidak menakutkan bagi siswa? Guru Matematika menilai banyak konsep seperti persentase komposisi, rerata bergerak, atau prediksi tren sulit dipahami bila hanya disampaikan lewat papan tulis. Tim RPL melihat peluang untuk menghadirkan visualisasi interaktif yang dapat dicoba langsung oleh siswa.',
                        'Melalui lokakarya internal, kedua tim menyepakati bahwa produk harus memenuhi tiga kriteria: akurat secara matematis, ringan dijalankan di perangkat sekolah, dan mudah digunakan tanpa petunjuk teknis yang rumit. Kriteria ini kemudian menjadi standar review pada setiap iterasi pengembangan.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Pandangan Ahli dan Dinamika Pengembangan',
                    'paragraphs' => [
                        'Seorang dosen tamu bidang pendidikan STEM yang meninjau prototipe menyebut proyek ini sebagai contoh baik translasi ilmu. Menurutnya, tantangan terbesar kolaborasi lintas disiplin bukan pada teknologi, tetapi pada bahasa kerja. Ketika tim Matematika dan RPL menyepakati istilah, asumsi, dan parameter, proses validasi menjadi jauh lebih efisien.',
                        'Tim pengembang juga menerapkan uji coba pengguna kecil bersama siswa dari kelas lain. Umpan balik paling menonjol adalah kebutuhan label yang lebih sederhana dan grafik yang tidak terlalu padat. Revisi dilakukan berulang agar tools tetap ilmiah, namun tidak kehilangan aspek keterbacaan bagi pengguna non-teknis.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Dampak terhadap Pembelajaran',
                    'paragraphs' => [
                        'Setelah diterapkan, guru melaporkan peningkatan partisipasi diskusi karena siswa dapat melihat hubungan langsung antara angka dan fenomena lingkungan. Data yang sebelumnya abstrak kini tampil sebagai grafik dan simulasi yang bisa dieksplorasi secara mandiri.'
                    ],
                    'points' => [
                        'Siswa lebih cepat memahami konsep statistik melalui konteks nyata.',
                        'Materi lingkungan menjadi lebih menarik karena bersifat interaktif.',
                        'Kolaborasi antarkelas mendorong budaya belajar berbasis proyek.',
                        'Sekolah memperoleh aset digital yang bisa dikembangkan tiap tahun.'
                    ]
                ],
                [
                    'title' => 'Pandangan ke Depan',
                    'paragraphs' => [
                        'Fase selanjutnya adalah menambahkan mode guru untuk evaluasi kelas dan mode publik untuk berbagi hasil antar sekolah. Tim juga merencanakan dokumentasi terbuka agar proyek dapat direplikasi oleh komunitas pendidikan lain. Dengan langkah ini, kolaborasi RPL x Matematika berpotensi menjadi model pembelajaran transdisipliner yang berkelanjutan.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Kesimpulan',
            'conclusion' => 'Kolaborasi ini memperlihatkan bahwa ketika disiplin ilmu saling melengkapi, pembelajaran menjadi lebih kontekstual dan berdampak. RPL menghadirkan pengalaman digital, Matematika menjaga ketepatan analisis, dan siswa memperoleh cara baru memahami lingkungan secara kritis.',
        ],
        'en' => [
            'headline' => 'Software Engineering x Mathematics Collaboration: When Statistical Models Meet Web Development for Environmental Learning',
            'lead_title' => 'Lead',
            'lead' => 'Interdisciplinary projects are often praised in theory but rarely transformed into usable products. At Go Green School, Software Engineering and Mathematics classes did exactly that by building interactive web tools for environmental literacy. Mathematics teams developed models, variables, and analytical logic, while Software Engineering translated them into student-friendly interfaces. The result is not a demonstration prototype, but practical classroom tools used to interpret waste trends, understand carbon footprint patterns, and simulate reduction scenarios in measurable ways.',
            'sections' => [
                [
                    'title' => 'Project Origin and Problem Framing',
                    'paragraphs' => [
                        'The initiative started with a practical question: how can environmental statistics feel relevant rather than intimidating? Mathematics teachers observed that concepts such as composition percentages, moving averages, and trend projection were difficult to internalize through board explanations alone. Software Engineering teams identified an opportunity to make those concepts explorable through interactive visualization.',
                        'During internal workshops, both teams agreed on three product standards: mathematical validity, lightweight performance on school devices, and intuitive usability without technical onboarding. These criteria became the quality checkpoint for every development iteration.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Expert Perspective and Development Dynamics',
                    'paragraphs' => [
                        'A guest STEM education lecturer reviewing the prototype described the initiative as a strong translation model. In his view, the hardest part of interdisciplinary work is not coding; it is establishing shared working language across domains. Once Mathematics and Engineering teams aligned terms, assumptions, and parameters, validation became significantly faster.',
                        'The team also conducted small usability tests with students outside the project classes. Key feedback included simplifying labels and reducing chart density. Iterative revisions ensured the tools remained scientifically credible while still readable for non-technical users.'
                    ],
                    'points' => []
                ],
                [
                    'title' => 'Classroom Impact',
                    'paragraphs' => [
                        'After implementation, teachers reported stronger discussion participation because students could see direct links between numbers and environmental conditions. Previously abstract data became interactive charts and simulations students could explore independently.'
                    ],
                    'points' => [
                        'Students absorbed statistical concepts faster through real contexts.',
                        'Environmental content became more engaging through interaction.',
                        'Cross-class collaboration strengthened project-based learning culture.',
                        'The school gained a digital asset that can be improved annually.'
                    ]
                ],
                [
                    'title' => 'Forward Outlook',
                    'paragraphs' => [
                        'The next phase includes teacher mode for class evaluation and public mode for inter-school sharing. The team is also preparing open documentation so other education communities can replicate and adapt the model. With these steps, the collaboration can evolve into a sustainable transdisciplinary learning framework.'
                    ],
                    'points' => []
                ],
            ],
            'conclusion_title' => 'Conclusion',
            'conclusion' => 'This collaboration shows that when disciplines complement each other, learning becomes more contextual and impactful. Software Engineering delivers digital experience, Mathematics preserves analytical rigor, and students gain a sharper way to understand environmental systems critically.',
        ],
    ],
];

$slugKey = isset($slug) && is_string($slug) ? $slug : '';
$article = $slugKey !== '' ? ($articles[$slugKey] ?? null) : null;
$detailTranslations = ['id' => [], 'en' => []];

if ($article) {
    foreach (['id', 'en'] as $locale) {
        $content = $article[$locale] ?? null;
        if (!is_array($content)) {
            continue;
        }

        $detailTranslations[$locale]['newsd_headline'] = $content['headline'] ?? '';
        $detailTranslations[$locale]['newsd_lead_title'] = $content['lead_title'] ?? '';
        $detailTranslations[$locale]['newsd_lead'] = $content['lead'] ?? '';
        $detailTranslations[$locale]['newsd_conclusion_title'] = $content['conclusion_title'] ?? '';
        $detailTranslations[$locale]['newsd_conclusion'] = $content['conclusion'] ?? '';

        $sections = $content['sections'] ?? [];
        foreach ($sections as $sectionIndex => $section) {
            $s = $sectionIndex + 1;
            $detailTranslations[$locale]['newsd_s' . $s . '_title'] = $section['title'] ?? '';

            foreach (($section['paragraphs'] ?? []) as $paragraphIndex => $paragraph) {
                $p = $paragraphIndex + 1;
                $detailTranslations[$locale]['newsd_s' . $s . '_p' . $p] = $paragraph;
            }

            foreach (($section['points'] ?? []) as $pointIndex => $point) {
                $pt = $pointIndex + 1;
                $detailTranslations[$locale]['newsd_s' . $s . '_pt' . $pt] = $point;
            }
        }
    }

    $detailTranslations['id']['newsd_visual_caption'] = 'Visual pendukung untuk memperkaya konteks artikel.';
    $detailTranslations['en']['newsd_visual_caption'] = 'Supporting visual to enrich article context.';
    $detailTranslations['id']['newsd_related_title'] = 'Baca Juga';
    $detailTranslations['en']['newsd_related_title'] = 'Related Links';
    $detailTranslations['id']['newsd_back_news'] = 'Kembali ke Berita';
    $detailTranslations['en']['newsd_back_news'] = 'Back to News';
    $detailTranslations['id']['newsd_back_home'] = 'Kembali ke Beranda';
    $detailTranslations['en']['newsd_back_home'] = 'Back to Home';
    $detailTranslations['id']['newsd_cta_title'] = 'Tertarik untuk bergabung?';
    $detailTranslations['en']['newsd_cta_title'] = 'Interested in joining?';
    $detailTranslations['id']['newsd_cta_text'] = 'Jadilah bagian dari gerakan Go Green School dan buat perbedaan untuk lingkungan kita.';
    $detailTranslations['en']['newsd_cta_text'] = 'Be part of the Go Green School movement and make a difference for our environment.';
}
@endphp

@if ($article)
    @section('title', 'Berita — Go Green School')
    @section('meta_description', 'Berita detail dari Go Green School')

    @section('content')

    <script>
    window.ggsPageTranslations = window.ggsPageTranslations || { en: {}, id: {} };
    Object.assign(window.ggsPageTranslations.id, @json($detailTranslations['id']));
    Object.assign(window.ggsPageTranslations.en, @json($detailTranslations['en']));
    </script>

    {{-- HERO with Featured Image --}}
    <div class="w-full h-96 bg-cover bg-center bg-no-repeat relative overflow-hidden animate-fade-in">
        <img src="{{ $article['image'] }}" alt="Article Image" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent"></div>

        <div class="absolute bottom-0 left-0 right-0 px-6 py-12">
            <div class="max-w-4xl mx-auto">
                <span class="inline-block bg-primary text-slate-900 px-3 py-1 rounded-full text-xs font-bold uppercase mb-4" data-i18n="{{ $article['category'] }}">Category</span>
                <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-4" data-i18n="{{ $article['title'] }}">Article Title</h1>
                <div class="flex items-center gap-4 text-slate-200">
                    <span class="material-symbols-outlined text-sm">calendar_today</span>
                    <span>{{ $article['date'] }}</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ARTICLE CONTENT --}}
    <section class="max-w-5xl mx-auto px-6 py-16 lg:px-10 animate-slide-up">
        {{-- Summary --}}
        <div class="mb-10 pb-10 border-b border-slate-200">
            <p class="text-xl text-slate-600 leading-relaxed italic" data-i18n="{{ $article['summary'] }}">Article summary goes here</p>
        </div>

        {{-- Additional Visual --}}
        <figure class="mb-12 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ $article['detail_image'] }}" alt="Detail News Visual" class="h-72 w-full object-cover md:h-96">
            <figcaption class="px-5 py-3 text-sm text-slate-600" data-i18n="newsd_visual_caption">
                Visual pendukung untuk memperkaya konteks artikel.
            </figcaption>
        </figure>

        {{-- Full Content (Single version, translated by existing i18n switch) --}}
        <div class="mb-12">
            <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="mb-5 flex flex-col gap-3 border-b border-slate-200 pb-4">
                    <h2 class="text-2xl font-bold leading-snug text-slate-900 md:text-3xl" data-i18n="newsd_headline">
                        {{ $article['id']['headline'] }}
                    </h2>
                </div>

                <div class="mb-6 rounded-xl bg-slate-50 p-5">
                    <h3 class="mb-2 text-sm font-bold uppercase tracking-wide text-primary" data-i18n="newsd_lead_title">
                        {{ $article['id']['lead_title'] }}
                    </h3>
                    <p class="text-base leading-relaxed text-slate-700" data-i18n="newsd_lead">
                        {{ $article['id']['lead'] }}
                    </p>
                </div>

                <div class="space-y-6">
                    @foreach ($article['id']['sections'] as $sectionIndex => $section)
                        @php
                            $s = $sectionIndex + 1;
                        @endphp
                        <section class="space-y-3">
                            <h3 class="text-xl font-bold text-slate-900" data-i18n="newsd_s{{ $s }}_title">
                                {{ $section['title'] }}
                            </h3>

                            @foreach ($section['paragraphs'] as $paragraphIndex => $paragraph)
                                @php
                                    $p = $paragraphIndex + 1;
                                @endphp
                                <p class="text-base leading-relaxed text-slate-700" data-i18n="newsd_s{{ $s }}_p{{ $p }}">
                                    {{ $paragraph }}
                                </p>
                            @endforeach

                            @if (!empty($section['points']))
                                <ul class="list-disc space-y-2 pl-6 text-base leading-relaxed text-slate-700">
                                    @foreach ($section['points'] as $pointIndex => $point)
                                        @php
                                            $pt = $pointIndex + 1;
                                        @endphp
                                        <li data-i18n="newsd_s{{ $s }}_pt{{ $pt }}">{{ $point }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </section>
                    @endforeach
                </div>

                <div class="mt-6 rounded-xl border border-primary/25 bg-primary/5 p-5">
                    <h3 class="mb-2 text-lg font-bold text-slate-900" data-i18n="newsd_conclusion_title">
                        {{ $article['id']['conclusion_title'] }}
                    </h3>
                    <p class="text-base leading-relaxed text-slate-700" data-i18n="newsd_conclusion">
                        {{ $article['id']['conclusion'] }}
                    </p>
                </div>
            </article>
        </div>

        {{-- Related Links --}}
        <div class="bg-primary/5 rounded-xl border border-primary/20 p-8 mb-12 animate-slide-up">
            <h3 class="text-lg font-bold text-slate-900 mb-4" data-i18n="newsd_related_title">Baca Juga</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="{{ route('news') }}" class="flex items-center gap-3 group">
                    <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">newspaper</span>
                    <span class="text-slate-600 group-hover:text-primary transition-colors" data-i18n="newsd_back_news">Kembali ke Berita</span>
                </a>
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <span class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">home</span>
                    <span class="text-slate-600 group-hover:text-primary transition-colors" data-i18n="newsd_back_home">Kembali ke Beranda</span>
                </a>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="bg-background-forest rounded-xl p-10 text-center text-white animate-slide-up">
            <h3 class="text-2xl font-bold mb-3" data-i18n="newsd_cta_title">Tertarik untuk bergabung?</h3>
            <p class="text-slate-300 mb-6" data-i18n="newsd_cta_text">Jadilah bagian dari gerakan Go Green School dan buat perbedaan untuk lingkungan kita.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center h-12 px-8 bg-primary hover:bg-green-500 transition-colors text-slate-900 font-bold rounded-lg shadow-lg" data-i18n="home_cta_btn">
                Contact Us
            </a>
        </div>
    </section>

    @endsection
@else
    {{-- Article Not Found --}}
    @section('content')
    <div class="max-w-4xl mx-auto px-6 py-20 text-center">
        <h1 class="text-3xl font-bold text-slate-900 mb-4">Berita Tidak Ditemukan</h1>
        <p class="text-slate-600 mb-6">Maaf, artikel yang Anda cari tidak tersedia.</p>
        <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-primary font-bold hover:underline">
            <span class="material-symbols-outlined">arrow_back</span>
            Kembali ke Berita
        </a>
    </div>
    @endsection
@endif
