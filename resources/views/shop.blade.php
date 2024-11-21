@extends('layouts.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="flex justify-between items-center">
        <div class="text-sm text-gray-500">
            <a href="/" class="hover:underline">Home ></a> <span>Shop</span>
        </div>
    </div>

    <!-- Product Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
        <div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="transition: transform 0.3s ease-out;">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/img1.png') }}" class="d-block w-100 rounded-md" alt="Product Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100 rounded-md" alt="Product Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/img3.jpg') }}" class="d-block w-100 rounded-md" alt="Product Image 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div>
                <div class="flex justify-start space-x-2 mt-4">
                        <img src="{{ asset('images/img1.png') }}" alt="Thumbnail 1" class="w-10 h-5 object-cover rounded-md cursor-pointer">
                        <img src="{{ asset('images/img2.jpg') }}" alt="Thumbnail 2" class="w-10 h-5 object-cover rounded-md cursor-pointer">
                        <img src="{{ asset('images/img3.jpg') }}" alt="Thumbnail 3" class="w-10 h-5 object-cover rounded-md cursor-pointer">
                </div>
            </div>
        </div>

        <!-- Product Details -->
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Floating Phone</h1>
            <div class="flex items-center my-4">
                <span class="text-yellow-500 text-xl">★★★★★</span>
                <span class="ml-2 text-sm text-gray-500">(10 Reviews)</span>
            </div>
            <p class="text-3xl font-bold text-gray-800">$1,139.33</p>
            <div class="flex items-center my-4">
                <span class="text-gray-500">Availability : </span>
                <span class="text-blue-500 ml-2">In Stock</span>
            </div>
            <p class="text-gray-600 mt-4">Met minim Mollie non desert Alamo est sit aliquyam dolor do met sent. RELIT official...</p>

            <!-- Divider -->
            <hr class="border-t border-gray-700 my-6">

            <!-- Color Options -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <span class="w-6 h-6 bg-green-500 rounded-full cursor-pointer"></span>
                    <span class="w-6 h-6 bg-blue-500 rounded-full cursor-pointer"></span>
                    <span class="w-6 h-6 bg-gray-800 rounded-full cursor-pointer"></span>
                    <span class="w-6 h-6 bg-orange-500 rounded-full cursor-pointer"></span>
                </div>
            </div>

            <!-- Button and Icons -->
            <div class="flex items-center mt-6 space-x-4">
                <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">
                    Select Options
                </button>
                <!-- Icons -->
                <div class="flex space-x-3 text-gray-500">
                    <i class="fas fa-heart cursor-pointer hover:text-red-500 me-2"></i> <!-- Heart Icon -->
                    <i class="fas fa-shopping-cart cursor-pointer hover:text-green-500 me-2"></i> <!-- Cart Icon -->
                    <i class="fas fa-eye cursor-pointer hover:text-blue-500 me-2"></i> <!-- Eye Icon -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bestseller Section -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Bestseller Products</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product 1 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product1.png') }}" alt="Product 1" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 1</h3>
                    <p class="text-sm text-gray-500">Category 1</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$20.00</span> <span class="text-green-500">$15.00</span></p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product2.png') }}" alt="Product 2" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 2</h3>
                    <p class="text-sm text-gray-500">Category 2</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$25.00</span> <span class="text-green-500">$18.00</span></p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product3.png') }}" alt="Product 3" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 3</h3>
                    <p class="text-sm text-gray-500">Category 3</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$30.00</span> <span class="text-green-500">$20.00</span></p>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product4.png') }}" alt="Product 4" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 4</h3>
                    <p class="text-sm text-gray-500">Category 4</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$40.00</span> <span class="text-green-500">$25.00</span></p>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product1.png') }}" alt="Product 5" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 5</h3>
                    <p class="text-sm text-gray-500">Category 1</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$20.00</span> <span class="text-green-500">$15.00</span></p>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product2.png') }}" alt="Product 6" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 6</h3>
                    <p class="text-sm text-gray-500">Category 2</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$25.00</span> <span class="text-green-500">$18.00</span></p>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product3.png') }}" alt="Product 7" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 7</h3>
                    <p class="text-sm text-gray-500">Category 3</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$30.00</span> <span class="text-green-500">$20.00</span></p>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="bg-white rounded-md shadow-md overflow-hidden">
                <img src="{{ asset('images/product4.png') }}" alt="Product 8" class="w-full h-52 object-cover">
                <div class="p-4">
                    <h3 class="text-sm font-semibold text-gray-800">Product 8</h3>
                    <p class="text-sm text-gray-500">Category 4</p>
                    <p class="mt-2 text-gray-800"><span class="line-through">$40.00</span> <span class="text-green-500">$25.00</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
