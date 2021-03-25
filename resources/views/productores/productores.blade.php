@extends('plantillas.adminMain')
 

@section('titulo','Productores')


@section('formbus')

<div class="container">
    <form>
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Productores</h2>
            <br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscar" value="" name="buscar" placeholder="Ingrese el nombre, municipio o estado" >
                    <input type="hidden" value="{{$buscar}}" id="buscarProd">
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
               <h6>Total {{$cantidad}} productores </h6>
                <select class="custom-select ml-2 mr-sm-2" name="filas" id="filasProd">
                    <option value="10" @if($filas==='10') selected  @endif>10</option>
                    <option value="25"  @if($filas==='25') selected  @endif>25</option>
                    <option value="50"  @if($filas==='50') selected  @endif>50</option>
                    <option value="100" @if($filas==='100') selected  @endif>100</option>
                </select>
                 por página
            </div>
            @else
            No se encontraron productores con esas características.
            @endif
        </div>
    </div>
    </form>
    <br>

    <div class="row">
        <div class="col">
	        <table id="table" class="table">
	        	<tr class="tablaVerde">
			        <th>#</th>
			        <th>Nombre</th>
			        <th>Edad</th>
                    <th>Actividad Económica</th>
                    <th>Municipio</th>
                    <th>Estado</th>
                    <th>Localidad</th>
			        <th>Editar</th>
			        <th>Eliminar</th>
			        <th>Más</th>
	        	</tr>

@foreach($productores as $key =>  $productor)



		        <tr id="table">
		            <td class="centrarColumna">{{$loop->index+1}}</td>
			        <td>{{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</td>
			        <td class="centrarColumna">{{$productor->edad}}</td>
                    <td class="centrarColumna">{{$productor->actividad['nombre']}}</td>
                    @foreach ($municipios as $municipio)
                        @if ($municipio->id==$productor->direccion->id_municipio)
                        <td class="centrarColumna">{{$municipio->nombre}}</td>
                        <td class="centrarColumna">{{$municipio->estado->nombre}}</td>
                        @endif
                    @endforeach

                    <td class="centrarColumna">{{$productor->direccion['localidad']}}</td>
			        <td class="centrarColumna"><a href="{{route('productores.edit',$productor->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			        <td class="centrarColumna"><a data-toggle="modal" data-target="#eliminar_productor{{$productor->id}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
			        <td class="centrarColumna"><div class="dropdown">
			            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('img/mas.png')}}" class="imgTabla"></button>
				            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('parcelas.create')}}">Agregar Parcela</a>
                            <a class="dropdown-item" href="/mostrar/{{$productor->id}}">Agregar Familiar</a>
                            <a class="dropdown-item" href="/familia/{{$productor->id}}">Ver Familiares</a>
                            <a class="dropdown-item" href="/socioe/{{$productor->id}}/edit">Estudio Socieconómico</a>
				            <a class="dropdown-item" href="{{route('productores.show',$productor->id)}}">Reporte de Estudio Socieconómico</a>
				            </div>
				        </div>
				    </td>
				</tr>

<!-- Modal -->
<div class="modal fade" id="eliminar_productor{{$productor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar Productores</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">
        <form method="POST" action="productores/{{$productor->id}}">
            @csrf @method('DELETE')
         <p>¿Realmente deseas eliminar este productor?</p>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" >Aceptar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
        </form>
      </div>

    </div>

  </div>

<!-- End modal -->

@endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="mx-auto">
          <span class="fondoVerde">{{$productores->appends(['buscar'=>$buscar,'filas'=>$filas])->links()}} </span>
        </div>
    </div>
</div>



<script type="text/javascript">
	//keyup
	/*	window.addEventListener("load",function(){
			document.getElementById("texto").addEventListener("keyup",function(){
				if((document.getElementById("texto").value.length)>=3)
				fetch(`/usuarios/buscador?texto=${document.getElementById("texto").value}`,{
					method:'get'
				})
				.then(response => response.text() )
				.then(html => {

					document.getElementById("resultados").innerHTML =html

				})
				else
					document.getElementById("resultados").innerHTML ="no hay resultados"

			})
		})


*/
</script>


@endsection
