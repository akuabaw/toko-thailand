@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <!-- Breadcrumb -->
    <nav class="text-gray-600 mb-8" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="/" class="hover:text-orange-500">Home</a>
                <svg class="w-3 h-3 mx-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"/>
                </svg>
            </li>
            <li class="flex items-center">
                <a href="/products" class="hover:text-orange-500">Products</a>
                <svg class="w-3 h-3 mx-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"/>
                </svg>
            </li>
            <li><span class="text-gray-800">Gaming Laptop ROG</span></li>
        </ol>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Product Images -->
        <div class="space-y-4">
            <div class="aspect-w-16 aspect-h-9 bg-white rounded-lg overflow-hidden">
                <img src="/image/monkeyHack.png" 
                     alt="Product Main Image" 
                     class="w-full h-full object-cover object-center">
            </div>
            <div class="grid grid-cols-4 gap-4">
                <button class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-white border-2 border-orange-500">
                    <img src="/image/monkeyHack.png" alt="Thumbnail 1" class="w-full h-full object-cover">
                </button>
                <button class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-white border-2 border-gray-200 hover:border-orange-500">
                    <img src="/image/monkeyHack.png" alt="Thumbnail 2" class="w-full h-full object-cover">
                </button>
                <button class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-white border-2 border-gray-200 hover:border-orange-500">
                    <img src="/image/monkeyHack.png" alt="Thumbnail 3" class="w-full h-full object-cover">
                </button>
                <button class="aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-white border-2 border-gray-200 hover:border-orange-500">
                    <img src="/image/monkeyHack.png" alt="Thumbnail 4" class="w-full h-full object-cover">
                </button>
            </div>
        </div>

        <!-- Product Info -->
        <div class="space-y-6">
            <div class="space-y-2">
                <h1 class="text-3xl font-bold text-gray-900">Gaming Laptop ROG</h1>
                <div class="flex items-center space-x-2">
                    <div class="flex text-yellow-400">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                    </div>
                    <span class="text-gray-600">(150 Reviews)</span>
                </div>
            </div>

            <div class="space-y-4">
                <p class="text-4xl font-bold text-orange-500">$1,499.99</p>
                <p class="text-gray-600">Stock: <span class="text-green-600 font-semibold">Available</span></p>
            </div>

            <div class="space-y-4 border-t border-b border-gray-200 py-6">
                <h3 class="text-lg font-semibold text-gray-900">Specifications:</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>AMD Ryzen™ 9 7945HX Mobile Processor</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>NVIDIA® GeForce RTX™ 4090 Laptop GPU</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>32GB DDR5-4800 RAM</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>2TB PCIe® 4.0 NVMe™ M.2 Performance SSD</span>
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center border border-gray-200 rounded-lg">
                        <button class="p-2 hover:bg-gray-100">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                        </button>
                        <input type="number" value="1" min="1" class="w-16 text-center border-0 focus:ring-0">
                        <button class="p-2 hover:bg-gray-100">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                    <button class="flex-1 bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition-colors">
                        Add to Cart
                    </button>
                </div>
                <button class="w-full border-2 border-orange-500 text-orange-500 py-3 px-6 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                    Buy Now
                </button>
            </div>

            <!-- Additional Info -->
            <div class="space-y-4 pt-6">
                <div class="flex items-center space-x-4 text-sm text-gray-600">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Ships in 24 Hours</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>1 Year Warranty</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Description -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Product Description</h2>
        <div class="prose max-w-none">
            <p class="text-gray-600 leading-relaxed">
                Experience unrivaled gaming performance with the ROG Gaming Laptop. Powered by the latest AMD Ryzen™ 9 processor 
                and NVIDIA® GeForce RTX™ 4090 graphics, this laptop delivers exceptional frame rates and stunning visuals. The 
                32GB DDR5 RAM ensures smooth multitasking, while the 2TB NVMe SSD provides lightning-fast storage access.
            </p>
            <p class="text-gray-600 leading-relaxed mt-4">
                The laptop features a premium build quality with an advanced cooling system to maintain optimal performance during 
                intense gaming sessions. The high-refresh-rate display delivers smooth, tear-free gameplay, while the RGB keyboard 
                adds a touch of personalization to your gaming setup.
            </p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="mt-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Related Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @for ($i = 0; $i < 4; $i++)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="/image/monkeyHack.png" alt="Related Product" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900">Gaming Mouse</h3>
                    <p class="text-orange-500 font-bold mt-2">$89.99</p>
                    <button class="w-full mt-4 bg-orange-500 text-white py-2 rounded-lg font-semibold hover:bg-orange-600 transition-colors">
                        View Details
                    </button>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection