@extends('layouts.admin')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h2>Pesan Masuk (Kontak)</h2>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Pesan</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($contacts as $msg)
        <tr>
            <td><strong>{{ $msg->name }}</strong></td>
            <td><a href="mailto:{{ $msg->email }}">{{ $msg->email }}</a></td>
            <td>{{ $msg->subject ?? '-' }}</td>
            <td>{{ Str::limit($msg->message, 80) }}</td>
            <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
            <td>
                <form action="{{ route('admin.contacts.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: red; cursor: pointer; text-decoration: underline;">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center;">Belum ada pesan masuk.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
