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
</body>
</html>