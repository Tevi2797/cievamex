@extends('plantillas.adminMain')


@section('titulo','Actualizar Manejó de Plagas')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Actualizar Método De Control De Plaga</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		@php
		$parameter =[
					'id'=>$manejo->id,
				];
				$parameter = Crypt::encrypt($parameter);
		@endphp
		
		<form method="post" action="{{route('enfermedades.update',$parameter)}}">
		@method('PUT')
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" value="{{$manejo->nombre}}" id="nombre" name="nombre" placeholder="Pudrición negra">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del método</label>
		    <input type="text" class="form-control"  value="{{$manejo->descripcion}}" name="descripcion" id="descripcion" placeholder="Podredumbre verde a negra de tallos, hojas y / o vainas empapados de agua">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection