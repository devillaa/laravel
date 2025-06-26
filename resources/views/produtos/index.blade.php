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
            
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                    @foreach ($produtos as $produto)
                        <div class="border p-4 rounded shadow bg-gray-50 dark:bg-gray-900">
                            <h2 class="text-xl font-bold">{{ $produto->nome }}</h2>
                            
                            <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                            
                            <p>{{ $produto->descricao }}</p>
                            
                            @if ($produto->imagem)
                                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="w-16 h-auto mt-2 rounded">
                            @endif

                            <div class="mt-4 flex flex-wrap gap-3">
                                <form action="{{ route('produtos.destroy', $produto) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                        class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded transition">
                                        Apagar Produto
                                    </button>
                                </form>

                                <a href="{{ route('produtos.edit', $produto->id) }}" 
                                    class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded transition">
                                    Editar Produto
                                </a>

                                <a href="{{ route('carrinho.salvar', $produto->id) }}" 
                                    class="px-4 py-2 bg-pink-500 text-white rounded transition">
                                    Adicionar ao carrinho
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            
            </div>
        </div>
    </div>
</x-app-layout>
