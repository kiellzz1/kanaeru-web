<x-app-layout>
    <section class="max-w-4xl mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-blue-400 mb-8 text-center" data-aos="fade-up">
            Project Saya
        </h1>

        <div class="grid md:grid-cols-2 gap-6">
            <!-- Project 1 -->
            <div class="bg-gray-800 hover:bg-gray-700 hover:scale-105 transition transform duration-300 rounded-xl p-6 shadow-md hover:shadow-blue-500/30" data-aos="zoom-in-up" data-aos-delay="100">
                <h2 class="text-xl font-semibold text-blue-300 mb-2">Kanaeru Web</h2>
                <p class="text-gray-400 text-sm">
                    Website Laravel dark mode sebagai tempat belajar pribadi dengan fitur login, edit profil, animasi transisi, dan integrasi GitHub.
                </p>
                <p class="text-xs text-gray-500 mt-2">Teknologi: Laravel 12, Tailwind CSS, Alpine.js</p>
                <a href="https://github.com/kiellzz1/kanaeru-web" target="_blank" class="text-sm text-blue-400 hover:underline mt-3 inline-block">
                    Lihat di GitHub →
                </a>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-800 hover:bg-gray-700 hover:scale-105 transition transform duration-300 rounded-xl p-6 shadow-md hover:shadow-blue-500/30" data-aos="zoom-in-up" data-aos-delay="200">
                <h2 class="text-xl font-semibold text-blue-300 mb-2">Absensi Karyawan</h2>
                <p class="text-gray-400 text-sm">
                    Sistem internal untuk mencatat absensi, lembur, dan kegiatan jam kerja dengan fitur filter dan autentikasi.
                </p>
                <p class="text-xs text-gray-500 mt-2">Teknologi: Laravel, MySQL</p>
                <span class="text-sm text-gray-400 mt-3 inline-block">Private Project</span>
            </div>
        </div>
    </section>
</x-app-layout>
