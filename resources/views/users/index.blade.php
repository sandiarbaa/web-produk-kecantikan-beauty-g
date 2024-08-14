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
    <h1 class="mb-5 text-lg font-bold text-center">Daftar User</h1>

    <div class="relative mx-10 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-white bg-purple-500">
                    <th scope="col" class="px-6 py-3">
                        Nama User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Registrasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->nama }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->is_approved ? 'Approved' : 'Pending' }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('users.show', $user->id) }}" class="px-3 py-2 text-white bg-blue-500 rounded-md">Detail</a>
                            @if(!$user->approved)
                                <form action="{{ route('users.approve', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="px-3 py-2 text-white bg-green-500 rounded-md">Approve</button>
                                </form>
                            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(session('success'))
        <div class="p-2 text-white bg-green-500 rounded">
            {{ session('success') }}
        </div>
    @endif

  </main>
</body>
</html>
