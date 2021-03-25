@extends('plantillas.adminMain')



@section('titulo','Actualizar Parcela')



@section('formbus')



<div class="row fondoFormulario before">

</div>



<div class="container">
<br>
<br>
    <div class="row justify-content-md-center">
        <div class="col-lg-8 py-3 px-lg-5 border bg-light" style="background-color: white">
        <br>
            <h1 class="titulo1" align="center">Actualizar Parcela</h1>
            @php
                $parameter =[
                            'id'=>$parcela->id,
                        ];
                $parameter = Crypt::encrypt($parameter);
            @endphp
            <form method="post" action="{{route('parcelas.update',$parameter)}}">
            @method('PUT') @csrf
                <input hidden value="{{$plantacion->id}}" name="id_plantacion">

                <div class="row">
                    <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Latitud (O)</label>
                            <input type="text" class="form-control" value="{{$parcela->latitud}}" id="latitud" name="latitud">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Longitud (N)</label>
                            <input type="text" class="form-control" value="{{$parcela->longitud}}" id="longitud" name="longitud">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Altitud (msnm)</label>
                            <input type="number" step="any" class="form-control" value="{{$parcela->altitud}}" id="altitud" name="altitud">
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Pendiente (%)</label>
                            <input type="number" step="any" class="form-control" value="{{$parcela->pendiente}}" id="pendiente" name="pendiente">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Localidad</label>
                            <input type="text" class="form-control"  value="{{$parcela->localidad}}"name="localidad" id="localidad" placeholder="Emiliano Zapata">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de suelo</label>
                            <select  class="form-control" id="suelo" name="suelo" >
                                <option>Seleccione una Opcion</option>
                                @foreach($suelos as $suelo)
                                    <option value="{{$suelo->id}}"
                                    {{$parcela->id_tiposuelo == $suelo->id ? 'selected' : ''}}> {{$suelo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Municipio</label>
                            <select  class="form-control" id="municipio" name="municipio" >
                                <option>Seleccione una Opcion</option>
                                @foreach($municipios as $municipio)
                                <option value="{{$municipio->id}}"
                                    {{$parcela->id_municipio == $municipio->id ? 'selected' : ''}}> {{$municipio->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Propietario</label>
                            <select  class="form-control" id="productor" name="productor" >
                            <option>Seleccione una Opcion</option>
                                @foreach($productores as $productor)
                                    <option value="{{$productor->id}}"
                                        {{$parcela->id_productor == $productor->id ? 'selected' : ''}}> {{$productor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">
                        <br>
                        <h3 class="titulo3" align="center">Datos de la Plantación</h3>
                        <hr>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Superficie en producción(Ha)</label>
                            <input type="number" step="any" class="form-control" value="{{$parcela->ha}}" id="ha" name="ha">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de riego</label>
                            <select  class="form-control" id="riego" name="riego" >
                                <option>Seleccione una Opcion</option>
                                @foreach($riegos as $riego)
                                    <option value="{{$riego->id}}"
                                    {{$parcela->id_riego == $riego->id ? 'selected' : ''}}> {{$riego->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Cantidad de plantas</label>
                            <input type="number" class="form-control" value="{{$plantacion->cantidad}}" id="cantidad" name="cantidad">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Año de plantación</label>
                            <input type="number" class="form-control" value="{{$plantacion->año}}" id="año" name="año">
                        </div>
                        <div class="form-group">
                            <label for="tipo">Especie</label>
                            <select class="form-control" id="especie" name="especie" >
                                @foreach($especies as $especie)
                                    <option value="{{$especie->id}}"
                                        {{$plantacion->id_especie == $especie->id ? 'selected' : ''}}>{{$especie->nombre_comun}} / {{$especie->nombre_cientifico}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de plantación</label>
                            <select class="form-control" id="tipo" name="tipo" >
                                @foreach($tipos as $tipo)
                                    <option value="{{$tipo->id}}"
                                    {{$plantacion->id_tipoplantacion == $tipo->id ? 'selected' : ''}}>{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<br><br>

@endsection
