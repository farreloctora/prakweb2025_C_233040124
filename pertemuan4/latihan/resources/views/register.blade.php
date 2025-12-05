<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>/* fallback minimal styles provided by project */</style>
    @endif
</head>
<body class="min-h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white dark:bg-[#161615] p-8 rounded-lg shadow-[0_4px_14px_rgba(0,0,0,0.06)]">
        <h1 class="text-2xl font-medium mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Register</h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Nama</label>
                  <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
                      class="mt-1 block w-full px-3 py-2 border border-[#e3e3e0] rounded-sm shadow-sm bg-white text-[#1b1b18] dark:bg-white dark:text-[#1b1b18]" />
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Email</label>
                  <input id="email" name="email" type="email" value="{{ old('email') }}" required
                      class="mt-1 block w-full px-3 py-2 border border-[#e3e3e0] rounded-sm shadow-sm bg-white text-[#1b1b18] dark:bg-white dark:text-[#1b1b18]" />
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Password</label>
                  <input id="password" name="password" type="password" required
                      class="mt-1 block w-full px-3 py-2 border border-[#e3e3e0] rounded-sm shadow-sm bg-white text-[#1b1b18] dark:bg-white dark:text-[#1b1b18]" />
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Konfirmasi Password</label>
                  <input id="password_confirmation" name="password_confirmation" type="password" required
                      class="mt-1 block w-full px-3 py-2 border border-[#e3e3e0] rounded-sm shadow-sm bg-white text-[#1b1b18] dark:bg-white dark:text-[#1b1b18]" />
            </div>

            <div>
                <button type="submit" class="w-full px-4 py-2 bg-[#1b1b18] text-white rounded-sm">Daftar</button>
            </div>
        </form>

        <p class="mt-6 text-sm text-[#706f6c]">Sudah punya akun? <a href="{{ route('login') }}" class="text-[#f53003] underline">Login</a></p>
    </div>
</body>
</html>
