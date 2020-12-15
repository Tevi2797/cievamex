@extends('plantillas.adminMain')





@section('titulo','Parcelas')





@section('formbus')



<div class="container">

    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Parcelas</h2>
        </div>
    </div>

    <br>
    <div class="row">
		<div class="col">
            <form>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese el nombre, municipio o estado" >
                    <div>
                        <input type="submit" name="boton" value="Buscar" class="btn fondoVerde">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=row>
        <div class="col">
        <table id="table" class="table">
		    <tr class="tablaVerde">
                <th>#</th>
                <th style='text-align: justify;'>Propietario</th>
                <th >Hectareas</th>
                <th>Pendiente</th>
                <th>Localidad</th>
                <th>Suelo</th>
                <th>Riego</th>
                <th>Municipio</th>
                <th>Editar</th>
                <th>Más</th>
		    </tr>

    @foreach($parcelas as $key=> $parcela)

		@php
    		foreach($parcela->productores as $productor){
    		}
    	@endphp

		<tr id="table">
			<td class="centrarColumna">{{$loop->index+1}}</td>
            <td >{{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</td>
			<td>{{$parcela->ha}}</td>
			<td>{{$parcela->pendiente}}</td>
			<td>{{$parcela->localidad}}</td>
			<td>{{$parcela->suelo->nombre}}</td>
			<td>{{$parcela->riego->nombre}}</td>
			<td>{{$parcela->municipio->nombre}}</td>

			@php
				$parameter =[
					'id'=>$parcela->id,
				];

				$parameter = Crypt::encrypt($parameter);
				$id_modal = $parcela->id;

			@endphp


			<td class="centrarColumna"><a href="{{route('parcelas.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>

			<td class="centrarColumna">

			    <div class="dropdown">

				  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

				    <img class="imgTabla" src="{{asset('img/mas.png')}}">

				  </button>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

				    <a class="dropdown-item" href="{{route('destroy.parcela',$parameter)}}">Eliminar</a>

				<!--    <a class="dropdown-item" href="{{route('plantaciones.nuevo',$parcela->id)}}">Agregar Plantacion</a> -->

				    <a class="dropdown-item" href="{{route('plantaciones.mostrar',$parcela->id)}}">Ver Plantaciones</a>

				    <a class="dropdown-item" href="{{route('visitas.nuevaVisita',$parcela->id)}}">Registrar Visita</a>

				    <a class="dropdown-item" href="{{route('visitas.mostrarVisitas',$parcela->id)}}">Mostrar Visitas</a>

				    <a class="dropdown-item" href="{{route('plantaciones.graficar',$parcela->id)}}">Seguimiento de Plantaciones</a>

				  </div>

                </div>
            </td>

    @endforeach

		</table>

        </div>
    </div>
</div>







@endsection
