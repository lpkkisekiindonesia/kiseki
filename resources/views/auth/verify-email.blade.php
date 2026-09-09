<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - LPK Kiseki Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { background: var(--light-bg); display: flex; align-items: center; justify-content: center; height: 100vh; }
        .verify-card { background: var(--white); padding: 3rem; border-radius: 20px; box-shadow: var(--shadow); width: 100%; max-width: 500px; text-align: center; }
        .verify-card img { width: 80px; margin-bottom: 1.5rem; }
        .message-box { padding: 1rem; border-radius: 10px; margin-bottom: 1.5rem; text-align: left; font-size: 0.95rem; line-height: 1.6; }
        .message-box.info { background-color: #f1f8ff; color: #0366d6; border: 1px solid #c8e1ff; }
        .message-box.success { background-color: #f0fdf4; color: #166534; border: 1px solid #bbf7d0; }
        .btn-resend { width: 100%; margin-bottom: 1rem; }
        .logout-link { color: var(--text-muted); font-size: 0.9rem; text-decoration: underline; }
    </style>
</head>
<body>

    <div class="verify-card">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/Kiseki.png') }}" alt="Kiseki Logo">
        </a>
        <h2 style="margin-bottom: 1.5rem; color: var(--dark-bg);">Verifikasi Email Anda</h2>
        
        @if (session('message'))
            <div class="message-box success">
                {{ session('message') }}
            </div>
        @else
            <div class="message-box info">
                Terima kasih telah mendaftar/login! Sebelum dapat mengakses dashboard admin, mohon verifikasi alamat email Anda dengan mengeklik tautan yang baru saja kami kirimkan ke email Anda. 
                <br><br>Jika Anda tidak menerima email tersebut, kami dapat mengirimkan ulang tautannya.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-resend">Kirim Ulang Email Verifikasi</button>
        </form>

        <form method="POST" action="{{ route('logout') }}" style="margin-top: 1rem;">
            @csrf
            <button type="submit" style="background:none; border:none; padding:0; cursor:pointer;" class="logout-link">Keluar Akun</button>
        </form>
    </div>

</body>
</html>
