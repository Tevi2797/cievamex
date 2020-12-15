@extends('plantillas.adminMain')


@section('titulo','Cargos')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Cargos</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
	<table class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Cargo</th>
			<th>Descripción</th>
		    <th>Editar</th>
		    <th>Eliminar</th>
		</tr>

@foreach($cargos as $cargo)
	
		<tr>
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$cargo->nombre}}</td>
			<td>{{$cargo->descripcion}}</td>
			<td class="centrarColumna"><a href="{{route('edit.cargos',$cargo->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.cargos',$cargo->id)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
			
		</div>
	</div>
</div>

@endsection