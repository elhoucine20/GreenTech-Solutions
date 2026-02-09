<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User - GreenTech Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'green-primary': '#2D5F3F',
                        'green-secondary': '#4A8B5C',
                        'green-light': '#7FB685',
                        'green-soft': '#E8F5E9',
                        'earth-brown': '#8B7355',
                        'earth-light': '#F5F1ED',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        .toggle-checkbox:checked {
            background-color: #4A8B5C;
            border-color: #4A8B5C;
        }
        
        .toggle-checkbox:checked ~ .toggle-label {
            transform: translateX(100%);
        }
        
        .input-icon {
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen py-8 px-4">
    
    <!-- Dashboard Container -->
    <div class="max-w-4xl mx-auto">
        
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 bg-gradient-to-br from-green-primary to-green-secondary rounded-lg flex items-center justify-center">
                    <i class="fas fa-leaf text-white text-lg"></i>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">GreenTech Solutions</h1>
            </div>
            <p class="text-gray-500 text-sm ml-13">Admin Dashboard</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-green-primary to-green-secondary px-8 py-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-user-plus text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">Create New User</h2>
                        <p class="text-green-soft text-sm mt-1">Add a new user to the system</p>
                    </div>
                </div>
            </div>

            <!-- Form Body -->
            <form class="px-8 py-8" id="createUserForm">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Full Name -->
                    <div class="md:col-span-2">
                        <label for="fullName" class="block text-sm font-semibold text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center input-icon">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input 
                                type="text" 
                                id="fullName" 
                                name="fullName"
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light"
                                placeholder="Enter full name"
                                required
                            >
                        </div>
                        <p class="text-red-500 text-xs mt-1 hidden" id="fullNameError">Please enter a valid full name</p>
                    </div>

                    <!-- Email Address -->
                    <div class="md:col-span-2">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center input-icon">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light"
                                placeholder="user@greentech.com"
                                required
                            >
                        </div>
                        <p class="text-red-500 text-xs mt-1 hidden" id="emailError">Please enter a valid email address</p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center input-icon">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input 
                                type="password" 
                                id="password" 
                                name="password"
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light"
                                placeholder="••••••••"
                                required
                            >
                        </div>
                        <p class="text-red-500 text-xs mt-1 hidden" id="passwordError">Password must be at least 8 characters</p>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="confirmPassword" class="block text-sm font-semibold text-gray-700 mb-2">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center input-icon">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input 
                                type="password" 
                                id="confirmPassword" 
                                name="confirmPassword"
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light"
                                placeholder="••••••••"
                                required
                            >
                        </div>
                        <p class="text-red-500 text-xs mt-1 hidden" id="confirmPasswordError">Passwords do not match</p>
                    </div>

                    <!-- Role -->
                    <div>
                        <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">
                            User Role <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center input-icon">
                                <i class="fas fa-user-shield text-gray-400"></i>
                            </div>
                            <select 
                                id="role" 
                                name="role"
                                class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light appearance-none bg-white cursor-pointer"
                                required
                            >
                                <option value="">Select a role</option>
                                <option value="admin">Admin</option>
                                <option value="moderator">Moderator</option>
                                <option value="editor">Editor</option>
                                <option value="client">Client</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                            </div>
                        </div>
                        <p class="text-gray-500 text-xs mt-2 flex items-start gap-2">
                            <i class="fas fa-info-circle text-green-secondary mt-0.5"></i>
                            <span>Permissions are automatically assigned based on the selected role</span>
                        </p>
                    </div>

                    <!-- Status Toggle -->
                    <div>
                        <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                            Account Status
                        </label>
                        <div class="flex items-center gap-4 mt-3">
                            <div class="relative inline-block w-14 h-7">
                                <input 
                                    type="checkbox" 
                                    id="status" 
                                    name="status"
                                    class="toggle-checkbox absolute w-14 h-7 rounded-full appearance-none cursor-pointer bg-gray-300 checked:bg-green-secondary transition-colors duration-200"
                                    checked
                                >
                                <label 
                                    for="status" 
                                    class="toggle-label absolute top-0.5 left-0.5 w-6 h-6 bg-white rounded-full transition-transform duration-200 cursor-pointer shadow-md"
                                ></label>
                            </div>
                            <span class="text-sm font-medium text-gray-700" id="statusText">Active</span>
                        </div>
                        <p class="text-gray-500 text-xs mt-2">
                            Inactive users cannot log in to the system
                        </p>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 mt-8 pt-6 border-t border-gray-200">
                    <button 
                        type="submit"
                        class="flex-1 sm:flex-initial bg-gradient-to-r from-green-primary to-green-secondary text-white font-semibold py-3 px-8 rounded-xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <i class="fas fa-user-plus"></i>
                        <span>Create User</span>
                    </button>
                    <button 
                        type="button"
                        onclick="window.history.back()"
                        class="flex-1 sm:flex-initial bg-gray-100 text-gray-700 font-semibold py-3 px-8 rounded-xl hover:bg-gray-200 transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <i class="fas fa-times"></i>
                        <span>Cancel</span>
                    </button>
                </div>

            </form>

        </div>

        <!-- Footer Info -->
        <div class="mt-6 text-center">
            <p class="text-gray-400 text-sm flex items-center justify-center gap-2">
                <i class="fas fa-leaf text-green-secondary"></i>
                <span>Building a sustainable future together</span>
            </p>
        </div>

    </div>

    <!-- <script>
        // Toggle status text
        const statusToggle = document.getElementById('status');
        const statusText = document.getElementById('statusText');
        
        statusToggle.addEventListener('change', function() {
            statusText.textContent = this.checked ? 'Active' : 'Inactive';
            statusText.classList.toggle('text-gray-500', !this.checked);
            statusText.classList.toggle('text-gray-700', this.checked);
        });

        // Form validation
        const form = document.getElementById('createUserForm');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset errors
            document.querySelectorAll('.text-red-500').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('input, select').forEach(el => el.classList.remove('border-red-500'));
            
            let isValid = true;
            
            // Validate full name
            const fullName = document.getElementById('fullName');
            if (fullName.value.trim().length < 2) {
                showError('fullNameError', fullName);
                isValid = false;
            }
            
            // Validate email
            const email = document.getElementById('email');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                showError('emailError', email);
                isValid = false;
            }
            
            // Validate password
            const password = document.getElementById('password');
            if (password.value.length < 8) {
                showError('passwordError', password);
                isValid = false;
            }
            
            // Validate confirm password
            const confirmPassword = document.getElementById('confirmPassword');
            if (password.value !== confirmPassword.value) {
                showError('confirmPasswordError', confirmPassword);
                isValid = false;
            }
            
            // Validate role
            const role = document.getElementById('role');
            if (!role.value) {
                role.classList.add('border-red-500');
                isValid = false;
            }
            
            if (isValid) {
                // Form is valid - submit
                const formData = {
                    fullName: fullName.value,
                    email: email.value,
                    password: password.value,
                    role: role.value,
                    status: statusToggle.checked ? 'active' : 'inactive'
                };
                
                console.log('Form submitted:', formData);
                alert('User created successfully! (This is a demo)');
                // In Laravel: form.submit() or AJAX request
            }
        });
        
        function showError(errorId, inputElement) {
            document.getElementById(errorId).classList.remove('hidden');
            inputElement.classList.add('border-red-500');
        }
    </script> -->

</body>
</html>