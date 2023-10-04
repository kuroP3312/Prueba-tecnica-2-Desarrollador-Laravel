<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1));
    }

    public function create(){
        $product = new Product();
        return view('products.create', compact('product'));
    }

    public function store(Request $request){
        $product = Product::create($request->all());
        if(!$product){
            return redirect()->route('edit_product', $request->id);
        }
        return redirect()->route('index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request){
        $product = Product::find($request->id)->update($request->all());
        if(!$product){
            return redirect()->route('edit_product', $request->id);
        }
        return redirect()->route('index');
    }

    public function getDetails(){
        return view('products.index');
    }

    public function delete(){
        return view('products.index');
    }

}
