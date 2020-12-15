@extends('plantillas.adminMain')


@section('titulo','Fertilizantes')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Fertilizantes</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripción</th>
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($fertilizantes as $fertilizante)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$fertilizante->nombre}}</td>
			<td>{{$fertilizante->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$fertilizante->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td  class="centrarColumna"><a  href="{{route('fertilizantes.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.fertilizante',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>
@endsection