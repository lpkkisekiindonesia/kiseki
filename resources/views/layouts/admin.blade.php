<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - LPK KISEKI INDONESIA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background: #f4f6f9;
        }

        .alert {
            margin: 1rem 2rem;
        }
    </style>
</head>

<body>

    <div class="admin-layout">
        <aside class="admin-sidebar" style="display: flex; flex-direction: column; min-height: 100vh; position: sticky; top: 0; padding: 2rem 1.5rem;">
            <div style="text-align: center; margin-bottom: 2rem;">
                <h2 style="color:white; margin: 0; font-size: 1.5rem; letter-spacing: 1px;">Kiseki Admin</h2>
            </div>
            
            <nav style="flex: 1; display: flex; flex-direction: column; gap: 0.2rem;">
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.registrations.index') }}" class="{{ request()->routeIs('admin.registrations.*') ? 'active' : '' }}">Pendaftaran Baru</a>
                <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">Pesan Kontak</a>
                <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">Kelola Berita</a>
                <a href="{{ route('admin.gallery.index') }}" class="{{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">Kelola Galeri</a>
                <a href="{{ route('admin.achievements.index') }}" class="{{ request()->routeIs('admin.achievements.*') ? 'active' : '' }}">Kelola Pencapaian</a>
            </nav>
            
            <div style="margin-top: auto; padding-top: 2rem; border-top: 1px solid #333;">
                <a href="{{ route('home') }}" style="display: block; text-align: center; width:100%; padding: 0.8rem; background: rgba(255,255,255,0.05); color: #ccc; text-decoration: none; border-radius: 8px; margin-bottom: 0.8rem; font-size: 0.9rem;">&#8592; Ke Website Utama</a>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" style="width: 100%; padding: 0.8rem; background-color: #e74c3c; color: white; border: none; border-radius: 8px; cursor: pointer; font-weight: 500; font-size: 0.9rem; transition: 0.3s;">Logout Admin</button>
                </form>
            </div>
        </aside>

        <main class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </main>
    </div>

</body>

</html>