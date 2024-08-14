@extends('auth.index')

@section('authLayouts')

<form action="/register" method="POST" class="w-full max-w-xs p-5 border-2 rounded-lg">
  @csrf
  <div class="mb-3">
    <label for="nama" class="block font-semibold capitalize">nama</label>
    <input type="text" name="nama" id="nama" class="border-[1.5px] rounded-md px-2 py-1 w-full @error('nama') text-red-500 @enderror" value="{{ old('nama') }}">
    @error('nama')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="nomor_telepon" class="block font-semibold capitalize">nomor telepon</label>
    <input type="text" name="nomor_telepon" id="nomor_telepon" class="border-[1.5px] rounded-md px-2 py-1 w-full @error('nomor_telepon') text-red-500 @enderror" value="{{ old('nomor_telepon') }}">
    @error('nomor_telepon')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
  </div>
  
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

  {{-- <div class="mb-3">
    <label for="role" class="block font-semibold capitalize">role</label>
    <select name="role" id="role" class="border-[1.5px] rounded-md px-2 py-1 w-full @error('role') text-red-500 @enderror">
      <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
      <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
    </select>
    @error('role')
      <p class="text-red-500">{{ $message }}</p>
    @enderror
  </div> --}}

  <button type="submit" class="px-4 py-2 font-semibold text-white bg-black rounded-md">Register</button>
</form>
<p>Sudah punya akun? Silahkan <a href="{{ url('/login') }}" class="underline">login</a></p>

@endsection