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
    <form>
    <div class="row">
		<div class="col">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese el nombre, municipio o estado" >
                    <input type="hidden" value="{{$buscar}}" id="buscarParc">
                    <div>
                        <input type="submit" name="boton" value="Buscar" class="btn fondoVerde">
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            @if ($cantidad>0)
            <div class="input-group">
               <h6>Total {{ $cantidad }} parcelas </h6>
                <select class="custom-select ml-2 mr-sm-2" name="filas" id="filasParcela">
                    <option value="10" @if($filas==='10') selected  @endif>10</option>
                    <option value="20"  @if($filas==='20') selected  @endif>25</option>
                    <option value="50"  @if($filas==='50') selected  @endif>50</option>
                    <option value="100" @if($filas==='100') selected  @endif>100</option>
                </select>
                 por página
            </div>
        @else
            No se encontraron parcelas con esas características.
        @endif
        </div>
    </div>
    </form>
    <br>

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

				    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#eliminar_parcela{{$parcela->id}}">Eliminar</a>

				<!--    <a class="dropdown-item" href="{{route('plantaciones.nuevo',$parcela->id)}}">Agregar Plantacion</a> -->

				    <a class="dropdown-item" href="{{route('plantaciones.mostrar',$parcela->id)}}">Ver Plantaciones</a>

				    <a class="dropdown-item" href="{{route('visitas.nuevaVisita',$parcela->id)}}">Registrar Visita</a>

				    <a class="dropdown-item" href="{{route('visitas.mostrarVisitas',$parcela->id)}}">Mostrar Visitas</a>

				    <a class="dropdown-item" href="{{route('plantaciones.graficar',$parcela->id)}}">Seguimiento de Plantaciones</a>

				  </div>

                </div>

            </td>
           @include('parcelas.eliminarParcela')
        </tr>
    @endforeach

		</table>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto">
          <span class="fondoVerde">{{$parcelas->appends(['buscar'=>$buscar,'filas'=>$filas])->links()}} </span>
        </div>
    </div>
</div>

@endsection
