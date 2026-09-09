@extends('layouts.app')

@section('content')
    <header class="hero">
        <video autoplay loop muted playsinline class="hero-video">
            <!-- Ganti URL src di bawah ini dengan video profil lembaga Anda (misal: /videos/profil.mp4) -->
            <source src="{{ asset('video/lp_fiks.mp4') }}" type="video/mp4">
            {{ __('Browser Anda tidak mendukung tag video.') }}
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content" data-aos="zoom-in" data-aos-duration="1200">
            <h1 style="text-shadow: 0 2px 10px rgba(0,0,0,0.5);">{{ __('Meraih Masa Depan di Jepang') }}</h1>
            <p style="text-shadow: 0 1px 5px rgba(0,0,0,0.5);">{{ __('Lembaga Pelatihan Kerja Kiseki membekali Anda dengan kemampuan bahasa Jepang dan keterampilan teknis untuk sukses berkarir di Jepang. Bergabunglah bersama kami dan wujudkan impian Anda.') }}</p>
            <a href="{{ route('programs') }}" class="btn">{{ __('Lihat Program Kami') }}</a>
        </div>
    </header>
    <section>
        <h2 class="section-title" data-aos="fade-up">{{ __('Mengapa Memilih LPK KISEKI INDONESIA?') }}</h2>
        <div class="grid">
            <div class="card" style="text-align: center; padding: 3rem 2rem;" data-aos="fade-up" data-aos-delay="100">
                <h3 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 1.5rem;">&#127891;</h3>
                <h3 style="font-size: 1.3rem;">{{ __('Pengajar Profesional') }}</h3>
                <p class="card-text">{{ __('Instruktur kami adalah penutur asli dan tenaga pengajar bersertifikat yang siap mendidik Anda dengan kurikulum standar Jepang.') }}</p>
            </div>
            <div class="card" style="text-align: center; padding: 3rem 2rem;" data-aos="fade-up" data-aos-delay="200">
                <h3 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 1.5rem;">&#128200;</h3>
                <h3 style="font-size: 1.3rem;">{{ __('Peluang Karir') }}</h3>
                <p class="card-text">{{ __('Kami memiliki jaringan luas dengan berbagai perusahaan di Jepang untuk menyalurkan tenaga kerja terampil Indonesia.') }}</p>
            </div>
            <div class="card" style="text-align: center; padding: 3rem 2rem;" data-aos="fade-up" data-aos-delay="300">
                <h3 style="color: var(--primary-color); font-size: 2.5rem; margin-bottom: 1.5rem;">&#127963;</h3>
                <h3 style="font-size: 1.3rem;">{{ __('Fasilitas Lengkap') }}</h3>
                <p class="card-text">{{ __('Asrama yang nyaman dan ruang kelas yang mendukung proses pembelajaran intensif bahasa dan budaya Jepang.') }}</p>
            </div>
        </div>
    </section>

    <section style="background-color: var(--white);">
        <h2 class="section-title" data-aos="fade-up">{{ __('Mitra Kami') }}</h2>
        <p style="text-align: center; color: var(--text-muted); max-width: 600px; margin: -2rem auto 3rem;" data-aos="fade-up" data-aos-delay="100">
            {{ __('Kami bekerja sama dengan berbagai institusi dan perusahaan terkemuka di Jepang dan Indonesia untuk memastikan masa depan karir yang cerah bagi siswa kami.') }}
        </p>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 3rem; align-items: center;" data-aos="fade-up" data-aos-delay="200">
            <div style="font-size: 1.5rem; font-weight: bold; color: #cbd5e1;">{{ __('Mitra Perusahaan A') }}</div>
            <div style="font-size: 1.5rem; font-weight: bold; color: #cbd5e1;">{{ __('Mitra Perusahaan B') }}</div>
            <div style="font-size: 1.5rem; font-weight: bold; color: #cbd5e1;">{{ __('Institusi C') }}</div>
            <div style="font-size: 1.5rem; font-weight: bold; color: #cbd5e1;">{{ __('Lembaga D') }}</div>
        </div>
    </section>

    @if(count($achievements) > 0)
        <section style="background-color: var(--light-bg);">
            <h2 class="section-title" data-aos="fade-up">{{ __('Pencapaian Kami') }}</h2>
            <div class="grid">
                @foreach($achievements as $index => $achievement)
                    <div class="card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="card-body">
                            <h3 class="card-title">{{ app()->getLocale() == 'ja' && $achievement->title_ja ? $achievement->title_ja : $achievement->title }}</h3>
                            @if($achievement->year)
                                <span class="card-date">{{ $achievement->year }}</span>
                            @endif
                            <p class="card-text">{{ Str::limit(app()->getLocale() == 'ja' && $achievement->description_ja ? $achievement->description_ja : $achievement->description, 100) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('achievements') }}" class="btn">{{ __('Lihat Semua Pencapaian') }}</a>
            </div>
        </section>
    @endif

    @if(count($galleries) > 0)
        <section style="background-color: var(--white);">
            <h2 class="section-title" data-aos="fade-up">{{ __('Galeri Event Terbaru') }}</h2>
            <div class="grid">
                @foreach($galleries as $index => $gallery)
                    <div class="card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ app()->getLocale() == 'ja' && $gallery->title_ja ? $gallery->title_ja : $gallery->title }}" class="card-img" style="cursor: pointer;" onclick="openLightbox(this.src)">
                        <div class="card-body">
                            <h3 class="card-title">{{ (app()->getLocale() == 'ja' && $gallery->title_ja ? $gallery->title_ja : $gallery->title) ?? __('Dokumentasi Event') }}</h3>
                            @if($gallery->date)
                                <span class="card-date">{{ date('d M Y', strtotime($gallery->date)) }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('gallery') }}" class="btn">{{ __('Lihat Semua Galeri') }}</a>
            </div>
        </section>
    @endif

@endsection