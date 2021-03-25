@extends('plantillas.adminMain')



@section('titulo','Nuevo Ciclo de Floración')



@section('formbus')

<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

  <div class="row justify-content-md-center">

  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white;">

<br>

<h1 class="titulo1" align="center">Registrar Nuevo Ciclo de Floración</h1>

			<form method="post" action="{{route('ciclos.store')}}">

			@csrf

            <div class="form-group row">

                <label for="example-date-input" class="col-5 col-form-label">Año</label>

                      <div class="col-7">

                        <input class="form-control" type="number" name="año"  value="2020" id="año" min="1900" max="9999">

                      </div>

            </div>

    			<div class="form-group row">

			        <label for="example-date-input" class="col-5 col-form-label">Inicio de floración</label>

		  	            <div class="col-7">

		                    <input class="form-control" type="date" name="ini"  value="2020-08-07" id="example-date-input">

		  	            </div>

			    </div> 







			<div class="form-group row">

			<label for="example-date-input" class="col-5 col-form-label">Fin de floración</label>

		  	<div class="col-7">

		    <input class="form-control" type="date" name="fin"  value="2020-08-19" id="example-date-input">



		  	</div>

			</div>



			<div class="form-group row">

		    <label for="tipo" class="col-5 col-form-label">Daño por sequía</label>

		    <div class="col-7">

		    <select class="form-control" id="daño" name="daño" >

		      <option >Bajo</option>

		      <option>Medio</option>

		      <option>Alto</option>

		    </select>

		    </div>

		  </div>



		   <div class="form-group">

		    <label for="formGroupExampleInput">Caída prematura (%)</label>

		    <input type="number" step="any" class="form-control" id="prematura" name="prematura">

		  </div>



		<div class="form-group row">

			<label for="example-date-input" class="col-5 col-form-label">Fecha de cosecha</label>

		  	<div class="col-7">

		    <input class="form-control" type="date" name="cosecha"  value="2020-12-19" id="example-date-input">



		  	</div>

		</div>



		<div class="form-group">

		    <label for="formGroupExampleInput">Cosecha (kg)</label>

		    <input type="number" step="any" class="form-control" id="produccion" name="produccion">

		 </div>



		 <input hidden value="{{$plantacion->id}}" name="id">





<div class="form-group">

    <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">

  </div>







			</form>



			</div>

		</div>

	</div>

	<br><br>



@endsection
