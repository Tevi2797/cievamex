@extends('plantillas.adminMain')


@section('titulo','Nueva Especie')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Registrar Nueva Especie</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		<form method="post" action="{{route('especies.store')}}">
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre Común</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre Científico</label>
		    <input type="text" class="form-control" id="cientifico" name="cientifico" >
		  </div>

		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción de la Especie</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" >
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection