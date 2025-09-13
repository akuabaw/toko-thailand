@extends('layouts.app')

@section('content')
<div class="flex gap-6 p-6 bg-gray-50">
    <!-- Sidebar Kategori (1/5 width) -->
    <div class="w-1/5">
        <div class="bg-white rounded-xl shadow-md p-4">
            <h2 class="font-semibold mb-4">Kategori</h2>
            <ul>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-orange-100 text-gray-700">Laptop</a></li>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-orange-100 text-gray-700">Keyboard</a></li>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-orange-100 text-gray-700">Mouse</a></li>
                <li><a href="#" class="block py-2 px-3 rounded hover:bg-orange-100 text-gray-700">Aksesoris</a></li>
            </ul>
        </div>
    </div>

    <!-- Konten Daftar Produk (4/5 width) -->
    <div class="w-4/5">
        <h1 class="text-xl font-bold mb-6">Rekomendasi Produk</h1>
        
        <!-- Grid Produk -->
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Produk 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/image/monkeyHack.png" alt="Produk 1" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800">ROG Strix G15</h3>
                    <p class="text-orange-500 font-bold text-lg mt-2">Rp 15.999.000</p>
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        <span class="mr-1">⭐</span>
                        <span>4.8 (120)</span>
                    </div>
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg flex items-center justify-center gap-2 mt-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Produk 2 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/image/monkeyHack.png" alt="Produk 2" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800">ROG Zephyrus M16</h3>
                    <p class="text-orange-500 font-bold text-lg mt-2">Rp 18.999.000</p>
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        <span class="mr-1">⭐</span>
                        <span>4.9 (85)</span>
                    </div>
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg flex items-center justify-center gap-2 mt-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Produk 3 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/image/monkeyHack.png" alt="Produk 3" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800">ROG Flow X13</h3>
                    <p class="text-orange-500 font-bold text-lg mt-2">Rp 16.999.000</p>
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        <span class="mr-1">⭐</span>
                        <span>4.7 (95)</span>
                    </div>
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg flex items-center justify-center gap-2 mt-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Beli Sekarang
                    </button>
                </div>
            </div>

            <!-- Produk 4 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <img src="/image/monkeyHack.png" alt="Produk 4" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800">ROG Strix Scar 18</h3>
                    <p class="text-orange-500 font-bold text-lg mt-2">Rp 21.999.000</p>
                    <div class="flex items-center text-sm text-gray-500 mt-2">
                        <span class="mr-1">⭐</span>
                        <span>4.9 (150)</span>
                    </div>
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg flex items-center justify-center gap-2 mt-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        Beli Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection