@extends('plantillas.adminMain')


@section('titulo','Enfermedades')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Enfermedades</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Enfermedad</th>
			<th>Descripción</th>
			<th>Editar</th>
			<th>Eliminar</th>
		
		</tr>

@foreach($enfermedades as $enfermedad)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$enfermedad->nombre}}</td>
			<td>{{$enfermedad->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$enfermedad->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('enfermedades.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.enfermedad',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection