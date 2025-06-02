<nav x-data="{ open: false, profilOpen: false, pendidikanOpen: false, pendaftaranOpen: false, beritaOpen: false }" class="bg-green-800 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24 items-center">
            <!-- KIRI: Logo dan Judul -->
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-24 w-auto">
                <div class="leading-tight">
                    <h1 class="text-xl font-bold uppercase">Pondok Pesantren<br>Nurut Tauhid</h1>
                    <p class="text-sm text-white">Mondok, Ngaji, Sekolah</p>
                </div>
            </div>

            <!-- KANAN: Navigasi Desktop -->
            <div class="hidden md:flex gap-6 uppercase text-sm font-semibold items-center relative">
                <a href="{{ route('beranda') }}" class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition">Beranda</a>
                
                <!-- Profil dengan Dropdown -->
                <div @mouseleave="profilOpen = false" class="relative">
                    <button @mouseenter="profilOpen = true" @click="profilOpen = !profilOpen" 
                        class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition flex items-center gap-1">
                        PROFIL
                        <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="profilOpen" x-transition class="absolute bg-green-700 mt-1 rounded shadow-lg w-48 z-50"
                         @mouseenter="profilOpen = true" @mouseleave="profilOpen = false" style="display: none;">
                        <a href="{{ route('profil.visi') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Visi & Misi</a>
                        <a href="{{ route('profil.sejarah') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Sejarah Ponpes</a>
                        <a href="{{ route('profil.pengasuh') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Pengasuh, Asatidz & Staff</a>
                        <a href="{{ route('profil.struktur') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Struktur Organisasi</a>
                    </div>
                </div>

                <!-- Pendidikan dengan Dropdown -->
                <div @mouseleave="pendidikanOpen = false" class="relative">
                    <button @mouseenter="pendidikanOpen = true" @click="pendidikanOpen = !pendidikanOpen" 
                        class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition flex items-center gap-1">
                        PENDIDIKAN
                        <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="pendidikanOpen" x-transition class="absolute bg-green-700 mt-1 rounded shadow-lg w-48 z-50"
                         @mouseenter="pendidikanOpen = true" @mouseleave="pendidikanOpen = false" style="display: none;">
                        <a href="{{ route('pendidikan.program') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Program Pendidikan</a>
                        <a href="{{ route('pendidikan.ekstrakurikuler') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Ekstrakurikuler</a>
                        <a href="{{ route('pendidikan.fasilitas') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Fasilitas</a>
                        <a href="{{ route('pendidikan.kalender') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Kalender Kegiatan</a>
                    </div>
                </div>

                <!-- Pendaftaran dengan Dropdown -->
                <div @mouseleave="pendaftaranOpen = false" class="relative">
                    <button @mouseenter="pendaftaranOpen = true" @click="pendaftaranOpen = !pendaftaranOpen" 
                        class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition flex items-center gap-1">
                        PENDAFTARAN
                        <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="pendaftaranOpen" x-transition class="absolute bg-green-700 mt-1 rounded shadow-lg w-48 z-50"
                         @mouseenter="pendaftaranOpen = true" @mouseleave="pendaftaranOpen = false" style="display: none;">
                        <a href="{{ route('pendaftaran.informasi') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Informasi Umum Pendaftaran</a>
                        <a href="{{ route('pendaftaran.formulir') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Formulir Pendaftaran</a>
                        <a href="{{ route('pendaftaran.pembayaran') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">pembayaran Biaya</a>
                        <a href="{{ route('pendaftaran.administrasi') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Administrasi</a>
                    </div>
                </div>

                <!-- Berita & Pengumuman dengan Dropdown -->
                <div @mouseleave="beritaOpen = false" class="relative">
                    <button @mouseenter="beritaOpen = true" @click="beritaOpen = !beritaOpen" 
                        class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition flex items-center gap-1">
                        BERITA
                        <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="beritaOpen" x-transition class="absolute bg-green-700 mt-1 rounded shadow-lg w-48 z-50"
                         @mouseenter="beritaOpen = true" @mouseleave="beritaOpen = false" style="display: none;">
                        <a href="{{ route('berita.berita') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Berita</a>
                        <a href="{{ route('berita.pengumuman') }}" class="block px-4 py-2 hover:bg-green-700 hover:text-yellow-300 transition">Pengumuman</a>
                    </div>
                </div>
                <a href="{{ route('galeri') }}" class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition">Galeri</a>
                <a href="{{ route('kontak') }}" class="hover:text-yellow-300 hover:bg-green-700 px-3 py-2 rounded transition">Kontak</a>
            </div>

            <!-- HAMBURGER Mobile -->
            <div class="md:hidden flex items-center">
                <button @click="open = ! open" class="focus:outline-none text-white">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MENU MOBILE -->
    <div :class="{'block': open, 'hidden': ! open}" class="md:hidden bg-green-700 px-6 pb-6 pt-4 space-y-2 text-sm uppercase font-semibold">

        <a href="{{ route('beranda') }}" class="block py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition">Beranda</a>
        
        <!-- Profil dengan Submenu Collapsible -->
        <div x-data="{ submenuOpen: false }" class="space-y-1">
            <button @click="submenuOpen = !submenuOpen" class="w-full text-left py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition flex justify-between items-center">
                PROFIL
                <svg :class="{'transform rotate-180': submenuOpen}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="submenuOpen" x-transition class="pl-6 space-y-1" style="display: none;">
                <a href="{{ route('profil.visi') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Visi & Misi</a>
                <a href="{{ route('profil.sejarah') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Sejarah Ponpes</a>
                <a href="{{ route('profil.pengasuh') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Pengasuh, Asatidz & Staff</a>
                <a href="{{ route('profil.struktur') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Struktur Organisasi</a>
            </div>
        </div>

        <!-- Pendidikan dengan Submenu Collapsible -->
        <div x-data="{ submenuOpen: false }" class="space-y-1">
            <button @click="submenuOpen = !submenuOpen" class="w-full text-left py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition flex justify-between items-center">
                PENDIDIKAN
                <svg :class="{'transform rotate-180': submenuOpen}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="submenuOpen" x-transition class="pl-6 space-y-1" style="display: none;">
                <a href="{{ route('pendidikan.program') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Program Pendidikan</a>
                <a href="{{ route('pendidikan.ekstrakurikuler') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Ekstrakurikuler</a>
                <a href="{{ route('pendidikan.fasilitas') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Fasilitas</a>
                <a href="{{ route('pendidikan.kalender') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Kalender Kegiatan</a>
            </div>
        </div>

        <!-- Pendaftaran dengan Submenu Collapsible -->
        <div x-data="{ submenuOpen: false }" class="space-y-1">
            <button @click="submenuOpen = !submenuOpen" class="w-full text-left py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition flex justify-between items-center">
                PENDAFTARAN
                <svg :class="{'transform rotate-180': submenuOpen}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="submenuOpen" x-transition class="pl-6 space-y-1" style="display: none;">
                <a href="{{ route('pendaftaran.informasi') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Informasi Umum Pendaftaran</a>
                <a href="{{ route('pendaftaran.formulir') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Formulir Pendaftaran</a>
                <a href="{{ route('pendaftaran.pembayaran') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Pembayaran Biaya</a>
                <a href="{{ route('pendaftaran.administrasi') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Administrasi</a>
            </div>
        </div>
        <!-- Berita dengan Submenu Collapsible -->
        <div x-data="{ submenuOpen: false }" class="space-y-1">
            <button @click="submenuOpen = !submenuOpen" class="w-full text-left py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition flex justify-between items-center">
                BERITA
                <svg :class="{'transform rotate-180': submenuOpen}" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="submenuOpen" x-transition class="pl-6 space-y-1" style="display: none;">
                <a href="{{ route('berita.berita') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Berita</a>
                <a href="{{ route('berita.pengumuman') }}" class="block py-2 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Pengumuman</a>
                </div>
        <a href="{{ route('galeri') }}" class="block py-3 px-4 border-b border-green-700 rounded hover:bg-green-700 hover:text-yellow-300 transition">Galeri</a>
        <a href="{{ route('kontak') }}" class="block py-3 px-4 rounded hover:bg-green-700 hover:text-yellow-300 transition">Kontak</a>
    </div>
</nav>
