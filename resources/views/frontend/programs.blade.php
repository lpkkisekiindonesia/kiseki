@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Program Pelatihan') }}</h1>
</div>

<section>
    <h2 class="section-title" data-aos="fade-up">{{ __('Pilihan Program Kiseki') }}</h2>
    <div class="grid">
        <div class="card" data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
                <h3 class="card-title">{{ __('Program Reguler Bahasa Jepang (N5 - N3)') }}</h3>
                <p class="card-text">{{ __('Program intensif pembelajaran bahasa Jepang dari tingkat dasar (N5) hingga menengah (N3). Cocok bagi Anda yang ingin menguasai bahasa Jepang secara menyeluruh untuk keperluan studi maupun kerja.') }}</p>
                <ul style="margin-top: 1rem; color: var(--text-muted); padding-left: 1.5rem;">
                    <li>{{ __('Materi tata bahasa (Bunpou)') }}</li>
                    <li>{{ __('Kosakata (Goi) & Huruf Kanji') }}</li>
                    <li>{{ __('Percakapan (Kaiwa)') }}</li>
                    <li>{{ __('Latihan pendengaran (Choukai)') }}</li>
                </ul>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?q=80&w=1788&auto=format&fit=crop" class="card-img" alt="Ginou Jisshu">
            <div class="card-body">
                <h3 class="card-title">{{ __('Program Pemagangan (Ginou Jisshu)') }}</h3>
                <p class="card-text">{{ __('Program persiapan khusus bagi calon peserta magang kerja di Jepang. Kami melatih tidak hanya bahasa, tetapi juga fisik, mental, dan kedisiplinan kerja ala Jepang.') }}</p>
                <ul style="margin-top: 1rem; color: var(--text-muted); padding-left: 1.5rem;">
                    <li>{{ __('Bahasa Jepang Dasar (N5/N4)') }}</li>
                    <li>{{ __('Pendidikan Fisik & Mental (FMD)') }}</li>
                    <li>{{ __('Budaya Kerja Jepang (Hourensou)') }}</li>
                    <li>{{ __('Persiapan Wawancara') }}</li>
                </ul>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="300">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop" class="card-img" alt="Tokutei Ginou">
            <div class="card-body">
                <h3 class="card-title">{{ __('Program Tokutei Ginou (SSW)') }}</h3>
                <p class="card-text">{{ __('Program pelatihan khusus untuk pekerja terampil yang menargetkan visa Tokutei Ginou (Specified Skilled Worker) di berbagai sektor industri di Jepang.') }}</p>
                <ul style="margin-top: 1rem; color: var(--text-muted); padding-left: 1.5rem;">
                    <li>{{ __('Persiapan ujian bahasa Jepang JFT-Basic') }}</li>
                    <li>{{ __('Persiapan ujian skill teknis (Caregiver, Manufaktur, Pertanian, dll)') }}</li>
                    <li>{{ __('Bimbingan dokumen dan keberangkatan') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
