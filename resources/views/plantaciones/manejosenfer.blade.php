@extends('plantillas.adminMain')


@section('titulo','Manejo de Enfermedades')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">M®¶todos De Manejo De Control De Enfermedad</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Descripci√≥n</th>
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($manejos as $manejo)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$manejo->nombre}}</td>
			<td>{{$manejo->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$manejo->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('manejosenfer.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.manejosenfer',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection