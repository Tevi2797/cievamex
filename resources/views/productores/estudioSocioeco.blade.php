@extends('plantillas.adminMain')



@section('titulo','Actualizar Productor')







@section('formbus')

<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

    <div class="row justify-content-md-center">

        <div class="col-lg-9 py-3 px-lg-5 border bg-light" style="background-color: white">
            <h2 class="titulo1" align="center" >Estudio Socioeconómico</h2>

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
                            @error('ingreso')e
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="gasto">Gasto Mensual</label>
                            <input type="text" class="form-control @error('gasto') is-invalid @enderror" value="{{number_format($productor->gasto)}}" id="gasto" name="gasto" placeholder="$500">
                            @error('gasto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>


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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo">El combustible que utilizan en su hogar es</label>
                            <select class="form-control" id="combustible" name="combustible" >
                                <option {{$casa->combustible == 'Gas' ? 'selected' : ''}}>Gas</option>
                                <option {{$casa->combustible == 'Leña' ? 'selected' : ''}}>Leña</option>
                            </select>
                        </div>
                    </div>
                </div>

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
                            <label for="nombre">Con cuantos baños cuenta su hogar</label>
                           <input type="text" class="form-control" value="{{$casa->caracteristicascasa->baños}}" id="baños" name="baños" placeholder="2">
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
                <input type="submit" name="boton" value="Guardar" class="btn btn-primary fondoVerde">
                <a class="btn btn-secondary" href="/productores" >Regresar</a>
            </form>
        </div>
    </div>
</div>

<br><br>


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
