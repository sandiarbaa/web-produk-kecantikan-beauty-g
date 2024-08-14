<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|in:active,inactive',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = new Product($request->only('nama_produk', 'harga', 'status'));

        if ($request->hasFile('gambar_produk')) {
            $path = $request->file('gambar_produk')->store('public/products');
            $product->gambar_produk = basename($path);
        }

        $product->save();

        return redirect('/admin/products')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|in:active,inactive',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product->fill($request->only('nama_produk', 'harga', 'status'));

        if ($request->hasFile('gambar_produk')) {
            $path = $request->file('gambar_produk')->store('public/products');
            $product->gambar_produk = basename($path);
        }

        $product->save();

        return redirect('/admin/products')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/products')->with('success', 'Product deleted successfully.');
    }
}
