<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias &raquo; Editar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('categorias.update', $categoria) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" type="text" name="nome" :value="old('nome', $categoria->nome)"
                                required />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
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