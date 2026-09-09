@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="page-header" style="background-image: linear-gradient(rgba(26, 26, 26, 0.8), rgba(26, 26, 26, 0.8)), url('https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=2070&auto=format&fit=crop');">
    <h1>{{ app()->getLocale() == 'ja' ? 'お問い合わせ' : 'Hubungi Kami' }}</h1>
</div>

<section style="background-color: white; padding: 4rem 0;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">
        
        <!-- Kolom Informasi & Peta -->
        <div data-aos="fade-right">
            <h2 style="color: var(--dark-bg); margin-bottom: 1.5rem;">{{ app()->getLocale() == 'ja' ? '連絡先情報' : 'Informasi Kontak' }}</h2>
            <p style="color: #666; margin-bottom: 2rem; line-height: 1.6;">
                {{ app()->getLocale() == 'ja' ? 'プログラムに関するご質問やご相談がございましたら、お気軽にお問い合わせください。' : 'Ada pertanyaan mengenai program kami atau ingin berkonsultasi? Silakan hubungi kami melalui informasi di bawah ini.' }}
            </p>

            <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
                <i class="fas fa-map-marker-alt" style="color: var(--primary-color); font-size: 1.5rem; margin-top: 0.2rem;"></i>
                <div>
                    <strong style="display: block; margin-bottom: 0.3rem;">{{ app()->getLocale() == 'ja' ? '住所' : 'Alamat' }}</strong>
                    <span style="color: #555;">Jl. Sadang Luhur VI, Sekeloa, Kecamatan Coblong, Kota Bandung, Jawa Barat 40134</span>
                </div>
            </div>

            <div style="margin-bottom: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
                <i class="fas fa-phone-alt" style="color: var(--primary-color); font-size: 1.5rem; margin-top: 0.2rem;"></i>
                <div>
                    <strong style="display: block; margin-bottom: 0.3rem;">{{ app()->getLocale() == 'ja' ? '電話番号' : 'Telepon' }}</strong>
                    <span style="color: #555;">+62 812 3456 7890</span>
                </div>
            </div>

            <div style="margin-bottom: 2rem; display: flex; align-items: flex-start; gap: 1rem;">
                <i class="fas fa-envelope" style="color: var(--primary-color); font-size: 1.5rem; margin-top: 0.2rem;"></i>
                <div>
                    <strong style="display: block; margin-bottom: 0.3rem;">{{ app()->getLocale() == 'ja' ? 'メール' : 'Email' }}</strong>
                    <span style="color: #555;">japan.edu.kiseki@gmail.com</span>
                </div>
            </div>

            <div style="margin-bottom: 2.5rem;">
                <strong style="display: block; margin-bottom: 1rem;">{{ app()->getLocale() == 'ja' ? 'ソーシャルメディア' : 'Media Sosial' }}</strong>
                <div style="display: flex; gap: 1rem;">
                    <a href="https://instagram.com/kiseki.indonesia" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 45px; height: 45px; background-color: #f0f0f0; border-radius: 50%; color: #E1306C; text-decoration: none; transition: 0.3s; font-size: 1.5rem;" onmouseover="this.style.background='#E1306C'; this.style.color='white'" onmouseout="this.style.background='#f0f0f0'; this.style.color='#E1306C'">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/company/kiseki-indonesia" target="_blank" style="display: flex; align-items: center; justify-content: center; width: 45px; height: 45px; background-color: #f0f0f0; border-radius: 50%; color: #0077B5; text-decoration: none; transition: 0.3s; font-size: 1.5rem;" onmouseover="this.style.background='#0077B5'; this.style.color='white'" onmouseout="this.style.background='#f0f0f0'; this.style.color='#0077B5'">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- Google Maps -->
            <div style="border-radius: 12px; overflow: hidden; box-shadow: var(--shadow);">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0250917631317!2d107.61664157499623!3d-6.887600893111956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6fbc622b7d5%3A0xbcc0e1fc83769c02!2sJl.%20Sadang%20Luhur%20VI%2C%20Sekeloa%2C%20Kecamatan%20Coblong%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040134!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" width="100%" height="300" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Kolom Form Pesan -->
        <div data-aos="fade-left">
            <div style="background: var(--light-bg); padding: 3rem; border-radius: 12px; box-shadow: var(--shadow); height: 100%; box-sizing: border-box;">
                <h2 style="color: var(--dark-bg); margin-bottom: 2rem;">{{ app()->getLocale() == 'ja' ? 'メッセージを送る' : 'Tinggalkan Pesan' }}</h2>
                
                @if(session('success'))
                    <div class="alert alert-success" style="margin-bottom: 2rem; background-color: #d4edda; color: #155724; padding: 1rem; border-radius: 8px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" style="max-width: 100%;">
                    @csrf
                    <div class="form-group" style="margin-bottom: 1.5rem; text-align: left;">
                        <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">{{ app()->getLocale() == 'ja' ? '氏名' : 'Nama Lengkap' }}</label>
                        <input type="text" name="name" id="name" style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-family: inherit;" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 1.5rem; text-align: left;">
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">{{ app()->getLocale() == 'ja' ? 'メールアドレス' : 'Alamat Email' }}</label>
                        <input type="email" name="email" id="email" style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-family: inherit;" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 1.5rem; text-align: left;">
                        <label for="subject" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">{{ app()->getLocale() == 'ja' ? '件名' : 'Subjek / Keperluan' }}</label>
                        <input type="text" name="subject" id="subject" style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-family: inherit;">
                    </div>
                    <div class="form-group" style="margin-bottom: 2rem; text-align: left;">
                        <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">{{ app()->getLocale() == 'ja' ? 'メッセージ' : 'Pesan Anda' }}</label>
                        <textarea name="message" id="message" rows="5" style="width: 100%; padding: 0.8rem; border: 1px solid #ccc; border-radius: 8px; font-family: inherit;" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%; padding: 1rem; border-radius: 8px; font-size: 1.1rem; border: none; cursor: pointer; transition: 0.3s; background-color: var(--primary-color); color: white;" onmouseover="this.style.backgroundColor='var(--primary-hover)'" onmouseout="this.style.backgroundColor='var(--primary-color)'">{{ app()->getLocale() == 'ja' ? '送信する' : 'Kirim Pesan' }}</button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    @media (max-width: 900px) {
        div[style*="grid-template-columns"] {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }
    }
</style>
@endsection
