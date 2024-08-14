<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Page</title>
  @vite('resources/css/app.css')
</head>
<body class="p-5">
  <h1 class="text-xl font-bold">Admin Page</h1>
  <p class="">Welcome, {{ auth()->user()->nama }}</p>
  <p class="">role: {{ auth()->user()->role }}</p>

  <form action="{{ url('/logout') }}" method="POST">
  @csrf
  <button type="submit" class="font-semibold text-white bg-black border rounded-md px-4 py-1.5">Logout</button>
  </form>
</body>
</html>