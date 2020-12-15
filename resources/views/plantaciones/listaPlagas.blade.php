@extends('plantillas.adminMain')


@section('titulo','Plagas')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Plagas Presentes</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripci¨®n</th>
		    <th>Eliminar</th>
		    <th>M¨¢s</th>
		</tr>

		@php

			$unicos = $plantacion->plagas->unique('id');
		@endphp

@foreach($unicos as $plaga)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$plaga->nombre}}</td>
			<td>{{$plaga->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_plaga'=>$plaga->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a href="{{route('destroy.listaplaga',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			<td class="centrarColumna"><div class="dropdown">
				  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img class="imgTabla" src="{{asset('img/mas.png')}}">
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    
				    <a class="dropdown-item" href="{{route('plagasmanejo.show',$plantacion->id)}}">Agregar Manejo de plagas</a>
				    <a class="dropdown-item" href="{{route('plagasmanejo.ver',$plantacion->id)}}">Ver Manejo de plaga</a>
				    
				  </div>
				</div></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection