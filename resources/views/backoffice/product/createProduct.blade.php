@extends('layouts.back')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">Création de nouveau produit</h1>
        <div class="d-flex justify-content-center my-3">
            <a href="{{route('admin.home')}}" class="btn btn-secondary mx-2">Retour backoffice</a>
        </div>
        <form method="POST" action={{route('products.store')}}>
            @csrf
            <div class="form-group">
                <label for="nom">Titre de l'article</label>
                <input type="text" class="form-control" name="titre" placeholder="Entrer titre">
            </div>
            <div class="form-group">
                <label for="nom">Slogan</label>
                <input type="text" class="form-control" name="slogan" placeholder="Entrer slogan">
            </div>
            <div class="form-group">
                <label for="nom">Votre image</label>
                <input type="text" class="form-control" name="img" placeholder="Entrer url">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea> 
            </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>  
@endsection