<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the product.
     */
    public function index()
    {
        return view('backend.product.index');
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }


    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit');
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
