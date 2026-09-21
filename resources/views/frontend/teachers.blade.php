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

        <div class="org-chart" data-aos="zoom-in" data-aos-delay="200">
            <ul>
                <!-- Tingkat 1: Instruktur Kepala -->
                <li>
                    <div class="org-card">
                        <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?q=80&w=2070&auto=format&fit=crop" alt="Sensei A">
                        <div class="card-body">
                            <h3>{{ __('Takeshi Yamada Sensei') }}</h3>
                            <p class="title">{{ __('Instruktur Kepala (Native)') }}</p>
                            <p class="desc">{{ __('Berpengalaman lebih dari 10 tahun mengajar bahasa Jepang untuk orang asing. Beliau memfokuskan pengajarannya pada komunikasi praktis (Kaiwa) dan pemahaman budaya kerja (Hourensou).') }}</p>
                        </div>
                    </div>
                    
                    <!-- Tingkat 2: Instruktur Cabang -->
                    <ul>
                        <li>
                            <div class="org-card">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop" alt="Sensei B">
                                <div class="card-body">
                                    <h3>{{ __('Sari Widyastuti Sensei') }}</h3>
                                    <p class="title">{{ __('Instruktur JLPT N3/N4') }}</p>
                                    <p class="desc">{{ __('Lulusan Sastra Jepang dari universitas terkemuka yang memiliki rekor meluluskan ratusan siswa dalam ujian JLPT setiap tahunnya berkat metode pengajaran tata bahasa yang mudah dipahami.') }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="org-card">
                                <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?q=80&w=1887&auto=format&fit=crop" alt="Sensei C">
                                <div class="card-body">
                                    <h3>{{ __('Budi Santoso') }}</h3>
                                    <p class="title">{{ __('Instruktur FMD (Fisik, Mental, Disiplin)') }}</p>
                                    <p class="desc">{{ __('Bertanggung jawab atas pelatihan fisik dan kedisiplinan kerja ala Jepang, memastikan setiap kandidat memiliki mentalitas pantang menyerah sebelum diberangkatkan ke tempat kerja.') }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
