<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Name')" />
                            <x-text-input id="nome" class="block mt-1" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Categoria -->
                        <div class="mb-4">
                            <label for="categoria_ids" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">
                                Categorias:
                            </label>
                            
                            <select name="categoria_ids[]" id="categoria_ids" multiple
                                class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-100 rounded-lg shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2 h-40">
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>

                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                Segure Ctrl (ou Cmd no Mac) para selecionar várias categorias
                            </p>
                        </div>

                        <!-- Preço -->
                        <div>
                            <x-input-label for="preco" :value="__('Preço')" />
                            <x-text-input id="preco" class="block mt-1" type="number" name="preco" :value="old('preco')" required autofocus autocomplete="preco" />
                            <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                        </div>

                        <!-- Descrição -->
                        <div>
                            <x-input-label for="descricao" :value="__('Descrição')" />
                            <x-textarea id="descricao" class="block mt-1" name="descricao" required autofocus autocomplete="descricao" >{{ old('descricao') }}</x-textarea>
                            <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                        </div>

                        <!-- Imagem -->
                        <div>
                            <x-input-label for="imagem" :value="__('Imagem')" />
                            <input type="file" name="imagem" id="imagem" accept="image/*"> <br/> <br/>
                            <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
                        </div>

                        <x-primary-button>
                            Gravar Produto
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>