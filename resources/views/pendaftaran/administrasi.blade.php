<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Administrasi Santri') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-8 lg:px-16 text-green-900">
        <h3 class="text-xl font-semibold mb-2">Jadwal Pembayaran</h3>
        <table class="table-auto w-full border text-sm mb-6">
            <thead class="bg-green-100 text-green-800">
                <tr>
                    <th class="border p-2">Bulan</th>
                    <th class="border p-2">Jatuh Tempo</th>
                    <th class="border p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-green-50">
                    <td class="border p-2">Juli 2025</td>
                    <td class="border p-2">10 Juli 2025</td>
                    <td class="border p-2 text-red-600">Belum Bayar</td>
                </tr>
                <tr>
                    <td class="border p-2">Agustus 2025</td>
                    <td class="border p-2">10 Agustus 2025</td>
                    <td class="border p-2 text-gray-500">Belum Tersedia</td>
                </tr>
            </tbody>
        </table>

        <h3 class="text-xl font-semibold mt-6 mb-2">Prosedur Administrasi</h3>
        <ul class="list-disc pl-6">
            <li>SPP dibayarkan setiap tanggal 10 setiap bulan</li>
            <li>Konfirmasi pembayaran dilakukan melalui admin atau sistem</li>
            <li>Pengurusan surat keterangan, izin, dll. dilakukan ke bagian TU</li>
        </ul>
    </div>
</x-app-layout>
