  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
              <input type="hidden" name="product_id" wire:model="ids" />
              {{-- <input type="hidden" name="id" wire:model="ids" /> --}}
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" wire:model="name" />
                  @error('name') <span class="text-danger">{{$message}}</span> @enderror
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" wire:model="price" />
                @error('price') <span class="text-danger">{{$message}}</span> @enderror
              </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" wire:model="description" />
                @error('description') <span class="text-danger">{{$message}}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Product</button>
        </div>
      </div>
    </div>
  </div>