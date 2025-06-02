<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Fasilitas') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-green-800 mb-6">Fasilitas Pondok Pesantren</h2>

        <p class="mb-6 text-gray-700 leading-relaxed">
            Untuk mendukung proses belajar mengajar serta kegiatan santri, Pondok Pesantren Nurut Tauhid menyediakan berbagai fasilitas yang nyaman dan memadai. Fasilitas ini bertujuan menunjang pembelajaran, ibadah, dan pengembangan diri santri secara optimal.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Masjid</h3>
                <p class="text-gray-700">Sebagai pusat ibadah dan kegiatan keagamaan santri sehari-hari.</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Asrama Santri</h3>
                <p class="text-gray-700">Tempat tinggal yang nyaman dan bersih untuk para santri dengan pengawasan pengasuh.</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Ruang Kelas</h3>
                <p class="text-gray-700">Ruang kelas yang memadai dengan perlengkapan pembelajaran modern.</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Perpustakaan</h3>
                <p class="text-gray-700">Tersedia koleksi buku keislaman, pelajaran umum, dan bacaan umum untuk mendukung literasi.</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Lapangan Olahraga</h3>
                <p class="text-gray-700">Lapangan untuk futsal, voli, dan kegiatan fisik lainnya.</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Laboratorium Komputer</h3>
                <p class="text-gray-700">Mendukung pembelajaran teknologi dan literasi digital bagi santri.</p>
            </div>
        </div>
    </div>
</x-app-layout>
