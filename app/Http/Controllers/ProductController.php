<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        DB::transaction(function () use ($request){

            // validasinya ada di form request tersendiri di StoreCourseRequest.php
            $validated = $request->validated();

            // samakan dengan input namenya yaitu "thumbnail"
            if($request->hasFile('thumbnail')) {
                // ambil pathnya dan simpan dalam folder thumbnails dan simpan secara public
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public'); 
                $validated['thumbnail'] = $thumbnailPath; // gunakan ini agar tidak private (urlnya harus dari public)
            } else {
                $iconPath = 'images/icon-default.png'; // default image jika tdk ada image dr user
            }

            $validated['slug'] = Str::slug($validated['name']); // gunakan slug agar urlnya dari web design menjadi web-design (tergenerate sendiri)
            

            $product = Product::create($validated); // create data terbaru dengan name, icon, dan slug
            
        });

        return redirect()->route('front.index')->with('success', 'Congrats! You successfully added new product.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        DB::transaction(function () use ($request, $product){

            $validated = $request->validated();

            if($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public'); 
                $validated['thumbnail'] = $thumbnailPath;
            } else {
                $iconPath = 'images/icon-default.png';
            }

            $validated['slug'] = Str::slug($validated['name']);

            $product->update($validated);
        });

        return redirect()->route('front.index', $product)->with('success', 'Congrats! You successfully edit product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        DB::beginTransaction();

        try {
            $product->delete(); 
            DB::commit(); 

            return redirect()->route('front.index')->with('success', 'Congrats! You successfully delete product.');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('front.index')->with('error', 'something error')->with('error', 'something error'); 
        }
    }
}
