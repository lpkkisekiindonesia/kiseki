@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Pencapaian') }}</h1>
</div>

<section>
    <h2 class="section-title">{{ __('Prestasi & Rekam Jejak') }}</h2>
    @if(count($achievements) > 0)
    <div class="grid">
        @foreach($achievements as $index => $achievement)
        @php
            $title = app()->getLocale() == 'ja' && $achievement->title_ja ? $achievement->title_ja : $achievement->title;
            $desc = app()->getLocale() == 'ja' && $achievement->description_ja ? $achievement->description_ja : $achievement->description;
            $imageSrc = $achievement->image_path ? asset('storage/' . $achievement->image_path) : '';
            // Escape quotes for javascript
            $jsTitle = htmlspecialchars($title, ENT_QUOTES);
            $jsDesc = preg_replace("/\r|\n/", "<br>", htmlspecialchars($desc, ENT_QUOTES));
        @endphp
        <div class="card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" onclick="openLightbox('{{ $imageSrc }}', '{{ $jsTitle }}', '{{ $jsDesc }}')" style="cursor: pointer; display: flex; flex-direction: column;">
            @if($achievement->image_path)
            <img src="{{ $imageSrc }}" alt="{{ $title }}" style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 8px; border-top-right-radius: 8px;">
            @endif
            <div class="card-body" style="flex: 1; display: flex; flex-direction: column;">
                <h3 class="card-title">{{ $title }}</h3>
                @if($achievement->year)
                <span class="card-date">{{ $achievement->year }}</span>
                @endif
                <p class="card-text" style="flex: 1;">{{ Str::limit($desc, 120) }}</p>
                @if(strlen($desc) > 120)
                <span style="color: var(--primary-color); font-weight: 500; font-size: 0.9rem; margin-top: 0.5rem; display: inline-block;">Show more &raquo;</span>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p style="text-align: center; color: var(--text-muted); font-size: 1.2rem;">{{ __('Belum ada data pencapaian saat ini.') }}</p>
    @endif
</section>
@endsection
