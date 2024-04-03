<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all(); 
        $products = product::all();
        return view("product_list",compact("products","categories"));
    }

    public function store(Request $request){
        product::create($request->all());
        return redirect()->route('products.index');
    }

    public function create(Category $categories){
        $categories = Category::all(); 
        return view("product_create",compact('categories'));
    }

    public function edit(product $product, Category $categories){
        $categories = Category::all(); 
        return view("product_edit",compact('product','categories'));
    }

    public function update(product $product, Request $request){
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    
    public function destroy(product $product){
        $product->delete();
        return redirect()->route('products.index');
    }
}
