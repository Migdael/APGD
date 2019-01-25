<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo','Acceso') | </title>

     <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> </link>
      <link href="{{ asset('/css/misEstilos.css') }}" rel="stylesheet"> </link>
      <link href="{{ asset('/fonts/font-awesome.min.css') }}" rel="stylesheet"></link>
       <link href="{{ asset('/css/nprogress.css') }}" rel="stylesheet"></link>
      <link href="{{ asset('/css/custom.min.css') }}" rel="stylesheet"></link>
   
  </head>

  <body class="login" style="background-color: rgba(181,181,181,0.43)">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor"  id="signin"></a>
      <hr>
       <h1 class="text-center">Facultad Reguional Multidisciplinaria Esteli</h1>
       <h1 class="text-center">APGD</h1>
      <div class="login_wrapper">
       
        <div class="animate form login_form">
          <section class="login_content">
            
           @yield("content")


          </section>
        </div>

      </div>

    </div>

  </body>

</html>

