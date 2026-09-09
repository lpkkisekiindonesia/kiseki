@extends('layouts.admin')

@section('content')
<div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow); max-width: 600px;">
    <h2 style="margin-bottom: 2rem;">Edit Pencapaian</h2>
    
    <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul Pencapaian *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $achievement->title) }}" required>
        </div>
        <div class="form-group">
            <label>Tahun (Opsional)</label>
            <input type="text" name="year" class="form-control" value="{{ old('year', $achievement->year) }}" placeholder="Contoh: 2023">
        </div>
        <div class="form-group">
            <label>Gambar Baru (Opsional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @if($achievement->image_path)
                <div style="margin-top: 1rem;">
                    <p style="font-size: 0.9rem; color: #555;">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $achievement->image_path) }}" width="150" style="border-radius: 8px; margin-top: 0.5rem;">
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Deskripsi (Opsional)</label>
            <textarea name="description" rows="4" class="form-control">{{ old('description', $achievement->description) }}</textarea>
        </div>
        <div style="margin-top: 2rem;">
            <button type="submit" class="btn">Simpan Perubahan</button>
            <a href="{{ route('admin.achievements.index') }}" style="margin-left: 1rem; color: var(--text-muted);">Batal</a>
        </div>
    </form>
</div>
@endsection
