<x-app-layout>
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md text-center">
<h1 class="text-3xl font-semibold">{{ $product->title }}</h1>
        <p class="text-lg text-gray-600">{{ $product->artist }}</p>
        <p class="text-xl font-bold text-gray-800 mt-2 my-5">{{ $product->price }}</p>
        <img src="{{ $product->image_path }}" alt="{{ $product->title }}" class="mb-4 w-full h-auto">
</div>
</x-app-layout>
