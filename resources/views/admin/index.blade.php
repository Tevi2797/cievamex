@extends('plantillas.adminMain')

@section('titulo','index')


@section('formbus')
<!--Inician datos del usuario-->
<div style="background-color: #2a4e33;">
  <div class="container">
    <div class="row" >
      <div class="col" style="color: white;">
        <br>
        <h1>{{ Auth::user()->nombre }} {{ Auth::user()->apellidos }}</h1>
        <h6>{{ Auth::user()->cargo->nombre}}</h6>
        <h6>{{ Auth::user()->email }}</h6>
        <br>
      </div>
    </div>
  </div>
</div>
<!--Terminan datos del usuario-->

<!--Inician titulos de la página-->
<div>
  <div class="container">
    <div class="row">
      <div class="col">
       <br><br>
       <h1 class="display-3">Centro de Información y Estadística de la Vainilla en México</h1>
       <h5 class="letra4">Gaya Vainilla & Especias S.A. De C.V.</h5>
       <h5 class="letra4">SASTI Gestión E Innovación S.C.</h5>
       <h5 class="letra4">Centro Mexicano De Investigación En Vainilla A.C.</h5>      
       <br>                 
     </div>
   </div>  
 </div>
</div>
<!--Terminan títulos de la página-->
<br>
<!--Inicia carousel-->
<div  style="background-color: #2a4e33;">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/banner1.jpg" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txt2">100% Natural</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/banner2.jpg" class="d-block img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txt2">El mejor proceso de cosecha</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/banner3.jpg" class="d-blocK img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="txt2">Los mejores productos</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Termina carousel-->
@endsection