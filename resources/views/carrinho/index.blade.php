<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    

                @if(count($carrinho) > 0)
                    @foreach($carrinho as $id => $item)
                    <!-- @dd($item) -->
                    <p>a</p>
                    <p>{{ $item['id'] }}</p>
                    <p>{{ $item['nome'] }}</p>
                        

                    @endforeach
                @else
                    essa porra nao ta entrando no if,carrinho ta vazio cacete
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
