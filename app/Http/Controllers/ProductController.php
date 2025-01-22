<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('photoProducts')->get();
        return Inertia::render('Products', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('AddProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images' => 'nullable|array',
            'images.*' => 'mimes:jpeg,jpg,png,gif|file|max:2048',
        ]);

        try {
            DB::beginTransaction();
            $products = new Product();
            $products->name = $request->name;
            $products->description = $request->description;
            $products->price = $request->price;
            $products->save();
            if($request->has('images')){
                if($request->hasFile('images')){
                    $image_file = $request->images;
                    $savedImage = collect();
                    foreach($image_file as $image){
                        $images = Image::advancedSave($image, [
                            'name'=>'product_image_' . $products->id . $image->getClientOriginalName(),
                        ]);
                        $savedImage->push($images);
                    }
                    if($savedImage->isNotEmpty()){
                        foreach ($savedImage as $image) {
                            $products->photoProducts()->attach($image->id, ['showable' => 1]);
                        }
                    }
                }
            }
            DB::commit();
            return redirect()->route('products.index')->with('success', 'Operation completed successfully!');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
            return redirect()->back()->withErrors($th->getMessage())->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
