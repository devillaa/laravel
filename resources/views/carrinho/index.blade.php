<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho de Compras
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6 space-y-4">
                @if(count($carrinho) > 0)
                    @php $total = 0; @endphp

                    @foreach($carrinho as $id => $item)
                        @php
                            $subtotal = $item['preco'] * $item['quantidade'];
                            $total += $subtotal;
                        @endphp 

                        <div class="flex items-start gap-4 border border-gray-200 dark:border-gray-700 rounded-lg p-4 bg-gray-50 dark:bg-gray-900">
                        <img 
                            src="{{ asset('storage/' . $item['imagem']) }}" 
                            alt="{{ $item['nome'] }}" 
                            class="w-32 h-32 object-cover rounded-md border border-gray-300 dark:border-gray-600"
                        />


                            <div class="flex-1 space-y-1">
                                <p class="text-lg font-semibold text-gray-800 dark:text-gray-100">{{ $item['nome'] }}<p>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Preço: R$ {{ number_format($item['preco'], 2, ',', '.') }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Quantidade: {{ $item['quantidade'] }}</p>
                                <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Subtotal: R$ {{ number_format($subtotal, 2, ',', '.') }}</p>
                                <x-link-button href="{{ route('carrinho.deletar', $item['id']) }}">Apagar produto</x-link-button>
                            </div>
                        </div>
                    @endforeach

                    <div class="text-right mt-6">
                        <p class="text-xl font-bold text-gray-800 dark:text-gray-100">
                            Total: R$ {{ number_format($total, 2, ',', '.') }}
                        </p>
                    </div>
                @else
                    <div class="text-center py-10 text-gray-600 dark:text-gray-300">
                        Seu carrinho está vazio.
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
