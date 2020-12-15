@extends('plantillas.adminMain')


@section('titulo','Riegos')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Sistemas de Riego</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Tipo de riego</th>
			<th>Descripción</th>
			<th>Editar</th>
			<th>Eliminar</th>
		
		</tr>

@foreach($riegos as $riego)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$riego->nombre}}</td>
			<td>{{$riego->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$riego->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('riegos.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.riego',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>
@endsection