@extends('plantillas.adminMain')


@section('titulo','Enfermedades')


@section('formbus')
<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Enfermedades Presentes</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripci√≥n</th>
		    <th>Eliminar</th>
		    <th>M®¢s</th>
		</tr>

		@php

			$unicos = $plantacion->enfermedadesplantacion->unique('id');
		@endphp

@foreach($unicos as $enfermedad)
	


		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$enfermedad->nombre}}</td>
			<td>{{$enfermedad->descripcion}}</td>

			@php
			$parameter =[
					'id_plantacion'=>$plantacion->id,
					'id_enfermedad'=>$enfermedad->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			
			<td class="centrarColumna"><a  href="{{route('destroy.listaenfermedad',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			<td class="centrarColumna"><div class="dropdown">
				  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <img class="imgTabla" src="{{asset('img/mas.png')}}">
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    
				    <a class="dropdown-item" href="{{route('plantacionesmanejo.show',$plantacion->id)}}">Agregar Manejo de enfermedad</a>
				    <a class="dropdown-item" href="{{route('manejosenfer.ver',$plantacion->id)}}">Ver Manejo de Enfermedad</a>
				    
				  </div>
				</div></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection