<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ config('app.name', 'Laravel') }}</title>
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
        <h1 class="text-2xl font-medium mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Log In</h1>

        @if(session('status'))
            <div class="mb-4 text-sm text-green-600">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-[#706f6c] dark:text-[#A1A09A]">Email</label>
                  <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                      class="mt-1 block w-full px-3 py-2 border border-[#e3e3e0] rounded-sm shadow-sm bg-white text-[#1b1b18] dark:bg-white dark:text-[#1b1b18] placeholder:opacity-70" />
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

            <div class="flex items-center justify-between">
                <div>
                    <label class="inline-flex items-center text-sm text-[#706f6c]">
                        <input type="checkbox" name="remember" class="mr-2" /> Remember me
                    </label>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm underline text-[#f53003]">Forgot password?</a>
                    @endif
                </div>
            </div>

            <div>
                <button type="submit" class="w-full px-4 py-2 bg-[#1b1b18] text-white rounded-sm">Log in</button>
            </div>
        </form>

        <p class="mt-6 text-sm text-[#706f6c]">Belum punya akun? <a href="{{ route('register') }}" class="text-[#f53003] underline">Daftar</a></p>
    </div>
</body>
</html>
