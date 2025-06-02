<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Galeri') }}
        </h2>
    </x-slot>

    <div class="p-6 space-y-8">
        <!-- Galeri Foto -->
        <section>
            <h3 class="text-green-700 text-2xl font-semibold mb-4">Foto Kegiatan</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Contoh foto -->
                <div class="overflow-hidden rounded shadow-lg border border-green-200">
                    <img src="{{ asset('images/kegiatan1.jpg') }}" alt="Kegiatan 1" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="p-2 text-green-900 font-medium text-center">Kegiatan Pengajian Santri</div>
                </div>
                <div class="overflow-hidden rounded shadow-lg border border-green-200">
                    <img src="{{ asset('images/kegiatan2.jpg') }}" alt="Kegiatan 2" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="p-2 text-green-900 font-medium text-center">Pelatihan Tahfidz Qur'an</div>
                </div>
                <div class="overflow-hidden rounded shadow-lg border border-green-200">
                    <img src="{{ asset('images/kegiatan3.jpg') }}" alt="Kegiatan 3" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="p-2 text-green-900 font-medium text-center">Kegiatan Outbond</div>
                </div>
                <!-- Tambahkan foto lainnya sesuai kebutuhan -->
            </div>
        </section>

        <!-- Galeri Video -->
        <section>
            <h3 class="text-green-700 text-2xl font-semibold mb-4">Video Kegiatan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Contoh video -->
                <div class="rounded shadow-lg border border-green-200 overflow-hidden">
                    <video controls class="w-full h-56">
                        <source src="{{ asset('videos/kegiatan1.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                    <div class="p-2 text-green-900 font-medium text-center">Video Ceramah Kajian Islam</div>
                </div>
                <div class="rounded shadow-lg border border-green-200 overflow-hidden">
                    <video controls class="w-full h-56">
                        <source src="{{ asset('videos/kegiatan2.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                    <div class="p-2 text-green-900 font-medium text-center">Video Kegiatan Outdoor</div>
                </div>
                <!-- Tambahkan video lainnya sesuai kebutuhan -->
            </div>
        </section>
    </div>
</x-app-layout>
