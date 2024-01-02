<x-app-layout>
    <x-slot name="header">
    </x-slot>

<!-- Product Filtering -->
<div class="filter-search-box sm:flex sm:items-center sm:ml-6 space-x-4">
    <form method="GET" action="{{ route('product') }}">
        <label for="productType" class="text-gray-500">Filter by Product Type:</label>
        <select name="product_type" id="productType" class="border border-gray-300 rounded-md p-1">
            <option value="" selected>All Product Types</option>
            <option value="1">Song</option>
            <option value="2">Game</option>
            <option value="3">Book</option>
        </select>

        <label for="title" class="text-gray-500">Filter by Title:</label>
        <input type="text" name="title" id="title" class="border border-gray-300 rounded-md p-1" placeholder="Enter title...">

        <button type="submit" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150">
            Apply Filters
        </button>

        <a href="{{ route('product') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150">
            Reset Filters
        </a>
    </form>
</div>

   
   <!-- Main Content - Products Grid Layout -->
    @if(isset($product))
        <div>
            <h1>Title: {{ $product->title }}</h1>
            <p>Artist: {{ $product->artist }}</p>
            <p>Price: {{ $product->price }}</p>

        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mx-5">
            @foreach ($products as $product)
                <div class="max-w-sm overflow-hidden">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    @endif

    <!-- Pagination -->
    <div class="mt-4 px-8">
    <!-- Appends the two parameters used by the filters (Product Type ID and Title) to the pagination which is parsed to the URL-->
    {{ $products->appends(['product_type' => request('product_type'), 'title' => request('title')])->links() }}
     <!-- Old {{ $products->links() }} -->
    </div>

</x-app-layout>
