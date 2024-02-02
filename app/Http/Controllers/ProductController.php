<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $product_id) {
        return Product::where('id', $product_id)->first();
    }
    public function store(AddProductRequest $request) {
        if($request -> hasFile('image_path')) {
            $image = $request->file('image_path');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/uploads/' . $filename);
        }
        Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            'image_path' => $filename]);
        return redirect(route('home'));
    }
    public function update() {
        return redirect(route('home'));
    }
    public function index($category = null) {
        if($category) {
           return Product::all()->where('category_id', $category);
        } else {
            return Product::all();
        }
    }
    public function destroy() {
        return redirect(route('home'));
    }

}
