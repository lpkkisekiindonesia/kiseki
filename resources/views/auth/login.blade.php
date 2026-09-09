<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - LPK Kiseki Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body { background: var(--light-bg); display: flex; align-items: center; justify-content: center; height: 100vh; }
        .login-card { background: var(--white); padding: 3rem; border-radius: 20px; box-shadow: var(--shadow); width: 100%; max-width: 450px; text-align: center; }
        .login-card img { width: 80px; margin-bottom: 1.5rem; }
        .form-group { text-align: left; margin-bottom: 1.5rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--dark-bg); }
        .form-group input { width: 100%; padding: 0.8rem 1rem; border: 1px solid #ddd; border-radius: 10px; font-family: 'Poppins', sans-serif; }
        .form-group input:focus { outline: none; border-color: var(--primary-color); }
        .btn-login { width: 100%; margin-top: 1rem; }
        .error-message { color: #e74c3c; font-size: 0.85rem; margin-top: 0.5rem; display: block; }
    </style>
</head>
<body>

    <div class="login-card">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/Kiseki.png') }}" alt="Kiseki Logo">
        </a>
        <h2 style="margin-bottom: 2rem; color: var(--dark-bg);">Admin Panel</h2>
        
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-login">Masuk</button>
        </form>
    </div>

</body>
</html>
