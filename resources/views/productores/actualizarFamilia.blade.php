@extends('plantillas.adminMain')

@section('titulo','Actualizar Familiar')

@section('formbus')
<div class="row fondoFormulario before">  
</div>

<div class="container">
<br><br>
  <div class="row justify-content-md-center">
  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white">
<br>
<h1 class="titulo1" align="center">Actualizar Familiar</h1>

     <div class="form-check" align="center">
    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#enfermedades">Enfermedades</a>
  </div>
  
  <form method="post" action="{{route('familiares.update',$familiar->id)}}">
		@method('PUT')
		@csrf
	<div>
		<input hidden  name="id_productor" value="{{$familiar->id}}">
	</div>

	<div class="form-group">
    <label for="nombre">Nombre del Familiar</label>
    <input type="text" class="form-control" value="{{$familiar->nombre}}" id="nombre" name="nombre" placeholder="Nombre">
  	</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nombre">Apellido Paterno</label>
        <input type="text" class="form-control" value="{{$familiar->apellido_pat}}" id="apellido_pat" name="apellido_pat" placeholder="">
    </div>

    <div class="form-group col-md-6">
        <label for="nombre">Apellido Materno</label>
    <input type="text" class="form-control" value="{{$familiar->apellido_mat}}" id="apellido_mat" name="apellido_mat" placeholder="">
    </div>
</div>

  	<div class="form-group">
    <label for="nombre">Edad</label>
    <input type="text" class="form-control" value="{{$familiar->edad}}" id="edad" name="edad" placeholder="35">
  	</div>

  	<div class="form-group row">
  	    <label for="example-date-input" class="col-5 col-form-label">Fecha de nacimiento</label>
  	        <div class="col-7">
                <input class="form-control" type="date" name="date" value="{{$familiar->nacimiento}}" value="2011-08-19" id="example-date-input">
          	</div>
  	</div>

  	<div class="form-group row">
        <label for="tipo" class="col-5 col-form-label">Parentesco</label>
            <div class="col-7">
                <select class="form-control" id="parentesco" name="parentesco" >
      
      <option {{$familiar->parentesco == 'Mamá' ? 'selected' : ''}}>Mamá</option>
      <option {{$familiar->parentesco == 'Papá' ? 'selected' : ''}}>Papá</option>
      <option {{$familiar->parentesco == 'Abuelo' ? 'selected' : ''}}>Abuelo</option>
      <option {{$familiar->parentesco == 'Abuela' ? 'selected' : ''}}>Abuela</option>
      <option {{$familiar->parentesco == 'Bizbuelo' ? 'selected' : ''}}>Bizbuelo</option>
      <option {{$familiar->parentesco == 'Bizabuela' ? 'selected' : ''}}>Bizabuela</option>
      <option {{$familiar->parentesco == 'Hermano' ? 'selected' : ''}}>Hermano</option>
      <option {{$familiar->parentesco == 'Hermana' ? 'selected' : ''}}>Hermana</option>
      <option {{$familiar->parentesco == 'Cónyuge' ? 'selected' : ''}}>Cónyuge</option>
      <option {{$familiar->parentesco == 'Hijo' ? 'selected' : ''}}>Hijo</option>
      <option {{$familiar->parentesco == 'Hija' ? 'selected' : ''}}>Hija</option>
      <option {{$familiar->parentesco == 'Tio' ? 'selected' : ''}}>Tio</option>
      <option {{$familiar->parentesco == 'Tia' ? 'selected' : ''}}>Tia</option>
      <option {{$familiar->parentesco == 'Sobrino' ? 'selected' : ''}}>Sobrino</option>
      <option {{$familiar->parentesco == 'Sobrina' ? 'selected' : ''}}>Sobrina</option>
      <option {{$familiar->parentesco == 'Cuñado' ? 'selected' : ''}}>Cuñado</option>
      <option {{$familiar->parentesco == 'Cuñada' ? 'selected' : ''}}>Cuñada</option>
      <option {{$familiar->parentesco == 'Nieto' ? 'selected' : ''}}>Nieto</option>
      <option {{$familiar->parentesco == 'Nieta' ? 'selected' : ''}}>Nieta</option>
      <option {{$familiar->parentesco == 'Yerno' ? 'selected' : ''}}>Yerno</option>
      <option {{$familiar->parentesco == 'Nuera' ? 'selected' : ''}}>Nuera</option>
    </select>
            </div>
  	</div>

  	<div class="form-group row">
        <label for="tipo" class="col-5 col-form-label">Escolaridad</label>
            <div class="col-7">
                <select class="form-control" id="escolaridad" name="escolaridad" >
      
      <option {{$familiar->escolaridad == 'Nula' ? 'selected' : ''}}>Nula</option>
      <option {{$familiar->escolaridad == 'Primaria' ? 'selected' : ''}}>Primaria</option>
      <option {{$familiar->escolaridad == 'Secundaria' ? 'selected' : ''}}>Secundaria</option>
      <option {{$familiar->escolaridad == 'Media Superior' ? 'selected' : ''}}>Media Superior</option>
      <option {{$familiar->escolaridad == 'Superior' ? 'selected' : ''}}>Superior</option>
    </select>
            </div>
  	</div>
 

  	<div class="form-group">
    <label for="nombre">Ingreso Mensual</label>
    <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text form-control">$</div>
            </div>
            <input type="text" class="form-control" value="{{$familiar->ingreso}}" id="ingreso" name="ingreso" placeholder="">
        </div>
  	</div>

  	<div class="form-group">
    <label for="nombre">Gasto Mensual</label>
    <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text form-control">$</div>
            </div>
            <input type="text" class="form-control" id="gasto" value="{{$familiar->gasto}}" name="gasto" placeholder="300">
        </div>
  	</div>
  	
	<div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block fondoVerde" value="Guardar" />
    </div>
</form>
		</div>
	</div>
</div>
<br><br>



<!-- Modal -->
<div class="modal fade" id="enfermedades" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar dirección</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<table align="center" id="table" class="table">
    <tr >
      <th>#</th>
      <th>Nombre</th>
     
      
    </tr>

@foreach($familiar->enfermedades as $key=> $enfermedad)

    <tr id="table">
      <td >{{$loop->index+1}}</td>
      <td style='text-align: justify;'>{{$enfermedad->nombre}}</td>
     
@endforeach

      </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection