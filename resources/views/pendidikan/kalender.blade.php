<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Kalender Kegiatan') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-green-800 mb-6">Kalender Kegiatan</h2>

        <p class="mb-6 text-gray-700 leading-relaxed">
            Berikut adalah jadwal kegiatan tahunan Pondok Pesantren Nurut Tauhid. Jadwal ini mencakup kegiatan akademik, keagamaan, dan kegiatan khusus santri.
        </p>

        <div class="overflow-x-auto">
            <table class="w-full border border-green-700 shadow-lg rounded-2xl overflow-hidden">
                <thead class="bg-green-700 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold uppercase border-r border-green-600">Tanggal</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold uppercase border-r border-green-600">Kegiatan</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="bg-white text-gray-800">
                    <tr class="border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">10 Januari 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Awal Semester Genap</td>
                        <td class="px-6 py-4">Pembukaan kegiatan belajar mengajar semester genap</td>
                    </tr>
                    <tr class="bg-gray-50 border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">15 Februari 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Lomba Tahfidz & Pidato</td>
                        <td class="px-6 py-4">Lomba internal antar santri</td>
                    </tr>
                    <tr class="border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">27 Maret 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Isra' Mi'raj</td>
                        <td class="px-6 py-4">Peringatan dan ceramah agama</td>
                    </tr>
                    <tr class="bg-gray-50 border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">10 April 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Ujian Tengah Semester</td>
                        <td class="px-6 py-4">Evaluasi akademik tengah semester</td>
                    </tr>
                    <tr class="border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">20 Mei 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Pentas Seni Santri</td>
                        <td class="px-6 py-4">Penampilan seni dan kreativitas santri</td>
                    </tr>
                    <tr class="bg-gray-50 border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">5 Juni 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Ujian Akhir Semester</td>
                        <td class="px-6 py-4">Penilaian akhir semester genap</td>
                    </tr>
                    <tr class="border-t border-green-200">
                        <td class="px-6 py-4 border-r border-green-100">25 Juni 2025</td>
                        <td class="px-6 py-4 border-r border-green-100">Libur Akhir Tahun</td>
                        <td class="px-6 py-4">Santri pulang ke rumah</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
