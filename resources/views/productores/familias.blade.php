@extends('plantillas.adminMain')


@section('titulo','Familiares')


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
			<th>Fecha de Nacimiento</th>
			<th>Parentesco</th>
			<th>Escolaridad</th>
			<th>Ingreso mensual</th>
		    <th>Editar</th>	
		    <th>Editar</th>	
		</tr>

@foreach($familias as $key=> $familia)
		@php
		foreach($familia->enfermedades as $enfermedad){
			if($enfermedad->nombre){
				$nombre=$enfermedad->nombre;
			}else{
				$nombre='Sin Enfermedades';
			}
			
		}

		@endphp

		<tr id="table">
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td style='text-align: justify;'>{{$familia->nombre}} {{$familia->apellido_pat}} {{$familia->apellido_mat}}</td>
			<td class="centrarColumna">{{$familia->edad}}</td>
			<td>{{$familia->nacimiento}}</td>		
		
			<td>{{$familia->parentesco}}</td>
			<td>{{$familia->escolaridad}}</td>
			<td>{{$familia->ingreso}}</td>
		
			<td class="centrarColumna"><a href="{{route('familiares.edit',$familia->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('fam.destroy',$familia->id)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			
@endforeach

			</table>
			
		</div>
	</div>
</div>

@endsection