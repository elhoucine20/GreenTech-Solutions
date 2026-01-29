<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #008a27 0%, #6B8E23 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 600px;
            padding: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            font-size: 28px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        label .required {
            color: #e74c3c;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #6B8E23;
            box-shadow: 0 0 0 3px rgba(107, 142, 35, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        input[type="file"] {
            padding: 10px;
            cursor: pointer;
        }

        input[type="file"]::file-selector-button {
            background: #8B7355;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            margin-right: 12px;
            transition: background 0.3s ease;
        }

        input[type="file"]::file-selector-button:hover {
            background: #6F5B43;
        }

        .current-image {
            margin-top: 12px;
            margin-bottom: 12px;
        }

        .current-image img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            border: 2px solid #e0e0e0;
        }

        .current-image-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .image-preview {
            margin-top: 12px;
            display: none;
        }

        .image-preview img {
            max-width: 200px;
            max-height: 200px;
            border-radius: 8px;
            border: 2px solid #e0e0e0;
        }

        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 32px;
        }

        button {
            flex: 1;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #6B8E23;
            color: white;
        }

        .btn-primary:hover {
            background: #556B1E;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(107, 142, 35, 0.4);
        }

        .btn-secondary {
            background: #f5f5f5;
            color: #333;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
        }

        .helper-text {
            font-size: 12px;
            color: #666;
            margin-top: 4px;
        }

        .product-id-badge {
            display: inline-block;
            background: #f0f0f0;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
        }

        @media (max-width: 640px) {
            .container {
                padding: 24px;
            }

            h1 {
                font-size: 24px;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Product</h1>
        <p class="subtitle">Modify the product details below</p>
        <div class="product-id-badge">Product ID: <span id="productIdDisplay">Loading...</span></div>

        <form id="productForm" action="">
            <input type="hidden" id="product_id" name="product_id">

            <div class="form-group">
                <label for="name">
                    Product Name <span class="required">*</span>
                </label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Enter product name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="price">
                    Price <span class="required">*</span>
                </label>
                <input 
                    type="number" 
                    id="price" 
                    name="price" 
                    placeholder="0.00"
                    step="0.01"
                    min="0"
                    required
                >
                <div class="helper-text">Enter the price in your currency</div>
            </div>

            <div class="form-group">
                <label for="description">
                    Description <span class="required">*</span>
                </label>
                <textarea 
                    id="description" 
                    name="description" 
                    placeholder="Enter product description"
                    required
                ></textarea>
            </div>

            <div class="form-group">
                <label for="image">
                    Product Image
                </label>
                
                <div class="current-image" id="currentImageContainer">
                    <div class="current-image-label">Current Image:</div>
                    <img id="currentImg" src="" alt="Current product image">
                </div>

                <input 
                    type="file" 
                    id="image" 
                    name="image" 
                    accept="image/*"
                >
                <div class="helper-text">Leave empty to keep current image, or upload a new one to replace it</div>
                
                <div class="image-preview" id="imagePreview">
                    <div class="current-image-label">New Image Preview:</div>
                    <img id="previewImg" src="" alt="Preview">
                </div>
            </div>

            <div class="form-group">
                <label for="category_id">
                    Category <span class="required">*</span>
                </label>
                <select id="category_id" name="category_id" required>
                    <option value="">Select a category</option>
                    <option value="1">Electronics</option>
                    <option value="2">Clothing</option>
                    <option value="3">Home & Garden</option>
                    <option value="4">Sports & Outdoors</option>
                    <option value="5">Books</option>
                    <option value="6">Toys & Games</option>
                    <option value="7">Beauty & Personal Care</option>
                    <option value="8">Food & Beverages</option>
                </select>
            </div>

            <div class="button-group">
                <button type="button" class="btn-secondary" onclick="cancelUpdate()">Cancel</button>
                <button type="submit" name="submit" class="btn-primary">Update Product</button>
            </div>
        </form>
    </div>

    <!-- <script>
        // Simulated product data - In real app, fetch from backend
        const productData = {
            id: 123,
            name: 'Sample Product',
            price: 29.99,
            description: 'This is a sample product description that will be updated.',
            image: 'https://via.placeholder.com/200',
            category_id: 1
        };

        // Load product data when page loads
        window.addEventListener('DOMContentLoaded', function() {
            loadProductData(productData);
        });

        // Function to load product data into form
        function loadProductData(product) {
            document.getElementById('product_id').value = product.id;
            document.getElementById('productIdDisplay').textContent = product.id;
            document.getElementById('name').value = product.name;
            document.getElementById('price').value = product.price;
            document.getElementById('description').value = product.description;
            document.getElementById('category_id').value = product.category_id;
            
            // Display current image
            if (product.image) {
                document.getElementById('currentImg').src = product.image;
                document.getElementById('currentImageContainer').style.display = 'block';
            }
        }

        // Image preview functionality for new image
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('previewImg').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                document.getElementById('imagePreview').style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            
            // Convert to object for display (in real app, send to backend)
            const updatedProductData = {
                id: formData.get('product_id'),
                name: formData.get('name'),
                price: formData.get('price'),
                description: formData.get('description'),
                category_id: formData.get('category_id')
            };

            // Only include image if a new one was selected
            if (formData.get('image').name) {
                updatedProductData.image = formData.get('image').name;
            }
            
            console.log('Updated Product Data:', updatedProductData);
            alert('Product updated successfully!\nCheck console for data.');
            
            // In a real application, you would send this to your backend:
            // fetch(`/api/products/${formData.get('product_id')}`, {
            //     method: 'PUT', // or 'PATCH'
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => {
            //     alert('Product updated successfully!');
            //     window.location.href = '/products'; // Redirect to products list
            // })
            // .catch(error => {
            //     console.error('Error:', error);
            //     alert('Error updating product');
            // });
        });

        // Cancel update
        function cancelUpdate() {
            if (confirm('Are you sure you want to cancel? Any unsaved changes will be lost.')) {
                // In a real app, redirect back to products list
                window.history.back();
                // Or: window.location.href = '/products';
            }
        }
    </script> -->
</body>
</html>