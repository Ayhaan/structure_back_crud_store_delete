<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Coffe;
use App\Models\Product;
use App\Models\Promise;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        $coffe = Coffe::first();
        $promise = Promise::first();
        // dd($promise);
        return view('home', compact('coffe', 'promise'));
    }
    public function about(){
        $about = About::first();
        return view('pages.about', compact('about'));
    }
    public function product(){
        $products = Product::all();
        return view('pages.product', compact('products'));
    }

    // Pas réalisé car DB non fait
    // public function store(){
    //     return view('pages.store');
    // }
}
