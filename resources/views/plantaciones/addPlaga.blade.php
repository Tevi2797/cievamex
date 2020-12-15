@extends('plantillas.adminMain')


@section('titulo','Agregar Plaga')

@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Agregar Plaga</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
		<form method="post" action="{{route('plagasplantaciones.store')}}">
		 @csrf
		 <input hidden value="{{$plantacion->id}}" name="id">
		  <div class="form-group">
		    <label for="tipo">Plaga</label>
		    <select class="form-control" id="plaga" name="plaga" >
		      @foreach($plagas as $plaga)
		      <option value="{{$plaga->id}}">{{$plaga->nombre}}</option>
		      @endforeach
		    </select>
		  </div>
					  
		  <input type="submit" name="boton" value="Guardar" class="btn btn-primary">
		</form>


		</div>
	</div>
</div>
<br><br>
@endsection