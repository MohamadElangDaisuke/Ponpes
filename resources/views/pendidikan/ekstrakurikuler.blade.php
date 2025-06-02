<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Ekstrakurikuler') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-green-800 mb-6">Program Ekstrakurikuler</h2>

        <p class="mb-6 text-gray-700 leading-relaxed">
            Program ekstrakurikuler di Pondok Pesantren Nurut Tauhid dirancang untuk mengembangkan potensi dan bakat santri di luar kegiatan akademik dan keagamaan. Kegiatan ini bertujuan membentuk karakter, keterampilan sosial, serta fisik yang seimbang.
        </p>

        <div class="space-y-8">
            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Pramuka</h3>
                <p class="text-gray-700 leading-relaxed">
                    Kegiatan pramuka membantu santri mengembangkan jiwa kepemimpinan, kemandirian, dan kerja sama dalam tim melalui berbagai aktivitas di alam terbuka dan pelatihan kepramukaan.
                </p>
            </section>

            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Olahraga</h3>
                <p class="text-gray-700 leading-relaxed">
                    Berbagai cabang olahraga seperti sepak bola, futsal, dan voli disediakan untuk menjaga kebugaran dan membangun semangat sportifitas santri.
                </p>
            </section>

            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Seni & Budaya</h3>
                <p class="text-gray-700 leading-relaxed">
                    Santri dapat mengasah kreativitas dan apresiasi seni melalui kegiatan seperti hadroh, rebana, kaligrafi, dan teater Islami.
                </p>
            </section>

            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Pengembangan Kepemimpinan</h3>
                <p class="text-gray-700 leading-relaxed">
                    Program ini memberikan pelatihan soft skills seperti public speaking, manajemen waktu, dan pengambilan keputusan untuk membentuk karakter pemimpin masa depan.
                </p>
            </section>
        </div>
    </div>
</x-app-layout>