@extends('layouts.app')

@section('content')
<div class="page-header" style="background-color: var(--dark-bg); padding-top: 10rem; padding-bottom: 4rem;">
    <!-- Minimal header since we display image below -->
</div>

<section style="background-color: var(--light-bg); padding-top: 0; margin-top: -3rem;">
    <div style="max-width: 800px; margin: 0 auto; background: var(--white); padding: 3rem; border-radius: 20px; box-shadow: var(--shadow);" data-aos="fade-up">
        
        <div style="text-align: center; margin-bottom: 2rem;">
            <span class="card-date" style="font-size: 1rem;">{{ $article->created_at->format('d M Y') }}</span>
            <h1 style="color: var(--dark-bg); font-size: 2.5rem; margin-top: 1rem; line-height: 1.3;">{{ app()->getLocale() == 'ja' && $article->title_ja ? $article->title_ja : $article->title }}</h1>
        </div>

        @if($article->image_path)
            <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ app()->getLocale() == 'ja' && $article->title_ja ? $article->title_ja : $article->title }}" style="width: 100%; border-radius: 15px; margin-bottom: 2rem;">
        @endif

        <div style="font-size: 1.1rem; line-height: 1.8; color: var(--text-main);">
            {!! nl2br(e(app()->getLocale() == 'ja' && $article->content_ja ? $article->content_ja : $article->content)) !!}
        </div>
        
        <div style="margin-top: 4rem; text-align: center; border-top: 1px solid #eee; padding-top: 2rem;">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary" style="color: var(--dark-bg); border-color: var(--dark-bg);">&larr; {{ __('Kembali ke Daftar Berita') }}</a>
        </div>
    </div>
</section>
@endsection
