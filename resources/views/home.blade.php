<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Awesome App</title>
    <!-- Using Tailwind via CDN for quick prototyping -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-xl p-8 bg-white rounded-lg shadow-lg text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Awesome App</h1>
            <p class="text-lg mb-8">
                Experience a fantastic design and an intuitive user interface. Join us now to explore exclusive features tailored just for you.
            </p>
            <div class="flex justify-center space-x-4">
                <!-- Make sure the named routes 'login' and 'register' exist in your routes -->
                <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-200">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-200">
                    Register
                </a>
            </div>
        </div>
    </div>
</body>

</html>