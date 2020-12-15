@extends('plantillas.adminMain')


@section('titulo','Actualizar Especie')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Actualizar Especie</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		@php
		$parameter =[
					'id'=>$especie->id,
				];
				$parameter = Crypt::encrypt($parameter);
		@endphp
		
		<form method="post" action="{{route('especies.update',$parameter)}}">
		@method('PUT')
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" value="{{$especie->nombre_comun}}" id="nombre" name="nombre" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" value="{{$especie->nombre_cientifico}}" id="cientifico" name="cientifico" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del especie</label>
		    <input type="text" class="form-control"  value="{{$especie->descripcion}}" name="descripcion" id="descripcion" >
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection