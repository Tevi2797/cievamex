<!DOCTYPE html>

<html>

<head>

    <title>Reporte de Productores</title>

    <style type="text/css">

	#pdf-titulo{
    margin-top: 50px;
    padding-right: 5%;

    }

    #socio-pdf{
    margin-left: 60px;
    vertical-align: center;
    }

    .titulo1{
    font-family: 'Montserrat' , sans-serif !important;
    font-size:  40px;
    color: #2a4e33;
}
    .fondo{
        font-family: 'Montserrat' , sans-serif !important;
        color: white;
        background-color:#2a4e33;
    }

</style>



</head>

<body>

	<div >
        <div style="display:flex; justify-content: center;">
            <table >
                <tr>
                    <img align="center" src="{{asset('img/logo-real1.png')}}" width="200px" height="200px">
                </tr>
                <tr>
                    <img align="center" src="{{asset('img/CLogin/sasti.png')}}" width="200px" height="200px">
                </tr>
                <tr>
                    <img align="center" src="{{asset('img/CLogin/cemivac.png')}}" width="200px" height="200px">
                </tr>
            </table>
        </div>


		<div class="row">
            <div >
				<h2 align="center" class="titulo1" >Gaya Vainilla & Especias S.A de C.V</h2>
			</div>
		</div>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <h2 align="center">Productor: {{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</h2>
            </div>
        </div>

    <br>
    <br>

	<div class="row">
		<div class="col-3">
			<h4 align="center">Edad: {{$productor->edad}}</h4>
			<h4 align="center">Sexo: {{$productor->sexo}}</h4>
		</div>
		<div class="col-3">
			<h4 align="center">Escolaridad: {{$productor->escolaridad}}</h4>
		</div>
		<div class="col-3">
			<h4 align="center">Tipo de seguro: {{$productor->seguro}}</h4>
		</div>
		<div class="col-3">
			<h4 align="center">Actividad económica: {{$productor->actividad->nombre}}</h4>
		</div>
	</div>

	<br><br>

	<div class="row">
		<div class="col-12">
			<h2 align="center">Dirección</h2>
			<h3 align="center">Calle: {{$direccion->calle}} Numero: {{$direccion->numero}}
			Colonia: {{$direccion->colonia}} Municipio: {{$direccion->municipios->nombre}}
			Localidad: {{$direccion->localidad}} Referencias: {{$direccion->referencias}}</h3>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col">
			<h2 align="center">Estado de la casa</h2>
		</div>
		<br>
	</div>

	<div class="row">
		<div class="col-4">
			<h4 align="center">Casa: {{$productor->casaProductor->estado}}</h4>
			<h4 align="center">Material: {{$productor->casaProductor->material}}</h4>
		</div>

		<div class="col-4">
			<h4 align="center">Piso: {{$productor->casaProductor->piso}}</h4>
			<h4 align="center">Techo: {{$productor->casaProductor->techo}}</h4>
		</div>

		<div class="col-4">
			<h4 align="center">Combustible: {{$productor->casaProductor->combustible}}</h4>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col">
			<h2 align="center">Caracteríscticas del Hogar</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-3">
			<h4 align="center">Número de plantas: {{$productor->casaProductor->caracteristicascasa->plantas}}</h4>
			@php
                $valor='';
                if( $productor->casaProductor->caracteristicascasa->sala == 1){
                    $valor = 'Si';
                }else{
                $valor = 'No';
                }
			@endphp

			<h4 align="center">Sala: {{$valor}}</h4>
		</div>

		<div class="col-3">
		@php
			$valor='';
			if( $productor->casaProductor->caracteristicascasa->comedor == 1){
				$valor = 'Si';
			}else{
			$valor = 'No';
			}
		@endphp

			<h4 align="center">Comedor: {{$valor}}</h4>

			@php
                $valor='';
                if( $productor->casaProductor->caracteristicascasa->cocina == 1){
                    $valor = 'Si';
                }else{
                $valor = 'No';
                }
			@endphp
			<h4 align="center">Cocina: {{$valor}}</h4>
		</div>

		<div class="col-3">
			<h4 align="center">Numero de Cuartos: {{$productor->casaProductor->caracteristicascasa->cuartos}}</h4>
			<h4 align="center">Numero de Baños: {{$productor->casaProductor->caracteristicascasa->baños}}</h4>
		</div>

		<div class="col-3">
			@php
			$valor='';
			if( $productor->casaProductor->caracteristicascasa->patio == 1){
				$valor = 'Si';
			}else{
			$valor = 'No';
			}
			@endphp

			<h4 align="center">Patio: {{$valor}}</h4>

			@php
                $valor='';
                if( $productor->casaProductor->caracteristicascasa->cochera == 1){
                    $valor = 'Si';
                }else{
                $valor = 'No';
                }
			@endphp
			<h4 align="center">Cocina: {{$valor}}</h4>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<h2 align="center">Familiares</h2>
		</div>
	</div>
	<br>

	<div class="row">
		<div class="col">
			<table align="center" id="table" class="table">
                <thead class="fondo">
                <tr >
                    <th>#</th>
                    <th></th>
                    <th>Nombre</th>
                    <th></th>
                    <th>Edad</th>
                    <th></th>
                    <th>Fecha de Nacimiento</th>
                    <th></th>
                    <th>Parentesco</th>
                    <th></th>
                    <th>Escolaridad</th>
                    <th></th>
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
			<td ></td>
			<td align="center">{{$familia->nombre}} {{$familia->apellido_pat}} {{$familia->apellido_mat}}</td>
			<td ></td>
			<td align="center">{{$familia->edad}}</td>
			<td ></td>
			<td align="center">{{$familia->nacimiento}}</td>
			<td ></td>
			<td align="center">{{$familia->parentesco}}</td>
			<td ></td>
			<td align="center">{{$familia->escolaridad}}</td>
			<td ></td>
			<td align="center">{{number_format($familia->ingreso)}}</td>
    @endforeach







			</table>

			<br>

			@php

			$totalingresoprodu = $totalingreso + $productor->ingreso;

			$totalgastoprodu = $totalgasto + $productor->gasto;

			$total = $totalingresoprodu - $totalgastoprodu;

			@endphp

			<h2 align="center">Ingreso mensual por familia: ${{number_format($totalingresoprodu)}}</h2>

			<h2 align="center">Gasto mensual por familia: ${{number_format($totalgastoprodu)}}</h2>

			<h1 align="center">Total: ${{number_format($total)}}</h1>

		</div>

	</div>

    <a class="btn fondo" href="/productor/pdf/{{$productor->id}}">Imprimir PDF</a>

</div>

</body>

</html>



