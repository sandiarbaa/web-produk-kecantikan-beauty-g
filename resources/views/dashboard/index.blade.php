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
    <div class="p-5">
        <div class="grid grid-cols-2 gap-4">
            <div class="p-4 bg-white rounded-md shadow-md shadow-purple-500">
                <h2 class="text-lg font-bold">Jumlah Pengguna Aktif: {{ $activeUsersCount }}</h2>
            </div>
            <div class="p-4 bg-white rounded-md shadow-md shadow-purple-500">
                <h2 class="text-lg font-bold">Jumlah Pengguna: {{ $totalUsersCount }}</h2>
            </div>
            <div class="p-4 bg-white rounded-md shadow-md shadow-purple-500">
                <h2 class="text-lg font-bold">Jumlah Produk: {{ $totalProductsCount }}</h2>
            </div>
            <div class="p-4 bg-white rounded-md shadow-md shadow-purple-500">
                <h2 class="text-lg font-bold">Jumlah Produk Aktif: {{ $activeProductsCount }}</h2>
            </div>
        </div>
  </main>
</body>
</html>

{{-- <form action="{{ url('/logoutAdmin') }}" method="POST">
      @csrf
      <button type="submit" class="font-semibold text-white bg-black border rounded-md px-4 py-1.5">Logout</button>
    </form> --}}