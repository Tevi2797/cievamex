@extends('plantillas.adminMain')



@section('titulo','Actualizar Productor')







@section('formbus')

<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

  <div class="row justify-content-md-center">

    <div class="col-lg-8 py-3 px-lg-5 border bg-light" style="background-color: white">

    <br>

    <h1 class="titulo1" align="center">Actualizar Productor</h1>
<!--
    <div class="form-check" align="center">

        <a type="button" class="btn btn-primary" href="/mostrar/{{$productor->id}}">Agregar Familiar</a>

        <a type="button" class="btn btn-primary" id="btnModalHogar" data-toggle="modal" data-target="#datosHogar">Encuesta Socioeconómica</a>

    </div> -->

    <br>

   <form method="post" action="{{route('productores.update',$productor->id)}}"  novalidate>

    @method('PUT')

      @csrf

   <input hidden value="{{$productor->id}}" name="id_produ">

   <div class="row">
        <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">

            <div class="form-group">

                <label for="nombre">Nombre(s)<span class="text-danger"> *</span></label>

                <input type="text" value="{{$productor->nombre}}" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" placeholder="">
                @error('nombre')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>



            <div class="form-row">

                <div class="form-group col-md-6">

                    <label for="apellidos">Apellido Paterno<span class="text-danger"> *</span></label>

                    <input type="text" value="{{$productor->apellido_pat}}" class="form-control @error('apellido_pat') is-invalid @enderror" id="apellidos_pat" name="apellido_pat" placeholder="">
                    @error('apellido_pat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                </div>



                <div class="form-group col-md-6">

                    <label for="apellidos">Apellido Materno<span class="text-danger"> *</span></label>

                    <input type="text" value="{{$productor->apellido_mat}}" class="form-control @error('apellido_mat') is-invalid @enderror" id="apellidos_mat" name="apellido_mat" placeholder="">
                    @error('apellido_mat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                </div>

            </div>

            <div class="form-group">

                <label for="apellidos">Edad<span class="text-danger"> *</span></label>

                <input type="text" value="{{$productor->edad}}" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" placeholder="20">
                @error('edad')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="tipo">Sexo</label>

                    <select class="form-control" id="sexo" name="sexo" >

                    <option {{$productor->sexo == 'Hombre' ? 'selected' : ''}}>Hombre</option>

                    <option {{$productor->sexo == 'Mujer' ? 'selected' : ''}}>Mujer</option>

                    </select>

                </div>

                <div class="form-group col-md-6">

                    <label for="telefono">Teléfono </label>

                    <input type="text" class="form-control" id="telefono" value="{{ $productor->telefono}}" name="telefono" placeholder="5510998745">

                </div>
            </div>

            <div class="form-group">

                <label for="tipo">Escolaridad</label>

                <select class="form-control" id="escolaridad" name="escolaridad" >

                  <option {{$productor->escolaridad == 'Nula' ? 'selected' : ''}}>Nula</option>

                  <option {{$productor->escolaridad == 'Primaria' ? 'selected' : ''}}>Primaria</option>

                  <option {{$productor->escolaridad == 'Secundaria' ? 'selected' : ''}}>Secundaria</option>

                  <option {{$productor->escolaridad == 'Media Superior' ? 'selected' : ''}}>Media Superior</option>

                  <option {{$productor->escolaridad == 'Superior' ? 'selected' : ''}}>Superior</option>

                </select>

              </div>

              <div class="form-group">

                <label for="tipo">Seguro</label>

                <select class="form-control" id="seguro" name="seguro" >

                  <option {{$productor->seguro == 'Ninguno' ? 'selected' : ''}}>Ninguno</option>

                  <option {{$productor->seguro == 'IMSS' ? 'selected' : ''}}>IMSS</option>

                  <option {{$productor->seguro == 'ISSSTE' ? 'selected' : ''}}>ISSSTE</option>

                  <option {{$productor->seguro == 'Seguro Popular' ? 'selected' : ''}}>Seguro Popular</option>

                  <option {{$productor->seguro == 'Particular' ? 'selected' : ''}}>Particular</option>

                  <option {{$productor->seguro == 'PEMEX' ? 'selected' : ''}}>PEMEX</option>

                </select>

              </div>

              <div class="form-group">

                <label for="tipo">Actividades económicas disponibles:<span class="text-danger"> *</span></label>

                <select  class="form-control @error('select_act') is-invalid @enderror"  id="select_act" name="select_act" >

                    @foreach($actividades as $actividad)
                    <option {{ $productor->id_acteconomica ==  $actividad->id ? 'selected' : ''}} value="{{$actividad->id}}"> {{$actividad->nombre}}</option>
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
            <input hidden value="{{$direccion->id}}" name="id_dire">
            <div class="form-group">

                <label for="tipo">Estado<span class="text-danger"> *</span></label>

                <select  class="form-control @error('select_edo') is-invalid @enderror" id="select_edo_update" name="select_edo" >

                    @foreach($estados as $estado)
                        <option {{ $municipio->id_estado ==  $estado->id ? 'selected' : ''}} value="{{$estado->id}}"> {{$estado->nombre}}</option>
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

                <select  class="form-control @error('select_muni') is-invalid @enderror" id="select_muni_update" name="select_muni" >
                  @foreach ($municipios as $muni)
                      @if($muni->id_estado == $municipio->id_estado ))
                        <option {{ $direccion->id_municipio ==  $muni->id ? 'selected' : ''}} value="{{$muni->id}}">{{$muni->nombre}}</option>
                      @endif
                  @endforeach
                    <option value="mas"><a href="/municipios/create">Agregar Municipio</a></option>
                </select>
                @error('select_muni')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="form-group">

                <label for="localidad">Localidad<span class="text-danger"> *</span></label>

            <input type="text" class="form-control @error('localidad') is-invalid @enderror" value="{{$direccion->localidad}}" id="localidad" name="localidad" placeholder="">
                @error('localidad')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="ejido">Ejido </label>

                    <input type="text" class="form-control" id="ejido" value="{{$direccion->ejido}}"  name="ejido" placeholder="">

                </div>
                <div class="form-group col-md-6">

                    <label for="colonia">Colonia </label>

                    <input type="text" class="form-control" id="colonia" value="{{$direccion->colonia}}"  name="colonia" placeholder="">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">

                    <label for="calle">Calle</label>

                    <input type="text" class="form-control" id="calle" value="{{$direccion->calle}}" name="calle" placeholder="">

                </div>

                <div class="form-group col-md-4">

                    <label for="numero">Número</label>

                    <input type="text" class="form-control" id="numero" value="{{$direccion->numero}}" name="numero" placeholder="">

                </div>
            </div>
            <div class="form-group">

                <label for="referencia">Referencias</label>

                <input type="text" class="form-control" id="referencia" value="{{$direccion->referencias}}" name="referencia" placeholder="">

            </div>
        </div>
    </div>


    <div class="form-group">

        <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">

    </div>

    </form>

		</div>

	</div>

</div>

<br><br>


<!--- Modal -->

<div class="modal fade" id="datosHogar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title titulo1" id="exampleModalScrollableTitle">Actualizar Estudio Socioeconómico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body">
    <form method="post" action="/update/socioe" novalidate >
        <input type="hidden" name="id_prod" value="{{$productor->id}}">
         @csrf
        <h5>Información del productor</h5>
        <hr>
        <div class="row mr-3 ml-3">
            <div class="col-md-3">
                <div class="form-group">
                    <input hidden id="valor" value="{{$productor->jefe_familia}}">
                    <label>Jefe de Familia
                       <br>
                       <input id="radio1"  type="radio" name="jefe" value="1">Si
                       <br>
                       <input id="radio2" type="radio" name="jefe" value="2">No
                   </label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tipo">Estado Civil</label>
                    <select class="form-control" id="civil" name="civil" >
                      <option {{$productor->estado_civil == 'Casado' ? 'selected' : ''}}>Casado</option>
                      <option {{$productor->estado_civil == 'Union Libre' ? 'selected' : ''}}>Union Libre</option>
                      <option {{$productor->estado_civil == 'Viud@' ? 'selected' : ''}}>Viud@</option>
                      <option {{$productor->estado_civil == 'Divorciad@' ? 'selected' : ''}}>Divorciad@</option>
                      <option {{$productor->estado_civil == 'Solter@' ? 'selected' : ''}}>Solter@</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ingreso">Ingreso Mensual</label>
                    <input type="text" class="form-control @error('ingreso') is-invalid @enderror" value="{{$productor->ingreso}}" id="ingreso" name="ingreso" placeholder="$500">
                    @error('ingreso')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="gasto">Gasto Mensual</label>
                    <input type="text" class="form-control @error('gasto') is-invalid @enderror" value="{{$productor->gasto}}" id="gasto" name="gasto" placeholder="$500">
                    @error('gasto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                    @enderror
                </div>
            </div>
        </div>

        <br>

        <h5>Información del Hogar</h5>
        <hr>
        <div class="row mr-3 ml-3">
            <input hidden value="{{$casa->id}}" name="id_casa">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">Su casa es</label>
                    <select class="form-control" id="estado_casa" name="estado_casa" >
                        <option {{$casa->estado_casa == 'Rentada' ? 'selected' : ''}}>Rentada</option>
                        <option {{$casa->estado_casa == 'Prestada' ? 'selected' : ''}}>Prestada</option>
                        <option {{$casa->estado_casa == 'Propia' ? 'selected' : ''}}>Propia</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">El material del techo es</label>
                    <select class="form-control" id="techo" name="techo" >
                    <option {{$casa->techo == 'Lamina' ? 'selected' : ''}}>Lamina</option>
                    <option {{$casa->techo == 'Concreto' ? 'selected' : ''}}>Concreto</option>
                    <option {{$casa->techo == 'Otro' ? 'selected' : ''}}>Otro</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">El material del piso es</label>
                    <select class="form-control" id="piso" name="piso" >
                        <option {{$casa->piso == 'Tierra' ? 'selected' : ''}}>Tierra</option>
                        <option {{$casa->piso == 'Concreto' ? 'selected' : ''}}>Concreto</option>
                        <option {{$casa->piso == 'Otro' ? 'selected' : ''}}>Otro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row mr-3 ml-3">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="tipo">El material con el que esta construida su casa es</label>
                    <select class="form-control" id="material" name="material" >
                        <option {{$casa->material == 'Block' ? 'selected' : ''}}>Block</option>
                        <option {{$casa->material == 'Ladrillo' ? 'selected' : ''}}>Ladrillo</option>
                        <option {{$casa->material == 'Madera' ? 'selected' : ''}}>Madera</option>
                        <option {{$casa->material == 'Otro' ? 'selected' : ''}}>Otro</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="tipo">El combustible que utilizan en su hogar es</label>
                    <select class="form-control" id="combustible" name="combustible" >
                        <option {{$casa->combustible == 'Gas' ? 'selected' : ''}}>Gas</option>
                        <option {{$casa->combustible == 'Leña' ? 'selected' : ''}}>Leña</option>
                    </select>
                </div>
            </div>
        </div>

        <br>

        <h5>Características del Hogar</h5>
        <hr>
        <label>En en el siguiente formulario seleccionará
                la opción con la que cuenta su Hogar</label>
        <div class="row mr-3 ml-3">
            <input hidden value="{{$casa->caracteristicascasa->id}}" name="id_cra">
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label for="nombre">Con cuantas Plantas cuenta su hogar</label>
                    <input type="text" class="form-control" value="{{$casa->caracteristicascasa->plantas}}" id="plantas" name="plantas" placeholder="2">
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label>Sala
                        <br>
                        <input type="radio" name="sala" value="1"
                            {{$casa->caracteristicascasa->sala == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="sala" value="2"
                            {{$casa->caracteristicascasa->sala == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label>Comedor
                        <br>
                        <input type="radio" name="comedor" value="1"
                            {{$casa->caracteristicascasa->comedor == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="comedor" value="2"
                            {{$casa->caracteristicascasa->comedor == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label>Cocina
                        <br>
                        <input type="radio" name="cocina" value="1"
                            {{$casa->caracteristicascasa->cocina == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="cocina" value="2"
                            {{$casa->caracteristicascasa->cocina == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label for="nombre">Con cuantos cuartos cuenta su hogar</label>
                    <input type="text" class="form-control" value="{{$casa->caracteristicascasa->cuartos}}" id="cuartos" name="cuartos" placeholder="2">
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label for="nombre">Con cuantos baños cuenta su hogar</label>
                   <input type="text" class="form-control" value="{{$casa->caracteristicascasa->baños}}" id="baños" name="baños" placeholder="2">
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label>Patio
                        <br>
                        <input type="radio" name="patio" value="1"
                            {{$casa->caracteristicascasa->patio == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="patio" value="2"
                            {{$casa->caracteristicascasa->patio == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-3 ml-auto">
                <div class="form-group">
                    <label>Cochera
                        <br>
                        <input type="radio" name="cochera" value="1"
                        {{$casa->caracteristicascasa->cochera== '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="cochera" value="2"
                            {{$casa->caracteristicascasa->cochera == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
        </div>

        <br>
        <h5> Servicios Y Equipamientos</h5>
        <hr>
        <label>En en el siguiente formulario seleccionará
                los servicios y equipamientos con los que cuenta su Hogar</label>


        <div class="row mr-3 ml-3">
            <input hidden value="{{$casa->servicios->id}}" name="id_serv">
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Luz eléctrica
                        <br>
                        <input type="radio" name="casa_luz" value="1"
                        {{$casa->servicios->electricidad == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_luz" value="2"
                        {{$casa->servicios->electricidad == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Drenaje
                        <br>
                        <input type="radio" name="casa_drenaje" value="1"
                            {{$casa->servicios->drenaje == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_drenaje" value="2"
                            {{$casa->servicios->drenaje == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Agua potable
                        <br>
                        <input type="radio" name="casa_potable" value="1"
                        {{$casa->servicios->potable == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_potable" value="2"
                            {{$casa->servicios->potable == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Gas
                        <br>
                        <input type="radio" name="casa_gas" value="1"
                            {{$casa->servicios->gas == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_gas" value="2"
                            {{$casa->servicios->gas == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Lavadora
                        <br>
                        <input type="radio" name="casa_lavadora" value="1"
                            {{$casa->servicios->lavadora == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_lavadora" value="2"
                        {{$casa->servicios->lavadora == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
        </div>
        <div class="row mr-3 ml-3">
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Refrigerador
                        <br>
                        <input type="radio" name="casa_refrigerador" value="1"
                            {{$casa->servicios->refrigerador == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_refrigerador" value="2"
                            {{$casa->servicios->refrigerador == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Televisión
                        <br>
                        <input type="radio" name="casa_tv" value="1"
                        {{$casa->servicios->television == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_tv" value="2"
                        {{$casa->servicios->television == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Teléfono fijo
                        <br>
                        <input type="radio" name="casa_tel" value="1"
                            {{$casa->servicios->telefono == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_tel" value="2"
                            {{$casa->servicios->telefono == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Célular móvil
                        <br>
                        <input type="radio" name="casa_cel" value="1"
                            {{$casa->servicios->celular == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_cel" value="2"
                            {{$casa->servicios->celular == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Microondas
                        <br>
                        <input type="radio" name="casa_micro" value="1"
                            {{$casa->servicios->microondas == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_micro" value="2"
                            {{$casa->servicios->microondas == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
        </div>
        <div class="row mr-3 ml-3">
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Radio
                        <br>
                        <input type="radio" name="casa_radio" value="1"
                            {{$casa->servicios->radio == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_radio" value="2"
                            {{$casa->servicios->radio == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>DVD
                        <br>
                        <input type="radio" name="casa_dvd" value="1"
                            {{$casa->servicios->dvd == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_dvd" value="2"
                            {{$casa->servicios->dvd == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Computadora
                        <br>
                        <input type="radio" name="casa_computadora" value="1"
                            {{$casa->servicios->computadora == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_computadora" value="2"
                            {{$casa->servicios->computadora == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Internet
                        <br>
                        <input type="radio" name="casa_internet" value="1"
                            {{$casa->servicios->internet == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_internet" value="2"
                            {{$casa->servicios->internet == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
            <div class="col-md-2 ml-auto">
                <div class="form-group">
                    <label>Automóvil
                            <br>
                        <input type="radio" name="casa_auto" value="1"
                            {{$casa->servicios->automovil == '1' ? 'checked' : ''}}>Si
                        <br>
                        <input type="radio" name="casa_auto" value="2"
                            {{$casa->servicios->automovil == '2' ? 'checked' : ''}}>No
                    </label>
                </div>
            </div>
        </div>
      </div>

      <div class="modal-footer">
        <input type="submit" name="boton" value="Guardar" class="btn btn-primary fondoVerde">
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>

  </div>

</div>


 <script type="text/javascript">

    var radio1 = document.getElementById('radio1');
    var radio2 = document.getElementById('radio2');
    var form =document.getElementById('valor').value;
    console.log(form);
    if( form == 1){
        radio1.setAttribute('checked','true');
    }else{
        radio2.setAttribute('checked','true');
    }
</script>





@endsection
