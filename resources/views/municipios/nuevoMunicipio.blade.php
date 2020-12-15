@extends('plantillas.adminMain')


@section('titulo','Nuevo Municipio')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Registrar Nuevo Municipio</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            
<form method="post" action="/municipios"  >
	  @csrf

	<div class="form-group">
    <label for="nombre">Nombre del municipio</label>
    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="San Rafael">
  </div>

  <div class="form-group">
    <label for="tipo">Estados</label>
    <select class="form-control" id="estado" name="estado" >
    @foreach($estados as $estado)
      <option value="{{$estado->id}}">{{$estado->nombre}}</option>
    @endforeach
    </select>
  </div>

  <h3 class="titulod">Caracteristicas del municipio</h3>
  <label>En en el siguiente formulario seleccionará 
  		la opción con la que cuenta su municipio</label>

  	</div>
  	</div>
  	<br>	
  	<div class="row">
  	<div class="col-3">

  <div class="form-group">
 	<label>Instituciones de educación
 		<br>
 	<input type="radio" name="edu_pub" value="1"> Si

	<br>

	<input type="radio" name="edu_pub" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Centros de salud
 		<br>
 	<input type="radio" name="ce_salud" value="1"> Si

	<br>

	<input type="radio" name="ce_salud" value="2"> No

	</label>
 </div>

<div class="form-group">
 	<label>Pavimentación
 		<br>
 	<input type="radio" name="pavimento" value="1"> Si

	<br>

	<input type="radio" name="pavimento" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Alumbrado público
 		<br>
 	<input type="radio" name="publico" value="1"> Si

	<br>

	<input type="radio" name="publico" value="2"> No
 
	</label>
 </div>

 
  


		</div>
		<div class="col-3">
	<div class="form-group">
 	<label>Transporte público
 		<br>
 	<input type="radio" name="transporte" value="1"> Si

	<br>

	<input type="radio" name="transporte" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Red de telefonía móvil
 		<br>
 	<input type="radio" name="movil" value="1"> Si

	<br>

	<input type="radio" name="movil" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Agua potable
 		<br>
 	<input type="radio" name="potable" value="1"> Si

	<br>

	<input type="radio" name="potable" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Alcantarillado
 		<br>
 	<input type="radio" name="alcantarillado" value="1"> Si

	<br>

	<input type="radio" name="alcantarillado" value="2"> No

	</label>
 </div>

 
		</div>
		<div class="col-3">
	<div class="form-group">
 	<label>Drenaje
 		<br>
 	<input type="radio" name="drenaje" value="1"> Si

	<br>

	<input type="radio" name="drenaje" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Electricidad
 		<br>
 	<input type="radio" name="electricidad" value="1"> Si

	<br>

	<input type="radio" name="electricidad" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Recolección de residuos
 		<br>
 	<input type="radio" name="residuos" value="1"> Si

	<br>

	<input type="radio" name="residuos" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Centro de gas 
 		<br>
 	<input type="radio" name="gas" value="1"> Si

	<br>

	<input type="radio" name="gas" value="2"> No

	</label>
 </div>

 
		</div>
		<div class="col-3">
			<div class="form-group">
 	<label>Seguridad pública
 		<br>
 	<input type="radio" name="seguridad" value="1"> Si

	<br>

	<input type="radio" name="seguridad" value="2"> No

	</label>
 </div>

 <div class="form-group">
 	<label>Centro de abastos
 		<br>
 	<input type="radio" name="abastos" value="1"> Si

	<br>

	<input type="radio" name="abastos" value="2"> No

	</label>
 </div>


		</div>

	</div>
	<input type="submit" name="submit" class="submit btn btn-primary" value="Guardar" />	
 </form>
</div>
<br><br>

@endsection