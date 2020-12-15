@extends('plantillas.adminMain')


@section('titulo','Visitas')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Visitas</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Fecha</th>
			<th>Actividad</th>
			<th>Descripción</th>
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($visitas as $visita)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td class="centrarColumna">{{$visita->fecha}}</td>
			<td>{{$visita->actividad}}</td>
			<td>{{$visita->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$visita->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('visitas.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.visita',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
        </div>
    </div>

</div>

@endsection