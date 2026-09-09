@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1542051841857-5f90071e7989?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Tentang LPK KISEKI INDONESIA') }}</h1>
</div>

<section style="max-width: 800px; margin: 0 auto; text-align: center;" data-aos="fade-up">
    <h2 class="section-title">{{ __('Profil Lembaga') }}</h2>
    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 2rem;">
        {{ __('LPK KISEKI INDONESIA (Lembaga Pelatihan Kerja) didirikan dengan dedikasi penuh untuk menjembatani tenaga kerja berbakat Indonesia dengan peluang luar biasa di Jepang. \'Kiseki\' (軌跡) dalam bahasa Jepang dapat diartikan sebagai \'Jejak\' atau \'Keajaiban\'. Kami percaya bahwa melalui usaha keras, setiap siswa kami dapat menciptakan jejak sukses mereka sendiri.') }}
    </p>
    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--text-muted);">
        {{ __('Dengan kurikulum yang disusun khusus sesuai standar bahasa dan budaya kerja Jepang, kami tidak hanya mengajarkan tata bahasa, tetapi juga etos kerja, disiplin, dan pemahaman budaya yang mendalam.') }}
    </p>
</section>

<section style="background-color: white;">
    <div class="grid">
        <div class="card" style="padding: 2rem; border-top: 5px solid var(--primary-color);" data-aos="fade-up" data-aos-delay="100">
            <h3 style="font-size: 1.5rem; color: var(--dark-bg); margin-bottom: 1rem;">{{ __('Visi Kami') }}</h3>
            <p class="card-text">{{ __('Menjadi lembaga pelatihan kerja terbaik di Indonesia yang secara konsisten menghasilkan sumber daya manusia yang kompeten, berdaya saing global, dan siap sukses di industri Jepang.') }}</p>
        </div>
        <div class="card" style="padding: 2rem; border-top: 5px solid var(--primary-color);" data-aos="fade-up" data-aos-delay="200">
            <h3 style="font-size: 1.5rem; color: var(--dark-bg); margin-bottom: 1rem;">{{ __('Misi Kami') }}</h3>
            <ul style="color: var(--text-muted); padding-left: 1.5rem; line-height: 1.8;">
                <li>{{ __('Memberikan pelatihan bahasa Jepang yang intensif dan berkualitas.') }}</li>
                <li>{{ __('Membina karakter disiplin, etika, dan profesionalisme.') }}</li>
                <li>{{ __('Membangun kerja sama kuat dengan perusahaan dan pihak terkait di Jepang.') }}</li>
            </ul>
        </div>
    </div>
</section>
@endsection
