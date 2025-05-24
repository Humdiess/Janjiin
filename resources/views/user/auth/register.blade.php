<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Janjiin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Daftar Akun Baru</h1>
        <form action="{{ route('register.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block mb-1 font-medium">Nama Lengkap</label>
                <input type="text" name="name" id="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <div>
                <label for="email" class="block mb-1 font-medium">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <div>
                <label for="password" class="block mb-1 font-medium">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <div>
                <label for="password_confirmation" class="block mb-1 font-medium">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" />
            </div>
            <button type="submit" class="w-full bg-primary text-white py-2 rounded-lg hover:bg-secondary transition">Daftar</button>
        </form>
        <p class="mt-4 text-center text-gray-600">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-primary hover:underline">Login di sini</a>
        </p>
    </div>
</body>
</html>
