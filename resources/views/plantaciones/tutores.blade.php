@extends('plantillas.adminMain')


@section('titulo','Tutores')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Tutores</h2>
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

@foreach($tutores as $tutor)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$tutor->nombre}}</td>
			<td>{{$tutor->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$tutor->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('tutores.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.tutor',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>
@endsection