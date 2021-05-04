<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Petrona&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/assay.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png">

    <title> SCADA-E | @yield('title') </title> 
  </head>

  <body class="assay">
         
      <div class="header">
        <div>
          <img id="logo" src="{{ asset('assets/img/logo.svg') }}">

          <div class="text">
            <h1>Responda ao questionário abaixo</h1>
            <h2>@yield('title')</h2>
          </div>

          <img id="triangles" src="{{ asset('assets/img/trianglesHeader.svg') }}">   
        </div>

        <div class="bars">
          <div class="red"></div>
          <div class="yellow"></div>
          <div class="black"></div>
        </div>
      </div>

      <div class="card text-center"> 
     
        @yield('content')
      
        <div class="bars">          
          <div class="black"></div>
          <div class="yellow"></div>
          <div class="red"></div>
        </div>                    
      </div> 
     

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>