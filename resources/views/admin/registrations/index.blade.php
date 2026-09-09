@extends('layouts.admin')

@section('content')
        <h1 style="color: var(--dark-bg); font-size: 2rem; margin-bottom: 1rem;">Data Calon Siswa Terdaftar</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Waktu Daftar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Program</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrations as $reg)
                <tr>
                    <td>{{ $reg->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $reg->name }}</td>
                    <td>{{ $reg->email }}</td>
                    <td>{{ $reg->phone }}</td>
                    <td>{{ $reg->program }}</td>
                    <td>{{ $reg->message }}</td>
                    <td>
                        <form action="{{ route('admin.registrations.destroy', $reg->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus data pendaftaran ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem; background-color: #e3342f; border-color: #e3342f; color: white;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if(count($registrations) == 0)
                <tr>
                    <td colspan="7" style="text-align: center; color: var(--text-muted);">Belum ada data pendaftaran.</td>
                </tr>
                @endif
            </tbody>
        </table>
@endsection
