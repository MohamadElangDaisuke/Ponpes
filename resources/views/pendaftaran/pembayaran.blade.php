<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Pembayaran Biaya Pendaftaran') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-8 lg:px-16 text-green-900">
        <h3 class="text-xl font-semibold mb-2">Rincian Biaya</h3>
        <ul class="list-disc pl-6 mb-4">
            <li>Biaya Pendaftaran: <span class="text-green-700 font-semibold">Rp 150.000</span></li>
            <li>Uang Pangkal: <span class="text-green-700 font-semibold">Rp 1.500.000</span></li>
            <li>Seragam dan Perlengkapan: <span class="text-green-700 font-semibold">Rp 750.000</span></li>
        </ul>

        <h3 class="text-xl font-semibold mb-2">Cara Pembayaran</h3>
        <ol class="list-decimal pl-6 mb-4">
            <li>Transfer ke <strong>BSI 123456789 a.n. Ponpes Nurut Tauhid</strong></li>
            <li>Simpan bukti transfer</li>
            <li>Upload bukti pembayaran di bawah ini</li>
        </ol>

        <form action="#" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div>
                <label class="block mb-2 font-semibold">Upload Bukti Pembayaran</label>
                <input type="file" name="bukti" class="w-full p-2 border border-green-400 rounded">
            </div>
            <button class="mt-4 bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded">
                Kirim Konfirmasi
            </button>
        </form>
    </div>
</x-app-layout>
