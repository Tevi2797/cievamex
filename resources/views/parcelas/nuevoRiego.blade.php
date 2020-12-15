@extends('plantillas.adminMain')


@section('titulo','Nuevo Sistema de Riego')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Registrar Nuevo Sistema De Riego</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		
		<form method="post" action="{{route('riegos.store')}}">
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del sistema de riego</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" >
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn  btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection