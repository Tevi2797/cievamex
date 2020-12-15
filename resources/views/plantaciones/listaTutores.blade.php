@extends('plantillas.adminMain')


@section('titulo','Plagas')


@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Tutores Presentes</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripción</th>
		    <th>Eliminar</th>
		</tr>

		@php

			$unicos = $plantacion->tutores->unique('id');
		@endphp

@foreach($unicos as $tutor)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$tutor->nombre}}</td>
			<td>{{$tutor->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_tutor'=>$tutor->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a href="{{route('destroy.planttutor',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection