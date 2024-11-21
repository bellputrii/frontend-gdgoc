<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menambahkan CDN FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @yield('head')
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold text-black" style="text-decoration: none;">Bandage</a>

            <!-- Mobile Menu Button -->
            <button id="menu-button" class="block lg:hidden focus:outline-none text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Navbar Links (Desktop Menu) -->
            <nav id="navbar" class="md:flex md:items-center md:justify-between space-x-6">
                <a href="/" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Home</a>
                <a href="/shop" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Shop</a>
                <a href="/about" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">About</a>
                <a href="/blog" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Blog</a>
                <a href="/contact" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Contact</a>
                <a href="/pages" class="text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Pages</a>
            </nav>

            <!-- User Actions (Desktop) -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="/search" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-search text-lg"></i> <!-- Ikon pencarian -->
                </a>
                <a href="/cart" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-shopping-cart text-lg"></i> <!-- Ikon belanja -->
                </a>
                <a href="/wishlist" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-heart text-lg"></i> <!-- Ikon hati -->
                </a>
                <!-- Login/Register link -->
                <a href="/login" class="text-gray-700 hover:text-blue-600 font-medium" style="text-decoration: none;">
                    Login / Register
                </a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="lg:hidden bg-white p-4 hidden space-y-3">
            <a href="/" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Home</a>
            <a href="/shop" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Shop</a>
            <a href="/about" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">About</a>
            <a href="/blog" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Blog</a>
            <a href="/contact" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Contact</a>
            <a href="/pages" class="block text-gray-700 font-medium hover:text-blue-600 hover:bg-gray-100 rounded-md px-3 py-2 transition" style="text-decoration: none;">Pages</a>
            <div class="border-t mt-4 pt-3 flex space-x-4">
                <a href="/search" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-search text-xl"></i> <!-- Ikon pencarian mobile -->
                </a>
                <a href="/cart" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-shopping-cart text-xl"></i> <!-- Ikon belanja mobile -->
                </a>
                <a href="/wishlist" class="text-gray-700 hover:text-blue-600" style="text-decoration: none;">
                    <i class="fas fa-heart text-xl"></i> <!-- Ikon hati mobile -->
                </a>
                <!-- Login/Register mobile link -->
                <a href="/login" class="block text-gray-700 hover:text-blue-600 font-medium" style="text-decoration: none;">
                    Login / Register
                </a>
            </div>
        </nav>
    </header>

    <script>
        // JavaScript untuk toggle menu responsif
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>