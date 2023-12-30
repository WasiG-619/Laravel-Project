<x-app-layout>
    <div class="productlist p-2">
        @if ($errors->any())
            <div class="bg-red-600 border-solid rounded-md border-2 border-red-700">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-lg text-gray-100">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="p-2 m-2 rounded-1g shadow-lg bg-gray-50 border-2 border-blue-400">
        <div class="p-2 m-2">
            <input id="id" name="id" hidden value="{{ $product['id'] }}">
            <label for="producttype">Product Type:</label>
            <select id="producttype" name="producttype">
                @foreach($producttypes as $producttype)
                    @if($producttype['id'] == $product['product_type_id'])
                        <option value="{{ $producttype['id'] }}" selected>{{ $producttype['type'] }}</option>
                    @else
                        <option value="{{ $producttype['id'] }}">{{ $producttype['type'] }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="font-bold text-sm mb-2">
            <label for="title">Title:</label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="title" name="title" type="text" placeholder="Title" value="{{ optional($product)['title'] }}">
        </div>

        <p class="text-gray-700 text-sm">
            <label for="artist">Artist/Author/Console:</label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="artist" name="artist" type="text" placeholder="Artist/Author/Console" value="{{ optional($product)['artist'] }}">
        </p>

        <p class="text-gray-500 text-base mt-2">
            <label for="price">Price:</label>
            <input type="number" step="0.01" value="{{ optional($product)['price'] }}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="price" name="price" type="text" placeholder="Price">
        </p>

        <div class="flex items-center justify-end mt-4 top-auto">
            <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Update Product</button>
        </div>
    </div>
</form>

    </div>
</x-app-layout>
