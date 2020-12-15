@extends('plantillas.adminMain')


@section('titulo','Actualizar Fertilizante')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Actualizar Fertilizante</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		@php
		$parameter =[
					'id'=>$fertilizante->id,
				];
				$parameter = Crypt::encrypt($parameter);
		@endphp
		
		<form method="post" action="{{route('fertilizantes.update',$parameter)}}">
		@method('PUT')
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" value="{{$fertilizante->nombre}}" id="nombre" name="nombre" placeholder="Pudrición negra">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del fertilizante</label>
		    <input type="text" class="form-control"  value="{{$fertilizante->descripcion}}" name="descripcion" id="descripcion" placeholder="Podredumbre verde a negra de tallos, hojas y / o vainas empapados de agua">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection