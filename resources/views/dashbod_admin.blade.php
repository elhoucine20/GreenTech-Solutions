<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Catalog Dashboard</title>
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
</head>
<body class="bg-gradient-to-br from-leaf-50 via-white to-earth-50 min-h-screen">
    
    <!-- Header -->
    <div class="bg-white/90 backdrop-blur-lg border-b border-leaf-200 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            
            <!-- Title -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-leaf-900 flex items-center gap-3">
                    <svg class="w-10 h-10 text-leaf-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                    </svg>
                    Plant Catalog Dashboard
                </h1>
                <p class="text-earth-600 mt-1">Manage your botanical inventory</p>
            </div>

            <!-- Controls -->
            <div class="flex flex-col lg:flex-row items-stretch lg:items-center gap-4">
                
                <!-- Search -->
                <div class="flex-1">
                    <div class="relative">
                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-leaf-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        <input 
                            type="text" 
                            placeholder="Search plants, seeds, tools..." 
                            class="w-full pl-12 pr-4 py-3 rounded-2xl border-2 border-leaf-200 focus:border-leaf-500 focus:ring-4 focus:ring-leaf-100 transition-all duration-200 outline-none bg-white/80 backdrop-blur-sm text-leaf-900 placeholder-earth-400"
                        >
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="lg:w-64">
                    <select class="w-full px-4 py-3 rounded-2xl border-2 border-leaf-200 focus:border-leaf-500 focus:ring-4 focus:ring-leaf-100 transition-all duration-200 outline-none bg-white/80 backdrop-blur-sm text-leaf-900">
                        <option value="">All Categories</option>
                        <option value="plants">🌿 Plants</option>
                        <option value="seeds">🌱 Seeds</option>
                        <option value="tools">🛠️ Tools</option>
                    </select>
                </div>

                <!-- Add Button -->
                <div class="lg:w-auto">
                    <a href="/create">
                    <button class="w-full lg:w-auto px-6 py-3 bg-gradient-to-r from-leaf-600 to-leaf-700 hover:from-leaf-700 hover:to-leaf-800 text-white font-semibold rounded-2xl shadow-lg shadow-leaf-500/30 hover:shadow-xl hover:shadow-leaf-500/40 transition-all duration-300 flex items-center justify-center gap-2 group">
                        <svg class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Add New Plant
                    </button>
                </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- Product Card 1 - Monstera Deliciosa -->
          @foreach($produits as $produit)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden group hover:-translate-y-2">

                
                <!-- Image Container -->
                <div class="relative overflow-hidden bg-gradient-to-br from-leaf-50 to-earth-50 h-64">
                    <img 
                        src="https://images.unsplash.com/photo-1614594975525-e45190c55d0b?w=500&h=400&fit=crop" 
                        alt="Monstera Deliciosa" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    >
                    
                    <!-- Stock Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-1.5 bg-leaf-500/95 backdrop-blur-md text-white text-xs font-bold rounded-full shadow-lg flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Available
                        </span>
                    </div>

                    <!-- Leaf Decoration -->
                    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
                </div>

                <!-- Card Content -->
                <div class="p-5">
                    
                    <!-- Category Badge -->
                    <div class="mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-gradient-to-r from-leaf-100 to-leaf-200 text-leaf-800 text-xs font-bold rounded-full">
                            🌿 Plant
                             {{$produit->categorie_id}}

                        </span>
                    </div>

                    <!-- Product Name -->
                    <h3 class="text-xl font-bold text-leaf-900 mb-3 line-clamp-2 group-hover:text-leaf-700 transition-colors duration-300">
                        {{$produit->name}}
                    </h3>

                    <!-- Price -->
                    <div class="mb-5">
                        <span class="text-3xl font-bold text-earth-800">
                          ${{$produit->prix}}

                        </span>
                    </div>

                    <!-- Actions -->
                    <div class="grid grid-cols-3 gap-2">
                        
                        <!-- View Button -->
                        <a href="show/{{$produit->id}}" class="px-3 py-2.5 bg-gradient-to-br from-earth-100 to-earth-200 hover:from-earth-200 hover:to-earth-300 text-earth-800 text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-md flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                       </a>

                        <!-- Edit Button -->
                        <a href="edit/{{$produit->id}}" class="px-3 py-2.5 bg-gradient-to-br from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-leaf-500/40 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>

                        <!-- Delete Button -->
                        <a href="delete/{{$produit->id}}" class="px-3 py-2.5 bg-gradient-to-br from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-red-500/40 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach



            <!-- Product Card 8 - Sunflower Seeds -->
            <div class="bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden group hover:-translate-y-2">
                
                <!-- Image Container -->
                <div class="relative overflow-hidden bg-gradient-to-br from-leaf-50 to-earth-50 h-64">
                    <img 
                        src="https://images.unsplash.com/photo-1597848212624-e530bb7441bc?w=500&h=400&fit=crop" 
                        alt="Sunflower Seeds" 
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    >
                    
                    <!-- Stock Badge -->
                    <div class="absolute top-4 right-4">
                        <span class="px-4 py-1.5 bg-leaf-500/95 backdrop-blur-md text-white text-xs font-bold rounded-full shadow-lg flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Available
                        </span>
                    </div>

                    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
                </div>

                <!-- Card Content -->
                <div class="p-5">
                    
                    <!-- Category Badge -->
                    <div class="mb-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-gradient-to-r from-green-100 to-green-200 text-green-800 text-xs font-bold rounded-full">
                            🌱 Seeds
                        </span>
                    </div>

                    <!-- Product Name -->
                    <h3 class="text-xl font-bold text-leaf-900 mb-3 line-clamp-2 group-hover:text-leaf-700 transition-colors duration-300">
                        Giant Sunflower Seeds
                    </h3>

                    <!-- Price -->
                    <div class="mb-5">
                        <span class="text-3xl font-bold text-earth-800">
                            $6.99
                        </span>
                    </div>

                    <!-- Actions -->
                    <div class="grid grid-cols-3 gap-2">
                        
                        <button class="px-3 py-2.5 bg-gradient-to-br from-earth-100 to-earth-200 hover:from-earth-200 hover:to-earth-300 text-earth-800 text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-md flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>

                        <button class="px-3 py-2.5 bg-gradient-to-br from-leaf-500 to-leaf-600 hover:from-leaf-600 hover:to-leaf-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-leaf-500/40 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>

                        <button class="px-3 py-2.5 bg-gradient-to-br from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white text-sm font-semibold rounded-xl transition-all duration-300 hover:shadow-lg hover:shadow-red-500/40 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>