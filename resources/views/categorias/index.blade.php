<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('categorias.create') }}">+ Categoria</x-link-button>
                </div>
            
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                    @foreach ($categorias as $categoria)
                            <div class="border p-4 rounded shadow bg-gray-50 dark:bg-gray-900">
                                <h2 class="text-xl font-bold">{{ $categoria->nome }}</h2>
                                
                                <div class="mt-4 flex flex-wrap gap-3">
                                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded transition">
                                            Apagar Categoria
                                        </button>
                                    </form>

                                    <a href="{{ route('categorias.edit', $categoria->id) }}" 
                                        class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded transition">
                                        Editar Categoria
                                    </a>

                                </div>
                            </div>
                        @endforeach    

                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
