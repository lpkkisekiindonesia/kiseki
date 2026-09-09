@extends('layouts.admin')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h2>Kelola Galeri Event</h2>
    <a href="{{ route('admin.gallery.create') }}" class="btn">+ Tambah Foto</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($galleries as $item)
        <tr>
            <td><img src="{{ asset('storage/' . $item->image_path) }}" width="80" style="border-radius: 4px;"></td>
            <td>{{ $item->title ?? '-' }}</td>
            <td>{{ $item->date ? date('d M Y', strtotime($item->date)) : '-' }}</td>
            <td>
                <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus foto ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center;">Belum ada data galeri.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
