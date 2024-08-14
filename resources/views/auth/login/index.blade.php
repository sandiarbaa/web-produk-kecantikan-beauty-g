@extends('auth.index')

@section('authLayouts')
@if (session('registerSuccess'))
  <p class="mb-5 italic font-semibold">{{ session('registerSuccess') }}</p>
@endif

@if (session('loginError'))
  <p class="mb-5 italic font-semibold">{{ session('loginError') }}</p>
@endif

<form action="{{ url('/login') }}" method="POST" class="w-full max-w-xs p-5 border-2 rounded-lg">
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

  <button type="submit" class="px-4 py-2 font-semibold text-white bg-black rounded-md">Login</button>
</form>
<p>Belum punya akun? Silahkan <a href="{{ url('/register') }}" class="underline">register</a></p>
<a href="{{ url('/') }}" class="underline">Kembali ke daftar produk</a>
@endsection