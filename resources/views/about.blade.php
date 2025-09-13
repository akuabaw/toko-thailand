@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="container max-w-6xl mx-auto px-6 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-orange-500 mb-2">About Toko Thailand</h1>
            <p class="text-gray-600 italic">Your Trusted Partner in Tech Solutions</p>
        </div>

        <!-- Our Story -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="order-2 md:order-1">
                <img src="/image/monkeyHack.png" alt="Our Story" class="w-full h-full object-cover rounded-xl shadow-md">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="text-orange-500 font-semibold text-2xl mb-4">Our Story</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Founded in 2024, Toko Thailand has been at the forefront of providing high-quality tech products to our customers. We believe in delivering not just products, but complete solutions that enhance your digital experience.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Our commitment to excellence and customer satisfaction has made us one of the most trusted tech retailers in Thailand. We continue to grow and innovate, bringing you the latest and best in technology.
                </p>
            </div>
        </div>

        <!-- Values -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <!-- Quality -->
            <div class="bg-white border shadow-sm rounded-xl p-6">
                <div class="text-orange-500 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-orange-500 font-bold mb-2">Quality</h3>
                <p class="text-gray-600 text-sm">We ensure only the best products reach our customers, with rigorous quality control and authentic sourcing.</p>
            </div>

            <!-- Service -->
            <div class="bg-white border shadow-sm rounded-xl p-6">
                <div class="text-orange-500 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-orange-500 font-bold mb-2">Service</h3>
                <p class="text-gray-600 text-sm">24/7 customer support to assist you with any inquiries or concerns about our products and services.</p>
            </div>

            <!-- Innovation -->
            <div class="bg-white border shadow-sm rounded-xl p-6">
                <div class="text-orange-500 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-orange-500 font-bold mb-2">Innovation</h3>
                <p class="text-gray-600 text-sm">Always staying ahead with the latest tech trends and bringing innovative solutions to our customers.</p>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-white shadow-md rounded-xl p-8 mt-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div class="space-y-4">
                    <div class="flex items-center text-orange-500">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-700">contact@tokothailand.com</span>
                    </div>
                    <div class="flex items-center text-orange-500">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-700">+66 123 456 789</span>
                    </div>
                </div>

                <!-- Contact Form -->
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Your Name" class="border rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" class="border rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <textarea placeholder="Your Message" rows="4" class="border rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                    </div>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-gray-200 mt-12">
        <div class="container max-w-6xl mx-auto px-6 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- About Us -->
                <div>
                    <h4 class="font-semibold mb-4">About Us</h4>
                    <p class="text-gray-600 text-sm">Toko Thailand is your trusted source for quality tech products and excellent customer service.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="#" class="hover:text-orange-500">Home</a></li>
                        <li><a href="#" class="hover:text-orange-500">Products</a></li>
                        <li><a href="#" class="hover:text-orange-500">About Us</a></li>
                        <li><a href="#" class="hover:text-orange-500">Contact</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li><a href="#" class="hover:text-orange-500">Facebook</a></li>
                        <li><a href="#" class="hover:text-orange-500">Twitter</a></li>
                        <li><a href="#" class="hover:text-orange-500">Instagram</a></li>
                        <li><a href="#" class="hover:text-orange-500">LinkedIn</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center text-sm text-gray-500 pt-8 border-t border-gray-200">
                <p>&copy; 2024 Toko Thailand. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
@endsection