@extends('layouts.admin')

@section('content')
        <h1 style="color: var(--dark-bg); font-size: 2rem;">Daftar Berita & Artikel</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('admin.articles.create') }}" class="btn" style="margin-bottom: 2rem;">+ Tambah Berita</a>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->slug }}</td>
                    <td>
                        @if($article->image_path)
                            <img src="{{ asset('storage/' . $article->image_path) }}" width="100">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem;">Edit</a>
                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus artikel ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem; background-color: #e3342f; border-color: #e3342f; color: white;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
