@extends('plantillas.adminMain')



@section('titulo','Actualizar Usuario')



@section('formbus')



<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

  <div class="row justify-content-md-center">

  <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white">

<br>

<h1 class="titulo1" align="center">Actualizar Usuario</h1>

    <form method="post" action="{{route('usuarios.update',$user->id)}}"  >

    @method('PUT')

      @csrf



<div class="form-row">

    <div class="form-group col-md-6">

        <label for="nombre">Nombre(s)</label>

    <input value="{{$user->nombre}}" type="text" class="form-control" id="nombre" name="nombre" placeholder="">

    </div>



    <div class="form-group col-md-6">

        <label for="apellidos">Apellidos</label>

    <input value="{{$user->apellidos}}" type="text" class="form-control" id="apellidos" name="apellidos" placeholder="">

    </div>

</div>



  <div class="form-group">

    <label for="apellidos">Edad</label>

    <input value="{{$user->edad}}" type="text" class="form-control" id="edad" name="edad" placeholder="">

  </div>



  <div class="form-group">

    <label for="correo">Correo</label>

    <input value="{{$user->email}}" type="email" class="form-control" id="correo" name="correo" placeholder="">

  </div>





  <div class="form-group">

    <label for="password">Password</label>

    <input required  type="password" class="form-control" id="password" name="password" >

  </div>



  <div class="form-group">

    <label for="tipo">Tipo de usuario</label>

    <select class="form-control" id="tipo" name="tipo" >



      <option {{$user->tipo == 'Administrador' ? 'selected' : ''}}>Administrador</option>

       <option value="tecnico" {{$user->tipo == 'tecnico' ? 'selected' : ''}}>Asesor técnico</option>

      <option value="campo" {{$user->tipo == 'campo' ? 'selected' : ''}}>Asesor de campo</option>

      <option {{$user->tipo == 'Productor' ? 'selected' : ''}}>Productor</option>

    </select>

  </div>



  <div class="form-group">

    <label for="password">Teléfono</label>

    <input value="{{$user->telefono}}" type="text" class="form-control" id="telefono" name="telefono" placeholder="" >

  </div>



  <div class="form-group">

  	  <label for="tipo">Cargo</label>

  	  <select  class="form-control" id="cargo" name="cargo" >

  	    @foreach($cargos as $cargo)



    <option value="{{$cargo->id}}"

    {{$user->id_cargo == $cargo->id ? 'selected' : ''}}> {{$cargo->nombre}}</option>

     @endforeach

    </select>

  </div>



  <div class="form-group">

    <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">

  </div>

</form>

  </div>

</div>

</div>

<br><br>







@endsection
