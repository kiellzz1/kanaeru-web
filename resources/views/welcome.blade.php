<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanaeru - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to bottom, #0f172a, #1e293b);
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out forwards;
        }
    </style>
</head>
<body class="text-white font-sans">

    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center h-screen text-center px-6 animate-fade-in">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4">Kanaeru</h1>
        <p class="text-lg md:text-xl text-gray-400 mb-8 max-w-2xl">
            Fast. Minimal. Powerful. Your Laravel-based personal dashboard system.
        </p>
        <a href="{{ route('register') }}" class="bg-white text-black font-semibold px-6 py-3 rounded hover:bg-gray-300 transition">
            Get Started
        </a>
    </section>

    <!-- Footer -->
    <footer class="absolute bottom-4 w-full text-center text-sm text-gray-400">
        &copy; {{ date('Y') }} Kanaeru Team. Inspired by crDroid & Evolution-X.
    </footer>

</body>
</html>
