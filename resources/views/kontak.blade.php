<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Kontak Kami') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-6 bg-white rounded shadow-md space-y-8">
        <!-- Peta Lokasi -->
        <section>
            <h3 class="text-green-800 text-2xl font-semibold mb-4">Lokasi Ponpes</h3>
            <div class="w-full h-72 rounded overflow-hidden shadow-md">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1234567890123!2d110.123456789!3d-7.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a123456789abc%3A0x1234567890abcdef!2sPondok%20Pesantren%20Nurut%20Tauhid!5e0!3m2!1sen!2sid!4v1234567890123" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <!-- Informasi Kontak -->
        <section>
            <h3 class="text-green-800 text-2xl font-semibold mb-4">Informasi Kontak</h3>
            <p class="text-green-700 mb-2">
                <strong>Email:</strong> <a href="mailto:info@ponpesnurutauhid.id" class="underline hover:text-green-900">info@ponpesnurutauhid.id</a>
            </p>
            <p class="text-green-700 mb-2">
                <strong>Telepon:</strong> <a href="tel:+6281234567890" class="underline hover:text-green-900">+62 812-3456-7890</a>
            </p>
            <p class="text-green-700 mb-2">
                <strong>Alamat:</strong> Jl. Raya Kebalenan Baru No.123, Kabupaten XYZ, Jawa Tengah
            </p>
        </section>

        <!-- Form Kontak -->
        <section>
            <h3 class="text-green-800 text-2xl font-semibold mb-4">Kirim Pesan</h3>
            <form class="space-y-6">
                <div>
                    <label for="nama" class="block text-green-800 font-semibold mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" placeholder="Masukkan nama Anda"
                        class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
                </div>

                <div>
                    <label for="email" class="block text-green-800 font-semibold mb-1">Email</label>
                    <input type="email" id="email" placeholder="Masukkan email Anda"
                        class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
                </div>

                <div>
                    <label for="subjek" class="block text-green-800 font-semibold mb-1">Subjek</label>
                    <input type="text" id="subjek" placeholder="Subjek pesan"
                        class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500" />
                </div>

                <div>
                    <label for="pesan" class="block text-green-800 font-semibold mb-1">Pesan</label>
                    <textarea id="pesan" rows="5" placeholder="Tulis pesan Anda di sini..."
                        class="w-full border border-green-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                </div>

                <button type="submit"
                    class="bg-green-700 text-white px-6 py-2 rounded hover:bg-green-800 transition">
                    Kirim Pesan
                </button>
            </form>
        </section>
    </div>
</x-app-layout>
