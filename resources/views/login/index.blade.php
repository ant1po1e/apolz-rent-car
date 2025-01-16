<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APOLZ RENT - Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-sm w-full max-w-md">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-center">
                <span class="text-blue-500"># APOLZ RENT</span>
                <span class="text-gray-800 ml-2">Sign In</span>
            </h1>
        </div>

        @session('success')
        <div class="p-4 mb-4 text-sm border border-green-600 text-green-800 rounded-lg bg-green-50" role="alert">
            <span class="font-medium">Success</span> Change a few things up and try submitting again.
        </div>
        @endsession
        <form class="space-y-4" action="{{ route('login.process') }}" method="POST">
            @csrf
            <!-- Email -->
            @error('email')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            <div>
                <input type="text" name="email" placeholder="Email address" value="{{ old('email') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                    required />
            </div>

            <!-- Password -->
            @error('password')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            <div>
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                    required />
            </div>

            <!-- Sign Up Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition-colors">
                Sign In
            </button>

            <!-- Sign In Link -->
            <div class="text-center text-gray-600 text-sm mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign Up</a>
            </div>
        </form>
    </div>
</body>

</html>
