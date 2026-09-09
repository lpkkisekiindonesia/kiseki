@extends('layouts.admin')

@section('content')
<div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow); max-width: 600px;">
    <h2 style="margin-bottom: 2rem;">Tambah Foto Galeri</h2>
    
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Event (Opsional)</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal Event (Opsional)</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label>File Gambar *</label>
            <input type="file" name="image" class="form-control" required accept="image/*">
        </div>
        <div style="margin-top: 2rem;">
            <button type="submit" class="btn">Simpan</button>
            <a href="{{ route('admin.gallery.index') }}" style="margin-left: 1rem; color: var(--text-muted);">Batal</a>
        </div>
    </form>
</div>
@endsection
