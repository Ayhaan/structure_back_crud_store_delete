  @foreach ($products as $product)
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex {{$loop->index % 2 ? "ml-auto" : "mr-auto"}} rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-upper">{{$product->slogan}}</span>
                <span class="section-heading-lower">{{$product->titre}}</span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset($product->img)}}"alt="">
          <div class="product-item-description d-flex {{$loop->index % 2 ? "mr-auto" : "ml-auto"}}">
            <div class="bg-faded p-5 rounded">
              <p class="mb-0">{{$product->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endforeach