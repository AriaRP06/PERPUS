<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda | Perpustakaan Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
          colors: {
            primary: '#fb8500',
            secondary: '#023e8a',
            whiteSoft: '#f8f9fa',
            blueSoft: '#caf0f8',
          },
          backgroundImage: {
            softGradient: 'linear-gradient(to bottom right, #fdfcdc, #caf0f8)',
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="font-sans bg-gradient-to-br from-blue-50 via-white to-orange-100 text-secondary min-h-screen">

 <!-- Navbar -->
<nav class="fixed top-0 left-0 w-full backdrop-blur-md bg-white/80 shadow-md z-50 border-b border-blue-100">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-primary">📚 Perpustakaan Digital</h1>
    <div class="flex items-center space-x-6">
      <ul class="flex space-x-6 text-base font-medium">
        <li><a href="index.html" class="hover:text-primary transition">Beranda</a></li>
        <li><a href="#" class="hover:text-primary transition">Koleksi</a></li>
        <li><a href="#" class="hover:text-primary transition">Tentang</a></li>
        <li><a href="#" class="hover:text-primary transition">Kontak</a></li>
      </ul>
      <!-- Tombol Login -->
      <a href="login.php" class="bg-primary text-white px-4 py-2 rounded-full shadow hover:bg-orange-600 transition">
        Login
      </a>
      <!-- Tombol Daftar -->
      <a href="register.php" class="bg-secondary text-white px-4 py-2 rounded-full shadow hover:bg-blue-800 transition">
        Daftar
      </a>
    </div>
  </div>
</nav>

  <!-- Hero Section -->
  <section class="pt-32 pb-20 px-6 text-center">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
        Selamat Datang di <span class="text-primary">Perpustakaan Digital</span>
      </h2>
      <p class="text-lg text-gray-700 mb-8">
        Akses ribuan buku dan sumber belajar dari kenyamanan rumah Anda. Cepat, mudah, dan gratis untuk semua!
      </p>
      <a href="login.php" class="inline-block bg-primary text-white px-6 py-3 rounded-full text-lg shadow hover:bg-orange-600 transition duration-300">
        Mulai Sekarang
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm text-gray-500 bg-white/70 border-t border-blue-100">
    &copy; 2025 Perpustakaan Digital. Powered by AMC ✨.
  </footer>

</body>
</html>
