<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Productores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="/productor/pdf/{{$productor->id}}" class="btn btn-info">Descargar</a>
        <hr>
        <div class="row mb-1">
            <div class="col">
                <table class="table center table-borderless">
                    <tr> <!--  Recordar agregar asset() en hosting para las imágenes  -->
                        <td class="align-middle">
                            <img src="img/logo-real1.png" width="80px" height="80px">
                        </td>
                        <td class="align-middle">
                            <img src="img/CLogin/sasti.png" width="200px" height="200px">
                        </td>
                        <td class="align-middle">
                            <img src="img/CLogin/cemivac.png" width="80px" height="80px">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h2 align="center" class="titulo1" >Gaya Vainilla & Especias S.A de C.V</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 align="center">Productor: {{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</h4>
            </div>
        </div>

     <br>
     <br>

        <div class="row">
            <div class="col">
                <table class="table center">
                    <tr>
                        <td><h6>Edad: </h6>
                            {{$productor->edad}}
                        </td>
                        <td><h6 >Escolaridad:</h6>
                            {{$productor->escolaridad}}
                        </td>
                        <td><h6>Sexo: </h6>
                            {{$productor->sexo}}
                        </td>
                        <td><h6 >Tipo de seguro: </h6>
                            {{$productor->seguro}}
                        </td>
                        <td><h6>Actividad económica: </h6>
                            {{$productor->actividad->nombre}}
                        </td>
                    </tr>
                </table>
            </div>
            <br>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="center">Dirección</h2>
                <table class="table table-borderless">
                    <tr>
                        <td><h6>Calle:</h6> {{$direccion->calle}}</td>
                        <td><h6>Número:</h6> {{$direccion->numero}}</td>
                        <td><h6>Colonia:</h6> {{$direccion->colonia}}</td>
                    </tr>
                    <tr>
                        <td><h6>Municipio:</h6> {{$direccion->municipios->nombre}}</td>
                        <td><h6>Localidad:</h6> {{$direccion->localidad}}</td>
                        <td><h6>Referencias:</h6> {{$direccion->referencias}}</td>
                    </tr>
                </table>
            </div>
        </div>
          <br>
          <div class="row">
            <div class="col">
                <h2 >Estado de la casa</h2>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td><h6>Casa:</h6> {{$productor->casaProductor->estado}}</td>
                        <td><h6>Material:</h6> {{$productor->casaProductor->material}}</td>
                    </tr>
                    <tr>
                        <td><h6>Piso:</h6> {{$productor->casaProductor->piso}}</td>
                        <td><h6>Techo:</h6> {{$productor->casaProductor->techo}}</td>
                    </tr>
                    <tr>
                        <td><h6>Combustible:</h6> {{$productor->casaProductor->combustible}}</td>
                    </tr>
                </table>
            </div>
            <br>
        </div>

          <div class="row">
            <div class="col">
                <h2 >Caracteríscticas del Hogar</h2>
            </div>
          </div>

        <div class="row">
            <div class="col">
                <table class="table table-borderless">
                    <tr>
                        <td><p ><h6>Número de plantas:</h6> {{$productor->casaProductor->caracteristicascasa->plantas}}</p></td>
                        <td>
                            @php
                                $valor='';
                                if( $productor->casaProductor->caracteristicascasa->sala == 1){
                                    $valor = 'Si';
                                }else{
                                $valor = 'No';
                                }
                            @endphp
                            <p ><h6>Sala:</h6> {{$valor}}</p>
                        </td>
                        <td>
                            @php
                                $valor='';
                                if( $productor->casaProductor->caracteristicascasa->comedor == 1){
                                            $valor = 'Si';
                                }else{
                                $valor = 'No';
                                }
                            @endphp
                            <p ><h6>Comedor:</h6> {{$valor}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @php
                                $valor='';
                                if( $productor->casaProductor->caracteristicascasa->cocina == 1){
                                    $valor = 'Si';
                                }else{
                                $valor = 'No';
                                }
                            @endphp
                            <p ><h6>Cocina:</h6> {{$valor}}</p>
                        </td>
                        <td>
                            <p ><h6>Número de Cuartos:</h6> {{$productor->casaProductor->caracteristicascasa->cuartos}}</p>
                        </td>
                        <td>
                            <p ><h6>Número de Baños:</h6> {{$productor->casaProductor->caracteristicascasa->baños}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @php
                                $valor='';
                                if( $productor->casaProductor->caracteristicascasa->patio == 1){
                                            $valor = 'Si';
                                }else{
                                $valor = 'No';
                                }
                            @endphp
                        <p ><h6>Patio:</h6> {{$valor}}</p>
                        </td>
                        <td>
                            @php
                                $valor='';
                                if( $productor->casaProductor->caracteristicascasa->cochera == 1){
                                    $valor = 'Si';
                                }else{
                                $valor = 'No';
                                }
                            @endphp
                            <p ><h6>Cochera:</h6> {{$valor}}</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
          <br>
        <div class="row">
            <div class="col center">
                <h2 >Familiares</h2>
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center">
                <table id="table" class="table thead-dark center table-striped">
                    <thead class="fondo">
                    <tr >
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Parentesco</th>
                        <th>Escolaridad</th>
                        <th>Ingreso Mensual</th>
                    </tr>
                    </thead>
                    @php
                        $totalingreso=0;
                        $totalgasto=0;
                        $totalfinal=0;
                    @endphp

                    @foreach($familias as $key=> $familia)
                        @php
                            $totalingreso =$totalingreso + $familia->ingreso;
                            $totalgasto =$totalgasto+$familia->gasto;
                        @endphp
                        <tr id="table">
                            <td >{{$loop->index+1}}</td>
                            <td >{{$familia->nombre}} {{$familia->apellido_pat}} {{$familia->apellido_mat}}</td>
                            <td >{{$familia->edad}}</td>
                            <td >{{$familia->nacimiento}}</td>
                            <td >{{$familia->parentesco}}</td>
                            <td >{{$familia->escolaridad}}</td>
                            <td >{{number_format($familia->ingreso)}}</td>
                        </tr>
                    @endforeach
                </table>
                <br>
                @php
                    $totalingresoprodu = $totalingreso + $productor->ingreso;
                    $totalgastoprodu = $totalgasto + $productor->gasto;
                    $total = $totalingresoprodu - $totalgastoprodu;
                @endphp
                <h6 >Ingreso mensual por familia: ${{number_format($totalingresoprodu)}}</h6>
                <h6 >Gasto mensual por familia: ${{number_format($totalgastoprodu)}}</h6>
                <h4 >Total: ${{number_format($total)}}</h4>
            </div>
        </div>
    </div>
</body>
</html>




