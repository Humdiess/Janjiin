<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Event - Janjiin</title>
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
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.html" class="text-2xl font-bold text-primary">Janjiin</a>
                    <span class="ml-4 text-sm text-gray-500">Event Maker</span>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="event-maker-dashboard.html" class="text-gray-700 hover:text-primary px-3 py-2">Dashboard</a>
                    <a href="manage-events.html" class="text-gray-700 hover:text-primary px-3 py-2">Kelola Event</a>
                    <div class="relative">
                        <button class="flex items-center text-gray-700 hover:text-primary px-3 py-2">
                            <img src="/placeholder.svg?height=32&width=32" alt="Profile" class="w-8 h-8 rounded-full mr-2">
                            <span>Event Organizer</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Buat Event Baru</h1>
                    <p class="text-gray-600">Isi detail event yang ingin kamu buat</p>
                </div>
                <div>
                    <a href="{{ route('event.index') }}" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <form class="space-y-8">
            <!-- Basic Information -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Informasi Dasar</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Event *</label>
                        <input type="text" name="nama_event" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kategori *</label>
                        <select name="kategori" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            <option value="">Pilih kategori</option>
                            <option>Workshop</option>
                            <option>Seminar</option>
                            <option>Conference</option>
                            <option>Meetup</option>
                            <option>Training</option>
                            <option>Webinar</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Format Event *</label>
                        <select name="format" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            <option value="">Pilih format</option>
                            <option>Offline</option>
                            <option>Online</option>
                            <option>Hybrid</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat *</label>
                        <textarea name="deskripsi_singkat" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap *</label>
                        <textarea name="deskripsi_lengkap" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Date & Time -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Tanggal & Waktu</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Mulai *</label>
                        <input type="date" name="tanggal_mulai" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Selesai *</label>
                        <input type="date" name="tanggal_selesai" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Mulai *</label>
                        <input type="time" name="waktu_mulai" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Selesai *</label>
                        <input type="time" name="waktu_selesai" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Zona Waktu *</label>
                        <select name="zona_waktu" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            <option>WIB (UTC+7)</option>
                            <option>WITA (UTC+8)</option>
                            <option>WIT (UTC+9)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Lokasi</h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Selesai *</label>
                        <input type="date" value="2024-01-25" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Mulai *</label>
                        <input type="time" value="09:00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Selesai *</label>
                        <input type="time" value="17:00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Zona Waktu *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option selected>WIB (UTC+7)</option>
                            <option>WITA (UTC+8)</option>
                            <option>WIT (UTC+9)</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Lokasi</h2>
                <div class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Venue</label>
                            <input type="text" value="Jakarta Convention Center" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kota *</label>
                            <input type="text" value="Jakarta" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap</label>
                        <textarea rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">Jl. Gatot Subroto, Senayan, Jakarta Pusat 10270</textarea>
                    </div>
                </div>
            </div>

            <!-- Pricing & Capacity -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Harga & Kapasitas</h2>
                    <div class="bg-red-50 border border-red-200 rounded-lg px-3 py-1">
                        <span class="text-red-700 text-sm">
                            <i class="fas fa-exclamation-circle mr-1"></i>
                            Hati-hati mengubah harga
                        </span>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipe Tiket *</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option>Gratis</option>
                            <option selected>Berbayar</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Harga Tiket</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-500">Rp</span>
                            <input type="number" value="299000" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kapasitas Maksimal *</label>
                        <input type="number" value="50" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        <p class="text-sm text-gray-500 mt-1">Saat ini: 45 peserta terdaftar</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Batas Pendaftaran</label>
                        <input type="datetime-local" value="2024-01-24T23:59" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                </div>
            </div>

            <!-- Current Media -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Media Saat Ini</h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
                        <div class="flex items-center space-x-4">
                            <img src="/placeholder.svg?height=100&width=150" alt="Current cover" class="w-32 h-20 rounded-lg object-cover border">
                            <div>
                                <p class="text-sm text-gray-600 mb-2">workshop-laravel-cover.jpg</p>
                                <button type="button" class="text-primary hover:text-secondary text-sm font-medium">
                                    <i class="fas fa-edit mr-1"></i>
                                    Ganti Gambar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar Baru</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-primary transition duration-300">
                            <i class="fas fa-cloud-upload-alt text-2xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600 text-sm">Drag & drop atau klik untuk upload</p>
                            <input type="file" class="hidden" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event Status -->
            <div class="bg-white rounded-xl p-8 shadow-sm">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Status Event</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                        <div>
                            <h4 class="font-medium text-green-900">Event Aktif</h4>
                            <p class="text-sm text-green-700">Event sedang berjalan dan menerima pendaftaran</p>
                        </div>
                        <div class="flex space-x-2">
                            <button type="button" class="bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-yellow-700">
                                <i class="fas fa-pause mr-1"></i>
                                Pause
                            </button>
                            <button type="button" class="bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-700">
                                <i class="fas fa-stop mr-1"></i>
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-between bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-center space-x-4">
                    <button type="button" class="text-gray-600 hover:text-gray-800 font-medium">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Draft
                    </button>
                    <a href="event-detail.html" class="text-primary hover:text-secondary font-medium">
                        <i class="fas fa-eye mr-2"></i>
                        Preview
                    </a>
                </div>
                <div class="flex space-x-4">
                    <a href="manage-events.html" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition duration-300">
                        Batal
                    </a>
                    <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-secondary transition duration-300">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Change Confirmation Modal -->
    <div id="changeModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl max-w-md w-full p-6">
                <div class="flex items-center mb-4">
                    <div class="bg-yellow-100 rounded-full p-3 mr-4">
                        <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Konfirmasi Perubahan</h3>
                </div>
                <p class="text-gray-600 mb-6">Perubahan ini akan mempengaruhi 45 peserta yang sudah mendaftar. Notifikasi akan dikirim ke semua peserta.</p>
                <div class="flex justify-end space-x-3">
                    <button id="cancelChange" class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Batal
                    </button>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-secondary">
                        Lanjutkan & Kirim Notifikasi
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show confirmation modal when form is submitted
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('changeModal').classList.remove('hidden');
        });

        document.getElementById('cancelChange').addEventListener('click', function() {
            document.getElementById('changeModal').classList.add('hidden');
        });

        // File upload functionality
        document.querySelectorAll('[type="file"]').forEach(input => {
            const container = input.closest('div');
            
            container.addEventListener('click', () => {
                input.click();
            });
            
            container.addEventListener('dragover', (e) => {
                e.preventDefault();
                container.classList.add('border-primary', 'bg-blue-50');
            });
            
            container.addEventListener('dragleave', () => {
                container.classList.remove('border-primary', 'bg-blue-50');
            });
            
            container.addEventListener('drop', (e) => {
                e.preventDefault();
                container.classList.remove('border-primary', 'bg-blue-50');
                const files = e.dataTransfer.files;
                input.files = files;
            });
        });
    </script>
</body>
</html>