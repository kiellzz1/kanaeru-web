<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ showMenu: false }" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kanaeru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-gray-950 text-white min-h-screen">

    <nav class="bg-gray-900 px-6 py-4 flex justify-between items-center sticky top-0 z-50 shadow-md">
        <div class="text-xl font-bold tracking-widest text-blue-400">Kanaeru</div>

        <div class="space-x-6 hidden md:flex">
            @php $current = request()->route()->getName(); @endphp

            @foreach ([
                'home' => 'Home',
                'about' => 'About Me',
                'projects' => 'Project',
                'contact' => 'Contact',
                'profile' => 'Profile',
            ] as $route => $label)
                <a href="{{ route($route) }}"
                   class="relative pb-1 transition {{ $current === $route ? 'text-blue-400 after:w-full' : 'text-white after:w-0' }}
                          after:absolute after:bottom-0 after:left-0 after:h-[2px] after:bg-blue-400
                          after:transition-all after:duration-300 hover:after:w-full">
                    {{ $label }}
                </a>
            @endforeach
        </div>

        <div class="md:hidden">
            <button @click="showMenu = !showMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div class="md:hidden px-6 pb-4" x-show="showMenu" x-transition>
        <div class="space-y-2">
            @foreach ([
                'home' => 'Home',
                'about' => 'About Me',
                'projects' => 'Project',
                'contact' => 'Contact',
                'profile' => 'Profile',
            ] as $route => $label)
                <a href="{{ route($route) }}" class="block text-white hover:text-blue-400">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>

    <main
        x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 100)"
        x-show="show"
        x-transition:enter="transition-opacity duration-500"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        class="transition-all duration-500 ease-in-out p-6"
    >
        {{ $slot }}
    </main>

    <footer class="text-center text-sm text-gray-500 mt-12 pb-6">
        © {{ date('Y') }} Kanaeru — Built by Me.
        <a href="https://github.com/kiellzz1" target="_blank" class="text-blue-400 hover:underline ml-1">
            GitHub
        </a>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 700,
            once: true,
        });
    </script>

</body>
</html>
