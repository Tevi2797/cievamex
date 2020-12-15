@extends('plantillas.adminMain')


@section('titulo','Tipos de Especies')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Especies Registradas</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Nombre científico</th>
			<th>Descripción</th>
		    <th>Editar</th>
			<th>Eliminar</th>
		</tr>

@foreach($especies as $especie)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$especie->nombre_comun}}</td>
			<td>{{$especie->nombre_cientifico}}</td>
			<td>{{$especie->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$especie->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('especies.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.especie',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>

@endsection