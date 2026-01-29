<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - GreenTech Solutions</title>
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
        
        .glow-text-pink {
            text-shadow: 0 0 10px rgba(236, 72, 153, 0.8), 0 0 20px rgba(236, 72, 153, 0.5);
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
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(34, 197, 94, 0.6), 0 10px 40px rgba(0, 0, 0, 0.5);
        }
        
        .leaf-pattern {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(34, 197, 94, 0.03) 0%, transparent 50%);
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
        <header class="border-b border-green-500/20 bg-card-dark backdrop-blur-xl">
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
                    
                    <nav class="flex items-center space-x-6">
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors font-medium">Dashboard</a>
                        <a href="#" class="text-green-400 font-semibold glow-text-green border-b-2 border-green-400 pb-1">Products</a>
                        <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors font-medium">Analytics</a>
                        <a href="#" class="text-gray-400 hover:text-green-400 transition-colors font-medium">Settings</a>
                    </nav>
                    
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-green-500 to-blue-500 glow-neon-green flex items-center justify-center font-bold">
                            A
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto px-6 py-8">
            <!-- Breadcrumb -->
            <div class="flex items-center space-x-2 text-sm mb-6">
                <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Dashboard</a>
                <span class="text-gray-600">/</span>
                <a href="#" class="text-gray-400 hover:text-green-400 transition-colors">Products</a>
                <span class="text-gray-600">/</span>
                <span class="text-green-400 font-semibold">Product Details</span>
            </div>

            <!-- Product Detail -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Product Image -->
                <div class="bg-card-dark rounded-2xl p-8 leaf-pattern">
                    <img 
                        src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=800&h=800&fit=crop" 
                        alt="Bio-Luminescent Planter" 
                        class="w-full rounded-2xl object-cover glow-neon-green hover-lift"
                    />
                    
                    <!-- Image Gallery Thumbnails -->
                    <div class="grid grid-cols-4 gap-4 mt-6">
                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=200&h=200&fit=crop" class="w-full h-24 rounded-lg object-cover border-2 border-green-500 glow-neon-green cursor-pointer" alt="Thumbnail 1" />
                        <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=200&h=200&fit=crop" class="w-full h-24 rounded-lg object-cover border border-gray-700 hover:border-blue-500 transition-colors cursor-pointer" alt="Thumbnail 2" />
                        <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?w=200&h=200&fit=crop" class="w-full h-24 rounded-lg object-cover border border-gray-700 hover:border-blue-500 transition-colors cursor-pointer" alt="Thumbnail 3" />
                        <img src="https://images.unsplash.com/photo-1466781783364-36c955e42a7f?w=200&h=200&fit=crop" class="w-full h-24 rounded-lg object-cover border border-gray-700 hover:border-blue-500 transition-colors cursor-pointer" alt="Thumbnail 4" />
                    </div>
                </div>

                <!-- Product Information -->
                <div class="space-y-6">
                    <!-- Title and ID -->
                    <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h2 class="text-4xl font-display font-bold glow-text-green mb-2">Bio-Luminescent Planter</h2>
                                <p class="text-gray-400">Product ID: <span class="text-blue-400 font-semibold">#PRD-10241</span></p>
                            </div>
                            <span class="px-4 py-2 rounded-full text-sm font-semibold bg-green-500/20 text-green-400 border-2 border-green-500 glow-neon-green animate-glow">
                                In Stock
                            </span>
                        </div>
                        
                        <!-- Category Badge -->
                        <div class="inline-block px-5 py-2 rounded-full bg-blue-500/20 border-2 border-blue-500 glow-neon-blue">
                            <span class="text-blue-400 font-bold text-sm uppercase tracking-wider">Smart Planters</span>
                        </div>
                    </div>

                    <!-- Price and Stock -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-card-dark rounded-2xl p-6 leaf-pattern hover-lift">
                            <p class="text-sm text-gray-400 uppercase tracking-wider mb-2">Price</p>
                            <p class="text-4xl font-bold glow-text-pink">$89.99</p>
                        </div>
                        <div class="bg-card-dark rounded-2xl p-6 leaf-pattern hover-lift">
                            <p class="text-sm text-gray-400 uppercase tracking-wider mb-2">Stock Available</p>
                            <p class="text-4xl font-bold glow-text-blue">24 <span class="text-xl text-gray-400">units</span></p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                        <h3 class="text-xl font-display font-bold glow-text-green mb-4">Product Description</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Self-sustaining ecosystem with integrated LED growth system. This revolutionary planter combines advanced bioluminescent technology with smart environmental controls to create the perfect growing conditions for your plants.
                        </p>
                        <p class="text-gray-300 leading-relaxed mt-4">
                            Features auto-watering, soil monitoring, and customizable light spectrums for optimal plant health. The integrated neural network learns your plant's needs and adjusts parameters automatically for maximum growth efficiency.
                        </p>
                    </div>

                    <!-- Specifications -->
                    <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                        <h3 class="text-xl font-display font-bold glow-text-blue mb-4">Specifications</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between py-2 border-b border-gray-700/30">
                                <span class="text-gray-400">Dimensions</span>
                                <span class="text-gray-200 font-semibold">12" × 12" × 18"</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-700/30">
                                <span class="text-gray-400">Weight</span>
                                <span class="text-gray-200 font-semibold">3.5 lbs</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-700/30">
                                <span class="text-gray-400">Power Source</span>
                                <span class="text-gray-200 font-semibold">USB-C / Solar</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-700/30">
                                <span class="text-gray-400">Water Capacity</span>
                                <span class="text-gray-200 font-semibold">2.5 Liters</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-gray-400">Warranty</span>
                                <span class="text-gray-200 font-semibold">2 Years</span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center space-x-4">
                        <button class="flex-1 px-8 py-4 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl font-bold text-lg glow-neon-green hover-lift flex items-center justify-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            <span>Edit Product</span>
                        </button>
                        <button class="px-8 py-4 bg-red-500/20 text-red-400 rounded-xl font-bold text-lg border-2 border-red-500 hover:bg-red-500/30 transition-all flex items-center space-x-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span>Delete</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional Information Tabs -->
            <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                <div class="flex space-x-8 border-b border-green-500/20 mb-6">
                    <button class="pb-4 text-green-400 font-bold border-b-2 border-green-400 glow-text-green">Features</button>
                    <button class="pb-4 text-gray-400 hover:text-blue-400 transition-colors font-semibold">Reviews (24)</button>
                    <button class="pb-4 text-gray-400 hover:text-pink-400 transition-colors font-semibold">Analytics</button>
                </div>

                <!-- Features Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-green-500/5 border border-green-500/20">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-green-500/20 flex items-center justify-center glow-neon-green">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-green-400 font-bold mb-1">Smart LED System</h4>
                            <p class="text-gray-400 text-sm">Adaptive lighting that mimics natural sunlight cycles</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-blue-500/5 border border-blue-500/20">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-blue-500/20 flex items-center justify-center glow-neon-blue">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-blue-400 font-bold mb-1">Auto-Watering</h4>
                            <p class="text-gray-400 text-sm">Precision moisture control with smart scheduling</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-pink-500/5 border border-pink-500/20">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-pink-500/20 flex items-center justify-center glow-neon-pink">
                            <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-pink-400 font-bold mb-1">Growth Analytics</h4>
                            <p class="text-gray-400 text-sm">Track plant health with real-time monitoring</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 rounded-xl bg-green-500/5 border border-green-500/20">
                        <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-green-500/20 flex items-center justify-center glow-neon-green">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-green-400 font-bold mb-1">App Connected</h4>
                            <p class="text-gray-400 text-sm">Control and monitor from anywhere via mobile app</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>