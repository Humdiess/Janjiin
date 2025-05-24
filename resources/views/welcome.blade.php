<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janjiin - Aplikasi Booking Janji Temu</title>
    <meta name="description" content="Janjiin adalah aplikasi booking janji temu berbasis web yang dirancang simpel dan ramah pengguna. Booking layanan dengan cepat dan mudah.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-primary">Janjiin</h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#home" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition duration-300">Beranda</a>
                        <a href="#features" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition duration-300">Fitur</a>
                        <a href="#how-it-works" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition duration-300">Cara Kerja</a>
                        <a href="#contact" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition duration-300">Kontak</a>
                        <a href="{{ route('event.index') }}" class="bg-primary text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-secondary transition duration-300">Mulai Sekarang</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary focus:outline-none focus:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a href="#home" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
                <a href="#features" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Fitur</a>
                <a href="#how-it-works" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Cara Kerja</a>
                <a href="#contact" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Kontak</a>
                <a href="#" class="bg-primary text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-secondary">Mulai Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-16 bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div class="mb-8 lg:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Booking Janji Temu
                        <span class="text-primary">Jadi Mudah</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Janjiin adalah aplikasi booking janji temu berbasis web yang dirancang simpel dan ramah pengguna. 
                        Pilih layanan, tentukan tanggal, dan lakukan pemesanan dengan cepat dan mudah.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('event.index') }}" class="bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-secondary transition duration-300 text-center">
                            <i class="fas fa-calendar-plus mr-2"></i>
                            Buat Janji Sekarang
                        </a>
                        <a href="#features" class="border-2 border-primary text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-primary hover:text-white transition duration-300 text-center">
                            <i class="fas fa-play mr-2"></i>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition duration-500">
                        <div class="bg-primary rounded-lg p-6 mb-6">
                            <i class="fas fa-calendar-check text-white text-4xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Dashboard Booking</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <span class="text-gray-700">Janji Hari Ini</span>
                                <span class="bg-primary text-white px-3 py-1 rounded-full text-sm">5</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <span class="text-gray-700">Pending</span>
                                <span class="bg-accent text-white px-3 py-1 rounded-full text-sm">2</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <span class="text-gray-700">Selesai</span>
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Fitur Unggulan Janjiin
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dibangun dengan Laravel dan Filament Admin untuk memberikan pengalaman terbaik dalam mengelola janji temu
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Booking Real-time</h3>
                    <p class="text-gray-600">
                        Sistem booking real-time yang memungkinkan pengguna melihat ketersediaan waktu secara langsung dan melakukan pemesanan instant.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-user-friends text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Interface Ramah Pengguna</h3>
                    <p class="text-gray-600">
                        Desain yang simpel dan intuitif memudahkan pengguna dari berbagai kalangan untuk menggunakan aplikasi tanpa kesulitan.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Admin Panel Canggih</h3>
                    <p class="text-gray-600">
                        Powered by Filament Admin, memberikan panel administrasi yang powerful untuk mengelola semua aspek booking dengan mudah.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-bell text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Notifikasi Otomatis</h3>
                    <p class="text-gray-600">
                        Sistem notifikasi otomatis untuk mengingatkan pengguna tentang janji temu yang akan datang via email atau SMS.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Laporan & Analitik</h3>
                    <p class="text-gray-600">
                        Dashboard analitik lengkap untuk memantau performa booking, tingkat kepuasan pelanggan, dan insight bisnis lainnya.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-lg transition duration-300">
                    <div class="bg-primary rounded-lg w-16 h-16 flex items-center justify-center mb-6">
                        <i class="fas fa-mobile-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Responsive Design</h3>
                    <p class="text-gray-600">
                        Aplikasi yang fully responsive, dapat diakses dengan sempurna di desktop, tablet, maupun smartphone.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Cara Kerja Janjiin
                </h2>
                <p class="text-xl text-gray-600">
                    Hanya 3 langkah mudah untuk membuat janji temu
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Pilih Layanan</h3>
                    <p class="text-gray-600">
                        Pilih jenis layanan yang Anda butuhkan dari daftar layanan yang tersedia di platform kami.
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tentukan Waktu</h3>
                    <p class="text-gray-600">
                        Pilih tanggal dan waktu yang sesuai dengan jadwal Anda dari slot waktu yang tersedia.
                    </p>
                </div>

                <div class="text-center">
                    <div class="bg-primary rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-white text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Konfirmasi Booking</h3>
                    <p class="text-gray-600">
                        Isi data diri dan konfirmasi booking Anda. Notifikasi akan dikirim sebagai konfirmasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Siap Memulai dengan Janjiin?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan pengguna yang telah merasakan kemudahan booking janji temu dengan Janjiin
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('event.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-100 transition duration-300">
                    <i class="fas fa-rocket mr-2"></i>
                    Mulai Gratis Sekarang
                </a>
                <a href="#contact" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-primary transition duration-300">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Hubungi Kami
                </h2>
                <p class="text-xl text-gray-600">
                    Ada pertanyaan? Tim kami siap membantu Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-primary rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Email</p>
                                <p class="text-gray-600">info@janjiin.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-primary rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Telepon</p>
                                <p class="text-gray-600">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-primary rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Alamat</p>
                                <p class="text-gray-600">Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan email">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">Janjiin</h3>
                    <p class="text-gray-400 mb-6">
                        Aplikasi booking janji temu berbasis web yang dirancang simpel dan ramah pengguna. 
                        Dibangun dengan Laravel dan Filament Admin untuk pengalaman terbaik.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Produk</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Fitur</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Harga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Demo</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">API</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Dukungan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Dokumentasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tutorial</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2024 Janjiin. Semua hak cipta dilindungi. Dibuat dengan ❤️ menggunakan Laravel & Filament.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>