@extends('layouts.back')

@section('content')
        <div class="container bg-white my-5 p-5">
            <h1 class=" text-center">BACK OFFICE | dashboard</h1>
            <a href="{{route('home')}}" class="text-white mx-auto my-auto bg-secondary p-2 rounded">Retour vers le site</a>

            <div class="row my-5">
                <div class="col-6 "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                          <h4 class="card-title">Modification Home</h4>
                          <p class="card-text">CRUD home</p>
                          <a class="btn btn-success" href="">Direction HOME</a>
                        </div>
                      </div>
                </div>
                <div class="col-6 "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                          <h4 class="card-title">Modification about</h4>
                          <p class="card-text">CRUD about</p>
                          <a class="btn btn-success" href="">Direction about</a>
                        </div>
                      </div>
                </div>
                <div class="col-6 "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                          <h4 class="card-title">Modification product</h4>
                          <p class="card-text">CRUD product</p>
                          <a class="btn btn-success" href="{{route('products.index')}}">Direction product</a>
                        </div>
                      </div>
                </div>
                <div class="col-6 "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                          <h4 class="card-title">Modification store</h4>
                          <p class="card-text">CRUD store</p>
                          <a class="btn btn-success" href="">Direction store</a>
                        </div>
                      </div>
                </div>
            </div>

        </div>
@endsection