@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ __('Berita & Artikel') }}</h1>
</div>

<section style="background-color: var(--light-bg);">
    <h2 class="section-title" data-aos="fade-up">{{ __('Kabar Terbaru dari Kiseki') }}</h2>
    
    @if($articles->count() > 0)
    <div class="grid">
        @foreach($articles as $index => $article)
        <div class="card" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
            @if($article->image_path)
                <a href="{{ route('articles.show', $article->slug) }}">
                    <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="card-img" style="height: 200px;">
                </a>
            @else
                <div style="height: 200px; background-color: var(--dark-bg); display:flex; align-items:center; justify-content:center;">
                    <span style="color: var(--accent-color); font-size: 3rem;">&#128240;</span>
                </div>
            @endif
            <div class="card-body">
                <span class="card-date" style="margin-top: 0; margin-bottom: 0.5rem; display: block;">{{ $article->created_at->format('d M Y') }}</span>
                <a href="{{ route('articles.show', $article->slug) }}">
                    <h3 class="card-title" style="font-size: 1.25rem; line-height: 1.4; margin-bottom: 1rem;">{{ app()->getLocale() == 'ja' && $article->title_ja ? $article->title_ja : $article->title }}</h3>
                </a>
                <p class="card-text">{{ Str::limit(strip_tags(app()->getLocale() == 'ja' && $article->content_ja ? $article->content_ja : $article->content), 100) }}</p>
                <a href="{{ route('articles.show', $article->slug) }}" style="display: inline-block; margin-top: 1rem; font-weight: bold; color: var(--accent-color);">{{ __('Baca Selengkapnya') }} &rarr;</a>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Custom pagination (simplified) -->
    <div style="text-align: center; margin-top: 4rem;">
        {{ $articles->links('pagination::simple-default') }}
    </div>
    
    @else
    <p style="text-align: center; color: var(--text-muted); font-size: 1.2rem;">{{ __('Belum ada berita atau artikel saat ini.') }}</p>
    @endif
</section>
@endsection
