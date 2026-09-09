@extends('layouts.admin')

@section('content')
        <h1 style="color: var(--dark-bg); font-size: 2rem;">Tambah Berita</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data" class="contact-form" style="max-width: 100%;">
            @csrf
            <div class="form-group">
                <label>Judul Berita</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            
            <div class="form-group">
                <label>Konten</label>
                <textarea name="content" class="form-control" rows="10" required>{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label>Gambar Headline (Opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-submit">Simpan Berita</button>
        </form>
@endsection
