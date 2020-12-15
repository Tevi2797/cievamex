@extends('plantillas.adminMain')

@section('titulo','Nueva Actividad Economica')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Nueva Actividad Econ®Æmica</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
<form method="post" action="{{route('actividades.store')}}">
@csrf

   <div class="form-group">
    <label for="nombre">Nombre de la actividad</label>
    <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Obrero">
  </div>

   <div class="form-group">
    <label for="nombre">Descripci√≥n</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Obrero">
  </div>

	<input type="submit" name="submit" class="submit btn btn-info" value="Guardar" />


    </form>
   </div>
</div>
</div>
<br><br>

@endsection