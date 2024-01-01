<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\Redirect; //required for store
use Illuminate\Http\Response;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    
     public function create()
    {
        return view('add-product-form');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
      //  dd($request->all());
      
      // Mapping array for product types
        $productTypeMapping = [
            'Song' => 1,
            'Game' => 2,
            'Book' => 3,
        ];

        // Get the product type from the form
        $productTypeName = $request->input('product_type');

        // Check if the product type exists in the mapping array
        if (array_key_exists($productTypeName, $productTypeMapping)) {
            // Retrieve the corresponding product type ID
            $productTypeId = $productTypeMapping[$productTypeName];

            // Create the product with the correct product type ID
            Product::create($request->except('_token') + ['product_type_id' => $productTypeId]);

            return Redirect::route('product');
        } else {
            // Handle the case where an invalid product type is provided
            // You can return an error message or take appropriate action
            // For example, redirecting back with an error message
            return redirect()->back()->with('error', 'Invalid product type');
        }
    }     
        //Old Code --- ProdType would not be correct after submitting the form, due to strings e.g. "Book" being passed rather than IDs
        
        #$this->authorize('create', Product::class);
        #$product = Product::create($request->except('_token') + ['product_type_id' => $request->input('product_type')]);
        #Product::create($request->except('_token'));
        #return Redirect::route('product'); 

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::find($id);
       # dd($product);

        if (!$product) 
        {
            abort(404);
        }

     return view('view-product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        $producttypes = ProductType::all()->sortBy('type');
        return view('components.product-edit-form', ['product' => $product, 'producttypes' => $producttypes]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
      //  dd($request->all());
      $product = Product::find($id); // Finds the product using the ID param
      
      if (!$product) // Checks if Product exists, else displays a 404
      {
          abort(404);
      }

       // Updates the product properties
        $product->artist = $request->artist;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->product_type_id = $request->producttype;

        $product->save();
    
        return redirect()->route('product');
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product');
        return response()->json(['message' => 'Product deleted'], 200); //  200 =  HTTP_OK

    }

   # public function __construct() { //this method was causing the 403 error when accessing /products/{id}. seems to be applied globally which was the issue.... 
   #     $this->authorizeResource(Product::class, 'product');
   # }
    
  }
