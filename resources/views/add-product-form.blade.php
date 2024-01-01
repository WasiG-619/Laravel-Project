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
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data"> <!-- Ensures the image upload is included with the POST form !-->
            @csrf
            <div class="p-2 m-2 rounded-lg shadow-lg bg-gray-50 border-2 border-blue-400 max-w-md">
                <div class="productType mb-4"> <!-- Product Type Dropdown -->
                    <label for="product_type" class="border-red rounded py-3 px-4">
                        <select id="product_type" name="product_type" class="bg-grey-lighter block w-full text-grey-darker border border-red rounded py-3 px-4">
                            <option value="Song">Song</option>
                            <option value="Game">Game</option>
                            <option value="Book">Book</option>
                        </select>
                    </label>
                </div>
                <div class="font-bold text-sm mb-2">
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-2" id="title" name="title" type="text" placeholder="Title">
                </div>
                <p class="text-gray-700 text-sm mb-2">
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-2" id="artist" name="artist" type="text" placeholder="Artist/Author/Console">
                </p>
                <p class="text-gray-500 text-base mb-2">
                    <input type="number" step='0.01' value='0.00' class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-2" id="price" name="price" type="text" placeholder="Price">
                </p>
                <div class="form-group flex items-center mb-4">
                    <label for="image" class="text-sm font-semibold	text-gray-700 ">Product Image</label>
                    <input type="file" class= "pl-2" name="upload_image" id="image">
                </div>

                <div class="flex items-center justify-end pl-5 mt-4 top-auto">
                <button type="submit" class="bg-gray-800 text-white text-xs px-2 py-2 rounded-md mb-2 mr-2 uppercase hover:underline">Add Product</button>
                </div>

            </div>
        </form>
    </div>
</x-app-layout>
