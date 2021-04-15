<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
      <!-- Bootstrap core CSS -->
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href={{asset("css/business-casual.min.css")}} rel="stylesheet">
</head>
<body>
    
    @include('partials.header')
    @yield('content')
    @include('partials.footer')


    
  <!-- Bootstrap core JavaScript -->
  <script src={{asset("vendor/jquery/jquery.min.js")}}></script>
  <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

  {{-- MON JS --}}
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>