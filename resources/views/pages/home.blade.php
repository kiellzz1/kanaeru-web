<x-app-layout>
    <!-- Hero Section -->
    <section class="text-center my-16 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-400 mb-4" data-aos="fade-up">
            Let's get started with Kanaeru
        </h1>
        <p class="text-lg text-gray-400 max-w-xl mx-auto mb-6" data-aos="fade-up" data-aos-delay="100">
            Selamat datang di dashboard pribadi kamu. Jelajahi project, lihat profil, dan hubungi aku dengan mudah di sini.
        </p>
        <a href="{{ route('projects') }}"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md"
           data-aos="zoom-in" data-aos-delay="200">
            Explore Projects
        </a>
    </section>

    <!-- Informasi Grid -->
    <section class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto px-6 mb-16">
        <!-- Tentang Aku -->
        <a href="{{ route('about') }}"
           class="bg-gray-800 hover:bg-gray-700 transform transition-all duration-500 ease-out hover:scale-105 hover:-translate-y-1 rounded-xl p-6 flex flex-col items-center text-center shadow-md hover:shadow-blue-500/30"
           data-aos="zoom-in-up" data-aos-delay="300">
            <img src="https://img.icons8.com/ios-filled/50/60a5fa/about.png" class="w-10 h-10 mb-3" alt="About Icon">
            <h2 class="text-xl font-semibold text-blue-300 mb-2">Tentang Aku</h2>
            <p class="text-gray-400 text-sm">
                Ini adalah halaman tempat aku menyimpan dan menampilkan project pribadi sekaligus belajar Laravel.
            </p>
        </a>

        <!-- Hubungi Aku -->
        <a href="{{ route('contact') }}"
           class="bg-gray-800 hover:bg-gray-700 transform transition-all duration-500 ease-out hover:scale-105 hover:-translate-y-1 rounded-xl p-6 flex flex-col items-center text-center shadow-md hover:shadow-blue-500/30"
           data-aos="zoom-in-up" data-aos-delay="500">
            <img src="https://img.icons8.com/ios-filled/50/60a5fa/secured-letter.png" class="w-10 h-10 mb-3" alt="Contact Icon">
            <h2 class="text-xl font-semibold text-blue-300 mb-2">Hubungi Aku</h2>
            <p class="text-gray-400 text-sm">
                Kamu bisa menemukan aku di Instagram, Telegram, TikTok, dan GitHub untuk informasi lebih lanjut.
            </p>
        </a>
    </section>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-400 pb-4">
        &copy; {{ date('Y') }} Kanaeru Team. Inspired by crDroid & Evolution-X.
    </footer>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 120,
            easing: 'ease-in-out',
            duration: 600,
        });
    </script>
</x-app-layout>
