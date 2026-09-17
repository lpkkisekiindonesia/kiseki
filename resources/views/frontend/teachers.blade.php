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

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
            <!-- Teacher 1 -->
            <div data-aos="fade-up" data-aos-delay="200" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div style="height: 350px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?q=80&w=2070&auto=format&fit=crop" alt="Sensei A" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 2rem;">
                    <h3 style="margin-bottom: 0.5rem; color: var(--dark-bg);">{{ __('Takeshi Yamada Sensei') }}</h3>
                    <p style="color: var(--accent-color); font-weight: 600; margin-bottom: 1rem;">{{ __('Instruktur Kepala (Native)') }}</p>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                        {{ __('Berpengalaman lebih dari 10 tahun mengajar bahasa Jepang untuk orang asing. Beliau memfokuskan pengajarannya pada komunikasi praktis (Kaiwa) dan pemahaman budaya kerja (Hourensou).') }}
                    </p>
                </div>
            </div>

            <!-- Teacher 2 -->
            <div data-aos="fade-up" data-aos-delay="300" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div style="height: 350px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1888&auto=format&fit=crop" alt="Sensei B" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 2rem;">
                    <h3 style="margin-bottom: 0.5rem; color: var(--dark-bg);">{{ __('Sari Widyastuti Sensei') }}</h3>
                    <p style="color: var(--accent-color); font-weight: 600; margin-bottom: 1rem;">{{ __('Instruktur JLPT N3/N4') }}</p>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                        {{ __('Lulusan Sastra Jepang dari universitas terkemuka yang memiliki rekor meluluskan ratusan siswa dalam ujian JLPT setiap tahunnya berkat metode pengajaran tata bahasa yang mudah dipahami.') }}
                    </p>
                </div>
            </div>

            <!-- Teacher 3 -->
            <div data-aos="fade-up" data-aos-delay="400" style="background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow); transition: var(--transition);" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <div style="height: 350px; overflow: hidden;">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?q=80&w=1887&auto=format&fit=crop" alt="Sensei C" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 2rem;">
                    <h3 style="margin-bottom: 0.5rem; color: var(--dark-bg);">{{ __('Budi Santoso') }}</h3>
                    <p style="color: var(--accent-color); font-weight: 600; margin-bottom: 1rem;">{{ __('Instruktur FMD (Fisik, Mental, Disiplin)') }}</p>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6;">
                        {{ __('Bertanggung jawab atas pelatihan fisik dan kedisiplinan kerja ala Jepang, memastikan setiap kandidat memiliki mentalitas pantang menyerah sebelum diberangkatkan ke tempat kerja.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
