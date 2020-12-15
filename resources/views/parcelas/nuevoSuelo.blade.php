@extends('plantillas.adminMain')


@section('titulo','Nuevo Tipo de Suelo')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Registrar Nuevo Tipo De Suelo</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		
		<form method="post" action="{{route('suelos.store')}}">
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Arenoso">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del tipo de suelo</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Incapaces de retener el agua">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection