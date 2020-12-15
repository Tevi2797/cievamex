@extends('plantillas.adminMain')

@section('titulo','Registrar Cargo')

@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Nuevo Cargo</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		<form method="post" action="/cargos">
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Supervisor de campo">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripción del Cargo</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Se encarga de revisar las actividades que se realizan en campo">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>

<br><br>
@endsection