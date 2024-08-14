<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
  @vite('resources/css/app.css')
</head>
<body>
  @if (session('loginAdminError'))
  <p class="mb-5 italic font-semibold">{{ session('loginAdminError') }}</p>
  @endif
  
  <section class="flex items-center justify-center w-full min-h-screen">
    <form action="/loginAdmin" method="POST" class="w-full max-w-xs p-5 border-2 rounded-lg">
      <h1 class="mb-3 text-lg italic font-bold">Login Admin</h1>
      @csrf
      <div class="mb-3">
        <label for="email" class="block font-semibold capitalize">email</label>
        <input type="email" name="email" id="email" class="border-[1.5px] rounded-md px-2 py-1 w-full @error('email') text-red-500 @enderror" value="{{ old('email') }}">
        @error('email')
          <p class="text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="block font-semibold capitalize">password</label>
        <input type="password" name="password" id="password" class="border-[1.5px] rounded-md px-2 py-1 w-full @error('password') text-red-500 @enderror" value="{{ old('password') }}">
        @error('password')
          <p class="text-red-500">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="px-4 py-2 font-semibold text-white bg-black rounded-md">Register</button>
    </form>
  </section>
</body>
</html>