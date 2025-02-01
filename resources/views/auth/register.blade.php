<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Your Account</title>
    <!-- Tailwind CSS CDN for quick prototyping -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-400 to-purple-600 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Create Your Account</h2>

        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="mb-4">
            <ul class="list-disc list-inside text-red-500">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register.submit') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 p-2 w-full border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-200">
                Register
            </button>
        </form>

        <!-- Link to Login -->
        <p class="mt-6 text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>.
        </p>
    </div>
</body>

</html>