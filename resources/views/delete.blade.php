<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - GreenTech Solutions</title>
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
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .glow-neon-green {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.5), 0 0 40px rgba(34, 197, 94, 0.3), inset 0 0 10px rgba(34, 197, 94, 0.2);
        }
        
        .glow-neon-red {
            box-shadow: 0 0 30px rgba(239, 68, 68, 0.6), 0 0 60px rgba(239, 68, 68, 0.4), inset 0 0 15px rgba(239, 68, 68, 0.2);
        }
        
        .glow-text-green {
            text-shadow: 0 0 10px rgba(34, 197, 94, 0.8), 0 0 20px rgba(34, 197, 94, 0.5);
        }
        
        .glow-text-red {
            text-shadow: 0 0 15px rgba(239, 68, 68, 0.9), 0 0 30px rgba(239, 68, 68, 0.6);
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
        
        .animate-shake {
            animation: shake 0.5s ease-in-out;
        }
        
        .bg-nature-dark {
            background: 
                radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(239, 68, 68, 0.08) 0%, transparent 50%),
                linear-gradient(180deg, #0a0f0d 0%, #050a08 100%);
        }
        
        .bg-card-dark {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8) 0%, rgba(17, 24, 39, 0.9) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .bg-modal-dark {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(17, 24, 39, 0.98) 100%);
            backdrop-filter: blur(20px);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
        }
        
        .leaf-pattern {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(34, 197, 94, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(239, 68, 68, 0.02) 0%, transparent 50%);
        }
        
        .modal-overlay {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
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
        <div class="absolute top-1/3 right-20 text-red-500/10 animate-float" style="animation-delay: 2s;">
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

        <!-- Delete Confirmation Modal (Full Screen Overlay) -->
        <div class="fixed inset-0 z-50 flex items-center justify-center modal-overlay">
            <div class="max-w-2xl w-full mx-4">
                <!-- Modal Content -->
                <div class="bg-modal-dark rounded-3xl border-2 border-red-500 glow-neon-red overflow-hidden leaf-pattern">
                    <!-- Modal Header -->
                    <div class="bg-gradient-to-r from-red-500/20 to-red-600/20 p-6 border-b border-red-500/30">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 rounded-2xl bg-red-500/20 flex items-center justify-center glow-neon-red animate-glow">
                                    <svg class="w-8 h-8 text-red-400 animate-shake" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-3xl font-display font-bold glow-text-red">Delete Product</h2>
                                    <p class="text-gray-400 text-sm mt-1">This action cannot be undone</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-200 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Product Info to be Deleted -->
                    <div class="p-8">
                        <div class="bg-red-500/10 border-2 border-red-500/30 rounded-2xl p-6 mb-6">
                            <p class="text-gray-300 mb-4">You are about to permanently delete the following product:</p>
                            
                            <div class="flex items-center space-x-4 bg-gray-900/50 rounded-xl p-4 border border-red-500/20">
                                <img 
                                    src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=150&h=150&fit=crop" 
                                    alt="Product to delete" 
                                    class="w-20 h-20 rounded-lg object-cover glow-neon-red"
                                />
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-white mb-1">Bio-Luminescent Planter</h3>
                                    <p class="text-gray-400 text-sm">ID: <span class="text-red-400 font-semibold">#PRD-10241</span></p>
                                    <div class="flex items-center space-x-4 mt-2">
                                        <span class="text-sm text-gray-400">Price: <span class="text-white font-semibold">$89.99</span></span>
                                        <span class="text-sm text-gray-400">Stock: <span class="text-white font-semibold">24 units</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Warning Messages -->
                        <div class="space-y-4 mb-6">
                            <div class="flex items-start space-x-3 p-4 rounded-xl bg-red-500/5 border border-red-500/20">
                                <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                                <div>
                                    <p class="text-red-300 font-semibold">All product data will be permanently deleted</p>
                                    <p class="text-gray-400 text-sm mt-1">This includes images, descriptions, pricing, and inventory records</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-xl bg-red-500/5 border border-red-500/20">
                                <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <p class="text-red-300 font-semibold">Product will be removed from all sales channels</p>
                                    <p class="text-gray-400 text-sm mt-1">Customers will no longer be able to view or purchase this item</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-xl bg-red-500/5 border border-red-500/20">
                                <svg class="w-6 h-6 text-red-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <p class="text-red-300 font-semibold">Historical order data will be preserved</p>
                                    <p class="text-gray-400 text-sm mt-1">Past orders containing this product will remain intact for record-keeping</p>
                                </div>
                            </div>
                        </div>

                        <!-- Confirmation Input -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-red-400 uppercase tracking-wider mb-3">
                                Type "DELETE" to confirm
                            </label>
                            <input 
                                type="text" 
                                placeholder="Type DELETE in capital letters"
                                class="w-full px-4 py-3 rounded-xl bg-gray-900/50 border border-red-500/30 text-gray-200 font-medium placeholder-gray-600 focus:outline-none focus:border-red-500 focus:ring-2 focus:ring-red-500/20"
                            />
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex items-center space-x-4">
                            <button class="flex-1 px-8 py-4 rounded-xl bg-gray-700/50 text-gray-300 font-bold text-lg hover:bg-gray-700/70 transition-all hover-lift flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span>Cancel</span>
                            </button>
                            <button class="flex-1 px-8 py-4 rounded-xl bg-gradient-to-r from-red-600 to-red-500 text-white font-bold text-lg glow-neon-red hover-lift transition-all flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                <span>Delete Forever</span>
                            </button>
                        </div>

                        <!-- Additional Warning -->
                        <p class="text-center text-xs text-gray-500 mt-4">
                            ⚠️ This action is irreversible and will take effect immediately
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>