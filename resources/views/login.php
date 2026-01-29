<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GreenTech Solutions</title>
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
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes leaf-sway {
            0%, 100% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
        }
        
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
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
        
        .glow-text-white {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.6), 0 0 20px rgba(255, 255, 255, 0.4);
        }
        
        .animate-glow {
            animation: glow-pulse 3s ease-in-out infinite;
        }
        
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        
        .animate-leaf {
            animation: leaf-sway 4s ease-in-out infinite;
        }
        
        .animate-shimmer {
            animation: shimmer 3s linear infinite;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 100%
            );
            background-size: 1000px 100%;
        }
        
        .bg-nature-dark {
            background: 
                radial-gradient(circle at 20% 80%, rgba(34, 197, 94, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%),
                linear-gradient(180deg, #0a0f0d 0%, #050a08 100%);
        }
        
        .bg-card-glass {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(17, 24, 39, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(34, 197, 94, 0.3);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-3px);
        }
        
        .leaf-pattern {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
        }
        
        .input-neon {
            background: rgba(15, 23, 42, 0.6);
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
<body class="bg-nature-dark min-h-screen text-gray-100 flex items-center justify-center p-6">
    
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <!-- Large Leaves -->
        <div class="absolute top-20 left-10 text-green-500/20 animate-float" style="animation-delay: 0s;">
            <svg class="w-64 h-64 animate-leaf" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
            </svg>
        </div>
        <div class="absolute top-1/4 right-10 text-blue-500/20 animate-float" style="animation-delay: 2s;">
            <svg class="w-72 h-72 animate-leaf" style="animation-delay: 1s;" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,5 Q75,25 85,50 Q75,75 50,95 Q25,75 15,50 Q25,25 50,5 Z"/>
            </svg>
        </div>
        <div class="absolute bottom-20 left-1/4 text-pink-500/20 animate-float" style="animation-delay: 4s;">
            <svg class="w-56 h-56 animate-leaf" style="animation-delay: 2s;" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,15 Q65,35 75,50 Q65,65 50,85 Q35,65 25,50 Q35,35 50,15 Z"/>
            </svg>
        </div>
        <div class="absolute bottom-32 right-1/4 text-green-500/20 animate-float" style="animation-delay: 6s;">
            <svg class="w-48 h-48 animate-leaf" style="animation-delay: 3s;" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
            </svg>
        </div>
        
        <!-- Glowing Orbs -->
        <div class="absolute top-1/3 left-1/3 w-96 h-96 bg-green-500/10 rounded-full blur-3xl animate-glow"></div>
        <div class="absolute bottom-1/3 right-1/3 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl animate-glow" style="animation-delay: 2s;"></div>
    </div>

    <!-- Login Container -->
    <div class="relative z-10 w-full max-w-md">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center space-x-3 mb-4">
                <svg class="w-16 h-16 text-green-500 animate-glow" viewBox="0 0 100 100" fill="currentColor">
                    <path d="M50,10 Q70,30 80,50 Q70,70 50,90 Q30,70 20,50 Q30,30 50,10 Z"/>
                    <circle cx="50" cy="50" r="15" fill="currentColor" class="text-blue-400"/>
                </svg>
            </div>
            <h1 class="text-4xl font-display font-bold glow-text-green mb-2">GreenTech Solutions</h1>
            <p class="text-gray-400 text-lg">Welcome back to the future</p>
        </div>

        <!-- Login Card -->
        <div class="bg-card-glass rounded-3xl p-8 leaf-pattern glow-neon-green">
            <h2 class="text-2xl font-display font-bold text-center mb-6 glow-text-white">Sign In</h2>
            
            <!-- Login Form -->
            <form class="space-y-5">
                <!-- Email Input -->
                <div>
                    <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-2">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        placeholder="your@email.com"
                        class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600"
                    />
                </div>

                <!-- Password Input -->
                <div>
                    <label class="block text-sm font-semibold text-green-400 uppercase tracking-wider mb-2">
                        Password
                    </label>
                    <input 
                        type="password" 
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl input-neon text-gray-200 font-medium placeholder-gray-600"
                    />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded border-green-500/30 bg-gray-900/50 text-green-500 focus:ring-green-500/30">
                        <span class="text-gray-400">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors font-semibold">
                        Forgot password?
                    </a>
                </div>

                <!-- Sign In Button -->
                <button 
                    type="submit" 
                    class="w-full py-4 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl font-bold text-lg glow-neon-green hover-lift relative overflow-hidden group"
                >
                    <span class="relative z-10">Sign In</span>
                    <div class="absolute inset-0 animate-shimmer"></div>
                </button>
            </form>

            <!-- Divider -->
            <div class="flex items-center my-6">
                <div class="flex-1 h-px bg-gradient-to-r from-transparent via-green-500/30 to-transparent"></div>
                <span class="px-4 text-sm text-gray-500 font-semibold">OR CONTINUE WITH</span>
                <div class="flex-1 h-px bg-gradient-to-r from-transparent via-green-500/30 to-transparent"></div>
            </div>

            <!-- Social Login Buttons -->
            <div class="space-y-3">
                <!-- GitHub Button -->
                <button class="w-full py-3 px-4 bg-gray-800/50 border border-gray-700 rounded-xl font-semibold hover:border-green-500 hover:bg-gray-800/70 transition-all hover-lift flex items-center justify-center space-x-3 glow-neon-green group">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-green-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                    <span class="text-gray-300 group-hover:text-green-400 transition-colors">Continue with GitHub</span>
                </button>

                <!-- Google Button -->
                <button class="w-full py-3 px-4 bg-gray-800/50 border border-gray-700 rounded-xl font-semibold hover:border-blue-500 hover:bg-gray-800/70 transition-all hover-lift flex items-center justify-center space-x-3 glow-neon-blue group">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    <span class="text-gray-300 group-hover:text-blue-400 transition-colors">Continue with Google</span>
                </button>
            </div>

            <!-- Sign Up Link -->
            <p class="text-center text-gray-400 text-sm mt-6">
                Don't have an account? 
                <a href="#" class="text-pink-400 hover:text-pink-300 font-bold transition-colors">
                    Sign up now
                </a>
            </p>
        </div>

        <!-- Footer Text -->
        <p class="text-center text-gray-500 text-xs mt-6">
            By signing in, you agree to our 
            <a href="#" class="text-green-400 hover:text-green-300 transition-colors">Terms</a> 
            and 
            <a href="#" class="text-green-400 hover:text-green-300 transition-colors">Privacy Policy</a>
        </p>
    </div>
</body>
</html>