@extends('plantillas.adminMain')


@section('titulo','Nuevo Enfermedad')

@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Registrar Nueva Enfermedad de Plantaci®Æn</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		
		<form method="post" action="{{route('enfermedades.store')}}">
		 @csrf
		  <div class="form-group">
		    <label for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pudrici√≥n negra">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Descripci√≥n de la enfermedad</label>
		    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Podredumbre verde a negra de tallos, hojas y / o vainas empapados de agua">
		  </div>
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection