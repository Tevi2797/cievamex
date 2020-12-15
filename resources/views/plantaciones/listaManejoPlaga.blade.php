@extends('plantillas.adminMain')


@section('titulo','Manejo de Plagas')


@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Manejo de Plagas</h2>
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

			$unicos = $plantacion->manejo_plagas->unique('id');
		@endphp

@foreach($unicos as $manejo)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$manejo->nombre}}</td>
			<td>{{$manejo->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_manejo'=>$manejo->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a href="{{route('destroy.plagasmanejo',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection