<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Beranda') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <section class="relative bg-green-800 text-white py-12 mb-10">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Selamat Datang di Ponpes Nurut Tauhid</h1>
                <p class="text-lg">Mencetak Generasi Islami yang Berilmu, Beramal, dan Berakhlak Mulia</p>
            </div>
        </section>
        {{-- Slideshow Foto --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <div class="swiper rounded-lg overflow-hidden shadow-lg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('images/slide1.png') }}" alt="Foto 1" class="w-full h-64 md:h-96 object-cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/slide2.png') }}" alt="Foto 2" class="w-full h-64 md:h-96 object-cover" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('images/slide3.png') }}" alt="Foto 3" class="w-full h-64 md:h-96 object-cover" />
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev text-green-800"></div>
                <div class="swiper-button-next text-green-800"></div>
            </div>
        </section>

        {{-- Sambutan Pimpinan --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Sambutan Pimpinan</h2>
            <p class="text-gray-800 leading-relaxed">
                Bismillahirrahmanirrahim. Segala puji bagi Allah SWT atas segala limpahan rahmat-Nya. Ponpes Nurut Tauhid hadir untuk membina dan mendidik generasi Islam yang tangguh, berakhlak mulia, dan mampu menjadi teladan di masyarakat. Kami berkomitmen memberikan pendidikan terbaik berbasis Al-Qur'an dan Sunnah.
            </p>
        </section>

        {{-- Informasi Pendidikan --}}
        <section class="bg-white py-12 mb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-green-700 mb-6">Program Pendidikan</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <ul class="list-disc list-inside text-gray-800 space-y-2">
                        <li>Tahfidzul Qur’an Terstruktur</li>
                        <li>Pembelajaran Bahasa Arab & Studi Keislaman</li>
                        <li>Pembinaan Akhlak dan Bimbingan Karakter</li>
                        <li>Kegiatan Ekstrakurikuler Islami</li>
                        <li>Asrama Nyaman dan Aman</li>
                    </ul>
                    <div class="bg-gray-100 h-48 rounded flex items-center justify-center text-gray-400">
                        [Gambar/Flyer Program]
                    </div>
                </div>
            </div>
        </section>

        {{-- Berita Terkini --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <h2 class="text-2xl font-bold text-green-700 mb-6">Berita Terbaru</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <article class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-semibold text-green-700">Kegiatan Muhadhoroh Santri</h3>
                    <p class="text-sm text-gray-500">17 Mei 2025</p>
                    <p class="mt-2 text-gray-800">Latihan ceramah rutin sebagai upaya meningkatkan kemampuan dakwah dan public speaking santri.</p>
                </article>
                <article class="bg-white p-5 rounded shadow">
                    <h3 class="text-lg font-semibold text-green-700">Peringatan Isra Mi'raj</h3>
                    <p class="text-sm text-gray-500">12 Mei 2025</p>
                    <p class="mt-2 text-gray-800">Peringatan Isra Mi’raj diisi dengan tausiyah dan shalawat bersama seluruh civitas pesantren.</p>
                </article>
            </div>
        </section>

        {{-- Dokumentasi Kegiatan --}}
        <section class="bg-white py-12 mb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-green-700 mb-6">Galeri Kegiatan</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="bg-gray-200 h-32 rounded flex items-center justify-center text-gray-500">
                            [Foto {{ $i }}]
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="bg-green-800 text-white">
            <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col md:flex-row justify-between">
                <div class="mb-4 md:mb-0">
                    <h4 class="font-semibold text-lg">Ponpes Nurut Tauhid</h4>
                    <p>Jl. Kebangkitan Islam No. 123, Kota Contoh</p>
                    <p>Telp: 0812-3456-7890</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg">Sosial Media</h4>
                    <p>Instagram: @ponpesnurutauhid</p>
                    <p>Facebook: Ponpes Nurut Tauhid</p>
                </div>
            </div>
            <div class="bg-green-900 text-center py-2 text-sm">
                &copy; {{ date('Y') }} Ponpes Nurut Tauhid. All rights reserved.
            </div>
        </footer>
    </div>

    @push('styles')
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
        />
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
          const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
              delay: 4000,
              disableOnInteraction: false,
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
        </script>
    @endpush
</x-app-layout>
