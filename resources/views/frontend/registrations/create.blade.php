@extends('layouts.app')

@section('content')
<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?q=80&w=1788&auto=format&fit=crop');">
    <h1>{{ __('Formulir Pendaftaran') }}</h1>
</div>

<section style="background-color: var(--light-bg);">
    <div style="max-width: 700px; margin: 0 auto; background: var(--white); padding: 3rem; border-radius: 20px; box-shadow: var(--shadow);" data-aos="fade-up">
        
        <div style="text-align: center; margin-bottom: 2rem;">
            <h2 style="color: var(--dark-bg); font-size: 2rem;">{{ __('Daftar Sekarang') }}</h2>
            <p style="color: var(--text-muted);">{{ __('Bergabunglah dengan program pelatihan bahasa Jepang Kiseki dan wujudkan impian karir Anda.') }}</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>{{ __('Nama Lengkap') }}</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label>{{ __('Alamat Email') }}</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            
            <div class="form-group">
                <label>{{ __('Nomor Telepon / WhatsApp') }}</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            
            <div class="form-group">
                <label>{{ __('Program Pilihan') }}</label>
                <select name="program" class="form-control" required style="cursor: pointer;">
                    <option value="">-- {{ __('Pilih Program') }} --</option>
                    <option value="Reguler N5-N3" {{ old('program') == 'Reguler N5-N3' ? 'selected' : '' }}>{{ __('Program Reguler Bahasa Jepang (N5 - N3)') }}</option>
                    <option value="Pemagangan (Ginou Jisshu)" {{ old('program') == 'Pemagangan (Ginou Jisshu)' ? 'selected' : '' }}>{{ __('Program Pemagangan (Ginou Jisshu)') }}</option>
                    <option value="Tokutei Ginou (SSW)" {{ old('program') == 'Tokutei Ginou (SSW)' ? 'selected' : '' }}>{{ __('Program Tokutei Ginou (SSW)') }}</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>{{ __('Pesan Tambahan (Opsional)') }}</label>
                <textarea name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
            </div>

            <!-- CAPTCHA Anti-Spam -->
            <div class="form-group">
                <label>{{ __('Keamanan: Berapa hasil dari') }} {{ $num1 }} + {{ $num2 }}?</label>
                <input type="number" name="captcha" class="form-control" required placeholder="{{ __('Masukkan angka jawaban') }}">
            </div>
            
            <button type="submit" class="btn btn-submit" style="margin-top: 1rem; width: 100%;">{{ __('Kirim Pendaftaran') }}</button>
        </form>
    </div>
</section>
@endsection
