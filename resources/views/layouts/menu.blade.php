<nav class = "flex justify-start">
    <div class="m-5 shadow-2xl rounded-md bg-blue-400 border-blue-300" >
        <a href="{{ route('home') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
                Home
        </a>
    </div> 
    <div class="m-5 shadow-2xl rounded-md bg-blue-400 border-blue-300" >
        <a href="{{ route('product') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
                Products
        </a>
    </div>
    <div class="m-5 shadow-2xl rounded-md bg-blue-400 border-blue-300" >
        <a href="{{ route('create') }}" class="text-gray-700 p-5 font-semibold text-3xl font-mono">
                Add Product
        </a>
    </div>
</nav>
