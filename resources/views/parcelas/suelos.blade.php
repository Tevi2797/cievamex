@extends('plantillas.adminMain')


@section('titulo','Suelos')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Tipos  de Suelos</h2>
            <br>
        </div>
    </div>

	<div class="row">
        <div class="col">
	<table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Tipo de suelo</th>
			<th>Descripción</th>
			<th>Editar</th>
			<th>Eliminar</th>
		
		</tr>

@foreach($suelos as $suelo)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$suelo->nombre}}</td>
			<td>{{$suelo->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$suelo->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('suelos.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.suelo',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>
<br><br>
@endsection