<div class="bg-blue-400 border rounded-md overflow-hidden shadow-sm p-4">
    <p><b>Artist:</b> {{ $product->artist }}</p>
    <p><b>Title:</b> {{ $product->title }}</p>
    <p><b>Price:</b> {{ $product->price }}</p>
    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="text-blue-700 underline">View Product</a>
</div>