<div x-data="{ count: 0 }" class="text-center p-4 sm:p-6 md:p-8">
    <h1 class="text-xl sm:text-2xl md:text-3xl mb-4">Contador: <span x-text="count"></span></h1>
    <button @click="count++" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-all sm:px-6 sm:py-3 md:px-8 md:py-4">
        Aumentar
    </button>
</div>
