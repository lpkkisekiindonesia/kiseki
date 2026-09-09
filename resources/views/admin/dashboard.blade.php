@extends('layouts.admin')

@section('content')
<div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow);">
    <h1 style="color: var(--dark-bg); margin-bottom: 1rem;">Selamat Datang, Admin</h1>
    <p style="color: var(--text-muted); font-size: 1.1rem;">Ini adalah dasbor kontrol Anda. Gunakan menu di sebelah kiri untuk mengelola konten Galeri Event, data Pencapaian, dan melihat pesan dari form Kontak.</p>
    
    <div class="grid" style="margin-top: 3rem;">
        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color);">
            <h3>Kelola Galeri</h3>
            <p style="color: var(--text-muted); margin: 1rem 0;">Unggah foto dokumentasi kegiatan terbaru LPK.</p>
            <a href="{{ route('admin.gallery.index') }}" class="btn" style="padding: 0.5rem 1rem;">Buka</a>
        </div>
        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color);">
            <h3>Kelola Pencapaian</h3>
            <p style="color: var(--text-muted); margin: 1rem 0;">Tambahkan penghargaan atau riwayat prestasi.</p>
            <a href="{{ route('admin.achievements.index') }}" class="btn" style="padding: 0.5rem 1rem;">Buka</a>
        </div>
        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color);">
            <h3>Kelola Berita</h3>
            <p style="color: var(--text-muted); margin: 1rem 0;">Kelola artikel berita terbaru.</p>
            <a href="{{ route('admin.articles.index') }}" class="btn" style="padding: 0.5rem 1rem;">Buka</a>
        </div>
        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color);">
            <h3>Data Pendaftaran</h3>
            <p style="color: var(--text-muted); margin: 1rem 0;">Lihat data calon peserta didik.</p>
            <a href="{{ route('admin.registrations.index') }}" class="btn" style="padding: 0.5rem 1rem;">Buka</a>
        </div>
        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary-color);">
            <h3>Pesan Kontak</h3>
            <p style="color: var(--text-muted); margin: 1rem 0;">Baca pesan pertanyaan dari pengunjung website.</p>
            <a href="{{ route('admin.contacts.index') }}" class="btn" style="padding: 0.5rem 1rem;">Buka</a>
        </div>
    </div>
</div>
@endsection
