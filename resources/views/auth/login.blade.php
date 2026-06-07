<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <div class="bg-white rounded-3xl shadow-xl p-10">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-900">
                    Login
                </h1>

                <p class="text-slate-500 mt-2">
                    Silakan masuk ke akun Anda
                </p>

            </div>
@if($errors->any())
    <div class="mb-5 p-3 rounded-xl bg-red-100 text-red-700 text-sm">
        {{ $errors->first() }}
    </div>
@endif
       <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <div class="mb-5">
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                        required>
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-700 text-white py-3 rounded-xl font-semibold hover:bg-blue-800 transition duration-300">
                    Login
                </button>

            </form>

        </div>

        <p class="text-center text-slate-500 text-sm mt-6">
            © 2026 Laravel App
        </p>

    </div>

</body>

</html>