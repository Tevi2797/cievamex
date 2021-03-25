@extends('plantillas.adminMain')



@section('titulo','Nueva Parcela')



@section('formbus')

<div class="row fondoFormulario before">

</div>



<div class="container">
 
<br><br>

  <div class="row justify-content-md-center">

  <div class="col-lg-8 py-3 px-lg-5 border bg-light" style="background-color: white">

<br>

<h1 class="titulo1" align="center">Registrar Nueva Parcela</h1>

		<form method="post" action="{{route('parcelas.store')}}">

		 @csrf
         <div class="row">
            <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">
                <div class="form-group">
                    <label for="formGroupExampleInput">Latitud (O)</label>
                            <input type="text" class="form-control" id="latitud" name="latitud">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Longitud (N)</label>
                    <input type="text" class="form-control" id="longitud" name="longitud">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Altitud (msnm)</label>
                    <input type="number" step="any" class="form-control" id="altitud" name="altitud" placeholder="0.0">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Pendiente (%)</label>
                    <input type="number" step="any" class="form-control" id="pendiente" name="pendiente">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput2">Localidad</label>
                    <input type="text" class="form-control" name="localidad" id="localidad" placeholder="Emiliano Zapata">
                  </div>

                  <div class="form-group">
                    <label for="tipo">Tipo de suelo</label>
                    <select  class="form-control" id="suelo" name="suelo" >
                        <option>Seleccione una Opcion</option>
                        @foreach($suelos as $suelo)
                            <option value="{{$suelo->id}}"> {{$suelo->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <label for="tipo">Estado<span class="text-danger"> *</span></label>

                    <select  class="form-control @error('select_edo') is-invalid @enderror" id="estado" name="estado" >

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
                    <label for="tipo">Municipio</label>
                    <select  class="form-control" id="municipio" name="municipio" >
                        <option>Seleccione una Opcion</option>
                        @foreach($municipios as $municipio)
                            <option value="{{$municipio->id}}"> {{$municipio->nombre}}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="col-lg-6 py-3 px-lg-4 bg-light" style="background-color: white">
                <br>
                <h3 class="titulo3" align="center">Datos de la Plantación</h3>
                <hr>

                <div class="form-group">
                    <label for="formGroupExampleInput">Superficie en Producción(Ha)</label>
                    <input type="number" step="any" class="form-control" id="ha" name="ha">
                  </div>

                  <div class="form-group">
                    <label for="tipo">Tipo de riego</label>
                    <select  class="form-control" id="riego" name="riego" >
                        <option>Seleccione una Opcion</option>
                        @foreach($riegos as $riego)
                            <option value="{{$riego->id}}"> {{$riego->nombre}}</option>
                        @endforeach
                  </select>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Cantidad de plantas</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad">
                 </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Año de plantación</label>
                    <input type="number" class="form-control" id="año" name="año">
                  </div>

                  <div class="form-group">
                    <label for="tipo">Especie</label>
                    <select class="form-control" id="especie" name="especie" >
                    @foreach($especies as $especie)
                    <option value="{{$especie->id}}">{{$especie->nombre_comun}} / {{$especie->nombre_cientifico}}</option>
                    @endforeach
                    </select>
                  </div>

                    <div class="form-group">
                        <label for="tipo">Tipo de plantación</label>
                        <select class="form-control" id="tipo" name="tipo" >
                            @foreach($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                            @endforeach
                        </select>
                  </div>
            </div>
         </div>
         <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="tipo">Propietario</label>
                    <select  class="form-control" id="productor" name="productor" >
                    <option>Seleccione una Opcion</option>
                  @foreach($productores as $productor)
                  <option value="{{$productor->id}}"> {{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</option>
                   @endforeach
                  </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="submit" name="boton" value="Guardar" class="btn btn-primary btn-lg btn-block fondoVerde">
                </div>
            </div>



         </div>

		</form>

		</div>

	</div>

</div>





@endsection
