<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            
            <!-- Logo -->
            <div class="text-black text-2xl font-semibold">
                Brandage
            </div>

            <!-- Menu button for mobile -->
            <div class="lg:hidden">
                <button id="menuButton" class="text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Navbar links -->
            <div class="hidden lg:flex space-x-4">
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">Home</a>
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">Shop</a>
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">About</a>
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">Blog</a>
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">Contact</a>
                <a href="#" class="text-gray-700 hover:bg-gray-300 px-3 py-2 rounded font-bold">Pages</a>
            </div>

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
    </nav>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="lg:hidden fixed inset-0 bg-gray-800 bg-opacity-75 hidden z-50">
        <div class="flex justify-end p-4">
            <button id="closeButton" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <ul class="flex flex-col items-center space-y-6 text-white">
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">Home</a></li>
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">Shop</a></li>
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">About</a></li>
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">Blog</a></li>
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">Contact</a></li>
            <li><a href="#" class="py-2 px-4 text-lg font-semibold hover:bg-gray-600 transition rounded-md">Pages</a></li>
        </ul>

        <!-- User Actions (Mobile) -->
        <div class=" mt-6 pt-4 flex flex-col items-center space-y-4">
            <a href="/search" class="text-white hover:text-gray-600 text-xl">
                <i class="fas fa-search"></i> <!-- Ikon pencarian mobile -->
            </a>
            <a href="/cart" class="text-white hover:text-blue-600 text-xl">
                <i class="fas fa-shopping-cart"></i> <!-- Ikon belanja mobile -->
            </a>
            <a href="/wishlist" class="text-white hover:text-blue-600 text-xl">
                <i class="fas fa-heart"></i> <!-- Ikon hati mobile -->
            </a>
            <!-- Login/Register mobile link -->
            <a href="/login" class="block text-white hover:text-blue-600 text-lg font-medium">
                Login / Register
            </a>
        </div>
    </div>


    <script>
        // Toggle menu visibility
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeButton = document.getElementById('closeButton');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        closeButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    </script>

</body>
</html>
