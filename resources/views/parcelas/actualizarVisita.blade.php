@extends('plantillas.adminMain')


@section('titulo','Actualizar Visita')

@section('formbus')

<div class="row fondoFormulario before">  
</div>

<div class="container">
<br><br>
  <div class="row justify-content-md-center">
  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white">
<br>
<h1 class="titulo1" align="center">Actualizar Visita</h1>
<br>
			@php
				$parameter =[
					'id'=>$visita->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
		<form method="post" action="{{route('visitas.update',$parameter)}}">
		@method('PUT')
		 @csrf
		  <div>
			<div class="form-group row">
			<label for="example-date-input" class="col-2 col-form-label">Fecha de Visita</label>
		  	<div class="col-10">
		    <input class="form-control" type="date" name="fecha" value="{{$visita->fecha}}" id="example-date-input">

		  	</div>
			</div>
			</div>

			<div class="form-group">
		    <label for="formGroupExampleInput2">Actividad de la visita</label>
		    <input type="text" class="form-control" value="{{$visita->actividad}}" name="actividad" id="actividad" >
		  </div>

		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción de la visita</label>
		    <input type="text" class="form-control" value="{{$visita->descripcion}}" name="descripcion" id="descripcion" >
		  </div>

		  
		  <div class="form-group">
        <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">
    </div>
		</form>


		</div>
	</div>
</div>
<br><br><br>
@endsection