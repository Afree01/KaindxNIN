<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductInModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" action="{{ route('admin.productStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="productName" 
                            name="product_name" 
                            placeholder="Enter product name" 
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="productCode" 
                            name="product_code" 
                            placeholder="Enter product code" 
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="productType" class="form-label">Product Type</label>
                        <select class="form-select" id="productType" name="product_type" required>
                            <option value="">Select Product Type</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="productPrice" 
                            name="product_price" 
                            placeholder="Enter product price" 
                            required
                            oninput="formatCurrency(this)">
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Image</label>
                        <input 
                            type="file" 
                            class="form-control" 
                            id="productImage" 
                            name="product_image" 
                            accept="image/*" 
                            onchange="previewImage(event)">
                        <div class="mt-3">
                            <img id="productImagePreview" src="#" alt="Image Preview" style="max-width: 200px; display: none;">
                            <p id="productImageError" style="display: none;">Ukuran file gambar tidak boleh lebih dari 2MB</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Product Description</label>
                        <textarea class="form-control" id="productDescription" name="product_description" placeholder="Enter product description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="is_active" class="form-label">Status</label>
                        <div class="form-check form-switch">
                            <input 
                                class="form-check-input check-size" 
                                id="is_active" 
                                name="is_active" 
                                type="checkbox" 
                                role="switch" 
                                value="1" 
                                checked>
                            <label class="form-check-label" for="is_active">Active</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
