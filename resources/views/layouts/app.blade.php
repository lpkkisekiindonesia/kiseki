<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kiseki | LPK Jepang')</title>
    <meta name="description"
        content="Kiseki - Lembaga Pelatihan Kerja (LPK) Bahasa Jepang Profesional. Wujudkan mimpimu bekerja dan belajar di Jepang.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<body>

    <nav class="navbar">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo LPK Kiseki"
                style="height: 45px; width: 45px; border-radius: 50%; object-fit: cover;">
            LPK KISEKI <span>INDONESIA</span>
        </a>
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}">{{ __('Home') }}</a></li>
            <li><a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}">{{ __('Tentang Kami') }}</a></li>
            <li><a href="{{ route('programs') }}"
                    class="{{ request()->routeIs('programs') ? 'active' : '' }}">{{ __('Program') }}</a></li>
            <li><a href="{{ route('articles.index') }}"
                    class="{{ request()->routeIs('articles.*') ? 'active' : '' }}">{{ __('Berita') }}</a></li>
            <li><a href="{{ route('gallery') }}"
                    class="{{ request()->routeIs('gallery') ? 'active' : '' }}">{{ __('Galeri Event') }}</a></li>
            <li><a href="{{ route('achievements') }}"
                    class="{{ request()->routeIs('achievements') ? 'active' : '' }}">{{ __('Pencapaian') }}</a></li>
            <li><a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('Kontak') }}</a></li>
            <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}"
                    style="color: var(--accent-color); font-weight: bold;">{{ __('Pendaftaran') }}</a></li>
            <li style="margin-left: 1rem; display: flex; align-items: center;">
                <a href="{{ route('lang.switch', 'id') }}" style="padding: 0.2rem; display: flex; align-items: center;"
                    title="Bahasa Indonesia">
                    <img src="https://flagcdn.com/w40/id.png" width="24" alt="Indonesia"
                        style="border: 1px solid #ccc; border-radius: 3px;">
                </a>
            </li>
            <li style="display: flex; align-items: center;">
                <a href="{{ route('lang.switch', 'ja') }}" style="padding: 0.2rem; display: flex; align-items: center;"
                    title="日本語">
                    <img src="https://flagcdn.com/w40/jp.png" width="24" alt="Japan"
                        style="border: 1px solid #ccc; border-radius: 3px;">
                </a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div>
                <h3>LPK KISEKI INDONESIA</h3>
                <p>Membuka jalan masa depan cerah Anda di Jepang melalui pelatihan bahasa dan keterampilan profesional.
                </p>
            </div>
            <div>
                <h3>{{ __('Tautan Singkat') }}</h3>
                <p><a href="{{ route('about') }}">{{ __('Tentang Kami') }}</a></p>
                <p><a href="{{ route('programs') }}">{{ __('Program Pelatihan') }}</a></p>
                <p><a href="{{ route('gallery') }}">{{ __('Galeri') }}</a></p>
            </div>
            <div>
                <h3>{{ __('Kontak Kami') }}</h3>
                <p>{{ __('Email') }}: japan.edu.kiseki@gmail.com</p>
                <p>{{ __('Telepon') }}: +62 812 3456 7890</p>
                <p>{{ __('Alamat') }}: Jl. Sadang Luhur VI, Sekeloa, Kecamatan Coblong, Kota Bandung, Jawa Barat 40134
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} LPK KISEKI INDONESIA Jepang. All rights reserved.
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox"
        style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); align-items:center; justify-content:center;"
        onclick="closeLightbox(event)">
        <span
            style="position:absolute; top:20px; right:40px; color:white; font-size:40px; font-weight:bold; cursor:pointer;"
            onclick="document.getElementById('lightbox').style.display='none'">&times;</span>
        <div id="lightbox-content"
            style="max-width: 800px; width: 90%; max-height: 90vh; overflow-y: auto; background: transparent; border-radius: 10px; padding: 0; text-align: center; cursor: default;"
            onclick="event.stopPropagation()">
            <img id="lightbox-img" src=""
                style="max-width:100%; max-height:70vh; border-radius:10px; box-shadow:0 5px 25px rgba(0,0,0,0.5); display:none; margin: 0 auto;">
            <h3 id="lightbox-title"
                style="margin-top: 1rem; margin-bottom: 0.5rem; color: var(--dark-bg); font-size: 1.5rem; display: none;">
            </h3>
            <p id="lightbox-desc"
                style="color: #444; font-size: 1rem; line-height: 1.6; text-align: left; display: none;"></p>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6282311677114" target="_blank" class="floating-wa" title="Hubungi kami via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="35" height="35" fill="currentColor">
            <path
                d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
        </svg>
    </a>

    <script>
        function openLightbox(src, title = '', desc = '') {
            const img = document.getElementById('lightbox-img');
            const titleEl = document.getElementById('lightbox-title');
            const descEl = document.getElementById('lightbox-desc');
            const contentDiv = document.getElementById('lightbox-content');

            if (src) {
                img.src = src;
                img.style.display = 'block';
            } else {
                img.src = '';
                img.style.display = 'none';
            }

            if (title || desc) {
                contentDiv.style.background = 'white';
                contentDiv.style.padding = '2rem';
                img.style.boxShadow = 'none';
                img.style.maxHeight = '50vh';
            } else {
                contentDiv.style.background = 'transparent';
                contentDiv.style.padding = '0';
                img.style.boxShadow = '0 5px 25px rgba(0,0,0,0.5)';
                img.style.maxHeight = '90vh';
            }

            if (title) {
                titleEl.textContent = title;
                titleEl.style.display = 'block';
            } else {
                titleEl.style.display = 'none';
            }

            if (desc) {
                descEl.textContent = desc;
                descEl.style.display = 'block';
            } else {
                descEl.style.display = 'none';
            }

            document.getElementById('lightbox').style.display = 'flex';
        }

        function closeLightbox(e) {
            if (e.target.id === 'lightbox') {
                document.getElementById('lightbox').style.display = 'none';
            }
        }
    </script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });

        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            const navLinks = document.querySelector('.nav-links');
            const navbar = document.querySelector('.navbar');

            mobileMenu.addEventListener('click', function () {
                mobileMenu.classList.toggle('is-active');
                navLinks.classList.toggle('active');
            });

            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                    // Close the menu if we scroll back to top and we are on desktop
                    if (window.innerWidth > 1024 && mobileMenu.classList.contains('is-active')) {
                        mobileMenu.classList.remove('is-active');
                        navLinks.classList.remove('active');
                    }
                }
            });
        });
    </script>
</body>

</html>