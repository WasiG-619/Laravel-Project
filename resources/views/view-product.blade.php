<x-app-layout>
    <script src="{{ asset('js/my.js') }}"></script>

    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md text-center">
        <h1 class="text-3xl font-semibold">{{ $product->title }}</h1>
        <p class="text-lg text-gray-600">{{ $product->artist }}</p>
        <p class="text-xl font-bold text-gray-800 mt-2 my-5">@money($product->price)</p>

        <!-- If the image_path is set to the placeholder/null, then the placeholder will be shown -->
        @if($product->image_path !== 'https://picsum.photos/1200/800')
            <img src="{{ asset('storage/images/' . $product->image_path) }}" class="mb-4 w-full h-auto">
        @else
            <!-- Else, it displays the uploaded file -->
            <img src="{{ asset($product->image_path) }}" class="mb-4 w-full h-auto">
        @endif

        <!-- Will check if the user is logged in, if so then the "buy" button is displayed. If not logged in, then there is no "Buy" button ------ consider adding JS method for a button alert for guests advising them to register/login if they want to purchase -->
        @can('purchase-product')
        <button value="{{ $product->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
        @endcan
        @can('edit-product')
        <button value="{{ $product->id }}" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-full update-product">Edit Product</button>
        @endcan
    </div>
</x-app-layout>
