@extends('plantillas.adminMain')


@section('titulo','Actividades')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Actividades Económicas</h2>
<br>

	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripción</th>
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($actividades as $actividad)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$actividad->nombre}}</td>
			<td>{{$actividad->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$actividad->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('actividades.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.actividad',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>




@endsection
