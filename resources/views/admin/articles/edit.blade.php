@extends('layouts.admin')

@section('content')
        <h1 style="color: var(--dark-bg); font-size: 2rem;">Edit Berita</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="contact-form" style="max-width: 100%;">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}" required>
            </div>
            
            <div class="form-group">
                <label>Konten</label>
                <textarea name="content" class="form-control" rows="10" required>{{ old('content', $article->content) }}</textarea>
            </div>

            <div class="form-group">
                <label>Gambar Headline Baru (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($article->image_path)
                    <div style="margin-top: 1rem;">
                        <p>Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $article->image_path) }}" width="200">
                    </div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-submit">Perbarui Berita</button>
        </form>
@endsection
