<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Role - GreenTech Solutions</title>
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
        
        .permission-checkbox:checked {
            background-color: #4A8B5C;
            border-color: #4A8B5C;
        }
        
        .permission-card {
            transition: all 0.2s ease;
        }
        
        .permission-card:hover {
            background-color: #E8F5E9;
            border-color: #7FB685;
        }
        
        .permission-card:has(input:checked) {
            background-color: #E8F5E9;
            border-color: #4A8B5C;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen py-8 px-4">
    
    <!-- Dashboard Container -->
    <div class="max-w-6xl mx-auto">
        
        <!-- Header -->
        <div class="mb-8">
            <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 bg-gradient-to-br from-green-primary to-green-secondary rounded-lg flex items-center justify-center">
                    <i class="fas fa-leaf text-white text-lg"></i>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">GreenTech Solutions</h1>
            </div>
            <p class="text-gray-500 text-sm ml-13">Admin Dashboard / Role Management</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            
            <!-- Card Header -->
            <div class="bg-gradient-to-r from-green-primary to-green-secondary px-8 py-6">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">Create New Role</h2>
                        <p class="text-green-soft text-sm mt-1">Define a custom role with specific permissions</p>
                    </div>
                </div>
            </div>

            <!-- Form Body -->
            <form class="px-8 py-8" id="createRoleForm">
                
                <!-- SECTION 1: Role Information -->
                <div class="mb-8">
                    <div class="flex items-center gap-2 mb-6">
                        <i class="fas fa-info-circle text-green-secondary"></i>
                        <h3 class="text-lg font-bold text-gray-800">Role Information</h3>
                    </div>

                    <div class="space-y-6">
                        
                        <!-- Role Name -->
                        <div>
                            <label for="roleName" class="block text-sm font-semibold text-gray-700 mb-2">
                                Role Name <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-tag text-gray-400"></i>
                                </div>
                                <input 
                                    type="text" 
                                    id="roleName" 
                                    name="roleName"
                                    class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light"
                                    placeholder="e.g., Content Manager, Data Analyst"
                                    required
                                >
                            </div>
                            <p class="text-gray-500 text-xs mt-2">Choose a descriptive name for this role</p>
                        </div>

                        <!-- Role Description -->
                        <div>
                            <label for="roleDescription" class="block text-sm font-semibold text-gray-700 mb-2">
                                Role Description
                            </label>
                            <div class="relative">
                                <textarea 
                                    id="roleDescription" 
                                    name="roleDescription"
                                    rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-secondary focus:border-transparent transition-all duration-200 hover:border-green-light resize-none"
                                    placeholder="Describe the responsibilities and scope of this role..."
                                ></textarea>
                            </div>
                            <p class="text-gray-500 text-xs mt-2">Optional: Provide context about what this role is for</p>
                        </div>

                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-gray-200 my-8"></div>

                <!-- SECTION 2: Permissions -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-key text-green-secondary"></i>
                            <h3 class="text-lg font-bold text-gray-800">Assign Permissions</h3>
                        </div>
                        
                        <!-- Select All -->
                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input 
                                type="checkbox" 
                                id="selectAll"
                                class="w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer"
                            >
                            <span class="text-sm font-medium text-gray-700 group-hover:text-green-secondary transition-colors">
                                Select All Permissions
                            </span>
                        </label>
                    </div>

                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
                        <div class="flex gap-3">
                            <i class="fas fa-lightbulb text-blue-500 mt-0.5"></i>
                            <div>
                                <p class="text-sm text-blue-800 font-medium">About Permissions</p>
                                <p class="text-xs text-blue-700 mt-1">Permissions control what actions users with this role can perform. Select only the permissions necessary for this role's responsibilities.</p>
                            </div>
                        </div>
                    </div>

                    <!-- PERMISSION GROUP 1: Products & Inventory -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4 px-2">
                            <i class="fas fa-box text-green-secondary text-sm"></i>
                            <h4 class="text-md font-bold text-gray-700">Products & Inventory</h4>
                            <div class="flex-1 h-px bg-gray-200 ml-3"></div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <!-- Permission Card -->
                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="create-product"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Create Product</p>
                                    <p class="text-xs text-gray-500 mt-1">Add new products to inventory</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="edit-product"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Edit Product</p>
                                    <p class="text-xs text-gray-500 mt-1">Modify existing product details</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="delete-product"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Delete Product</p>
                                    <p class="text-xs text-gray-500 mt-1">Remove products from system</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="view-product"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">View Product</p>
                                    <p class="text-xs text-gray-500 mt-1">Access product information</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="edit-stock"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Edit Stock</p>
                                    <p class="text-xs text-gray-500 mt-1">Manage inventory quantities</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="manage-categories"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Manage Categories</p>
                                    <p class="text-xs text-gray-500 mt-1">Create and edit product categories</p>
                                </div>
                            </label>

                        </div>
                    </div>

                    <!-- PERMISSION GROUP 2: User Management -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4 px-2">
                            <i class="fas fa-users text-green-secondary text-sm"></i>
                            <h4 class="text-md font-bold text-gray-700">User Management</h4>
                            <div class="flex-1 h-px bg-gray-200 ml-3"></div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="manage-users"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Manage Users</p>
                                    <p class="text-xs text-gray-500 mt-1">Create, edit, and delete users</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="manage-roles"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Manage Roles</p>
                                    <p class="text-xs text-gray-500 mt-1">Create and assign user roles</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="view-user-activity"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">View User Activity</p>
                                    <p class="text-xs text-gray-500 mt-1">Monitor user logs and actions</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="ban-users"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Ban Users</p>
                                    <p class="text-xs text-gray-500 mt-1">Suspend or deactivate accounts</p>
                                </div>
                            </label>

                        </div>
                    </div>

                    <!-- PERMISSION GROUP 3: Reports & Analytics -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2 mb-4 px-2">
                            <i class="fas fa-chart-line text-green-secondary text-sm"></i>
                            <h4 class="text-md font-bold text-gray-700">Reports & Analytics</h4>
                            <div class="flex-1 h-px bg-gray-200 ml-3"></div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="view-reports"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">View Reports</p>
                                    <p class="text-xs text-gray-500 mt-1">Access analytics and reports</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="export-data"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Export Data</p>
                                    <p class="text-xs text-gray-500 mt-1">Download reports as CSV/PDF</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="view-financials"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">View Financials</p>
                                    <p class="text-xs text-gray-500 mt-1">Access financial data and reports</p>
                                </div>
                            </label>

                        </div>
                    </div>

                    <!-- PERMISSION GROUP 4: Content & Moderation -->
                    <div class="mb-6">
                        <div class="flex items-center gap-2 mb-4 px-2">
                            <i class="fas fa-file-alt text-green-secondary text-sm"></i>
                            <h4 class="text-md font-bold text-gray-700">Content & Moderation</h4>
                            <div class="flex-1 h-px bg-gray-200 ml-3"></div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            
                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="create-content"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Create Content</p>
                                    <p class="text-xs text-gray-500 mt-1">Add new posts and articles</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="edit-content"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Edit Content</p>
                                    <p class="text-xs text-gray-500 mt-1">Modify existing content</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="delete-content"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Delete Content</p>
                                    <p class="text-xs text-gray-500 mt-1">Remove content from platform</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="moderate-comments"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Moderate Comments</p>
                                    <p class="text-xs text-gray-500 mt-1">Review and manage user comments</p>
                                </div>
                            </label>

                            <label class="permission-card flex items-start gap-3 p-4 border-2 border-gray-200 rounded-xl cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permissions[]" 
                                    value="publish-content"
                                    class="permission-checkbox w-5 h-5 rounded border-gray-300 text-green-secondary focus:ring-2 focus:ring-green-secondary cursor-pointer mt-0.5"
                                >
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-gray-800">Publish Content</p>
                                    <p class="text-xs text-gray-500 mt-1">Make content publicly visible</p>
                                </div>
                            </label>

                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 mt-8 pt-6 border-t border-gray-200">
                    <button 
                        type="submit"
                        class="flex-1 sm:flex-initial bg-gradient-to-r from-green-primary to-green-secondary text-white font-semibold py-3 px-8 rounded-xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <i class="fas fa-shield-alt"></i>
                        <span>Create Role</span>
                    </button>
                    <button 
                        type="button"
                        onclick="window.history.back()"
                        class="flex-1 sm:flex-initial bg-gray-100 text-gray-700 font-semibold py-3 px-8 rounded-xl hover:bg-gray-200 transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <i class="fas fa-arrow-left"></i>
                        <span>Cancel</span>
                    </button>
                </div>

            </form>

        </div>

        <!-- Permission Summary Card -->
        <div class="mt-6 bg-white rounded-xl shadow-md p-6">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 bg-green-soft rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-info-circle text-green-secondary"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800 mb-2">Permission Guidelines</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-green-secondary mt-1 text-xs"></i>
                            <span>Only grant permissions that are essential for the role's responsibilities</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-green-secondary mt-1 text-xs"></i>
                            <span>Sensitive permissions (delete, export, manage users) should be carefully considered</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-green-secondary mt-1 text-xs"></i>
                            <span>You can modify role permissions at any time from the role management page</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-gray-400 text-sm flex items-center justify-center gap-2">
                <i class="fas fa-leaf text-green-secondary"></i>
                <span>Building a sustainable future together</span>
            </p>
        </div>

    </div>

    <script>
        // Select All Functionality
        const selectAllCheckbox = document.getElementById('selectAll');
        const permissionCheckboxes = document.querySelectorAll('input[name="permissions[]"]');
        
        selectAllCheckbox.addEventListener('change', function() {
            permissionCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
        
        // Update Select All if individual checkboxes change
        permissionCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const allChecked = Array.from(permissionCheckboxes).every(cb => cb.checked);
                const someChecked = Array.from(permissionCheckboxes).some(cb => cb.checked);
                
                selectAllCheckbox.checked = allChecked;
                selectAllCheckbox.indeterminate = someChecked && !allChecked;
            });
        });
        
        // Form submission (demo)
        document.getElementById('createRoleForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                roleName: document.getElementById('roleName').value,
                roleDescription: document.getElementById('roleDescription').value,
                permissions: Array.from(permissionCheckboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value)
            };
            
            console.log('Form submitted:', formData);
            alert('Role created successfully! (This is a demo)\n\nSelected ' + formData.permissions.length + ' permissions');
        });
    </script>

</body>
</html>