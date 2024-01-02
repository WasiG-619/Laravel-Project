<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\Redirect; //required for store
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        #dd($request->all());

        $query = Product::query(); // This selects all Products via Product model

        // Filter By Title
        $titleFilter = $request->input('title');
        if ($titleFilter) 
        {
            $query->where('title', 'like', '%' . $titleFilter . '%');
        }

        // Filter By ProductType
        $productTypeFilter = $request->input('product_type');
        if ($productTypeFilter !== null) 
        {
            $query->where('product_type_id', $productTypeFilter);
        }

        $products = $query->get(); // Grabs all the rows that match the where clauses

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

                            ### Image Upload Storing & Validation

      $image = $request->file('upload_image'); // retrieves and stores the uploaded image in $image

      if ($image !== null) // If $image is NOT NULL, then store in /public/images
      {
          $imagePath = $image->store('public/images');
      } else 
      {     // If no image is uploaded and $image is null, then a default placeholder image is set
          $imagePath = 'https://picsum.photos/1200/800';
      }

                            ### Store Product and ProductType correctly
      
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

        // Create the product retrieved from the form.
        Product::create(
        [
            'image_path' => str_replace("public/images/", "", $imagePath), // Modifies the filename 
            'product_type_id' => $productTypeId,
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'price' => $request->input('price'),
        ]
        );

            return Redirect::route('product');
        } 
        
        else 
        { // If an invalid product type is provided, error is shown
            return redirect()->back()->with('error', 'Invalid product type');
        }

    }     

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