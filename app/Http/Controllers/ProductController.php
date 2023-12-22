<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect; //required for store

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
       // return view('product', ['products' => $products]);
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
        $this->authorize('create', Product::class);
        Product::create($request->except('_token'));
        return Redirect::route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        //dd($product); // debugging will show product properties

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
            return view('components.product-edit-form', ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return "PRODUCT DELETED";
    }

    public function __construct() {
        $this->authorizeResource(Product::class, 'product');
    }
    
  }
