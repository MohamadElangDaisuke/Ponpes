<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Program Unggulan') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-green-800 mb-6">Program Unggulan Ponpes Nurut Tauhid</h2>

        <div class="space-y-12">
            {{-- Tahfidzul Al-Qur’an --}}
            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Tahfidzul Al-Qur’an</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Pembelajaran Tahfidzul Al-Qur’an merupakan salah satu program unggulan di banyak pondok pesantren,
                    yang bertujuan mencetak generasi penghafal Al-Qur’an (huffaz) yang tidak hanya mampu menghafal
                    dengan baik, tetapi juga memahami, mengamalkan, dan menjaga kemurnian kalamullah dalam kehidupan
                    sehari-hari.
                </p>
                <img src="{{ asset('images/tahfidzul.png') }}" alt="Tahfidzul Al-Qur’an" class="rounded shadow w-full max-w-3xl">
            </section>

            {{-- Lughutul Arabiyah --}}
            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Lughutul Arabiyah</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Pembelajaran Lughutul Arabiyah (bahasa Arab) merupakan program penting di pondok pesantren yang
                    bertujuan membekali santri dengan kemampuan berbahasa Arab aktif dan pasif, sehingga mampu memahami
                    kitab-kitab turats (klasik), berkomunikasi dengan baik, serta memperkuat pemahaman terhadap
                    Al-Qur’an dan Hadis.
                </p>
                <img src="{{ asset('images/arabiyah.png') }}" alt="Lughutul Arabiyah" class="rounded shadow w-full max-w-3xl">
            </section>

            {{-- Kitab Kuning --}}
            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Bimbingan Membaca & Memahami Kitab Kuning</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Program Bimbingan Membaca dan Memahami Kitab Kuning merupakan salah satu ciri khas pendidikan di
                    pondok pesantren. Kitab kuning—yang ditulis dalam bahasa Arab gundul (tanpa harakat)—merupakan
                    warisan intelektual ulama klasik yang membahas berbagai disiplin ilmu Islam seperti fiqih, akidah,
                    tasawuf, tafsir, hadis, dan lainnya.
                </p>
                <img src="{{ asset('images/kitab_kuning.png') }}" alt="Kitab Kuning" class="rounded shadow w-full max-w-3xl">
            </section>

            {{-- Akhlak, Tasawwuf, dan Wirid --}}
            <section>
                <h3 class="text-2xl font-semibold text-green-700 mb-3">Bimbingan Akhlak, Tasawwuf, dan Wirid Harian</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Program Bimbingan Akhlak, Tasawwuf, dan Wirid Harian merupakan salah satu aspek penting dalam
                    pendidikan pondok pesantren yang berfungsi membentuk kepribadian santri yang berakhlakul karimah,
                    memiliki kesadaran spiritual yang tinggi, serta dekat dengan Allah SWT melalui amalan harian.
                </p>
                <img src="{{ asset('images/akhlak.png') }}" alt="Akhlak dan Wirid Harian" class="rounded shadow w-full max-w-3xl">
            </section>
        </div>
    </div>
</x-app-layout>
