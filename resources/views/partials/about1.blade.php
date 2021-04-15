<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$about->titre}}</span>
                <span class="section-heading-lower">{{$about->soustitre}}</span>
              </h2>
              <p>{{$about->description}}</p>
              <p class="mb-0">{!!$about->description2!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>