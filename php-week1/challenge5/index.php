<!-- TODO -->
<!-- create PHP variables to store information in the form -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Product Form</title>
  <style>
    /* Reset default browser margins and paddings */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Center everything perfectly on the screen with a nice gradient background */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
      padding: 20px;
    }

    /* The main product card container */
    .product-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 500px;
      /* Slightly wider to comfortably give room for item details */
      transition: transform 0.3s ease;
    }

    /* Subtle lift effect on hover */
    .product-container:hover {
      transform: translateY(-5px);
    }

    /* Form Header styling */
    .product-header {
      text-align: center;
      margin-bottom: 25px;
    }

    .product-header h2 {
      color: #1f2937;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .product-header p {
      color: #6b7280;
      font-size: 14px;
    }

    /* Flexbox row for pricing and stock inventory side-by-side */
    .input-row {
      display: flex;
      gap: 15px;
    }

    /* Input styling and grouping */
    .input-group {
      position: relative;
      margin-bottom: 18px;
      width: 100%;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      color: #4b5563;
      font-size: 14px;
      font-weight: 500;
    }

    /* Base rule for text inputs, select dropdowns, and textareas */
    .input-group input,
    .input-group select,
    .input-group textarea {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid #e5e7eb;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
      color: #1f2937;
      background-color: #fff;
    }

    /* Prevent messy stretching on descriptions */
    .input-group textarea {
      resize: vertical;
      min-height: 80px;
    }

    /* Focus states for input controls */
    .input-group input:focus,
    .input-group select:focus,
    .input-group textarea:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
    }

    /* Prefix Styling (for the dollar sign input wrapper) */
    .price-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .price-wrapper .currency-symbol {
      position: absolute;
      left: 16px;
      color: #6b7280;
      font-weight: 500;
      pointer-events: none;
    }

    .price-wrapper input {
      padding-left: 32px;
      /* Leaves room for the fixed $ symbol */
    }

    /* Custom File Upload Styling wrapper */
    .file-upload-wrapper {
      border: 2px dashed #e5e7eb;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      background: #f9fafb;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .file-upload-wrapper:hover {
      border-color: #4f46e5;
      background: #f3f4f6;
    }

    .file-upload-wrapper input[type="file"] {
      display: none;
      /* Hide standard ugly file browser button */
    }

    .file-upload-label {
      cursor: pointer;
      color: #4b5563;
      font-size: 14px;
    }

    .file-upload-label span {
      color: #4f46e5;
      font-weight: 600;
    }

    /* Submit Button styling */
    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #4f46e5;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.2s ease, transform 0.1s ease;
      box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2);
    }

    .submit-btn:hover {
      background-color: #4338ca;
    }

    .submit-btn:active {
      transform: scale(0.98);
    }

    /* Responsive twist for the Pricing/Stock grid on narrow viewports */
    @media (max-width: 480px) {
      .input-row {
        flex-direction: column;
        gap: 0;
      }
    }
  </style>
</head>

<body>

  <div class="product-container">
    <div class="product-header">
      <h2>Add New Product</h2>
      <p>List a new item in your store inventory</p>
    </div>

    <!-- Form tag set to handle multi-part file payloads (images) -->
    <form action="#" method="POST" enctype="multipart/form-data">

      <div class="input-group">
        <label for="product-name">Product Name</label>
        <input type="text" id="product-name" name="product_name" placeholder="e.g. Wireless Noise-Canceling Headphones" required>
      </div>

      <div class="input-group">
        <label for="category">Category</label>
        <select id="category" name="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="electronics">Electronics</option>
          <option value="clothing">Clothing & Apparel</option>
          <option value="home">Home & Kitchen</option>
          <option value="beauty">Beauty & Personal Care</option>
          <option value="sports">Sports & Outdoors</option>
        </select>
      </div>

      <!-- Price and Inventory quantities side by side -->
      <div class="input-row">
        <div class="input-group">
          <label for="price">Price (USD)</label>
          <div class="price-wrapper">
            <span class="currency-symbol">$</span>
            <input type="number" id="price" name="price" step="0.01" min="0" placeholder="0.00" required>
          </div>
        </div>
        <div class="input-group">
          <label for="stock">Available Stock</label>
          <input type="number" id="stock" name="stock" min="0" placeholder="e.g. 50" required>
        </div>
      </div>

      <div class="input-group">
        <label for="description">Product Description</label>
        <textarea id="description" name="description" placeholder="Provide a brief description detailing product highlights, dimensions, features, etc..." required></textarea>
      </div>

      <div class="input-group">
        <label>Product Images</label>
        <div class="file-upload-wrapper" onclick="document.getElementById('product-image').click();">
          <label for="product-image" class="file-upload-label">
            <span>Click to upload</span> or drag and drop<br>
            <small style="color: #9ca3af; display: block; margin-top: 4px;">PNG, JPG up to 5MB</small>
          </label>
          <input type="file" id="product-image" name="product_image" accept="image/*">
        </div>
      </div>

      <button type="submit" class="submit-btn">Publish Product</button>
    </form>
  </div>

</body>

</html>