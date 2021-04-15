<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$info->titre}}</span>
              <span class="section-heading-lower">{{$info->sousTitre}}</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              
              {{-- COMPACT d'un tableau avec toutes les donneés. Pour les afficher on passe par une boucle --}}
              @foreach ($heures as $heure)
                <li class="list-unstyled-item list-hours-item d-flex">
                  {{$heure->jour}}
                  <span class="ml-auto">{{$heure->ouverture}}</span>
                </li>     
              @endforeach

            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$info->adress}}</strong>
                <br>
                {{$info->region}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>Call Anytime</em>
              </small>
              <br>
              {{$info->numero}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>