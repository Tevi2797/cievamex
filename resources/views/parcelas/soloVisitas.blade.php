@extends('plantillas.adminMain')

@section('titulo','Visitas')

@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Reporte de Visitas</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
			<form method="post" action="{{route('visitas.reporte')}}"  >
   		@method('GET')
      @csrf

  	<div class="form-group">
    <label for="tipo">Seleccione el año para el reporte a generar</label>
    <select class="form-control" id="año" name="año" >
     
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2024</option>
      <option value="2025">2025</option>
    </select>
  </div>
	<input type="submit" name="boton" value="Mostrar" class="btn btn-primary">
	</form>
		</div>
	</div>
</div>
<br><br>
@endsection