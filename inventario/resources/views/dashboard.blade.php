<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Agregamos CDN de Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Mensaje animado con ID para el control JS -->
                    <div id="welcomeMessage" class="text-center">
                        <span class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            {{ __("Bienvenido!!") }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para activar animaciones -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const welcomeMessage = document.getElementById('welcomeMessage');
            
            // Agregamos las clases de animación
            welcomeMessage.classList.add('animate__animated', 'animate__bounceIn', 'animate__delay-1s');
            
            // Efecto al hacer hover (solo en desktop)
            if (window.innerWidth > 768) {
                welcomeMessage.addEventListener('mouseenter', function() {
                    this.classList.add('animate__rubberBand');
                    this.classList.remove('animate__bounceIn');
                    
                    // Resetear la animación después de completarse
                    setTimeout(() => {
                        this.classList.remove('animate__rubberBand');
                    }, 1000);
                });
            }
        });
    </script>

    <!-- Estilos adicionales -->
    <style>
        /* Asegurar que el gradiente de texto funcione en todos los navegadores */
        .bg-clip-text {
            -webkit-background-clip: text;
            background-clip: text;
        }
        
        /* Efecto de hover adicional */
        #welcomeMessage:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
    </style>
</x-app-layout>