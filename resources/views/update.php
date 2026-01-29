<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product - GreenTech Solutions</title>
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
        
        .input-neon {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(34, 197, 94, 0.3);
            transition: all 0.3s ease;
        }
        
        .input-neon:focus {
            outline: none;
            border-color: rgba(34, 197, 94, 0.8);
            box-shadow: 0 0 15px rgba(34, 197, 94, 0.3), inset 0 0 10px rgba(34, 197, 94, 0.1);
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
                <span class="text-green-400 font-semibold">Update Product</span>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Page Title with Product Info -->
                <div class="mb-8 flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-display font-bold glow-text-green mb-2">Update Product</h2>
                        <p class="text-gray-400">Editing: <span class="text-blue-400 font-semibold">Bio-Luminescent Planter</span></p>
                    </div>
                    <span class="px-4 py-2 rounded-full text-sm font-semibold bg-green-500/20 text-green-400 border border-green-500/30 glow-neon-green">
                        ID: #PRD-10241
                    </span>
                </div>

                <!-- Form -->
                <form class="bg-card-dark rounded-2xl p-8 leaf-pattern">
                    <!-- Current Product Image Preview -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                            Current Product Image
                        </label>
                        <div class="flex items-center space-x-6">
                            <img 
                                src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=200&h=200&fit=crop" 
                                alt="Current product" 
                                class="w-32 h-32 rounded-xl object-cover glow-neon-green"
                            />
                            <div class="flex-1">
                                <p class="text-gray-300 font-semibold mb-2">Update Image (Optional)</p>
                                <button type="button" class="px-6 py-2 bg-blue-500/20 text-blue-400 rounded-lg font-semibold hover:bg-blue-500/30 transition-all border border-blue-500/30 glow-neon-blue">
                                    Change Image
                                </button>
                                <p class="text-xs text-gray-500 mt-2">PNG, JPG, WEBP up to 5MB</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-green-500/20 my-6"></div>

                    <!-- Product Name -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                            Product Name
                            <span class="text-pink-400">*</span>
                        </label>
                        <input 
                            type="text" 
                            value="Bio-Luminescent Planter"
                            class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600"
                        />
                    </div>

                    <!-- Category -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                            Category
                            <span class="text-pink-400">*</span>
                        </label>
                        <select class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium">
                            <option value="planters" selected>Smart Planters</option>
                            <option value="seeds">Seeds</option>
                            <option value="sensors">Sensors</option>
                            <option value="nutrients">Nutrients</option>
                            <option value="automation">Automation</option>
                            <option value="lighting">Lighting Systems</option>
                        </select>
                    </div>

                    <!-- Price and Stock Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Price -->
                        <div>
                            <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                                Price (USD)
                                <span class="text-pink-400">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 font-bold">$</span>
                                <input 
                                    type="number" 
                                    step="0.01"
                                    value="89.99"
                                    class="w-full pl-8 pr-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600"
                                />
                            </div>
                        </div>

                        <!-- Stock -->
                        <div>
                            <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                                Stock Quantity
                                <span class="text-pink-400">*</span>
                            </label>
                            <input 
                                type="number" 
                                value="24"
                                class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600"
                            />
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-3">
                            Product Description
                            <span class="text-pink-400">*</span>
                        </label>
                        <textarea 
                            rows="6" 
                            class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600 resize-none"
                        >Self-sustaining ecosystem with integrated LED growth system. This revolutionary planter combines advanced bioluminescent technology with smart environmental controls to create the perfect growing conditions for your plants. Features auto-watering, soil monitoring, and customizable light spectrums for optimal plant health.</textarea>
                    </div>

                    <!-- Status Toggle -->
                    <div class="mb-8 p-6 bg-blue-500/10 rounded-xl border border-blue-500/30">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-blue-400 font-bold mb-1">Product Status</h3>
                                <p class="text-sm text-gray-400">Enable or disable this product in the store</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" checked class="sr-only peer">
                                <div class="w-14 h-7 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-gradient-to-r peer-checked:from-green-500 peer-checked:to-blue-500"></div>
                            </label>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex items-center justify-between pt-6 border-t border-green-500/20">
                        <button 
                            type="button" 
                            class="px-8 py-3 rounded-xl bg-red-500/20 text-red-400 font-semibold hover:bg-red-500/30 transition-all border border-red-500/30 flex items-center space-x-2"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            <span>Delete Product</span>
                        </button>
                        
                        <div class="flex items-center space-x-4">
                            <button 
                                type="button" 
                                class="px-8 py-3 rounded-xl bg-gray-700/50 text-gray-300 font-semibold hover:bg-gray-700/70 transition-all"
                            >
                                Cancel
                            </button>
                            <button 
                                type="submit" 
                                class="px-8 py-3 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl font-semibold glow-neon-green hover-lift flex items-center space-x-2"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Save Changes</span>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Change History -->
                <div class="mt-8 bg-card-dark rounded-2xl p-6 leaf-pattern">
                    <h3 class="text-xl font-display font-bold glow-text-blue mb-4">Recent Changes</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between py-2 border-b border-gray-700/30">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 rounded-full bg-green-500 glow-neon-green animate-glow"></div>
                                <span class="text-gray-300">Stock updated from 20 to 24</span>
                            </div>
                            <span class="text-xs text-gray-500">2 hours ago</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-gray-700/30">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 rounded-full bg-blue-500 glow-neon-blue animate-glow"></div>
                                <span class="text-gray-300">Price changed from $79.99 to $89.99</span>
                            </div>
                            <span class="text-xs text-gray-500">1 day ago</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 rounded-full bg-pink-500 glow-neon-pink animate-glow"></div>
                                <span class="text-gray-300">Product description updated</span>
                            </div>
                            <span class="text-xs text-gray-500">3 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>