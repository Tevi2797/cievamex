<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title>@yield('titulo')</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">



  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fjalla+One&family=Lemonada&family=Lobster&family=Montserrat&family=Mulish&family=Recursive&family=Roboto+Mono&family=Sora&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>



  <nav class="navbar navbar-expand-lg navbar-dark navbarAdmin">

    <a class="navbar-brand" >

      <img src="/img/logo-real-blanco.png" width="80" height="80" class="d-inline-block align-top" alt="" loading="lazy">

    </a>
    <div>
        <a href="{{url()->previous()}}" class="btn fondo btn1 "><i class="material-icons">keyboard_arrow_left</i></a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav mr-auto">

        @guest

        <li class="nav-item">

          <a class="nav-link eshe" href="{{ route('login') }} " style="color: black;">{{ __('Iniciar Sesión') }}</a>

        </li>

        @if (Route::has('register'))

        <li class="nav-item">

          <a style="color: white;" class="nav-link eshe" href="{{ route('usuarios.create') }}">{{ __('Register') }}</a>

        </li>

        @endif

        @else

        <li class="nav-item dropdown">

          <a style="color: white;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

            {{ Auth::user()->nombre }} <span class="caret"></span>

          </a>





          <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"

            onclick="event.preventDefault();

            document.getElementById('logout-form').submit();">

            {{ __('Cerrar Sesión') }}

          </a>



          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

            @csrf

          </form>

        </div>

      </li>

      @endguest







      <li class="nav-item active">

        <a class="nav-link" href="{{route('index')}}">Inicio <span class="sr-only">(current)</span></a>

      </li>

      <li class="nav-item dropdown active">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Usuarios

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('usuarios.create')}}">Agregar Usuario</a>

          <a class="dropdown-item" href="{{route('usuarios.index')}}">Lista de Usuarios</a>



        </div>

      </li>

      <li class="nav-item dropdown active">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Productores

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('productores.create')}}">Agregar Productor</a>

          <a class="dropdown-item" href="{{route('productores.index')}}">Lista de Productores</a>

          <!--
          <a class="dropdown-item" href="{{route('addFamilia')}}">Familias de los Productores</a>
          -->


        </div>

      </li>

      <li class="nav-item dropdown active">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Parcelas

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('parcelas.create')}}">Agregar Parcela</a>

          <a class="dropdown-item" href="{{route('parcelas.index')}}">Lista de Parcelas</a>



        </div>

      </li>

      <li class="nav-item dropdown active">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Reportes

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('visitas.mostrar')}}">Reporte de Visitas</a>

          <a class="dropdown-item" href="{{route('mapa.addYear')}}">Reporte de Gráfica de Producción por Estado</a>



        </div>

      </li>

      <li class="nav-item dropdown active">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Más

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('dashboard')}}">Datos Pre-Almacenados</a>

          <a class="dropdown-item" href="{{route('cargos.create')}}">Registrar Cargo</a>

          <a class="dropdown-item" href="{{route('cargos.index')}}">Lista de Cargos</a>

        </div>

      </li>

    </ul>

  </div>

</nav>





@yield('formbus')



<!-- Footer -->

<footer class="page-footer font-small stylish-color-dark pt-4 footerLogin" style="background-color: #2a4e33;">



  <!-- Footer Links -->

  <div class="container text-center text-md-left">



    <!-- Grid row -->

    <div class="row">



      <!-- Grid column -->

      <div class="col-md-4 mx-auto">



        <!-- Content -->



        <h5 class="  font-weight-bold text-uppercase mt-3 mb-4">C I E V A M E X</h5><br>

        <p>Centro de Información y Estadística de la Vainilla en México. Gestión y análisis de información, caracterización y seguimiento del cultivo de la vainilla en el país, de las diferentes regiones y de sus productores.</p>



      </div>

      <!-- Grid column -->



      <hr class="clearfix w-100 d-md-none">



      <!-- Grid column -->

      <div class="col-md-4 mx-auto" id="linkBlanco">



        <!-- Links -->

        <h5 class=" font-weight-bold text-uppercase mt-3 mb-4">Instituciones de investigación en colaboración</h5>



        <ul class="list-unstyled">

          <li>

            <a href="https://www.uv.mx/citro/">CITRO UV</a>

          </li>

          <li>

            <a href="https://www.ittux.edu.mx/">Tecnológico De Tuxtepec</a>

          </li>

          <li>

            <a href="https://www.utgz.edu.mx/">Universidad Tecnológica de Gutiérrez Zamora</a>

          </li>

        </ul>



      </div>

      <!-- Grid column -->



      <hr class="clearfix w-100 d-md-none">



      <!-- Grid column -->



      <!-- Grid column -->



      <hr class="clearfix w-100 d-md-none">



      <!-- Grid column -->

      <div class="col-md-4 mx-auto" id="linkBlanco">



        <!-- Links -->

        <h5 class="centrarCosa font-weight-bold text-uppercase mt-3 mb-4">Contacto</h5>

        <br>

        <div class="row">

          <div class="col">

            <ul class="list-unstyled">

              <li>

                <a href="https://goo.gl/maps/1dkX7tFMGVSapEzu6">Vanilla and Spices S.A de C.V

                Carretera Poza Rica-Gutierrez Zamora Km. 50, CP. 93557</a>

              </li>

              <br>

              <li>

                <a href="mailto:info@sastisc.com?Subject=Asesoría%20Técnica%20">Asesoría Técnica</a>

              </li>

            </ul>

          </div>



          <div class="col">

            <ul class="list-unstyled">

              <li>Números de Teléfono:</li>

              <li>

                <a href="tel:7668450497">(766) 845-0497</a>

              </li>

              <li>

                <a href="tel:7668451758">(766) 845-1758</a>

              </li>

              <li>

                   Ext 105 Campo

              </li>

              <br>

              <li>

                <a href="mailto:info@cemivac.com?Subject=Investigación%20"> Investigación</a>

              </li>

            </ul>

          </div>

        </div>





      </div>

      <!-- Grid column -->



    </div>

    <!-- Grid row -->



  </div>

  <!-- Footer Links -->



  <hr>

  <br>

  <!-- Social buttons -->

  <ul class="list-unstyled list-inline text-center">

    <li class="list-inline-item">

      <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/gayavainillayespecias/">

        <i  class="fab fa-facebook-f">

          <img class="footerRedesSociales" src="{{asset('img/redessociales/facebook.png')}}">

        </i>

      </a>

    </li>

    <li class="list-inline-item">

      <a class="btn-floating btn-tw mx-1" href="https://twitter.com/VanillaSpiceMex/">

        <i class="fab fa-twitter">

          <img class="footerRedesSociales" src="{{asset('img/redessociales/twitter.png')}}">

        </i>

      </a>

    </li>

    <li class="list-inline-item">

      <a class="btn-floating btn-gplus mx-1" href="https://www.instagram.com/gayavainilla/">

        <i class="fab fa-google-plus-g">

          <img class="footerRedesSociales" src="{{asset('img/redessociales/instagram.png')}}">

        </i>

      </a>

    </li>



  </ul>

  <!-- Social buttons -->



  <!-- Copyright -->

  <div class="footer-copyright text-center py-3" id="linkBlanco">© 2020 Copyright:

    <a href="https://www.vanillamexico.com/"> GAYA </a>

  </div>

  <!-- Copyright -->



</footer>

<!-- Footer -->



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{asset('js/funcionamiento.js')}}"></script>
</body>

</html>
