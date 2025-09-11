<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Thailand - Your Tech Partner</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/app.css"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4E342E',    // cokelat tua
                        secondary: '#8D6E63',  // cokelat muda
                        accent: '#FF7043',     // oranye
                        cream: '#F5F5DC',      // krem
                    }
                }
            }
        }
    </script>
    
    <style>
        .hero-slider {
            background: linear-gradient(rgba(78, 52, 46, 0.8), rgba(78, 52, 46, 0.8));
        }
        .category-icon:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            box-shadow: 0 0 15px rgba(255, 112, 67, 0.3);
        }
    </style>
    
    <!-- Google Fonts - Press Start 2P -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFFFFF',    // putih
                        secondary: '#FF7043',  // oranye
                        accent: '#FF7043',     // oranye
                        cream: '#EAD8A4',      // putih
                    }
                }
            }
        }
    </script>
    
    <style>
        .pixel-border {
            border: 2px solid #FF7043;
            image-rendering: pixelated;
        }
        .pixel-button {
            @apply font-pixel text-sm py-2 px-4 pixel-border bg-secondary text-white hover:bg-secondary/90 transition-colors;
        }
        .pixel-card {
            @apply bg-primary pixel-border hover:shadow-lg transition-shadow;
        }
        .pixel-heading {
            @apply font-pixel text-2xl md:text-3xl text-secondary;
        }
        .pixel-ad {
            @apply w-full bg-primary pixel-border p-4 text-center;
        }
    </style>
</head>
<body class="bg-primary text-secondary">
    <!-- Header & Navbar -->
    <header class="bg-secondary shadow-lg fixed w-full top-0 z-50">
        <nav class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="/logo.png" alt="Toko Thailand" class="h-12">
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-primary hover:text-cream">Computer Set</a>
                    <a href="#" class="text-primary hover:text-cream">Hardware & Components</a>
                </div>

                <!-- Right Icons -->
                <div class="hidden md:flex items-center space-x-6">
                    <button class="text-primary hover:text-cream">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="text-cream hover:text-accent"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-cream hover:text-accent"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-cream hover:text-accent"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-cream hover:text-accent"><i class="fab fa-tiktok"></i></a>
                    </div>
                    <!-- User Icons -->
                    <div class="flex space-x-4">
                        <button class="text-primary hover:text-cream">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <button class="text-primary hover:text-cream">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                        <button class="text-primary hover:text-cream">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Language Selector -->
                    <select class="bg-primary text-accent border-cream rounded">
                        <option value="en">EN</option>
                        <option value="th">TH</option>
                    </select>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-cream hover:text-accent">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden mt-4">
                <div class="flex flex-col space-y-4">
                    <a href="#" class="text-cream hover:text-accent">Computer Set</a>
                    <a href="#" class="text-cream hover:text-accent">Hardware & Components</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Add padding to body to prevent content from hiding behind fixed header -->
    <div class="pt-[72px]">
        @yield('content')
    </div>
</body>
@include('partials.footer')
</body>
</html>