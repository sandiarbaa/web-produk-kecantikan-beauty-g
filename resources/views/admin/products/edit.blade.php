@extends('admin.layouts')

@section('adminProduct')
<div class="container">
    <h1>Edit Product</h1>
    
    <form action="{{ url('/admin/products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nama_produk">Product Name</label>
            <input type="text" id="nama_produk" name="nama_produk" class="form-control" value="{{ old('nama_produk', $product->nama_produk) }}" required>
            @error('nama_produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" id="harga" name="harga" class="form-control" value="{{ old('harga', $product->harga) }}" required>
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
          @if($product->gambar_produk)
              <div class="mt-2">
                  <img id="gambar_preview" src="{{ asset('storage/products/' . $product->gambar_produk) }}" alt="Product Image" width="150">
              </div>
          @endif
          <label for="gambar_produk">Image (optional)</label>
          <input type="file" id="gambar_produk" name="gambar_produk" class="form-control" onchange="previewImage()">
          @error('gambar_produk')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<script>
    function previewImage() {
        const input = document.getElementById('gambar_produk');
        const preview = document.getElementById('gambar_preview');
        
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
