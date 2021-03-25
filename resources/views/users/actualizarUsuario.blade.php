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

    <form method="post" action="{{route('usuarios.update',$user->id)}}" novalidate >

    @method('PUT')

      @csrf



<div class="form-row">

    <div class="form-group col-md-6">

        <label for="nombre">Nombre(s)</label>

    <input value="{{$user->nombre}}" type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="">
    @error('nombre')
    <div class="invalid-feedback">
    {{ $message }}
  </div>
@enderror
    </div>



    <div class="form-group col-md-6">

        <label for="apellidos">Apellidos</label>

    <input value="{{$user->apellidos}}" type="text" class="form-control @error('apellidos') is-invalid @enderror" id="apellidos" name="apellidos" placeholder="">
    @error('apellidos')
    <div class="invalid-feedback">
         {{$message}}
    </div>
    @enderror
    </div>

</div>



<div class="form-group">

<label for="Edad">Fecha de Nacimiento <span class="text-danger"> *</span></label>

<input class="form-control @error('f_nac') is-invalid @enderror" type="date" value="{{$user->f_nac}}" id="f_nac" name="f_nac" required>
@error('edad')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror 
      
</div>



  <div class="form-group">

    <label for="correo">Correo</label>

    <input value="{{$user->email}}" type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" placeholder="">
    @error('correo')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror
  </div>





  <div class="form-group">

    <label for="password">Password <span class="text-danger"> *</span></label>
    <div class="input-group">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"  name="password" required>
        <div class="input-group-append ">
            <a class="btn btn_ojo input-group-text">
                <svg width="1em" height="1em" id="mostrar_pass" viewBox="0 0 16 16" class="bi bi-eye-slash text-black" hidden fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299l.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                    <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709z"/>
                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                </svg>
                <svg width="1em" id="ocultar_pass" height="1em" viewBox="0 0 16 16" class="bi bi-eye text-black" fill="currentColor"  xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
            </a>
        </div>
        @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>


</div>

  <div class="form-group">

    <label for="password">Confirmación</label>

    <div class="input-group">
        <input type="password" class="form-control" id="password2" name="password2"  >
        <div class="input-group-append">
            <span class="align-middle m-2">
                <svg width="1em" height="1em" id="pass_bien" viewBox="0 0 16 16" class="bi bi-check-circle-fill text-success" hidden fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                  </svg>
                  <svg width="1em" height="1em" id="pass_mal" viewBox="0 0 16 16" class="bi bi-x-circle-fill text-danger" hidden fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                  </svg>
            </span>
        </div>
    </div>
  </div>


  <div class="form-group">

    <label for="tipo">Tipo de usuario</label>

    <select class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" >



      <option {{$user->tipo == 'Administrador' ? 'selected' : ''}}>Administrador</option>

       <option value="tecnico" {{$user->tipo == 'tecnico' ? 'selected' : ''}}>Asesor técnico</option>

      <option value="campo" {{$user->tipo == 'campo' ? 'selected' : ''}}>Asesor de campo</option>

      <option {{$user->tipo == 'Productor' ? 'selected' : ''}}>Productor</option>

    </select>
    @error('tipo')
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror
  </div>



  <div class="form-group">

    <label for="password">Teléfono</label>

    <input value="{{$user->telefono}}" type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" placeholder="" >
        @error('telefono')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
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
