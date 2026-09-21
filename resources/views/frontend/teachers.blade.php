@extends('layouts.app')

@section('title', __('Pengajar | Kiseki'))

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1544717302-de2939b7ef71?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Profil Instruktur Kami') }}</h1>
</div>

<section style="background-image: linear-gradient(rgba(249, 249, 249, 0.85), rgba(249, 249, 249, 0.85)), url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center; background-attachment: fixed; padding: 5rem 0; position: relative;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; position: relative;">
        
        <!-- Header Bagan seperti referensi -->
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 3rem;">
            <div style="text-align: left;" data-aos="fade-right">
                <h2 style="font-size: 2.5rem; font-weight: 800; color: #000; line-height: 1.2; margin: 0;">STRUKTUR</h2>
                <h2 style="font-size: 2.5rem; font-weight: 800; color: #000; line-height: 1.2; margin: 0;">ORGANISASI</h2>
            </div>
            <div data-aos="fade-left">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo Kiseki" style="width: 120px; height: 120px; border-radius: 50%; border: 4px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
            </div>
        </div>

        <div class="org-chart">
            <ul>
                <!-- Tingkat 1: Pembina -->
                <li>
                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="100" onclick="openStaffModal('PROF. DR. DIKY MUDHAKIR', 'PEMBINA', 'https://ui-avatars.com/api/?name=Diky+Mudhakir&background=f9a623&color=fff&size=100', 'Sebagai Pembina Yayasan Kiseki Indonesia, beliau memberikan arahan strategis dan pengawasan terhadap seluruh program pendidikan dan pelatihan agar senantiasa relevan dengan kebutuhan industri di Jepang.')">
                        <div class="role-badge">PEMBINA</div>
                        <div class="img-container">
                            <img src="https://ui-avatars.com/api/?name=Diky+Mudhakir&background=f9a623&color=fff&size=100" alt="Prof. Dr. Diky Mudhakir">
                        </div>
                        <div class="name-badge">PROF. DR. DIKY MUDHAKIR</div>
                    </div>
                    
                    <ul>
                        <!-- Tingkat 2: Direktur Utama -->
                        <li>
                            <div class="org-card" data-aos="zoom-in-up" data-aos-delay="200" onclick="openStaffModal('ELLNOVIANTY NINE, M.HUM', 'DIREKTUR UTAMA', '{{ asset('images/Sachou.jpeg') }}', 'Bertanggung jawab penuh atas operasional LPK Kiseki Indonesia. Memastikan standar kurikulum bahasa Jepang dan kedisiplinan kerja sesuai dengan standar tinggi perusahaan Jepang.')">
                                <div class="role-badge">DIREKTUR UTAMA</div>
                                <div class="img-container">
                                    <img src="{{ asset('images/Sachou.jpeg') }}" alt="Ellnovianty Nine, M.Hum">
                                </div>
                                <div class="name-badge">ELLNOVIANTY NINE, M.HUM</div>
                            </div>
                            
                            <ul>
                                <!-- Tingkat 3A: Instruktur -->
                                <li>
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="300" onclick="openStaffModal('TASHAISMIA PUSPITAWATI SUMITRA, S.S', 'KEPALA INSTRUKTUR BAHASA JEPANG', '{{ asset('images/Tasha.jpeg') }}', 'Berpengalaman mengajar bahasa Jepang untuk program magang (Ginou Jisshuu) dan Tokutei Ginou. Fokus pada tata bahasa (Bunpou) dan percakapan praktis (Kaiwa).')">
                                        <div class="role-badge" style="font-size:0.75rem;">KEPALA INSTRUKTUR BAHASA JEPANG</div>
                                        <div class="img-container">
                                            <img src="{{ asset('images/Tasha.jpeg') }}" alt="Tashaismia">
                                        </div>
                                        <div class="name-badge" style="font-size:0.65rem;">TASHAISMIA PUSPITAWATI SUMITRA, S.S</div>
                                    </div>
                                    
                                    <ul>
                                        <li>
                                            <div class="org-card" style="margin-bottom: 20px;" data-aos="fade-in" data-aos-delay="400">
                                                <div class="role-badge">TIM PENDIDIKAN BAHASA JEPANG</div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="500" onclick="openStaffModal('TUBAGUS FAIZ AFIF', 'TIM PENDIDIKAN BAHASA JEPANG', '{{ asset('images/Faiz.jpeg') }}', 'Membantu persiapan siswa dalam menghadapi ujian JLPT/JFT-Basic serta membimbing latihan simulasi wawancara dengan User Jepang.')">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Faiz.jpeg') }}" alt="Tubagus Faiz">
                                                        </div>
                                                        <div class="name-badge">TUBAGUS FAIZ AFIF</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="600" onclick="openStaffModal('KEYSHA AMANDA RAMDHANI', 'TIM PENDIDIKAN BAHASA JEPANG', '{{ asset('images/Kesha.jpeg') }}', 'Berfokus pada pengajaran pendengaran (Choukai) dan pemahaman budaya kerja Jepang (Hourensou) agar kandidat siap mental.')">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Kesha.jpeg') }}" alt="Keysha">
                                                        </div>
                                                        <div class="name-badge">KEYSHA AMANDA RAMDHANI</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="700" onclick="openStaffModal('AJENG BELLA PRATIWI', 'TIM PENDIDIKAN BAHASA JEPANG', '{{ asset('images/Ajeng.jpg') }}', 'Melatih huruf Kanji dan memperbanyak kosa kata (Goi) kandidat lewat metode yang mudah diingat.')">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Ajeng.jpg') }}" alt="Ajeng">
                                                        </div>
                                                        <div class="name-badge">AJENG BELLA PRATIWI</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Tingkat 3B: Administrasi -->
                                <li>
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="400" onclick="openStaffModal('ELZA PUTRI KHOIRUNNISA, S.M', 'KEPALA ADMINISTRASI-KEUANGAN', '', 'Mengatur seluruh lalu lintas keuangan lembaga dan memastikan administrasi siswa tercatat secara rapi dan profesional.')">
                                        <div class="role-badge" style="font-size:0.75rem;">KEPALA ADMINISTRASI-KEUANGAN</div>
                                        <div class="img-container" style="background-color: #f0f0f0;">
                                            <!-- Dikosongkan sesuai permintaan -->
                                        </div>
                                        <div class="name-badge">ELZA PUTRI KHOIRUNNISA, S.M</div>
                                    </div>
                                    
                                    <ul>
                                        <li>
                                            <div class="org-card" style="margin-bottom: 20px;" data-aos="fade-in" data-aos-delay="500">
                                                <div class="role-badge">TIM ADMIN-HUMAS</div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="600" onclick="openStaffModal('EEP SAEPULOH', 'TIM ADMIN-HUMAS', '{{ asset('images/Esa.jpeg') }}', 'Menjembatani komunikasi antara Kiseki dengan pihak luar, menyebarkan informasi publik, dan mengelola media sosial lembaga.')">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Esa.jpeg') }}" alt="Eep">
                                                        </div>
                                                        <div class="name-badge">EEP SAEPULOH</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="700" onclick="openStaffModal('MUHAMAD MULKI MUALIM', 'TIM ADMIN-HUMAS', '{{ asset('images/Mulki.jpeg') }}', 'Menangani pendaftaran siswa baru, merapikan dokumen persyaratan magang, dan melayani pertanyaan calon peserta didik.')">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Mulki.jpeg') }}" alt="Mulki">
                                                        </div>
                                                        <div class="name-badge">MUHAMAD MULKI MUALIM</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Tingkat 3C: Perekrutan -->
                                <li>
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="500" onclick="openStaffModal('AWALUDIN', 'KABID. PEREKRUTAN DALAM NEGERI', '{{ asset('images/Awaludin.jpeg') }}', 'Bertugas melakukan sosialisasi dan perekrutan kandidat potensial dari berbagai sekolah, LPK binaan, maupun masyarakat umum.')">
                                        <div class="role-badge" style="font-size:0.75rem;">KABID. PEREKRUTAN DALAM NEGERI</div>
                                        <div class="img-container">
                                            <img src="{{ asset('images/Awaludin.jpeg') }}" alt="Awaludin">
                                        </div>
                                        <div class="name-badge">AWALUDIN</div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Modal Struktur Organisasi -->
