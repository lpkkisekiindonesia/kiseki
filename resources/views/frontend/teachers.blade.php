@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Pengajar & Staf') }}</h1>
</div>

<section style="background-color: var(--light-bg); padding: 4rem 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; text-align: center;">
        <h2 style="color: var(--dark-bg); font-size: 2.2rem; margin-bottom: 1rem;" data-aos="fade-up">{{ __('Mengenal Lebih Dekat Pengajar Kami') }}</h2>
        <p style="color: #666; max-width: 700px; margin: 0 auto 4rem auto; font-size: 1.1rem; line-height: 1.6;" data-aos="fade-up" data-aos-delay="100">
            {{ __('Para instruktur dan pengajar di LPK KISEKI adalah para ahli yang berdedikasi tinggi, berpengalaman, dan merupakan penutur asli atau profesional bersertifikat.') }}
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            
            <!-- Teacher 1 -->
            <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="200" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" alt="Teacher" style="width: 100%; height: 300px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--dark-bg); margin-bottom: 0.5rem; font-size: 1.3rem;">Satoshi Tanaka</h3>
                    <p style="color: var(--primary-color); font-weight: bold; margin-bottom: 1rem;">{{ __('Kepala Instruktur Bahasa') }}</p>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">
                        {{ __('Berpengalaman lebih dari 10 tahun mengajar bahasa Jepang untuk orang asing. Memiliki spesialisasi dalam persiapan ujian JLPT N3 dan N2.') }}
                    </p>
                </div>
            </div>

            <!-- Teacher 2 -->
            <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="300" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?q=80&w=600&auto=format&fit=crop" alt="Teacher" style="width: 100%; height: 300px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--dark-bg); margin-bottom: 0.5rem; font-size: 1.3rem;">Budi Santoso</h3>
                    <p style="color: var(--primary-color); font-weight: bold; margin-bottom: 1rem;">{{ __('Instruktur Budaya Kerja Jepang') }}</p>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">
                        {{ __('Eks-pemagang di Jepang selama 5 tahun. Mengajar disiplin, etos kerja 5S, dan budaya perusahaan (Hourensou).') }}
                    </p>
                </div>
            </div>

            <!-- Teacher 3 -->
            <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="400" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?q=80&w=600&auto=format&fit=crop" alt="Teacher" style="width: 100%; height: 300px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--dark-bg); margin-bottom: 0.5rem; font-size: 1.3rem;">Ayumi Yamada</h3>
                    <p style="color: var(--primary-color); font-weight: bold; margin-bottom: 1rem;">{{ __('Guru Bahasa Dasar (N5-N4)') }}</p>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">
                        {{ __('Fokus pada membangun fondasi tata bahasa dasar dan percakapan praktis (Kaiwa) dengan metode belajar yang menyenangkan.') }}
                    </p>
                </div>
            </div>

            <!-- Teacher 4 -->
            <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow); transition: transform 0.3s ease;" data-aos="fade-up" data-aos-delay="500" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <img src="https://images.unsplash.com/photo-1544168190-79c15427015f?q=80&w=600&auto=format&fit=crop" alt="Teacher" style="width: 100%; height: 300px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h3 style="color: var(--dark-bg); margin-bottom: 0.5rem; font-size: 1.3rem;">Anita Lestari</h3>
                    <p style="color: var(--primary-color); font-weight: bold; margin-bottom: 1rem;">{{ __('Konselor & Pembina Asrama') }}</p>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">
                        {{ __('Mendampingi perkembangan fisik dan mental (FMD) siswa, serta mengelola pembinaan mental disiplin selama pelatihan.') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
