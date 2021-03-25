@extends('plantillas.adminMain')





@section('titulo', 'Registrar Productor')





@section('formbus')

<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

  <div class="row justify-content-md-center ">

    <div class="col-lg-8 py-3 px-lg-5 border bg-light" style="background-color: white">

        <br>
        <h1 class="titulo1" align="center">Registrar Nuevo Productor</h1>
        <form method="post" action="{{route('productores.store')}}" novalidate >  
            @csrf
            <br>
        <div class="row">
        
            <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">
            <div class="form-group">
 
            <label for="tipo">Nacionalidad</label>

                    <select class="form-control"  id="nacionalidad" name="nacionalidad" >

                    <option >Mexicana</option>
                    <option>Extranjera</option>
                    
                    </select>

                </div>

                <div class="form-group">

                    <label for="nombre">Nombre(s)<span class="text-danger"> *</span></label>

                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" value="{{ old('nombre')}}" name="nombre" placeholder="">
                    @error('nombre')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">

                        <label for="apellidos">Apellido Paterno<span class="text-danger"> *</span></label>

                        <input type="text" class="form-control @error('apellido_pat') is-invalid @enderror" id="apellido_pat" value="{{ old('apellido_pat')}}" name="apellido_pat" placeholder="">
                        @error('apellido_pat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">

                        <label for="apellidos">Apellido Materno<span class="text-danger"> *</span></label>

                        <input type="text" class="form-control @error('apellido_mat') is-invalid @enderror" id="apellido_mat" value="{{ old('apellido_mat')}}" name="apellido_mat" placeholder="">
                        @error('apellido_mat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
 
                </div>

                <div class="form-row">
                    <div class="form-group col-md-7">

                    <label for="nacimiento">Fecha de Nacimiento <span class="text-danger"> *</span></label>

                            <input class="form-control @error('nacimiento') is-invalid @enderror" type="date" value="2011-08-19" id="nacimiento" name="nacimiento" required>
                            @error('f_nac')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror 
                    </div>

                    <div class="form-group col-md-6">

                        <label for="tipo">Sexo<span class="text-danger"> *</span></label>

                        <select class="form-control @error('sexo') is-invalid @enderror" id="sexo" name="sexo" >

                        <option >Hombre</option>

                        <option>Mujer</option>

                        </select>
                        @error('sexo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">

                    <label for="telefono">Teléfono </label>

                    <input type="text" class="form-control" id="telefono" value="{{ old('telefono')}}" name="telefono" placeholder="5510998745" required="required">

                </div>
                

                

                <div class="form-group">

                    <label for="tipo">Seguro</label>

                    <select class="form-control" id="seguro" name="seguro" >

                    <option >Ninguno</option>

                    <option >IMSS</option>

                    <option>ISSSTE</option>

                    <option>Seguro Popular</option>

                    <option>Particular</option>

                    <option>PEMEX</option>

                    </select>

                </div>
                <div class="form-group">

                    <label for="tipo">Escolaridad</label>

                    <select class="form-control"  id="escolaridad" name="escolaridad" >

                    <option >Nula</option>
                    <option>Primaria</option>
                    <option>Secundaria</option>
                    <option>Media Superior</option>
                    <option>Superior</option>
                    </select>

                </div>

                <div class="form-group">

                    <label for="tipo">Actividades económicas disponibles:<span class="text-danger"> *</span></label>

                    <select  class="form-control @error('select_act') is-invalid @enderror"  id="select_act" name="select_act" >

                        <option>Seleccione una opción</option>
                        @foreach($actividades as $actividad)
                            <option value="{{$actividad->id}}"> {{$actividad->nombre}}</option>
                        @endforeach
                        <option value="mas_act"><a href="/actividades/create">Agregar Actividades</a></option>
                    </select>
                    @error('select_act')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">

                <br>
                <h3 class="titulo3" align="center">Datos de la Dirección</h3>
                <br>
                <div class="form-group">

                    <label for="tipo">Estado<span class="text-danger"> *</span></label>

                    <select  class="form-control @error('select_edo') is-invalid @enderror" id="select_edo" name="select_edo" >

                    <option>Seleccione una Opción</option>

                        @foreach($estados as $estado)
                            <option value="{{$estado->id}}"> {{$estado->nombre}}</option>
                        @endforeach

                    </select>
                    @error('select_edo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="tipo">Municipios<span class="text-danger"> *</span></label>

                    <select  class="form-control @error('select_muni') is-invalid @enderror" id="select_muni" name="select_muni" >

                    </select>
                    @error('select_muni')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">

                    <label for="localidad">Localidad<span class="text-danger"> *</span></label>

                    <input type="text" class="form-control @error('localidad') is-invalid @enderror" id="localidad" name="localidad" placeholder="">
                    @error('localidad')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">

                        <label for="ejido">Ejido </label>

                        <input type="text" class="form-control" id="ejido" name="ejido" placeholder="">

                    </div>
                    <div class="form-group col-md-6">

                        <label for="colonia">Colonia </label>

                        <input type="text" class="form-control" id="colonia" name="colonia" placeholder="">

                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">

                        <label for="calle">Calle</label>

                        <input type="text" class="form-control" id="calle" name="calle" placeholder="">

                    </div>

                    <div class="form-group col-md-4">

                        <label for="numero">Número</label>

                        <input type="text" class="form-control" id="numero" name="numero" placeholder="">

                    </div>
                </div>
                <div class="form-group">

                    <label for="referencia">enfermedad</label>

                    <input type="text" class="form-control" id="enfermedad" name="enfermedad" placeholder="">

                </div>
                <div class="form-group">

                    <label for="referencia">Referencias</label>

                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="">

                </div>
            </div>
        </div>
            <div class="form-group">

                <input type="submit" name="submit" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">

            </div>
        </form>
    </div>

  </div>


<br><br>

@endsection