<div class="staff-modal-overlay" id="staffModal" onclick="closeStaffModal(event)">
    <div class="staff-modal" onclick="event.stopPropagation()">
        <button class="staff-modal-close" onclick="closeStaffModal()">&times;</button>
        <img id="modalImg" src="" alt="Foto Staf" style="display: none;">
        <div id="modalEmptyImg" style="width: 120px; height: 120px; border-radius: 50%; background: #f0f0f0; border: 4px solid var(--accent-color); margin: 0 auto 1rem auto; display: none;"></div>
        <h3 id="modalName">Nama Staf</h3>
        <p class="staff-role" id="modalRole">JABATAN</p>
        <p class="staff-desc" id="modalDesc">Deskripsi profil akan ditampilkan di sini.</p>
    </div>
</div>

<script>
    function openStaffModal(name, role, imgSrc, desc) {
        document.getElementById('modalName').textContent = name;
        document.getElementById('modalRole').textContent = role;
        document.getElementById('modalDesc').textContent = desc;
        
        const imgEl = document.getElementById('modalImg');
        const emptyEl = document.getElementById('modalEmptyImg');
        
        if(imgSrc && imgSrc.trim() !== '') {
            imgEl.src = imgSrc;
            imgEl.style.display = 'inline-block';
            emptyEl.style.display = 'none';
        } else {
            imgEl.style.display = 'none';
            emptyEl.style.display = 'block';
        }

        const modal = document.getElementById('staffModal');
        modal.classList.add('active');
    }

    function closeStaffModal(e) {
        if(e && e.target !== document.getElementById('staffModal') && e.target.className !== 'staff-modal-close') {
            return; // Klik di dalam kotak tidak menutup
        }
        document.getElementById('staffModal').classList.remove('active');
    }

    // Fungsi untuk menskalakan bagan agar pas di layar secara otomatis tanpa scrollbar
    function scaleOrgChart() {
        const container = document.querySelector('.org-chart');
        const chart = document.querySelector('.org-chart > ul');
        
        if (!container || !chart) return;

        // Reset terlebih dahulu
        chart.style.transform = 'none';
        chart.style.transformOrigin = 'top left';
        
        const containerWidth = container.clientWidth;
        const chartWidth = chart.scrollWidth; 
        
        // Di mobile (<768px), biarkan horizontal dan scrollable jika user ingin swipe
        if (window.innerWidth <= 768) {
            container.style.overflowX = 'auto'; // Izinkan swipe
            chart.style.marginLeft = 'auto';
            chart.style.marginRight = 'auto';
            return;
        }
        
        // Jika lebar bagan melebihi lebar layar (di PC/Tablet), perkecil agar fit 100% tanpa scroll
        if (chartWidth > containerWidth && containerWidth > 0) {
            const scale = containerWidth / chartWidth;
            chart.style.transform = `scale(${scale})`;
            
            // Pusatkan bagan yang sudah di-scale
            const scaledWidth = chartWidth * scale;
            const marginLeft = (containerWidth - scaledWidth) / 2;
            chart.style.marginLeft = `${marginLeft}px`;
            
            // KUNCI container agar sama sekali tidak bisa di-scroll/geser di PC
            container.style.overflowX = 'hidden'; 
            
            // Sesuaikan tinggi container agar tidak ada ruang kosong tersisa di bawah
            const chartHeight = chart.scrollHeight;
            container.style.height = `${(chartHeight * scale) + 20}px`; 
        } else {
            chart.style.marginLeft = 'auto';
            chart.style.marginRight = 'auto';
            container.style.height = 'auto';
            container.style.overflowX = 'hidden';
        }
    }

    // Jalankan saat pertama kali dimuat, saat AOS selesai animasi, dan saat layar diresize
    window.addEventListener('load', scaleOrgChart);
    window.addEventListener('resize', scaleOrgChart);
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(scaleOrgChart, 150); // Eksekusi setelah DOM stabil
        setTimeout(scaleOrgChart, 1000); // Eksekusi memastikan AOS selesai
    });
</script>
@endsection
