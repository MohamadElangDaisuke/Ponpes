<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Formulir Pendaftaran') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-8 lg:px-16 text-green-900">
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block font-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full p-2 border border-green-400 rounded" required>
            </div>
            <div>
                <label class="block font-semibold">Tempat, Tanggal Lahir</label>
                <input type="text" name="ttl" class="w-full p-2 border border-green-400 rounded" required>
            </div>
            <div>
                <label class="block font-semibold">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full p-2 border border-green-400 rounded">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div>
                <label class="block font-semibold">Alamat Lengkap</label>
                <textarea name="alamat" class="w-full p-2 border border-green-400 rounded" rows="3"></textarea>
            </div>
            <div>
                <label class="block font-semibold">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="w-full p-2 border border-green-400 rounded">
            </div>
            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded">
                Kirim Pendaftaran
            </button>
        </form>

        <div class="mt-10">
            <h3 class="text-xl font-semibold mb-2">Preview & Status</h3>
            <ul class="list-disc pl-5 text-sm text-green-800">
                <li>Nama: Ahmad Zain</li>
                <li>Status: <span class="text-yellow-600 font-semibold">Menunggu Verifikasi</span></li>
            </ul>
        </div>
    </div>
</x-app-layout>
