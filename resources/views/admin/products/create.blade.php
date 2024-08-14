{{-- @extends('admin.layouts')

@section('adminProduct')
<div class="container">
    <h1 class="mb-5 text-2xl font-bold text-center">Create Product</h1>
    
    <form action="{{ url('/admin/products') }}" method="POST" enctype="multipart/form-data" class="text-center">
        @csrf

        <div class="form-group">
            <label for="nama_produk" class="block">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk" class="" value="{{ old('nama_produk') }}" required>
            @error('nama_produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" id="harga" name="harga" class="form-control" value="{{ old('harga') }}" required>
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gambar_produk">Image (optional)</label>
            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control">
            @error('gambar_produk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection --}}

@extends('admin.layouts')

@section('adminProduct')
<div class="container px-4 mx-auto">
    <h1 class="text-3xl font-extrabold text-center text-gray-900 dark:text-white">Create Product</h1>
    
    <form action="{{ url('/admin/products') }}" method="POST" enctype="multipart/form-data" class="max-w-lg p-6 mx-auto bg-white rounded-lg shadow-md shadow-purple-500 dark:bg-gray-800">
        @csrf

        <div class="mb-6">
            <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk" class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:focus:ring-purple-500 dark:focus:border-purple-500" value="{{ old('nama_produk') }}" required>
            @error('nama_produk')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
            <input type="number" id="harga" name="harga" class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:focus:ring-purple-500 dark:focus:border-purple-500" value="{{ old('harga') }}" required>
            @error('harga')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
            <select id="status" name="status" class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:focus:ring-purple-500 dark:focus:border-purple-500" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="gambar_produk" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Gambar Produk (Opsional)</label>
            <input type="file" id="gambar_produk" name="gambar_produk" class="block w-full text-gray-700 bg-white border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 dark:focus:ring-purple-500 dark:focus:border-purple-500">
            @error('gambar_produk')
                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-4 focus:ring-purple-500">Create Product</button>
    </form>
</div>
@endsection
