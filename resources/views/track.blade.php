@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="container max-w-4xl mx-auto p-6">
        <h1 class="text-xl md:text-2xl font-bold text-orange-500 mb-6">Track Your Order</h1>

        <!-- Input Order Number -->
        <div class="bg-white shadow-md rounded-xl p-4">
            <div class="flex gap-4">
                <input type="text" 
                       placeholder="Enter your order number" 
                       class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-colors">
                    Track
                </button>
            </div>
        </div>

        <!-- Tracking Progress -->
        <div class="bg-white shadow-md rounded-xl p-6 mt-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="font-semibold text-gray-800">Order #12345</h2>
                    <p class="text-sm text-gray-600">Placed on 12 March 2024</p>
                </div>
                <span class="bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full inline-block">
                    In Transit
                </span>
            </div>

            <!-- Timeline -->
            <div class="relative pl-8 space-y-8 before:content-[''] before:absolute before:left-4 before:top-2 before:h-[calc(100%-2rem)] before:w-0.5 before:bg-gray-200">
                <!-- Order Placed -->
                <div class="relative">
                    <div class="absolute left-0 top-2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-orange-500 bg-orange-500 text-white flex items-center justify-center">
                        <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3"/>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="font-semibold text-gray-700">Order Placed</h3>
                        <p class="text-sm text-gray-600">12 March 2024, 10:30 AM</p>
                        <p class="text-sm text-gray-600 mt-1">Your order has been confirmed and is being processed</p>
                    </div>
                </div>

                <!-- Processing -->
                <div class="relative">
                    <div class="absolute left-0 top-2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-orange-500 bg-orange-500 text-white flex items-center justify-center">
                        <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3"/>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="font-semibold text-gray-700">Processing</h3>
                        <p class="text-sm text-gray-600">12 March 2024, 2:15 PM</p>
                        <p class="text-sm text-gray-600 mt-1">Your order is being prepared for shipping</p>
                    </div>
                </div>

                <!-- In Transit -->
                <div class="relative">
                    <div class="absolute left-0 top-2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-orange-500 bg-orange-500 animate-pulse">
                    </div>
                    <div class="ml-6">
                        <h3 class="font-semibold text-gray-700">In Transit</h3>
                        <p class="text-sm text-gray-600">13 March 2024, 9:30 AM</p>
                        <p class="text-sm text-gray-600 mt-1">Your package is on its way to you</p>
                    </div>
                </div>

                <!-- Delivered -->
                <div class="relative">
                    <div class="absolute left-0 top-2 -translate-x-1/2 w-4 h-4 rounded-full border-2 border-gray-300 bg-gray-300">
                    </div>
                    <div class="ml-6">
                        <h3 class="font-semibold text-gray-400">Delivered</h3>
                        <p class="text-sm text-gray-400">Estimated: 15 March 2024</p>
                        <p class="text-sm text-gray-400 mt-1">Package will be delivered to your address</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection