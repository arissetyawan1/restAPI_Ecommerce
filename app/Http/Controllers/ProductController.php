<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "type" => $request->type,
            "price" => $request->price,
            "stock" => $request->stock,
            "user_id" => $request->user_id
        ]);

        return response()->json([
            "status" => true,
            "code" => 201,
            "message" => "Data Product Added",
            "data" => $product
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($details)
    {
        $product = Product::find($details);
        return response()->json([
            "status" => true,
            "code" => 201,
            "message" => "Product Details",
            "data" => $product
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "type" => $request->type,
            "price" => $request->price,
            "stock"=>$request->stock
        ]);

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => "Data Barang Updated"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $products = Product::find($product);
        if ($products) {
            $products->delete();
            return response()->json([
                "status" => true,
                "code" => 200,
                "message" => "Data Delete"
            ], 200);
        }
    }
}
