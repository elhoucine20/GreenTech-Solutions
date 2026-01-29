<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Admin Dashboard</title>
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
        
        .organic-border {
            clip-path: polygon(
                0% 5%, 5% 0%, 95% 0%, 100% 5%,
                100% 95%, 95% 100%, 5% 100%, 0% 95%
            );
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
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
        <!-- Header/Navigation -->
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
                        <a href="#" class="text-green-400 font-semibold glow-text-green border-b-2 border-green-400 pb-1">Dashboard</a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors font-medium">Products</a>
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

        <!-- Main Dashboard Content -->
        <main class="container mx-auto px-6 py-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Card 1 -->
                <div class="bg-card-dark rounded-2xl p-6 hover-lift leaf-pattern">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center glow-neon-green">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span class="text-green-400 text-sm font-semibold">+12.5%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-1">Total Products</h3>
                    <p class="text-3xl font-bold text-white glow-text-green">1,284</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-card-dark rounded-2xl p-6 hover-lift leaf-pattern">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center glow-neon-blue">
                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <span class="text-blue-400 text-sm font-semibold">+8.2%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-1">Total Stock</h3>
                    <p class="text-3xl font-bold text-white glow-text-blue">45,892</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-card-dark rounded-2xl p-6 hover-lift leaf-pattern">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-pink-500/20 flex items-center justify-center glow-neon-pink">
                            <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="text-pink-400 text-sm font-semibold">+23.1%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-1">Revenue</h3>
                    <p class="text-3xl font-bold text-white glow-text-pink">$284K</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-card-dark rounded-2xl p-6 hover-lift leaf-pattern">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-green-500/20 flex items-center justify-center glow-neon-green">
                            <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <span class="text-green-400 text-sm font-semibold">+18.7%</span>
                    </div>
                    <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-1">Growth Rate</h3>
                    <p class="text-3xl font-bold text-white glow-text-green">34.6%</p>
                </div>
            </div>

            <!-- Charts and Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Sales Chart -->
                <div class="lg:col-span-2 bg-card-dark rounded-2xl p-6 leaf-pattern">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-display font-bold glow-text-green">Sales Overview</h2>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 rounded-lg bg-green-500/20 text-green-400 text-sm font-semibold glow-neon-green">Week</button>
                            <button class="px-4 py-2 rounded-lg bg-gray-700/50 text-gray-400 text-sm font-semibold hover:bg-blue-500/20 hover:text-blue-400 transition-all">Month</button>
                            <button class="px-4 py-2 rounded-lg bg-gray-700/50 text-gray-400 text-sm font-semibold hover:bg-pink-500/20 hover:text-pink-400 transition-all">Year</button>
                        </div>
                    </div>
                    
                    <!-- Simulated Chart with Neon Bars -->
                    <div class="h-64 flex items-end justify-between space-x-2">
                        <div class="flex-1 bg-gradient-to-t from-green-500/60 to-green-500/20 glow-neon-green rounded-t-lg animate-glow" style="height: 45%; animation-delay: 0s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-blue-500/60 to-blue-500/20 glow-neon-blue rounded-t-lg animate-glow" style="height: 70%; animation-delay: 0.5s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-pink-500/60 to-pink-500/20 glow-neon-pink rounded-t-lg animate-glow" style="height: 55%; animation-delay: 1s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-green-500/60 to-green-500/20 glow-neon-green rounded-t-lg animate-glow" style="height: 85%; animation-delay: 1.5s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-blue-500/60 to-blue-500/20 glow-neon-blue rounded-t-lg animate-glow" style="height: 65%; animation-delay: 2s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-pink-500/60 to-pink-500/20 glow-neon-pink rounded-t-lg animate-glow" style="height: 90%; animation-delay: 2.5s;"></div>
                        <div class="flex-1 bg-gradient-to-t from-green-500/60 to-green-500/20 glow-neon-green rounded-t-lg animate-glow" style="height: 75%; animation-delay: 3s;"></div>
                    </div>
                    
                    <div class="flex justify-between mt-4 text-xs text-gray-500 font-semibold">
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                        <span>Sun</span>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                    <h2 class="text-xl font-display font-bold glow-text-blue mb-6">Recent Activity</h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-green-500 glow-neon-green mt-2 animate-glow"></div>
                            <div>
                                <p class="text-sm text-gray-300">New product added</p>
                                <p class="text-xs text-gray-500">Bio-Luminescent Planter</p>
                                <p class="text-xs text-green-400 mt-1">2 min ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-500 glow-neon-blue mt-2 animate-glow" style="animation-delay: 1s;"></div>
                            <div>
                                <p class="text-sm text-gray-300">Stock updated</p>
                                <p class="text-xs text-gray-500">Quantum Seed Kit (+50)</p>
                                <p class="text-xs text-blue-400 mt-1">15 min ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-pink-500 glow-neon-pink mt-2 animate-glow" style="animation-delay: 2s;"></div>
                            <div>
                                <p class="text-sm text-gray-300">Order completed</p>
                                <p class="text-xs text-gray-500">Order #12847</p>
                                <p class="text-xs text-pink-400 mt-1">1 hour ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-green-500 glow-neon-green mt-2 animate-glow" style="animation-delay: 3s;"></div>
                            <div>
                                <p class="text-sm text-gray-300">Product review</p>
                                <p class="text-xs text-gray-500">5 stars - Hydro Sensor</p>
                                <p class="text-xs text-green-400 mt-1">3 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 rounded-full bg-blue-500 glow-neon-blue mt-2 animate-glow" style="animation-delay: 4s;"></div>
                            <div>
                                <p class="text-sm text-gray-300">Inventory alert</p>
                                <p class="text-xs text-gray-500">Low stock warning</p>
                                <p class="text-xs text-blue-400 mt-1">5 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Table -->
            <div class="bg-card-dark rounded-2xl p-6 leaf-pattern">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-display font-bold glow-text-green">Product Inventory</h2>
                    <button class="px-6 py-3 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl font-semibold glow-neon-green hover-lift flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        <span>Add Product</span>
                    </button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-green-500/20">
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Product</th>
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Category</th>
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Price</th>
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Stock</th>
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Status</th>
                                <th class="text-left py-4 px-4 text-sm font-semibold text-green-400 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700/30">
                            <tr class="hover:bg-green-500/5 transition-colors">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover glow-neon-green" alt="Product">
                                        <span class="font-semibold text-gray-200">Bio-Luminescent Planter</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/20 text-blue-400 border border-blue-500/30">Smart Planters</span>
                                </td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">$89.99</td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">24</td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-400 border border-green-500/30 glow-neon-green">In Stock</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-all glow-neon-blue">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition-all glow-neon-green">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr class="hover:bg-green-500/5 transition-colors">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover glow-neon-blue" alt="Product">
                                        <span class="font-semibold text-gray-200">Quantum Seed Kit</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-pink-500/20 text-pink-400 border border-pink-500/30">Seeds</span>
                                </td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">$24.99</td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">156</td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-400 border border-green-500/30 glow-neon-green">In Stock</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-all glow-neon-blue">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition-all glow-neon-green">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr class="hover:bg-green-500/5 transition-colors">
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" class="w-12 h-12 rounded-lg object-cover glow-neon-pink" alt="Product">
                                        <span class="font-semibold text-gray-200">Hydro-Neural Sensor</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-500/20 text-green-400 border border-green-500/30">Sensors</span>
                                </td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">$149.99</td>
                                <td class="py-4 px-4 text-gray-300 font-semibold">8</td>
                                <td class="py-4 px-4">
                                    <span class="px-3 py-1 rounded-full text-xs font-semibold bg-yellow-500/20 text-yellow-400 border border-yellow-500/30">Low Stock</span>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center space-x-2">
                                        <button class="p-2 rounded-lg bg-blue-500/20 text-blue-400 hover:bg-blue-500/30 transition-all glow-neon-blue">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-green-500/20 text-green-400 hover:bg-green-500/30 transition-all glow-neon-green">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 transition-all">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>