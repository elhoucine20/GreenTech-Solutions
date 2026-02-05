<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenShop - Buy Beautiful Plants Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        leaf: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        earth: {
                            50: '#fdfaf3',
                            100: '#f7f0e1',
                            200: '#ede0c8',
                            300: '#e0caaa',
                            400: '#d1b38c',
                            500: '#c29d6f',
                            600: '#a07d54',
                            700: '#7d6142',
                            800: '#5d4a35',
                            900: '#3e3228',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        .product-card {
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
        }
        
        .add-to-cart-btn {
            transition: all 0.3s ease;
        }
        
        .add-to-cart-btn:hover {
            transform: scale(1.05);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-leaf-50 via-white to-earth-50 min-h-screen">

    <!-- Top Banner -->
    <div class="bg-gradient-to-r from-leaf-600 to-leaf-700 text-white py-2 text-center text-sm font-semibold">
        🎉 Free Shipping on Orders Over $50 | Use Code: GREEN2024
    </div>

    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-lg border-b border-leaf-200 shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="bg-gradient-to-br from-leaf-500 to-leaf-700 p-3 rounded-2xl shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-leaf-900">GreenShop</h1>
                        <p class="text-xs text-earth-600">Plant Paradise</p>
                    </div>
                </div>
                
                <!-- Search Bar (Desktop) -->
                <div class="hidden md:flex flex-1 max-w-xl mx-8">
                    <div class="relative w-full">
                        <input 
                            type="text" 
                            placeholder="Search for plants, seeds, tools..." 
                            class="w-full px-5 py-3 pl-12 rounded-2xl border-2 border-leaf-200 focus:border-leaf-500 focus:ring-4 focus:ring-leaf-100 transition-all duration-200 outline-none">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-earth-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                
                <!-- Right Menu -->
                <div class="flex items-center gap-4">
                    <!-- Wishlist -->
                    <a href="#" class="relative p-3 hover:bg-leaf-50 rounded-xl transition group">
                        <svg class="w-6 h-6 text-earth-700 group-hover:text-leaf-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">2</span>
                    </a>
                    
                    <!-- Shopping Cart -->
                    <a href="#" class="relative p-3 hover:bg-leaf-50 rounded-xl transition group">
                        <svg class="w-6 h-6 text-earth-700 group-hover:text-leaf-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-leaf-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">5</span>
                    </a>
                    
                    <!-- User Account -->
                    <a href="#" class="hidden sm:flex items-center gap-2 px-5 py-3 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white rounded-xl transition shadow-lg shadow-leaf-500/30 font-semibold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Categories Bar -->
    <div class="bg-white border-b border-leaf-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-6 py-4 overflow-x-auto">
                <a href="#all" class="whitespace-nowrap px-5 py-2 bg-leaf-500 text-white font-semibold rounded-xl hover:bg-leaf-600 transition">
                    All Products
                </a>
                <a href="#plants" class="whitespace-nowrap px-5 py-2 bg-earth-100 text-earth-800 font-semibold rounded-xl hover:bg-earth-200 transition">
                    🌿 Indoor Plants
                </a>
                <a href="#outdoor" class="whitespace-nowrap px-5 py-2 bg-earth-100 text-earth-800 font-semibold rounded-xl hover:bg-earth-200 transition">
                    🌳 Outdoor Plants
                </a>
                <a href="#seeds" class="whitespace-nowrap px-5 py-2 bg-earth-100 text-earth-800 font-semibold rounded-xl hover:bg-earth-200 transition">
                    🌱 Seeds
                </a>
                <a href="#tools" class="whitespace-nowrap px-5 py-2 bg-earth-100 text-earth-800 font-semibold rounded-xl hover:bg-earth-200 transition">
                    🛠️ Tools
                </a>
                <a href="#pots" class="whitespace-nowrap px-5 py-2 bg-earth-100 text-earth-800 font-semibold rounded-xl hover:bg-earth-200 transition">
                    🪴 Pots & Planters
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-leaf-900 mb-2">Our Plant Collection</h2>
            <p class="text-earth-600">Browse our selection of beautiful plants for your home and garden</p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <!-- Product Card 1 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <!-- Image -->
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=500&h=400&fit=crop" 
                         alt="Monstera Deliciosa" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    
                    <!-- Wishlist Button -->
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    
                    <!-- Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full shadow-lg">Best Seller</span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-5">
                    <!-- Category -->
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌿 Indoor Plants</span>
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Monstera Deliciosa</h3>
                    
                    <!-- Description -->
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Perfect for brightening up any room with its stunning split leaves.</p>
                    
                    <!-- Rating -->
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(127)</span>
                    </div>
                    
                    <!-- Price & Button -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$39.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?w=500&h=400&fit=crop" 
                         alt="Fiddle Leaf Fig" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-red-500 text-white text-xs font-bold rounded-full shadow-lg">Sale -20%</span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌿 Indoor Plants</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Fiddle Leaf Fig</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">A statement plant with large, violin-shaped leaves.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(89)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$47.99</span>
                            <span class="text-sm text-earth-500 line-through ml-2">$59.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1509423350716-97f9360b4e09?w=500&h=400&fit=crop" 
                         alt="Snake Plant" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-blue-500 text-white text-xs font-bold rounded-full shadow-lg">New Arrival</span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌿 Indoor Plants</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Snake Plant</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Low-maintenance plant that purifies the air naturally.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(203)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$24.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=500&h=400&fit=crop" 
                         alt="Golden Pothos" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌿 Indoor Plants</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Golden Pothos</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Easy to care for trailing plant perfect for beginners.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(156)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$18.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1470058869958-2a77ade41c02?w=500&h=400&fit=crop" 
                         alt="Organic Seeds" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-green-600 text-white text-xs font-bold rounded-full shadow-lg">Organic</span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌱 Seeds</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Organic Seed Collection</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Premium organic seeds for your home garden.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(412)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$12.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=500&h=400&fit=crop" 
                         alt="Garden Tools" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🛠️ Tools</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Premium Garden Tool Set</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Complete set of essential gardening tools.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(278)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$34.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=500&h=400&fit=crop" 
                         alt="Ceramic Pot" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-purple-500 text-white text-xs font-bold rounded-full shadow-lg">Handmade</span>
                    </div>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🪴 Pots</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Handcrafted Ceramic Pot</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Beautiful artisan pot with drainage hole.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(95)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$28.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden border border-leaf-100">
                <div class="relative h-64 bg-gradient-to-br from-leaf-50 to-earth-50 overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=500&h=400&fit=crop" 
                         alt="Succulent Garden" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <button class="absolute top-3 right-3 p-2.5 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-leaf-500 hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <div class="p-5">
                    <div class="mb-2">
                        <span class="text-xs font-semibold text-leaf-600 uppercase">🌿 Indoor Plants</span>
                    </div>
                    <h3 class="text-lg font-bold text-leaf-900 mb-2">Succulent Garden Set</h3>
                    <p class="text-sm text-earth-600 mb-3 line-clamp-2">Assorted succulents in decorative arrangement.</p>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-sm text-earth-600 font-medium">(341)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-earth-800">$32.99</span>
                        </div>
                        <a href="#" class="add-to-cart-btn px-5 py-2.5 bg-gradient-to-r from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white font-bold rounded-xl shadow-lg shadow-leaf-500/30 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Add
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center gap-3 mt-12">
            <a href="#" class="px-4 py-2 bg-white border-2 border-leaf-200 text-earth-700 rounded-xl hover:bg-leaf-50 transition font-semibold">
                Previous
            </a>
            <a href="#" class="px-4 py-2 bg-leaf-500 text-white rounded-xl font-semibold">1</a>
            <a href="#" class="px-4 py-2 bg-white border-2 border-leaf-200 text-earth-700 rounded-xl hover:bg-leaf-50 transition font-semibold">2</a>
            <a href="#" class="px-4 py-2 bg-white border-2 border-leaf-200 text-earth-700 rounded-xl hover:bg-leaf-50 transition font-semibold">3</a>
            <a href="#" class="px-4 py-2 bg-white border-2 border-leaf-200 text-earth-700 rounded-xl hover:bg-leaf-50 transition font-semibold">
                Next
            </a>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-leaf-900 via-leaf-800 to-earth-900 text-white mt-20 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                
                <!-- About -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-white/10 backdrop-blur-md p-2 rounded-xl">
                            <svg class="w-8 h-8 text-leaf-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold">GreenShop</h3>
                    </div>
                    <p class="text-leaf-200 mb-6 leading-relaxed">Your trusted source for beautiful plants and gardening supplies.</p>
                    <div class="flex gap-3">
                        <a href="#" class="p-2 bg-white/10 hover:bg-white/20 rounded-lg transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="p-2 bg-white/10 hover:bg-white/20 rounded-lg transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                        <a href="#" class="p-2 bg-white/10 hover:bg-white/20 rounded-lg transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">FAQs</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Shipping Info</a></li>
                    </ul>
                </div>
                
                <!-- Categories -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Categories</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Indoor Plants</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Outdoor Plants</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Seeds</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Garden Tools</a></li>
                        <li><a href="#" class="text-leaf-200 hover:text-white transition">Pots & Planters</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-leaf-200 mb-4">Subscribe for plant care tips and exclusive offers!</p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white placeholder-leaf-300 focus:outline-none focus:border-leaf-400 transition">
                        <button type="submit" class="w-full px-4 py-3 bg-white text-leaf-900 font-bold rounded-xl hover:bg-leaf-100 transition">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-white/20 pt-8 text-center text-leaf-300">
                <p>&copy; 2024 GreenShop. All rights reserved. Made with 💚 for plant lovers.</p>
            </div>
        </div>
    </footer>

</body>

</html>