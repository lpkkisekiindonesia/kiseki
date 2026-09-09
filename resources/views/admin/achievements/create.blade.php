@extends('layouts.admin')

@section('content')
<div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow); max-width: 600px;">
    <h2 style="margin-bottom: 2rem;">Tambah Pencapaian</h2>
    
    <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Pencapaian *</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tahun (Opsional)</label>
            <input type="text" name="year" class="form-control" placeholder="Contoh: 2023">
        </div>
        <div class="form-group">
            <label>Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <div class="form-group">
            <label>Deskripsi (Opsional)</label>
            <textarea name="description" rows="4" class="form-control"></textarea>
        </div>
        <div style="margin-top: 2rem;">
            <button type="submit" class="btn">Simpan</button>
            <a href="{{ route('admin.achievements.index') }}" style="margin-left: 1rem; color: var(--text-muted);">Batal</a>
        </div>
    </form>
</div>
@endsection
