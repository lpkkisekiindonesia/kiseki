@extends('layouts.app')

@section('title', __('Pengajar | Kiseki'))

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1544717302-de2939b7ef71?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Profil Instruktur Kami') }}</h1>
</div>

<section style="background-color: var(--light-bg); padding: 5rem 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; text-align: center;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;" data-aos="fade-up">{{ __('Belajar Langsung dari Ahlinya') }}</h2>
        <p style="color: var(--text-muted); max-width: 700px; margin: 0 auto 4rem auto; line-height: 1.8;" data-aos="fade-up" data-aos-delay="100">
            {{ __('LPK Kiseki Indonesia didukung oleh instruktur profesional, berpengalaman, dan tersertifikasi yang siap membimbing Anda mencapai tingkat kelulusan bahasa Jepang terbaik serta persiapan mental kerja yang matang.') }}
        </p>

        <div class="org-chart">
            <ul>
                <!-- Tingkat 1: Pembina -->
                <li>
                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="role-badge">PEMBINA</div>
                        <div class="img-container">
                            <img src="https://ui-avatars.com/api/?name=Diky+Mudhakir&background=f9a623&color=fff&size=100" alt="Prof. Dr. Diky Mudhakir">
                        </div>
                        <div class="name-badge">PROF. DR. DIKY MUDHAKIR</div>
                    </div>
                    
                    <ul>
                        <!-- Tingkat 2: Direktur Utama -->
                        <li>
                            <div class="org-card" data-aos="zoom-in-up" data-aos-delay="200">
                                <div class="role-badge">DIREKTUR UTAMA</div>
                                <div class="img-container">
                                    <img src="{{ asset('images/Sachou.jpeg') }}" alt="Ellnovianty Nine, M.Hum">
                                </div>
                                <div class="name-badge">ELLNOVIANTY NINE, M.HUM</div>
                            </div>
                            
                            <ul>
                                <!-- Tingkat 3A: Instruktur -->
                                <li>
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="300">
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
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="500">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Faiz.jpeg') }}" alt="Tubagus Faiz">
                                                        </div>
                                                        <div class="name-badge">TUBAGUS FAIZ AFIF</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="600">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Kesha.jpeg') }}" alt="Keysha">
                                                        </div>
                                                        <div class="name-badge">KEYSHA AMANDA RAMDHANI</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="700">
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
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="400">
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
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="600">
                                                        <div class="img-container">
                                                            <img src="{{ asset('images/Esa.jpeg') }}" alt="Eep">
                                                        </div>
                                                        <div class="name-badge">EEP SAEPULOH</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="700">
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
                                    <div class="org-card" data-aos="zoom-in-up" data-aos-delay="500">
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
@endsection
