@extends('plantillas.adminMain')


@section('titulo','Cultivos Asociados')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Asociados</h2>
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

			$unicos = $plantacion->asociados->unique('id');
		@endphp

@foreach($unicos as $asociado)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$asociado->nombre}}</td>
			<td>{{$asociado->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_asociado'=>$asociado->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a href="{{route('destroy.plantasociado',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			
		</tr>


@endforeach
			</table>
		</div>
	</div>
</div>

@endsection