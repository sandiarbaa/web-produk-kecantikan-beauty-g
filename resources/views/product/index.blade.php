<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="flex items-center justify-between w-full h-10 px-5 text-white bg-purple-500">
    @guest
      <div></div>
    @endguest
    @guest
    <div>
      <a href="{{ url('/login') }}" class="px-3 py-1 font-semibold text-black bg-white rounded-md">Login</a> | 
      <a href="{{ url('/register') }}" class="px-3 py-1 font-semibold text-black bg-white rounded-md">Register</a> 
    </div>
    @endguest
    
    @auth
    <h1>Welcome, {{ auth()->user()->nama }}</h1>    
    @endauth
    
    @auth
    <form action="{{ url('/logout') }}" method="POST">
      @csrf
      <button type="submit">Logout</button>
    </form>
    @endauth
  </nav>

  <div class="flex p-10">
    @forelse($products as $product)
        <div class="w-full max-w-[200px] m-3 border rounded-lg overflow-hidden shadow">
          <img src="{{ asset('storage/products/' . $product->gambar_produk) }}" alt="Product Image" class="object-cover w-full h-60">
          <div class="p-2">
          <h2 class="text-xl font-semibold">{{ $product->nama_produk }}</h2>
          <p>Harga: Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
          <div type="button" class="px-3 py-2 mt-5 font-bold text-white bg-purple-500 border rounded-md w-14">Beli</div>
          </div>
        </div>
    @empty
      <div>
        <p>Tidak ada produk yang tersedia.</p>
      </div>
    @endforelse
    </div>
</body>
</html>