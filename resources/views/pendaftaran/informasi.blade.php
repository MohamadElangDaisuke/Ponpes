<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Informasi Umum Pendaftaran') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-8 lg:px-16 text-green-900">
        <p class="mb-4">Pondok Pesantren Nurut Tauhid membuka pendaftaran santri baru setiap tahun ajaran baru.</p>
        <ul class="list-disc pl-6 mb-4 space-y-2">
            <li>Pendaftaran dibuka: <strong class="text-green-700">1 Mei 2025</strong></li>
            <li>Pendaftaran ditutup: <strong class="text-green-700">30 Juni 2025</strong></li>
            <li>Syarat Umum:
                <ul class="list-decimal pl-6 mt-2 text-green-800">
                    <li>Mengisi formulir pendaftaran</li>
                    <li>Fotokopi Akta Kelahiran dan Kartu Keluarga</li>
                    <li>Pas foto ukuran 3x4 sebanyak 3 lembar</li>
                    <li>Surat keterangan sehat dari dokter</li>
                </ul>
            </li>
            <li>Usia minimal: <strong class="text-green-700">11 tahun</strong> (lulusan SD atau sederajat)</li>
        </ul>
        <p>Untuk informasi lebih lanjut, silakan hubungi panitia pendaftaran di kontak yang tersedia.</p>
    </div>
</x-app-layout>
