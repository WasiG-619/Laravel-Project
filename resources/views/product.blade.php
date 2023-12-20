<x-app-layout>
    <x-slot name="header">
    </x-slot>

    @if(isset($product))
        <div>
            <h1>Title: {{ $product->title }}</h1>
            <p>Artist: {{ $product->artist }}</p>
            <p>Price: {{ $product->price }}</p>

        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-5">
            @foreach ($products as $product)
                <div class="max-w-sm overflow-hidden">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>
