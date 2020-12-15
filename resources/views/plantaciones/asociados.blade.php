@extends('plantillas.adminMain')


@section('titulo','Cultivos Asociados')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Asociados</h2>
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
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($asociados as $asociado)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$asociado->nombre}}</td>
			<td>{{$asociado->descripcion}}</td>

			@php
				$parameter =[
					'id'=>$asociado->id,
				];
				$parameter = Crypt::encrypt($parameter);
			@endphp
			<td class="centrarColumna"><a href="{{route('asociados.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.asociado',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
        </div>
    </div>
</div>
<br><br>

@endsection