@extends('plantillas.adminMain')

@section('titulo','Nueva Plantación')

@section('formbus')
<div class="row fondoFormulario before">  
</div>

<div class="container">
<br><br>
  <div class="row justify-content-md-center">
  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white;">
<br>
<h1 class="titulo1" align="center">Registrar Nueva Plantación</h1>

			<form method="post" action="{{route('plantaciones.store')}}">
			@csrf

			<div class="form-group">
		    <label for="formGroupExampleInput">Cantidad de plantas</label>
		    <input type="number" class="form-control" id="cantidad" name="cantidad">
		 </div>

		  <div class="form-group">
		    <label for="formGroupExampleInput">Año de plantación</label>
		    <input type="number" class="form-control" id="año" name="año">
		  </div>

		  <div class="form-group">
		    <label for="tipo">Especie</label>
		    <select class="form-control" id="especie" name="especie" >
		    @foreach($especies as $especie)
		    <option value="{{$especie->id}}">{{$especie->nombre_comun}} / {{$especie->nombre_cientifico}}</option>
		    @endforeach
		    </select>
		  </div>
			

			<div class="form-group">
		    <label for="tipo">Tipo de plantación</label>
		    <select class="form-control" id="tipo" name="tipo" >
		    @foreach($tipos as $tipo)
		    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
		    @endforeach
		    </select>
		  </div>
		  @foreach($parcela->productores as $productor)
		  <div class="form-group">
		    <label for="formGroupExampleInput">Propietario de la parcela</label>
		    <input readonly="" type="text" value="{{$productor->nombre}}" class="form-control" >
		  </div>
		  @endforeach
		  <input hidden value="{{$parcela->id}}" name="id">

<div class="form-group">
    <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">
  </div>
			</form>

			</div>	
		</div>
	</div>
<br><br><br>
@endsection