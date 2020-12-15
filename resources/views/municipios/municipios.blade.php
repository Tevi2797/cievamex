@extends('plantillas.adminMain')


@section('titulo','Usuarios')


@section('formbus')

<div class="container">
    <div class="row">
		<div class="col">
			<br>
			<h2 class="titulo1 centrarCosa">Manejo de Plagas</h2>
            <br>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <form >
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Ingrese el Nombre" >
                        <div>
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
			<th>Estado</th>
			<th>Editar</th>
			<th>Eliminar</th>
			
		</tr>

@foreach($municipios as $key => $municipio)
		
	
	
		<tr id="table">
			<td class="centrarColumna">{{$loop->index+1}}</td>
			<td>{{$municipio->nombre}}</td>
			<td>{{$municipio->estado['nombre']}}</td>
			<td class="centrarColumna"><a href="{{route('municipios.edit',$municipio->id)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>
			<td class="centrarColumna"><a href="{{route('destroy.muni',$municipio->id)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>
		</tr>


@endforeach
			</table>
		</div>
	</div>
</div>

<br><br>
			
			



@endsection