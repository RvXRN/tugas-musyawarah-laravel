<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forgot Password</title>
    <style>
        body {
            background-color: #1E293B; /* Dark background */
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full">
        <h1 class="text-2xl font-bold text-orange-500 mb-2">siMUDI</h1>
        <h2 class="text-xl font-semibold text-transparent bg-clip-text bg-gray-700 mb-4">Forgot password</h2>
        <p class="text-gray-600 mb-6">Masukkan email Anda untuk proses verifikasi, kami akan mengirimkan kode 4 digit ke email Anda.</p>
        
        <form action="#" method="POST">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan email" class="block w-full border border-gray-300 rounded-md p-2 mb-4" />
            <button type="submit" class="w-full bg-blue-600 text-white font-semibold p-2 rounded-md hover:bg-blue-700">LANJUT</button>
        </form>
        
        <p class="text-center mt-4">
            <a href="login.php" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
</body>
</html>