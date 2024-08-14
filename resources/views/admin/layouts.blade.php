<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product Admin</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('dashboard.partials.navbar')
  <div class="my-10">
    @yield('adminProduct')
  </div>
</body>
</html>