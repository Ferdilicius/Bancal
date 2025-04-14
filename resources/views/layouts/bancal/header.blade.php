<header class="bg-gray-800 text-white" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a href="/" class="text-lg font-bold">Bancal</a>
        <button @click="open = !open" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <nav class="hidden md:flex space-x-4">
            <a href="#" class="hover:text-gray-400">Inicio</a>
            <a href="#" class="hover:text-gray-400">Servicios</a>
            <a href="#" class="hover:text-gray-400">Contacto</a>
        </nav>
    </div>
    <div x-show="open" class="md:hidden bg-gray-700">
        <a href="#" class="block px-4 py-2 hover:bg-gray-600">Inicio</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-600">Servicios</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-600">Contacto</a>
    </div>
</header>
