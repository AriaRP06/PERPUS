<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi | Perpustakaan Digital</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
          colors: {
            primary: '#fb8500', // Oren terang
            secondary: '#023e8a', // Biru tua
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-orange-100 flex items-center justify-center font-sans">

  <div class="bg-white/80 backdrop-blur-sm shadow-2xl rounded-2xl p-10 w-full max-w-md border border-blue-200">
    <h2 class="text-3xl font-bold text-center text-secondary mb-6">Registrasi</h2>

    <!-- Form Registrasi -->
    <form action="proses_register.php" method="POST" class="space-y-5" autocomplete="off">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input type="text" id="username" name="username" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
      </div>

      <div>
        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:outline-none">
      </div>

      <div>
        <button type="submit"
                class="w-full bg-primary text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition duration-300">
          Daftar
        </button>
      </div>
    </form>

    <div class="text-center mt-6">
      <a href="login.php" class="text-secondary hover:text-primary font-medium text-sm transition">
        ← Kembali ke Login
      </a>
    </div>
  </div>

</body>
</html>
