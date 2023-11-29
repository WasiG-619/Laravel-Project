<x-app-layout>
    <x-slot name="header">
 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }} 
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-5">
        @foreach ($products as $product)
        <div class="max-w-sm overflow-hidden">
            <x-product-card :product="$product" />
        </div>
        @endforeach
    </div>
</x-app-layout>