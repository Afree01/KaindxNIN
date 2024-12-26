<div class="modal fade" id="addColorModal" tabindex="-1" aria-labelledby="addColorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addColorModalLabel">Add New Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addColorForm" action="{{ route('admin.colorStore') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="colorName" class="form-label">Color Name</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="colorName" 
                            name="color_name" 
                            placeholder="Enter color name" 
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="colorCode" class="form-label">Color Code</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="colorCode" 
                            name="color_code" 
                            placeholder="Enter color code" 
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="hexCode" class="form-label">Hex Code</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="hexCode" 
                            name="hex_code" 
                            placeholder="Enter hex code" 
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Color</button>
                </form>
            </div>
        </div>
    </div>
</div>
