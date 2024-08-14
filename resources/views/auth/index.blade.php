<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Authentication</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-full min-h-screen flex items-center justify-center">
    <div class="container p-4 flex justify-center flex-col items-center">
      @yield('authLayouts')
    </div>
  </div>
</body>
</html>