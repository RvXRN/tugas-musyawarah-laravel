<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Si MUDI - Home Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#001528] text-white min-h-screen flex flex-col">
  <!-- Nigga bar -->
  <nav class="flex justify-end space-x-8 p-6 font-semibold items-center">
    <a href="#" class="hover:underline">Tentang Kami</a>
    <a href="#" class="hover:underline">Contact</a>
    <a href="login.php" class="bg-blue-600 hover:bg-blue-700 transition rounded-md px-4 py-2 font-semibold">Login</a>
  </nav>
  <!-- Main square -->
  <main class="flex flex-1 justify-center items-center px-6">
    <section class="flex flex-col md:flex-row items-center gap-12 max-w-7xl w-full">
      <!-- logo -->
      <div class="bg-white rounded-full w-72 h-72 flex flex-col justify-center items-center p-0 shrink-0 shadow-lg relative">
        <img src="SiMUDIlogo.png" alt="Si MUDI official logo." 
          class="max-w-[70%] max-h-[70%] object-contain" onerror="this.onerror=null;this.src='https://placehold.co/280x280?text=Logo+Unavailable'"/>
      </div>
      <!-- text -->
      <div class="flex flex-col max-w-xl">
        <p class="text-xl md:text-2xl mb-3">Suaramu membawa perubahan</p>
        <h1 class="text-6xl md:text-7xl font-bold text-transparent bg-clip-text bg-orange-500 mb-6 select-none">Si MUDI</h1>
        <a href="register.php" class="self-start bg-blue-600 hover:bg-blue-700 transition rounded-md px-6 py-3 text-white font-semibold uppercase tracking-wide">Register</a>
      </div>
    </section>
  </main>
  <footer class="bg-blue-900 text-white py-8 px-6">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Contact Info -->
        <div>
            <h3 class="font-bold text-lg mb-2">Contact:</h3>
            <ul>
                <li class="mb-2">1800 9090 32</li>
                <li class="mb-2">1800 9000 64</li>
            </ul>

            <h3 class="font-bold text-lg mb-2">Helpline Number:</h3>
            <ul>
                <li class="mb-2">9090 1234 46</li>
                <li class="mb-2">9090 1234 47</li>
            </ul>

            <h3 class="font-bold text-lg mb-2">Email:</h3>
            <ul>
                <li class="mb-2">complaint@24jam.go.id</li>
                <li class="mb-2">info@karanganom.go.id</li>
            </ul>
        </div>

        <!-- Get In Section -->
        <div>
            <h3 class="font-bold text-lg mb-2">Get In</h3>
            <ul>
                <li class="mb-2"><a href="#" class="text-blue-400 hover:underline">Register</a></li>
                <li class="mb-2"><a href="#" class="text-blue-400 hover:underline">Login</a></li>
            </ul>
        </div>

        <!-- Know More Section -->
        <div>
            <h3 class="font-bold text-lg mb-2">Know More</h3>
            <ul>
                <li class="mb-2"><a href="#" class="text-blue-400 hover:underline">Features</a></li>
                <li class="mb-2"><a href="#" class="text-blue-400 hover:underline">About</a></li>
                <li class="mb-2"><a href="#" class="text-blue-400 hover:underline">Steps</a></li>
            </ul>
        </div>

        <!-- Follow Us Section -->
        <div>
            <h3 class="font-bold text-lg mb-2">Follow Us</h3>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-blue-400 hover:text-blue-500"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="#" class="text-blue-400 hover:text-blue-500"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="#" class="text-blue-400 hover:text-blue-500"><i class="fab fa-instagram"></i> Instagram</a></li>
            </ul>
        </div>

        <!-- Quick Feedback Section -->
        <div>
            <h3 class="font-bold text-lg mb-2">Quick Feedback:</h3>
            <textarea class="w-full p-2 mb-2 bg-gray-100 border rounded" placeholder="Your feedback..."></textarea>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Send</button>
        </div>
    </div>

    <div class="mt-6 text-center text-sm">
        <p>&copy; 2025 Ruwet Team. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
