@extends('layouts.admin')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h2>Kelola Pencapaian</h2>
    <a href="{{ route('admin.achievements.create') }}" class="btn">+ Tambah Pencapaian</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($achievements as $item)
        <tr>
            <td>
                @if($item->image_path)
                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gambar" width="80" style="border-radius: 4px; object-fit: cover;">
                @else
                    -
                @endif
            </td>
            <td><strong>{{ $item->title }}</strong></td>
            <td>{{ $item->year ?? '-' }}</td>
            <td>{{ Str::limit($item->description, 50) }}</td>
            <td>
                <a href="{{ route('admin.achievements.edit', $item->id) }}" style="color: blue; text-decoration: underline; margin-right: 1rem;">Edit</a>
                <form action="{{ route('admin.achievements.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus pencapaian ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline; padding: 0;">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center;">Belum ada data pencapaian.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
