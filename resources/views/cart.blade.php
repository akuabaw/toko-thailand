@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8 bg-gray-50">
    <h1 class="text-2xl font-bold mb-8 text-gray-800">Shopping Cart</h1>

    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- Daftar Produk (Kiri) -->
        <div class="md:col-span-8 space-y-4">
            @php
            $cartItems = [
                ['name' => 'Gaming Monitor', 'price' => '399.99', 'quantity' => 1, 'image' => '/image/monkeyHack.png'],
                ['name' => 'Gaming Mouse', 'price' => '89.99', 'quantity' => 2, 'image' => '/image/monkeyHack.png']
            ];
            @endphp

            @foreach($cartItems as $item)
            <div class="bg-white shadow-md rounded-xl p-4">
                <div class="flex items-center justify-between">
                    <button class="text-gray-400 hover:text-red-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <div class="flex items-center flex-1 mx-4">
                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-20 h-20 object-cover rounded">
                        <div class="ml-4 flex-1">
                            <h3 class="font-semibold text-gray-800">{{ $item['name'] }}</h3>
                            <p class="text-orange-500 font-bold">${{ $item['price'] }}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="bg-gray-200 hover:bg-gray-300 rounded px-2 py-1">-</button>
                            <input type="number" value="{{ $item['quantity'] }}" class="w-16 text-center border rounded-lg px-3 py-2">
                            <button class="bg-gray-200 hover:bg-gray-300 rounded px-2 py-1">+</button>
                        </div>
                        <div class="ml-4 text-orange-600 font-bold">
                            ${{ number_format($item['price'] * $item['quantity'], 2) }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Kupon -->
            <div class="flex gap-4 mt-6">
                <input type="text" placeholder="Coupon Code" class="flex-1 border rounded-lg px-3 py-2">
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold">
                    Apply Coupon
                </button>
            </div>
        </div>

        <!-- Cart Totals (Kanan) -->
        <div class="md:col-span-4">
            <div class="bg-white shadow-md rounded-xl p-6 sticky top-4">
                <h2 class="font-bold text-lg mb-4">Cart Totals</h2>
                
                <!-- Rincian -->
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold">$579.97</span>
                    </div>

                    <div class="border-t pt-4">
                        <p class="text-gray-600 mb-2">Shipping</p>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="shipping" class="form-radio text-orange-500" checked>
                                <span class="ml-2">Self Pickup</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="shipping" class="form-radio text-orange-500">
                                <span class="ml-2">Delivery</span>
                            </label>
                        </div>
                    </div>

                    <div class="text-sm text-gray-600">
                        Shipping to: Jl. Raya Bogor No. 123
                        <a href="#" class="text-orange-500 hover:underline ml-2">Change address</a>
                    </div>

                    <div class="flex justify-between border-t pt-4">
                        <span class="text-gray-600">VAT (10%)</span>
                        <span class="font-semibold">$57.99</span>
                    </div>

                    <div class="flex justify-between border-t pt-4">
                        <span class="text-lg font-bold">Total</span>
                        <span class="text-lg font-bold text-orange-600">$637.96</span>
                    </div>
                </div>

                <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 rounded-lg font-semibold mt-6">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>
</div>
@endsection