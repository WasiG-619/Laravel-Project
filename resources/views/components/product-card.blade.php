<div class="bg-blue-400 border rounded-md overflow-hidden shadow-sm p-4">
    <p><b>Artist:</b> {{ $product->artist }}</p>
    <p><b>Title:</b> {{ $product->title }}</p>
    <p><b>Price:</b> {{ $product->price }}</p>
    <div class="flex justify-end"> <!-- old: mt-8 -->
    <a href="{{ route('product.show', ['id' => $product->id]) }}" class="rounded-md bg-white px-2 py-1 mt-1">View Product</a>
    </div>
</div>