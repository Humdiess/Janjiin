<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Peserta - Janjiin</title>
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
                    <a href="create-event.html" class="text-gray-700 hover:text-primary px-3 py-2">Buat Event</a>
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
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Kelola Peserta</h1>
                    <p class="text-gray-600">Workshop Laravel untuk Pemula</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition duration-300">
                        <i class="fas fa-download mr-2"></i>
                        Export Data
                    </button>
                    <a href="manage-events.html" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats & Filters -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <!-- Stats -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-lg p-3 mr-4">
                        <i class="fas fa-users text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">45</p>
                        <p class="text-gray-600 text-sm">Total Peserta</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="bg-green-100 rounded-lg p-3 mr-4">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">42</p>
                        <p class="text-gray-600 text-sm">Terkonfirmasi</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="bg-yellow-100 rounded-lg p-3 mr-4">
                        <i class="fas fa-clock text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">3</p>
                        <p class="text-gray-600 text-sm">Pending</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex items-center">
                    <div class="bg-red-100 rounded-lg p-3 mr-4">
                        <i class="fas fa-user-check text-red-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">0</p>
                        <p class="text-gray-600 text-sm">Check-in</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters & Actions -->
        <div class="bg-white rounded-xl p-6 shadow-sm mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <div class="flex flex-col md:flex-row md:items-center space-y-4 md:space-y-0 md:space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari peserta..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <select class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option>Semua Status</option>
                        <option>Terkonfirmasi</option>
                        <option>Pending</option>
                        <option>Check-in</option>
                    </select>
                    <select class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option>Semua Level</option>
                        <option>Pemula</option>
                        <option>Menengah</option>
                        <option>Mahir</option>
                    </select>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-primary text-white px-4 py-2 rounded-lg font-medium hover:bg-secondary transition duration-300">
                        <i class="fas fa-envelope mr-2"></i>
                        Kirim Email
                    </button>
                    <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-50 transition duration-300">
                        <i class="fas fa-qrcode mr-2"></i>
                        Generate QR
                    </button>
                </div>
            </div>
        </div>

        <!-- Participants Table -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900">Daftar Peserta (45)</h3>
                    <div class="flex items-center space-x-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                            <span class="ml-2 text-sm text-gray-600">Pilih Semua</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Peserta</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Level</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Participant Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Avatar" class="w-10 h-10 rounded-full mr-4">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Ahmad Rizki</div>
                                        <div class="text-sm text-gray-500">Ticket: #JNJ-2024-001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">ahmad.rizki@email.com</div>
                                <div class="text-sm text-gray-500">+62 812-3456-7890</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    Pemula
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">20 Jan 2024</div>
                                <div class="text-sm text-gray-500">14:30</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Terkonfirmasi
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900" title="Kirim Email">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900" title="Generate QR">
                                        <i class="fas fa-qrcode"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Batalkan">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Participant Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Avatar" class="w-10 h-10 rounded-full mr-4">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Sari Dewi</div>
                                        <div class="text-sm text-gray-500">Ticket: #JNJ-2024-002</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">sari.dewi@email.com</div>
                                <div class="text-sm text-gray-500">+62 813-9876-5432</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-orange-100 text-orange-800">
                                    Menengah
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">21 Jan 2024</div>
                                <div class="text-sm text-gray-500">09:15</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Terkonfirmasi
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900" title="Kirim Email">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900" title="Generate QR">
                                        <i class="fas fa-qrcode"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Batalkan">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Participant Row 3 - Pending -->
                        <tr class="hover:bg-gray-50 opacity-75">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <img src="/placeholder.svg?height=40&width=40" alt="Avatar" class="w-10 h-10 rounded-full mr-4">
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Budi Santoso</div>
                                        <div class="text-sm text-gray-500">Ticket: #JNJ-2024-003</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">budi.santoso@email.com</div>
                                <div class="text-sm text-gray-500">+62 814-1234-5678</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    Pemula
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">24 Jan 2024</div>
                                <div class="text-sm text-gray-500">16:45</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <button class="text-green-600 hover:text-green-900" title="Approve">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" title="Tolak">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="bg-white px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">10</span> dari <span class="font-medium">45</span> peserta
                    </div>
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-2 text-gray-500 hover:text-primary">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-2 bg-primary text-white rounded-lg">1</button>
                        <button class="px-3 py-2 text-gray-700 hover:text-primary">2</button>
                        <button class="px-3 py-2 text-gray-700 hover:text-primary">3</button>
                        <button class="px-3 py-2 text-gray-500 hover:text-primary">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Participant Detail Modal -->
    <div id="participantModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl max-w-2xl w-full p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Detail Peserta</h3>
                    <button id="closeParticipantModal" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-3">Informasi Pribadi</h4>
                        <div class="space-y-2">
                            <div>
                                <span class="text-sm text-gray-600">Nama:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">Ahmad Rizki</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Email:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">ahmad.rizki@email.com</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Telepon:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">+62 812-3456-7890</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Level:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">Pemula</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-3">Informasi Pendaftaran</h4>
                        <div class="space-y-2">
                            <div>
                                <span class="text-sm text-gray-600">Ticket ID:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">#JNJ-2024-001</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Tanggal Daftar:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">20 Jan 2024, 14:30</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Status:</span>
                                <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 ml-2">
                                    Terkonfirmasi
                                </span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-600">Pembayaran:</span>
                                <span class="text-sm font-medium text-gray-900 ml-2">Rp 299.000 - Lunas</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex justify-end space-x-3">
                        <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50">
                            Kirim Email
                        </button>
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary">
                            Generate QR Code
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Participant detail modal
        document.querySelectorAll('.fa-eye').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('participantModal').classList.remove('hidden');
            });
        });

        document.getElementById('closeParticipantModal').addEventListener('click', function() {
            document.getElementById('participantModal').classList.add('hidden');
        });

        document.getElementById('participantModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });

        // Select all functionality
        document.querySelector('thead input[type="checkbox"]').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    </script>
</body>
</html>