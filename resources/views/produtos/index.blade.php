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
                    <x-link-button href="{{ route('produtos.create') }}">+ Produto</x-link-button>
                </div>
            
                <div class="p-6 text-gray-900 dark:text-gray-100">

                @foreach ($produtos as $produto)
                    <div class="border p-4 mb-2 rounded shadow">
                        <h2 class="text-xl font-bold">{{ $produto->nome }}</h2>
                        
                        <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        
                        <p>{{ $produto->descricao }}</p>
                        
                        @if ($produto->imagem)
                            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-16 h-auto mt-2">
                        @endif

                        <form action="{{ route('produtos.destroy', $produto) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')">
                            @csrf
                            @method('DELETE')
                            <x-primary-button class="bg-red-600 hover:bg-red-700">
                                Apagar Produto
                            </x-primary-button>
                        </form>
                        
                        <x-link-button href="{{ route('produtos.edit', $produto->id) }}">Editar Produto</x-link-button>

                    </div>
                @endforeach

                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
