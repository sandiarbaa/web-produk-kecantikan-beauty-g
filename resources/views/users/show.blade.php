<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('dashboard.partials.navbar')

  <div class="w-full max-w-sm p-3 mx-auto mt-20 border rounded-md shadow shadow-purple-500">
    <h1 class="text-xl">Nama User: <span class="font-bold">{{ $user->nama }}</span></h1>
    <h1 class="mt-5 font-semibold">Email: {{ $user->email }}</h1>
    <h1 class="font-semibold">Nomor Telepon: {{ $user->nomor_telepon }}</h1>
    <h1 class="font-semibold">Registrasi: {{ $user->created_at->format('d M Y') }}</h1>
  </div>
</body>
</html>