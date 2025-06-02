<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Visi & Misi') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800 space-y-6">

                    <h3 class="text-2xl font-bold text-green-800">Visi</h3>
                    <p class="text-lg">
                        Menjadi lembaga pendidikan Islam yang unggul dalam membentuk generasi yang bertakwa, berilmu, berakhlak mulia, dan siap berdakwah di tengah masyarakat.
                    </p>

                    <h3 class="text-2xl font-bold text-green-800 mt-8">Misi</h3>
                    <ul class="list-disc list-inside text-lg space-y-2">
                        <li>Menyelenggarakan pendidikan berbasis Al-Qur’an dan As-Sunnah sesuai dengan manhaj Ahlus Sunnah wal Jamaah.</li>
                        <li>Membentuk pribadi santri yang disiplin, jujur, dan bertanggung jawab dalam kehidupan sehari-hari.</li>
                        <li>Mengembangkan potensi santri dalam bidang akademik, tahfidz, dan keterampilan dakwah.</li>
                        <li>Menanamkan semangat ukhuwah Islamiyah dan cinta tanah air.</li>
                        <li>Membangun lingkungan pesantren yang islami, bersih, dan tertib.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
