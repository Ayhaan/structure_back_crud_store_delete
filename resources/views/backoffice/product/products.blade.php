@extends('layouts.back')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Page home produit</h1>
    <h4 class="text-center my-3"> Liste de produit existant :</h4>
    <div class="d-flex justify-content-center my-3">
        <a href="{{route('products.create')}}" class="btn btn-success mx-2">Ajouter un produit</a>
        <a href="{{route('admin.home')}}" class="btn btn-secondary mx-2">Retour backoffice</a>
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-6 border rounded my-3 p-3">
                <p> <span class="font-weight-bold">Produit numéro: </span> {{$product->id}}</p>
                <p> <span class="font-weight-bold">Titre : </span> {{$product->titre}}</p>
                <p> <span class="font-weight-bold">Slogan : </span> {{$product->slogan}}</p>
                <p> <span class="font-weight-bold">URL : </span> {{$product->img}}</p>
                <p class="text-justify"> <span class="font-weight-bold">Description : </span> {{$product->description}}</p>
                <form method="post" action="{{route('products.destroy', $product->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>    
        @endforeach
    </div>
</div>
@endsection