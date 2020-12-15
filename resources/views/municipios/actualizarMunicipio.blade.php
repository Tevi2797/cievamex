@extends('plantillas.adminMain')


@section('titulo','Actualizar Municipio')

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
  
<form method="post" action="{{route('municipios.update',$municipio->id)}}"  >
	@method('PUT')
	  @csrf

	<div class="form-group">
    <label for="nombre">Nombre del Municipio</label>
    <input value="{{$municipio->nombre}}" type="text" class="form-control" id="municipio" name="municipio" placeholder="San Rafael">
  </div>

  <div class="form-group">
    <label for="tipo">Estados</label>
    <select class="form-control" id="estado" name="estado" >
    
    @foreach($estados as $estado)
      <option value="{{$estado->id}}"
      {{$municipio->id_estado == $estado->id ? 'selected' : ''}}>{{$estado->nombre}}</option>
    @endforeach
    </select>
  </div>

  <h3 class="titulod">Características del municipio</h3>
  <label>En el siguiente formulario seleccionará 
  		la opción con la que cuenta su municipio</label>

  	</div>
  	</div>
  	<br>	
  	<div class="row">
  	<div class="col-3">

  <div class="form-group">
  	<input hidden id="valor" value="{{$caracteristica->escuelas}}"> 
 	<label>Instituciones de educación
 		<br>
 	<input id="radio1" type="radio" name="edu_pub" value="1"> Si

	<br>

	<input id="radio2" type="radio" name="edu_pub" value="2"> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Centros de salud
 		<br>
 	<input  type="radio" name="ce_salud" value="1"
 	{{$caracteristica->salud == '1' ? 'checked' : ''}}> Si

	<br>

	<input type="radio" name="ce_salud" value="2"
	{{$caracteristica->salud == '2' ? 'checked' : ''}}> No

	</label>
 </div>

<div class="form-group">

 	<label>Pavimentación
 		<br>
 	<input  type="radio" name="pavimento" value="1"
 	{{$caracteristica->pavimento == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="pavimento" value="2"
	{{$caracteristica->pavimento == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 	
 	<label>Alumbrado público
 		<br>
 	<input type="radio" name="publico" value="1"
 	{{$caracteristica->alumbrado == '1' ? 'checked' : ''}}> Si

	<br>

	<input type="radio" name="publico" value="2"
	{{$caracteristica->alumbrado == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 
  


		</div>
		<div class="col-3">
	<div class="form-group">
	 
 	<label>Transporte público
 		<br>
 	<input  type="radio" name="transporte" value="1"
 	{{$caracteristica->transporte == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="transporte" value="2"
	{{$caracteristica->transporte == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Red de telefonía móvil
 		<br>
 	<input  type="radio" name="movil" value="1"
 	{{$caracteristica->red_movil == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="movil" value="2"
	{{$caracteristica->red_movil == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Agua potable
 		<br>
 	<input  type="radio" name="potable" value="1"
 	{{$caracteristica->potable == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="potable" value="2"
	{{$caracteristica->potable == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">

 	<label>Alcantarillado
 		<br>
 	<input  type="radio" name="alcantarillado" value="1"
 	{{$caracteristica->alcantarillado == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="alcantarillado" value="2"
	{{$caracteristica->alcantarillado == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 
		</div>
		<div class="col-3">
	<div class="form-group">
	
 	<label>Drenaje
 		<br>
 	<input  type="radio" name="drenaje" value="1"
 	{{$caracteristica->drenaje == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="drenaje" value="2"
	{{$caracteristica->drenaje == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Electricidad
 		<br>
 	<input  type="radio" name="electricidad" value="1"
 	{{$caracteristica->electricidad == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="electricidad" value="2"
	{{$caracteristica->electricidad == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 	 
 	<label>Recolección de residuos
 		<br>
 	<input  type="radio" name="residuos" value="1"
 	{{$caracteristica->residuos == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="residuos" value="2"
	{{$caracteristica->residuos == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Centro de gas 
 		<br>
 	<input  type="radio" name="gas" value="1"
 	{{$caracteristica->gas == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="gas" value="2"
	{{$caracteristica->gas == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 
		</div>
		<div class="col-3">
			<div class="form-group">
	 
 	<label>Seguridad pública
 		<br>
 	<input  type="radio" name="seguridad" value="1"
 	{{$caracteristica->seguridad == '1' ? 'checked' : ''}}> Si

	<br>

	<input type="radio" name="seguridad" value="2"
	{{$caracteristica->seguridad == '2' ? 'checked' : ''}}> No

	</label>
 </div>

 <div class="form-group">
 
 	<label>Centro de abastos
 		<br>
 	<input  type="radio" name="abastos" value="1"
 	{{$caracteristica->abastos == '1' ? 'checked' : ''}}> Si

	<br>

	<input  type="radio" name="abastos" value="2"
	{{$caracteristica->abastos == '2' ? 'checked' : ''}}> No

	</label>
 </div>


		</div>

	</div>
	<input type="submit" name="submit" class="submit btn btn-primary" value="Guardar" />	
 </form>
</div>
        </div>
    </div>
    <br><br>

<script type="text/javascript">
  var radio1 = document.getElementById('radio1');
  var radio2 = document.getElementById('radio2');

  var form =document.getElementById('valor').value;
  
  console.log(form);
  if( form == 1){
	radio1.setAttribute('checked','true');
}else{
	radio2.setAttribute('checked','true');
}

  </script>


@endsection