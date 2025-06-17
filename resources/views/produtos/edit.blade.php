<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos &raquo; Editar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('produtos.update', $produto) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Name')" />
                            <x-text-input id="nome" type="text" name="nome" :value="old('nome', $produto->nome)"
                                required />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>

                        <!-- Preço -->
                        <div>
                            <x-input-label for="preco" :value="__('Preço')" />
                            <x-text-input id="preco" type="number" name="preco" :value="old('preco', $produto->preco)"
                                required />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>

                        <!-- Descrição -->
                        <div>
                            <x-input-label for="descricao" :value="__('Descrição')" />
                            <x-textarea id="descricao" name="descricao"
                                required>{{ old('descricao', $produto->descricao) }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>

                        <!-- Imagem -->
                        <div>
                            <x-input-label for="imagem" :value="__('Imagem')" />
                            <input type="file" name="imagem" id="imagem" accept="image/*"> <br /><br />
                            @if ($produto->imagem)
                                <img src="{{ asset('storage/' . $produto->imagem) }}" alt="Imagem atual" class="w-32 mt-2">
                            @endif
                            <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
                        </div>

                        <x-primary-button>
                            Confirmar Edição
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>