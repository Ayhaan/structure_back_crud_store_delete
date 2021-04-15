<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Crud -> read
    public function index(){
        $products = Product::all();
        // dd($products);
        return view('backoffice.product.products', compact('products'));
    }

    //Crud -> create
    public function create(){
        return view('backoffice.product.createProduct');
    }

    public function store(Request $request){
        $article = new Product();
        $article->titre = $request->titre;
        $article->slogan = $request->slogan;
        $article->img = $request->img;
        $article->description = $request->description;
        $article->save();
        return redirect()->route('products.index');
    }

    //Crud -> delete
    public function destroy(Product $id) {
        $id->delete();
        return redirect()->back();
    }

}
