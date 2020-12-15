<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title>@yield('titulo')</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">

 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container-fluid">

	<div class="row">

		<div class="col">



			<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" >Gaya Vainilla y Especias</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

   <!-- Authentication Links -->

                        @guest

                            <li class="nav-item">

                                <a class="nav-link eshe" href="{{ route('login') }} " style="color: black;">{{ __('Iniciar Sesión') }}</a>

                            </li>

                            @if (Route::has('register'))

                                <li class="nav-item">

                                    <a style="color: black;" class="nav-link eshe" href="{{ route('usuarios.create') }}">{{ __('Register') }}</a>

                                </li>

                            @endif

                        @else

                            <li class="nav-item dropdown">

                                <a style="color: black;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Auth::user()->nombre }} <span class="caret"></span>

                                </a>





                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"

                                       onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">

                                        {{ __('Logout') }}

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





      </li>

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          Parcelas

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{route('parcelas.create')}}">Agregar Parcela</a>

          <a class="dropdown-item" href="{{route('parcelas.index')}}">Lista de Parcelas</a>

        </div>

      </li>



  </div>

</nav>









		</div>



	</div>

	@yield('formbus')

	<br><br>

	    <!-- Footer -->

<footer class="page-footer font-small unique-color-dark">



  <div style="background-color: #2a4e33;">

    <div class="container">



      <!-- Grid row-->

      <div class="row py-4 d-flex align-items-center">



        <!-- Grid column -->

        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">

          <h5 class="mb-0" style="color:#fff" >Gaya Vanilla & Spicies S.A de C.V</h5>

        </div>

        <!-- Grid column -->



        <!-- Grid column -->

        <div class="col-md-6 col-lg-7 text-center text-md-right">



          <!-- Facebook -->

          <a class="fb-ic">

            <i class="fab fa-facebook-f white-text mr-4"> </i>

          </a>

          <!-- Twitter -->

          <a class="tw-ic">

            <i class="fab fa-twitter white-text mr-4"> </i>

          </a>

          <!-- Google +-->

          <a class="gplus-ic">

            <i class="fab fa-google-plus-g white-text mr-4"> </i>

          </a>

          <!--Linkedin -->

          <a class="li-ic">

            <i class="fab fa-linkedin-in white-text mr-4"> </i>

          </a>

          <!--Instagram-->

          <a class="ins-ic">

            <i class="fab fa-instagram white-text"> </i>

          </a>



        </div>

        <!-- Grid column -->



      </div>

      <!-- Grid row-->



    </div>

  </div>



  <!-- Footer Links -->

  <div class="container text-center text-md-left mt-5">



    <!-- Grid row -->

    <div class="row mt-3">



      <!-- Grid column -->

      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">



        <!-- Content -->

        <h6 class="text-uppercase font-weight-bold">Gaya Vainilla & Especias</h6>

        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>Carretera Poza Rica-Gutierrez Zamora Km. 50, CP. 93557</p>



      </div>

      <!-- Grid column -->



      <!-- Grid column -->

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">



        <!-- Links -->

        <h6 class="text-uppercase font-weight-bold">Acerca de Nosotros</h6>

        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>

          <a href="s">¿Quienes Somos?</a>

        </p>

        <p>

          <a href="">Nuestros Valores</a>

        </p>

        <p>

          <a href="">Contacto</a>

        </p>



      </div>

      <!-- Grid column -->



      <!-- Grid column -->

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">



        <!-- Links -->

        <h6 class="text-uppercase font-weight-bold">Link Utilizables</h6>

        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>

          <a href="">Registrate</a>

        </p>

        <p>

          <a href="">Términos y Condiciones</a>

        </p>



      </div>

      <!-- Grid column -->



      <!-- Grid column -->

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">



        <!-- Links -->

        <h6 class="text-uppercase font-weight-bold">Contacto</h6>

        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

        <p>

          <i class="fas fa-home mr-3"></i>Carretera Poza Rica-Gutierrez Zamora Km. 50, CP. 93557</p>

        <p>

          <i class="fas fa-envelope mr-3"></i> 16610010@utgz.edu.mx</p>

        <p>

          <i class="fas fa-phone mr-3"></i> (766) 845-0497</p>

        <p>

          <i class="fas fa-print mr-3"></i> (766) 845-1758</p>



      </div>

      <!-- Grid column -->



    </div>

    <!-- Grid row -->



  </div>

  <!-- Footer Links -->



  <!-- Copyright -->

  <div class="footer-copyright text-center py-3">© 2020 Copyright:

    <a href="https://mdbootstrap.com/education/bootstrap/">Vanilla and Spicies</a>

  </div>

  <!-- Copyright -->



</footer>

<!-- Footer -->



</div>













<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
