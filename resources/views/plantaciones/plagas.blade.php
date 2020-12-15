@extends('plantillas.adminMain')


@section('titulo','Pagas')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Plagas</h2>
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

@foreach($plagas as $plaga)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$plaga->nombre}}</td>
			<td>{{$plaga->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$plaga->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('plagas.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.plaga',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection