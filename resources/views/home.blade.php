<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - GreenTech Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Rajdhani', sans-serif;
        }
        
        .font-display {
            font-family: 'Orbitron', monospace;
        }
        
        @keyframes glow-pulse {
            0%, 100% { opacity: 1; filter: drop-shadow(0 0 8px currentColor); }
            50% { opacity: 0.6; filter: drop-shadow(0 0 20px currentColor); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes leaf-sway {
            0%, 100% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
        }
        
        @keyframes leaf-float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-5px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }
        
        .glow-neon-green {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.5), 0 0 40px rgba(34, 197, 94, 0.3), inset 0 0 10px rgba(34, 197, 94, 0.2);
        }
        
        .glow-neon-blue {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5), 0 0 40px rgba(59, 130, 246, 0.3), inset 0 0 10px rgba(59, 130, 246, 0.2);
        }
        
        .glow-neon-pink {
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.5), 0 0 40px rgba(236, 72, 153, 0.3), inset 0 0 10px rgba(236, 72, 153, 0.2);
        }
        
        .glow-text-green {
            text-shadow: 0 0 10px rgba(34, 197, 94, 0.8), 0 0 20px rgba(34, 197, 94, 0.5);
        }
        
        .glow-text-blue {
            text-shadow: 0 0 10px rgba(59, 130, 246, 0.8), 0 0 20px rgba(59, 130, 246, 0.5);
        }
        
        .animate-glow {
            animation: glow-pulse 3s ease-in-out infinite;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-leaf {
            animation: leaf-sway 4s ease-in-out infinite;
        }
        
        .animate-leaf-float {
            animation: leaf-float 3s ease-in-out infinite;
        }
        
        .bg-nature-dark {
            background: 
                radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(236, 72, 153, 0.05) 0%, transparent 50%),
                linear-gradient(180deg, #0a0f0d 0%, #050a08 100%);
        }
        
        .bg-card-dark {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8) 0%, rgba(17, 24, 39, 0.9) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .product-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .product-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, rgba(34, 197, 94, 0), rgba(34, 197, 94, 0.3), rgba(34, 197, 94, 0));
            border-radius: 1rem;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        
        .product-card:hover::before {
            opacity: 1;
        }
        
        .product-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 0 30px rgba(34, 197, 94, 0.6), 0 20px 50px rgba(0, 0, 0, 0.6);
        }
        
        .product-card:hover .product-leaf {
            opacity: 1;
            transform: translateY(0);
        }
        
        .product-leaf {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .leaf-pattern {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(34, 197, 94, 0.03) 0%, transparent 50%);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-nature-dark min-h-screen text-gray-100">
    
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-20 left-10 text-green-500/10 animate-float" style="animation-delay: 0s;">
            <svg class="w-32 h-32 animate-leaf" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
            </svg>
        </div>
        <div class="absolute top-1/3 right-20 text-blue-500/10 animate-float" style="animation-delay: 2s;">
            <svg class="w-40 h-40 animate-leaf" style="animation-delay: 1s;" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,5 Q75,25 85,50 Q75,75 50,95 Q25,75 15,50 Q25,25 50,5 Z"/>
            </svg>
        </div>
        <div class="absolute bottom-20 left-1/4 text-pink-500/10 animate-float" style="animation-delay: 4s;">
            <svg class="w-36 h-36 animate-leaf" style="animation-delay: 2s;" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,15 Q65,35 75,50 Q65,65 50,85 Q35,65 25,50 Q35,35 50,15 Z"/>
            </svg>
        </div>
    </div>

    <div class="relative z-10">
        <!-- Header -->
        <header class="border-b border-green-500/20 bg-card-dark backdrop-blur-xl sticky top-0 z-40">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <svg class="w-10 h-10 text-green-500 animate-glow" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                                <circle cx="50" cy="50" r="15" fill="currentColor" class="text-blue-400"/>
                            </svg>
                        </div>
                        <h1 class="text-3xl font-display font-bold glow-text-green">GreenTech Solutions</h1>
                    </div>
                    
                    <nav class="hidden md:flex items-center space-x-6">
                        <a href="#" class="text-green-400 font-semibold glow-text-green border-b-2 border-green-400 pb-1">Shop</a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors font-medium">About</a>
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors font-medium">Solutions</a>
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors font-medium">Contact</a>
                    </nav>
                    
                    <div class="flex items-center space-x-4">
                        <button class="relative p-2 text-gray-400 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                        <button class="relative p-2 text-gray-400 hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-5 h-5 bg-pink-500 rounded-full text-xs flex items-center justify-center glow-neon-pink">3</span>
                        </button>
                        <a href="#" class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-500 rounded-lg font-semibold glow-neon-green hover-lift">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="container mx-auto px-6 py-12">
            <div class="text-center mb-12">
                <h2 class="text-5xl md:text-6xl font-display font-bold glow-text-green mb-4">
                    Future of Gardening
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Discover cutting-edge smart gardening solutions powered by AI and biotechnology
                </p>
            </div>
        </section>

        <!-- Filters and Search -->
        <section class="container mx-auto px-6 mb-8">
            <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                    <!-- Category Filters -->
                    <div class="flex flex-wrap gap-3">
                        <button class="px-5 py-2 rounded-full bg-green-500/20 text-green-400 font-semibold border-2 border-green-500 glow-neon-green">
                            All Products
                        </button>
                        <button class="px-5 py-2 rounded-full bg-gray-700/30 text-gray-400 font-semibold border border-gray-700 hover:border-blue-500 hover:text-blue-400 transition-all">
                            Smart Planters
                        </button>
                        <button class="px-5 py-2 rounded-full bg-gray-700/30 text-gray-400 font-semibold border border-gray-700 hover:border-pink-500 hover:text-pink-400 transition-all">
                            Seeds
                        </button>
                        <button class="px-5 py-2 rounded-full bg-gray-700/30 text-gray-400 font-semibold border border-gray-700 hover:border-green-500 hover:text-green-400 transition-all">
                            Sensors
                        </button>
                        <button class="px-5 py-2 rounded-full bg-gray-700/30 text-gray-400 font-semibold border border-gray-700 hover:border-blue-500 hover:text-blue-400 transition-all">
                            Automation
                        </button>
                    </div>
                    
                    <!-- Sort Dropdown -->
                    <select class="px-4 py-2 rounded-lg bg-gray-700/50 border border-green-500/30 text-gray-300 font-medium focus:outline-none focus:border-green-500 focus:ring-2 focus:ring-green-500/20">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Best Selling</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="container mx-auto px-6 pb-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <!-- Product Card 1 -->
                <div class="product-card bg-card-dark rounded-2xl overflow-hidden leaf-pattern">
                    <div class="relative overflow-hidden group">
                        <img 
                            src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=400&h=400&fit=crop" 
                            alt="Product" 
                            class="w-full h-64 object-cover"
                        />
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-500/90 text-white glow-neon-green">
                                In Stock
                            </span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <button class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-500 rounded-lg font-semibold glow-neon-green hover-lift">
                                Quick View
                            </button>
                        </div>
                        <!-- Floating Leaf on Hover -->
                        <div class="product-leaf absolute top-4 left-4">
                            <svg class="w-8 h-8 text-green-400/60 animate-leaf-float" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="mb-2">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                Smart Planters
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Bio-Luminescent Planter</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                            Self-sustaining ecosystem with integrated LED growth system
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold glow-text-green">$89.99</span>
                            <button class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition-all glow-neon-green">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card bg-card-dark rounded-2xl overflow-hidden leaf-pattern">
                    <div class="relative overflow-hidden group">
                        <img 
                            src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=400&h=400&fit=crop" 
                            alt="Product" 
                            class="w-full h-64 object-cover"
                        />
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-500/90 text-white glow-neon-green">
                                In Stock
                            </span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <button class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-500 rounded-lg font-semibold glow-neon-green hover-lift">
                                Quick View
                            </button>
                        </div>
                        <div class="product-leaf absolute top-4 left-4">
                            <svg class="w-8 h-8 text-blue-400/60 animate-leaf-float" style="animation-delay: 0.5s;" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="mb-2">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-pink-500/20 text-pink-400 border border-pink-500/30">
                                Seeds
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Quantum Seed Kit</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                            Genetically optimized seeds for accelerated growth
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold glow-text-blue">$24.99</span>
                            <button class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-all glow-neon-blue">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card bg-card-dark rounded-2xl overflow-hidden leaf-pattern">
                    <div class="relative overflow-hidden group">
                        <img 
                            src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=400&fit=crop" 
                            alt="Product" 
                            class="w-full h-64 object-cover"
                        />
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-yellow-500/90 text-white">
                                Low Stock
                            </span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <button class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-500 rounded-lg font-semibold glow-neon-green hover-lift">
                                Quick View
                            </button>
                        </div>
                        <div class="product-leaf absolute top-4 left-4">
                            <svg class="w-8 h-8 text-pink-400/60 animate-leaf-float" style="animation-delay: 1s;" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="mb-2">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-400 border border-green-500/30">
                                Sensors
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Hydro-Neural Sensor</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                            AI-powered soil and water monitoring system
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold glow-text-pink">$149.99</span>
                            <button class="p-2 rounded-lg bg-pink-500/20 text-pink-400 hover:bg-pink-500/30 transition-all glow-neon-pink">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card bg-card-dark rounded-2xl overflow-hidden leaf-pattern">
                    <div class="relative overflow-hidden group">
                        <img 
                            src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400&h=400&fit=crop" 
                            alt="Product" 
                            class="w-full h-64 object-cover"
                        />
                        <div class="absolute top-3 right-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-green-500/90 text-white glow-neon-green">
                                In Stock
                            </span>
                        </div>
                        <div class="absolute top-3 left-3">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-pink-500/90 text-white glow-neon-pink">
                                New
                            </span>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                            <button class="px-6 py-2 bg-gradient-to-r from-green-500 to-blue-500 rounded-lg font-semibold glow-neon-green hover-lift">
                                Quick View
                            </button>
                        </div>
                        <div class="product-leaf absolute top-4 left-1/2 -translate-x-1/2">
                            <svg class="w-8 h-8 text-green-400/60 animate-leaf-float" style="animation-delay: 1.5s;" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-5">
                        <div class="mb-2">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-400 border border-blue-500/30">
                                Automation
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Neural Garden Bot</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                            Autonomous gardening robot with machine learning
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold glow-text-green">$599.99</span>
                            <button class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition-all glow-neon-green">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Additional products would follow the same pattern -->
                <!-- Repeat Product Cards with different images and data -->
                
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="px-10 py-4 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl font-bold text-lg glow-neon-green hover-lift">
                    Load More Products
                </button>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-green-500/20 bg-card-dark backdrop-blur-xl mt-16">
            <div class="container mx-auto px-6 py-8">
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-3 mb-4">
                        <svg class="w-8 h-8 text-green-500 animate-glow" viewBox="0 0 100 100" fill="currentColor">
                            <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                            <circle cx="50" cy="50" r="15" fill="currentColor" class="text-blue-400"/>
                        </svg>
                        <span class="text-xl font-display font-bold glow-text-green">GreenTech Solutions</span>
                    </div>
                    <p class="text-gray-400 text-sm">© 2026 GreenTech Solutions. The Future of Sustainable Gardening.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>