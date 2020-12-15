@extends('plantillas.adminMain')


@section('titulo','Nuevo Visita')

@section('formbus')

<div class="row fondoFormulario before">  
</div>

<div class="container">
<br><br>
  <div class="row justify-content-md-center">
  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white">
<br>
<h1 class="titulo1" align="center">Registrar Nueva Visita</h1>
<br>
		<form method="post" action="{{route('visitas.store')}}">
		 @csrf
		  <div>
			<div class="form-group row">
			<label for="example-date-input" class="col-5 col-form-label">Fecha de Visita</label>
		  	<div class="col-7">
		    <input class="form-control" type="date" name="fecha" value="2020-08-01" id="example-date-input">

		  	</div>
			</div>
			</div>

			<div class="form-group">
		    <label for="formGroupExampleInput2">Actividad de la visita</label>
		    <input type="text" class="form-control" name="actividad" id="actividad" >
		  </div>

		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción de la visita</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" >
		  </div>

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