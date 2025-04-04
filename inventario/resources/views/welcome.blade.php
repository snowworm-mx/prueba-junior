<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página de inicio de Laravel">

    <title>Inventario</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" href="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/logo-dark.png?alt=media&token=e30320fd-51f3-47cb-ae67-f09142e0f5c6">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        laravel: '#FF2D20',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .bg-radial-light {
                background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
                background-size: 16px 16px;
            }
            .bg-radial-dark {
                background-image: radial-gradient(#3f3f46 1px, transparent 1px);
                background-size: 16px 16px;
            }
        }
    </style>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-zinc-900 dark:text-white/80">
    <div class="min-h-screen flex flex-col">
        <!-- Hero Section -->
        <div class="relative flex-1 flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-radial-light dark:bg-radial-dark"></div>
                <div class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2">
                    <div class="h-[500px] w-[1000px] rounded-full bg-[radial-gradient(#ff2d2010_0%,transparent_70%)] dark:bg-[radial-gradient(#ff2d2020_0%,transparent_70%)]"></div>
                </div>
            </div>

            <div class="relative z-10 w-full max-w-7xl px-6 py-20 lg:py-32">
                <div class="text-center">
                    <div class="flex justify-center mb-8">
                        <svg class="h-16 w-auto text-laravel" viewBox="0 0 62 65" fill="none" xmlns="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/logo-dark.png?alt=media&token=e30320fd-51f3-47cb-ae67-f09142e0f5c6">
                            <img src="https://firebasestorage.googleapis.com/v0/b/klomtor-c7195.appspot.com/o/logo-dark.png?alt=media&token=e30320fd-51f3-47cb-ae67-f09142e0f5c6" alt="">
                        </svg>
                    </div>

                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl mb-6">
                        Ing. Tenoch Moises Vázquez Chávez
                    </h1>
                    
                    <p class="text-lg leading-8 text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-10">
                         Selecciona alguna opción de abajo.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="rounded-lg bg-laravel px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#e0261a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-laravel transition-colors">
                                    Ir al Panel
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="rounded-lg bg-laravel px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#e0261a] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-laravel transition-colors">
                                    Iniciar Sesión
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="rounded-lg px-6 py-3 text-sm font-semibold text-gray-900 dark:text-white ring-1 ring-gray-900/10 dark:ring-white/10 hover:ring-gray-900/20 dark:hover:ring-white/20 transition-colors">
                                        Crear Cuenta
                                    </a>
                                @endif
                            @endauth
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-8 border-t border-gray-200 dark:border-gray-800">
            <div class="mx-auto max-w-7xl px-6">
                <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                    <div class="flex items-center gap-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </p>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <a href="https://laravel.com/docs" target="_blank" class="text-sm text-gray-500 hover:text-laravel dark:text-gray-400 dark:hover:text-laravel transition-colors">
                            Documentación
                        </a>
                        <a href="https://laravel-news.com" target="_blank" class="text-sm text-gray-500 hover:text-laravel dark:text-gray-400 dark:hover:text-laravel transition-colors">
                            Noticias
                        </a>
                        <a href="https://github.com/laravel/laravel" target="_blank" class="text-sm text-gray-500 hover:text-laravel dark:text-gray-400 dark:hover:text-laravel transition-colors">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>