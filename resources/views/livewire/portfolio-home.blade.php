<div>
    <!-- Navigation -->
    <div class="container mx-auto py-4 mb-14">
        <div class="flex justify-between items-center px-4">
            <div class="logo font-bold text-blue-600 text-2xl">
                <span class="flex items-center">
                    <span class="text-blue-600">I</span>
                    <span class="bg-blue-600 w-2 h-2 rounded-full ml-1"></span>
                </span>
            </div>
            <div class="flex space-x-8">
                <a href="#home" class="nav-item text-blue-600 font-medium">Home</a>
                <a href="#about" class="nav-item text-gray-500">About</a>
                <a href="#education" class="nav-item text-gray-500">Education</a>
                <a href="#projects" class="nav-item text-gray-500">Projects</a>
                <a href="#services" class="nav-item text-gray-500">Services</a>
                <a href="#contact" class="nav-item text-gray-500">Contact</a>
            </div>
            <div>
                <a href="https://wa.me/{{ str_replace('+', '', $personalInfo->whatsapp_number) }}" target="_blank"
                    class="bg-blue-600 text-white px-6 py-2 rounded-full font-medium">Contact me</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <div id="home" class="container mx-auto mt-8 min-h-[70vh] flex items-center">
        <div class="flex flex-col md:flex-row px-4 relative w-full">
            <!-- Left Content -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0 pt-8">
                <div class="inline-block border border-blue-500 px-4 py-1 rounded-lg mb-4 items-center">
                    <span class="text-blue-600 font-medium">Hello !</span>
                </div>

                <h2 class="text-3xl font-bold mb-2">
                    I'm <span class="text-blue-600">{{ $personalInfo->name }}</span>,
                </h2>
                <h3 class="text-3xl font-bold leading-tight mb-6">
                    {!! nl2br(e($personalInfo->title)) !!}
                </h3>

                <p class="text-gray-500 mb-8 max-w-lg">
                    {{ $personalInfo->description }}
                </p>

                <div class="flex space-x-4">
                    <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-full font-medium">Hire Me</a>
                    <a href="https://wa.me/{{ str_replace('+', '', $personalInfo->whatsapp_number) }}" target="_blank"
                        class="border border-gray-300 px-6 py-3 rounded-full font-medium">WhatsApp</a>
                </div>
            </div>

            <!-- Right Content with Image and Floating Elements -->
            <div class="w-full md:w-1/2 relative">
                <div class="relative h-full flex items-center justify-center">
                    <!-- Enhanced abstract shapes as background - more aesthetic mix of circular and other shapes -->
                    <div class="absolute inset-0 flex justify-center items-center">
                        <!-- Large circular shape -->
                        <div class="absolute bg-blue-600 w-40 h-40 rounded-full opacity-60 -bottom-8 right-16"></div>

                        <!-- Square with rounded corners -->
                        <div
                            class="absolute bg-blue-500 w-28 h-28 rounded-2xl transform rotate-45 opacity-50 top-10 right-28">
                        </div>

                        <!-- Oval shape horizontal -->
                        <div class="absolute bg-blue-600 w-52 h-24 rounded-full opacity-40 bottom-22 left-12"></div>

                        <!-- Hexagon-like shape -->
                        <div
                            class="absolute bg-blue-600 w-36 h-36 rounded-xl transform rotate-12 opacity-50 bottom-20 left-0">
                        </div>

                        <!-- Small circular accent -->
                        <div class="absolute bg-blue-700 w-16 h-16 rounded-full opacity-70 top-16 left-16"></div>

                        <!-- Rectangle with very rounded corners -->
                        <div class="absolute bg-blue-500 w-40 h-20 rounded-3xl opacity-60 bottom-10 right-10"></div>
                    </div>

                    <!-- Person image -->
                    <div class="relative z-10 flex justify-center items-center w-full h-full">
                        @if ($personalInfo->profile_image)
                            <img wire:loading.class="opacity-50"
                                src="{{ asset('storage/' . $personalInfo->profile_image) }}" alt="Professional photo"
                                class="object-cover max-h-[400px] max-w-[320px] rounded-xl">
                        @else
                            <img wire:loading.class="opacity-50" src="https://via.placeholder.com/320x380"
                                alt="Professional photo" class="object-cover max-h-[400px] max-w-[320px] rounded-xl">
                        @endif
                    </div>

                    <!-- Floating skill badges -->
                    @if (is_array($personalInfo->skills) && count($personalInfo->skills) > 0)
                        <div class="absolute top-24 left-10 z-20">
                            <div
                                class="bg-blue-600 text-white px-5 py-2 rounded-lg transform -rotate-12 text-sm font-medium shadow-lg">
                                {{ $personalInfo->skills[0] }}
                            </div>
                        </div>

                        @if (count($personalInfo->skills) > 1)
                            <div class="absolute top-10 right-10 z-20">
                                <div
                                    class="bg-blue-600 text-white px-5 py-2 rounded-lg transform rotate-12 text-sm font-medium shadow-lg">
                                    {{ $personalInfo->skills[1] }}
                                </div>
                            </div>
                        @endif

                        @if (count($personalInfo->skills) > 2)
                            <div class="absolute bottom-10 left-10 z-20">
                                <div
                                    class="bg-blue-600 text-white px-5 py-2 rounded-lg transform -rotate-3 text-sm font-medium shadow-lg">
                                    {{ $personalInfo->skills[2] }}
                                </div>
                            </div>
                        @endif

                        @if (count($personalInfo->skills) > 3)
                            <div class="absolute bottom-32 right-20 z-20">
                                <div
                                    class="bg-blue-600 text-white px-5 py-2 rounded-lg transform rotate-6 text-sm font-medium shadow-lg">
                                    {{ $personalInfo->skills[3] }}
                                </div>
                            </div>
                        @endif

                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section Simple Bar -->
    <div class="bg-blue-600 py-6 mt-24 mb-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-center">
                @foreach ($services as $index => $service)
                    <div class="text-white font-medium py-3 flex items-center justify-center text-center">
                        <span>{{ $service->name }}</span>
                        @if ($index < count($services))
                            <span class="hidden lg:inline-block ml-6 text-xl">✦</span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- About Me Section -->
    <div id="about" class="container mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">About <span class="text-blue-600">Me</span></h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Learn more about my background and skills</p>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Left Side - Skills -->
            <div class="w-full md:w-1/2">
                <h3 class="text-2xl font-bold mb-4">My Skills</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
                    @foreach ($personalInfo->skills as $skill)
                        <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
                            <div class="bg-blue-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="font-medium">{{ $skill }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Right Side - Content -->
            <div class="w-full md:w-1/2 mt-8 md:mt-0">
                <h3 class="text-2xl font-bold mb-4">{{ $personalInfo->name }}</h3>
                <h4 class="text-blue-600 text-lg mb-4">{{ $personalInfo->title }}</h4>

                <p class="text-gray-600 mb-6">{{ $personalInfo->description }}</p>

                <div class="flex space-x-4 mt-6">
                    <a href="#contact"
                        class="bg-blue-600 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-700 transition">Get
                        In Touch</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Education Section -->
    <div id="education" class="container mx-auto py-16 px-4 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">My <span class="text-blue-600">Education</span></h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Courses I've taken during my academic journey</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-6">Politeknik Negeri Malang (Polinema)</h3>
                <h4 class="text-blue-600 text-lg mb-4">D-IV Teknik Informatika</h4>

                <p class="text-gray-600 mb-6">Mata Kuliah yang Telah Saya Tempuh:</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Pemrograman Berbasis Objek</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Basis Data</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Statistika Komputasi</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Jaringan Komputer</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Kecerdasan Buatan (AI)</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Analisis dan Perancangan Sistem Informasi (AOA)</span>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-gray-700">Manajemen Proyek</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div id="projects" class="container mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Project <span class="text-blue-600">Experience</span></h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Projects I've developed during my studies</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Project 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 h-3"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">DiscipLink</h3>
                    <p class="text-gray-600 mb-4">Sistem Informasi Tata Tertib Mahasiswa JTI Polinema. Sistem ini
                        mencakup fitur pelanggaran, sanksi, dan berita berbasis peran pengguna (admin,
                        dosen, mahasiswa).</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">PHP (Native)</span>
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">SQL</span>
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Web Development</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 h-3"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Sistem Kasir ( CASS )</h3>
                    <p class="text-gray-600 mb-4">Sistem kasir, merupakan sistem yang mendukung jalannya proses
                        transaksi penjualan dalam suatu perusahaan cafe. Fungsi utamanya adalah mengotomatisasi dan
                        menyederhanakan prosedur penjualan, pembayaran, dan pencatatan stok barang.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Java CLI</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 h-3"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">POS (Point of Sales)</h3>
                    <p class="text-gray-600 mb-4">Aplikasi manajemen penjualan sederhana, dengan fitur produk, user,
                        dan penjualan berbasis CRUD.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">PHP (Laravel)</span>
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">MySQL Laragon</span>
                        <span class="bg-blue-100 text-blue-600 text-xs px-3 py-1 rounded-full">Backend</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="container mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Get in <span class="text-blue-600">Touch</span></h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">Feel free to contact me for any project or
                collaboration
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Contact Info -->
                    <div class="w-full md:w-1/3">
                        <h3 class="text-xl font-bold mb-6">Contact Information</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-blue-100 w-10 h-10 rounded-lg flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">Email</h4>
                                    <p class="text-gray-600">{{ $personalInfo->email }}</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 w-10 h-10 rounded-lg flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-gray-800">WhatsApp</h4>
                                    <p class="text-gray-600">{{ $personalInfo->whatsapp_number }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="w-full md:w-2/3">
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-700 mb-2">Your
                                        Name</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                </div>

                                <div>
                                    <label for="email" class="block text-gray-700 mb-2">Your
                                        Email</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 mb-2">Your
                                    Message</label>
                                <textarea id="message" name="message" rows="5"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"></textarea>
                            </div>

                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-700 transition">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="font-bold text-2xl">
                        <span class="flex items-center">
                            <span>A</span>
                            <span class="bg-white w-2 h-2 rounded-full ml-1"></span>
                        </span>
                    </div>
                </div>

                <div class="text-center mb-4 md:mb-0">
                    <p>&copy; {{ date('Y') }} {{ $personalInfo->name }}. All rights reserved.</p>
                </div>

                <div>
                    <a href="https://wa.me/{{ str_replace('+', '', $personalInfo->whatsapp_number) }}"
                        target="_blank"
                        class="bg-white text-blue-600 px-4 py-2 rounded-full font-medium hover:bg-blue-100 transition">Contact
                        Me</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="fixed bottom-8 right-8 z-50 opacity-0 transition-opacity duration-300">
        <a href="#"
            class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </a>
    </div>

    <!-- JavaScript for Smooth Scrolling -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');

                // Scroll to top if href is "#"
                if (targetId === '#') {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                    return;
                }

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Show/hide back to top button
        const backToTopButton = document.querySelector('.fixed.bottom-8.right-8');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0');
                backToTopButton.classList.add('opacity-100');
            } else {
                backToTopButton.classList.remove('opacity-100');
                backToTopButton.classList.add('opacity-0');
            }
        });
    </script>
