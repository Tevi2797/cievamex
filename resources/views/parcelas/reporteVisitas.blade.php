<!DOCTYPE html>

<html> 

<head>

	<title>Reporte de Visitas</title>
	<style type="text/css">
	#pdf-titulo{
  margin-top: 50px;
  padding-right: 5%;
}

#socio-pdf{

  margin-left: 60px;

 vertical-align: center;

}

</style>

</head>

<body>



	<div class="container">

		<div class="row">

			

			<div class="col-3">

			
	
@foreach($parcelas as $parcela)
@endforeach




@foreach($parcela->productores as $productor)

	@endforeach

	



	
	
	
			</div>

			<div class="col-7">
			@foreach($visitas as $visita )



@endforeach

			<H2 align="center">Reporte de Visitas Año: {{ Carbon\Carbon::createFromTimestamp(strtotime($visita->fecha))->year}}</H2>

				<h2 align="center" id="pdf-titulo" >Gaya Vainilla & Especias S.A de C.V</h2>

			</div> 

			<table align="center" class="table">
		<tr>
			<th>Propietario</th>
			<th></th>
			<th>Localidad</th>
			<th></th>
			<th>Municipio</th>
			<th></th>
			<th>Estado</th>
			<th></th>
			<th>Número de visitas</th>
		

		</tr>




		@foreach($visitas as $visita )
		@endforeach
		@foreach($parcelas as $parcela)
		@php
	$contada = $visita->where('id_parcela',$parcela->id)->count();
	echo $contada;
	@endphp
	@php
	$year = '2020';
	$n = $visita->where('id_parcela',$parcela->id)->whereYear('fecha',$year)->count();
	echo $n;
	
	@endphp
@foreach($parcela->productores as $productor)
	@endforeach
<tr>
			<td align="center">{{$productor->nombre }}</td>
			<td></td>
			<td align="center">{{$parcela->localidad}}</td>
			<td></td>
			<td align="center">{{$parcela->municipio->nombre}}</td>
			<td></td>
			<td align="center">{{$parcela->municipio->estado->nombre}}</td>
			<td></td>
			<td align="center">{{$contada}}</td>
			
			
		</tr>
		@endforeach
	
			</table>
			
			</div>
		</div>
	<br>



</body>

</html>