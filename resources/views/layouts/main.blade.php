<!doctype html>
<html lang="en">
  <head>
    <!-- Required Meta Set -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK CBK | {{ $title }}</title>
    <!--bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
  </head>
  <body>
    @include('partial.navbar')
    <div class="container-fluid">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <style>
    .container-fluid{
      padding: 0;
    }
    #intro {
      background: url("img/cbk.jpg") no-repeat fixed;
      -webkit-background-size:cover;
      -moz-background-size:cover;
      -o-background-sze:cover;
      height: 100vh;
      
    }
    #mask {
      -webkit-background-size:cover;
      -moz-background-size:cover;
      -o-background-sze:cover;
      height: 100vh;
    }
  </style>
</html>