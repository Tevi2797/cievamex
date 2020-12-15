@extends('plantillas.adminMain')





@section('titulo','Usuarios')





@section('formbus')



<div class="container">

    <div class="row">

		<div class="col">

			<br>

			<h2 class="titulo1 centrarCosa">Usuarios</h2>

            <br>

            <form>

                <div class="input-group mb-3">

                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese el Nombre">

                    <div >

                        <input type="submit" name="boton" value="Buscar" class="btn btn-info">

                    </div>

                </div>

            </form>

        </div>

    </div>



    <div class="row">

        <div class="col">

            <table id="table" class="table">

		        <tr class="tablaVerde">

			        <th>#</th>

			        <th>Nombre</th>

			        <th>Edad</th>

			        <th>Correo</th>

			        <th>Tipo de Usuario</th>

			        <th>Teléfono</th>

			        <th>Editar</th>

		        	<th>Eliminar</th>

		        </tr>



@foreach($users as $user)



		@php

		if($user->tipo == 'tecnico'){

		$valor = 'Asesor Técnico';

		}

		if($user->tipo == 'campo'){

		$valor = 'Asesor de campo';

		}

		if($user->tipo == 'Administrador'){

		$valor = 'Administrador';

		}

		if($user->tipo == 'Productor'){

		$valor = 'Productor';

		}

		@endphp

    	        <tr id="table">

			        <td class="centrarColumna">{{$loop->index+1}}</td>

			        <td>{{$user->nombre}} {{$user->apellidos}}</td>

			        <td class="centrarColumna">{{$user->edad}}</td>

			        <td>{{$user->email}}</td>

			        <td>{{$valor}}</td>

			        <td>{{$user->telefono}}</td>

			        <td class="centrarColumna"><a href="{{route('edit.usuario',$user->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>

                <td class="centrarColumna"><a data-toggle="modal" data-target="#eliminar_user{{$user->id}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>

                </tr>

<!-- Modal -->
<div class="modal fade" id="eliminar_user{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar Usuarios</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">
        <form method="POST" action="usuarios/{{$user->id}}">
            @csrf @method('DELETE')
         <p>¿Realmente deseas eliminar este usuario?</p>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" >Aceptar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
        </form>
      </div>

    </div>

  </div>

  </div>


<!-- End modal -->


@endforeach

			</table>

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
