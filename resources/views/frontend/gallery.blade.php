@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1511556820780-d912e42b4980?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Galeri Event') }}</h1>
</div>

<section>
    <h2 class="section-title" data-aos="fade-up">{{ __('Dokumentasi Kegiatan Kiseki') }}</h2>
    @if(count($galleries) > 0)
    <div class="grid-gallery">
        @foreach($galleries as $index => $gallery)
        <div class="card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ app()->getLocale() == 'ja' && $gallery->title_ja ? $gallery->title_ja : $gallery->title }}" class="card-img" style="cursor: pointer;" onclick="openLightbox(this.src)">
            <div class="card-body">
                <h3 class="card-title">{{ (app()->getLocale() == 'ja' && $gallery->title_ja ? $gallery->title_ja : $gallery->title) ?? __('Kegiatan LPK') }}</h3>
                @if($gallery->date)
                <span class="card-date">{{ date('d M Y', strtotime($gallery->date)) }}</span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p style="text-align: center; color: var(--text-muted); font-size: 1.2rem;">{{ __('Belum ada foto kegiatan saat ini.') }}</p>
    @endif
</section>
@endsection
