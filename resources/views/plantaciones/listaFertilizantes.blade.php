@extends('plantillas.adminMain')


@section('titulo','Fertilizantes')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Fertilizantes Utilizados</h2>
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

			$unicos = $plantacion->fertilizantes->unique('id');
		@endphp

@foreach($unicos as $fertilizante)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$fertilizante->nombre}}</td>
			<td>{{$fertilizante->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_fertilizante'=>$fertilizante->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a  href="{{route('destroy.plantferti',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>
@endsection