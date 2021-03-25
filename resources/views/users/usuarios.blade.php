@extends('plantillas.adminMain')

@section('titulo','Usuarios')

@section('formbus')
<div class="container">
    <form>
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Usuarios</h2>
            <br>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese el nombre, apellido, tipo de usuario">
                    <input type="hidden" value="{{$buscar}}" id="buscarUsuario">
                    <div >
                        <input type="submit" name="boton" value="Buscar" class="btn btn-info">
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            @if ($cantidad>0)
            <div class="input-group">
               <h6>Total {{ $cantidad }} usuarios </h6>
                <select class="custom-select ml-2 mr-sm-2" name="filas" id="filasUsuarios">
                    <option value="10" @if($filas==='10') selected  @endif>10</option>
                    <option value="20"  @if($filas==='20') selected  @endif>25</option>
                    <option value="50"  @if($filas==='50') selected  @endif>50</option>
                    <option value="100" @if($filas==='100') selected  @endif>100</option>
                </select>
                 por página
            </div>
        @else
            No se encontraron usuarios con esas características.
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
			        <td>{{$user->nombre}} {{$user->apellidos}} </td>
			        <td class="centrarColumna">{{    Carbon\Carbon::createFromTimestamp(strtotime($user->f_nac))->diffInYears()   }} años</td>
                    <td> </td>
			        <td>{{$user->email}}</td>
			        <td>{{$valor}}</td>
			        <td>{{$user->telefono}}</td>
			        <td class="centrarColumna"><a href="{{route('edit.usuario',$user->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
                    <td class="centrarColumna"><a href="#" class="modalDialog" data-toggle="modal" data-target="#eliminar_user{{$user->id}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
                    <!-- Modal -->
                    <div class="modal fade" id="eliminar_user{{$user->id}}" role="dialog" >
                        <div class="modal-dialog modal-dialog-centered" role="dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar Usuarios</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="usuarios/{{$user->id}}">
                                    @csrf @method('DELETE')
                                    <div class="modal-body">
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
                    <!-- End modal -->
                </tr>

            @endforeach
			</table>
        </div>
    </div>

    <div class="row">
        <div class="mx-auto">
          <span class="fondoVerde">{{$users->appends(['buscar'=>$buscar,'filas'=>$filas])->links()}} </span>
        </div>
    </div>
</div>

@endsection

