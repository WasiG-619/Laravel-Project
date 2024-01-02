<div class="bg-blue-400 border rounded-md overflow-hidden shadow-sm p-4 relative">
    <div class="absolute top-0 right-0 bg-white px-2 py-1 rounded-md">
    <p><b>Type: {{ $product->productType->type }}</p></b>
    </div>

    <p class="mt-3"><b>Artist:</b> {{ $product->artist }}</p>
    <p class="mt-1"><b>Title:</b> {{ $product->title }}</p>
    <p class="mt-1"><b>Price: </b>@money($product->price)</p>

<div class="flex justify-end">
    @if(Route::currentRouteName()=='home' || Route::currentRouteName()=='product')
<div class="flex justify-end">
<button value="{{ $product->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full select-product">Select</button>
    @else
    @endif
    @auth
        @can('purchase-product')
        <button value="{{ $product->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-3 rounded-full buy-product">Buy</button>
        @endcan
        @can('edit-product')
        <button value="{{ $product->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-3 update-product">Edit</button>
        @endcan
    @endauth
</div>


    </div>
</div>