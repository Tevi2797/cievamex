@extends('plantillas.adminMain')


@section('titulo','Productores')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Familia del Productor</h2>
			<br>
		</div>
	</div>

    <div class="row">
        <div class="col">
            <table id="table" class="table">
		<tr class="tablaVerde">
			<th>#</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Escolaridad</th>
			<th>Actividad económica</th>
			<th>Jefe de familia</th>
			<th>Agregar Familiar</th>
			<th>Ver Familiares</th>
		</tr>

@foreach($productores as $key =>  $productor)
		
		
@php


					$valor ="";
					$si = $productor->jefe_familia;
				if($si == 1){
				$valor ="si";
				}else{

				$valor ="no";
				}

			


@endphp
	
		<tr id="table">
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</td>
			<td class="centrarColumna">{{$productor->edad}}</td>
			<td>{{$productor->escolaridad}}</td>		
			<td>{{$productor->actividad['nombre']}}</td>
			<td class="centrarColumna">{{$valor}}</td>
			<td class="centrarColumna"><a href="{{route('mostrarview',$productor->id)}}" class="center"><img class="imgTabla" src="{{asset('img/mas.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('lista.familia',$productor->id)}}" class="center"><img class="imgTabla" src="{{asset('img/familia.png')}}"></a></td>
		


@endforeach
			</table>
        </div>
    </div>
</div>




@endsection