@extends('plantillas.adminMain')


@section('titulo','Actualizar Tipo de Suelo')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Actualizar Tipo De Suelo</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		
		@php
		$parameter =[
					'id'=>$suelo->id,
				];
				$parameter = Crypt::encrypt($parameter);
		@endphp
		<form method="post" action="{{route('suelos.update',$parameter)}}">
		@method('PUT')
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" value="{{$suelo->nombre}}" id="nombre" name="nombre" placeholder="Arenoso">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del Tipo de suelo</label>
		    <input type="text" class="form-control" value="{{$suelo->descripcion}}" name="descripcion" id="descripcion" placeholder="Incapaces de retener el agua">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection