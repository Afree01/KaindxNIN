<div class="modal fade" id="inProductModal" tabindex="-1" aria-labelledby="inProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inProductModalLabel">Stock Product In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="inProductForm" action="{{ route('admin.transactionStore', 'in') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product" class="form-label">Product</label>
                        <select class="form-select" id="productIn" name="productIn" required>
                            <option value="">Select Product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <select class="form-select" id="colorIn" name="colorIn" required>
                            <option value="">Select Color</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <select class="form-select" id="locationIn" name="locationIn" required>
                            <option value="">Select Location</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input 
                            type="number" 
                            class="form-control" 
                            id="quantityIn" 
                            name="quantityIn" 
                            placeholder="Enter quantity" 
                            required
                            oninput="formatCurrency(this)">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="dateIn" 
                            name="dateIn" 
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="remark" class="form-label">Remark</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="remarkIn" 
                            name="remarkIn" 
                            placeholder="Enter remark">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Product In</button>
                </form>
            </div>
        </div>
    </div>
</div>
