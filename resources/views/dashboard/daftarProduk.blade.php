<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  {{-- @vite('resources/css/app.css') --}}
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
  <main class="container h-screen mx-auto border">
    @include('dashboard.partials.navbar')
    <div class="mt-8">
      <h2 class="mb-4 text-lg font-bold">10 Produk Terbaru!!!</h2>
      <ul class="p-4 list-disc list-inside bg-white rounded-md shadow-md">
        @foreach ($latestProducts as $product)
          <li>{{ $product->nama_produk }} - {{ $product->created_at->format('d M Y') }}</li>
        @endforeach
      </ul>
    </div>
        
  </main>
</body>
</html>
