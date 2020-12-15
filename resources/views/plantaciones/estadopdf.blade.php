<!DOCTYPE html>
<html>
<head>
	<title>Reporte de estado de plantación</title>
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
				<p align="center"><img id="socio-pdf" src="../img/logo-real1.png" width="60%" height="60%"></p>
			</div>
			<div class="col-7">
				<h2 align="center" id="pdf-titulo" >Gaya Vainilla & Especias S.A de C.V</h2>
			</div>
			@foreach($plantacion->parcela->productores as $productor)
			@endforeach
			<h2 align="center">Productor: {{$productor->nombre}} 
			{{$productor->apellido_pat}} {{$productor->apellido_mat}}</h2>

			
		<h2 align="center">Cantidad de plantas: {{$plantacion->cantidad}}</h2>
		<h2 align="center">Especie: {{$plantacion->especie->nombre_cientifico}}</h2>
		<h2 align="center">Año de plantación: {{$plantacion->año}}</h2>



			<h2 align="center">Tutores</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>


		@php

			$unicos = $plantacion->tutores->unique('id');
		@endphp
@foreach($unicos as $tutor)

		

<tr>
			<td align="center">{{$tutor->created_at->year}}-{{$tutor->created_at->month}}-{{$tutor->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$tutor->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$tutor->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>

			<h2 align="center">Cultivos Asociados</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>

		@php

			$unicos = $plantacion->asociados->unique('id');
		@endphp

@foreach($unicos as $asociado)

		

<tr>
			<td align="center">{{$asociado->created_at->year}}-{{$asociado->created_at->month}}-{{$asociado->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$asociado->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$asociado->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>



		<h2  align="center">Ciclos de floración</h2>

			<table align="center" class="table">
		<tr>
			<th>Año</th>
			<th></th>
			<th>Dias de Floracion</th>
			<th></th>
			<th>Daño</th>
			<th></th>
			<th>Caida Prematura</th>
			<th></th>
			<th>Fecha de Cosehca</th>
			<th></th>
			<th>Edad del fruto</th>
			<th></th>
			<th>Produccion</th>
			<th></th>
			<th>Rendimiento Estimado</th>
		
		</tr>



@foreach($ciclos as $ciclo)



<tr>
			<td align="center">{{$ciclo->created_at->year}}</td>
			<td align="center"></td>
			<td align="center">{{$ciclo->dias_floracion}}</td>
			<td align="center"></td>
			<td align="center">{{$ciclo->daño}}</td>
			<td align="center"></td>
			<td align="center">{{$ciclo->caida_prematura}} %</td>
			<td align="center"></td>
			<td align="center">{{$ciclo->fecha_cosecha}}</td>
			<td align="center"></td>
			<td align="center">{{number_format($ciclo->edad_fruto,2)}}</td>
			<td align="center"></td>
			<td align="center">{{$ciclo->produccion}}</td>
			<td align="center"></td>
			<td align="center">{{number_format($ciclo->rendimiento_estimado,2)}}</td>
			
		</tr>
		@endforeach
	
			</table>

			<br>

			<h2 align="center">Enfermedades</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>


		@php

			$unicos = $plantacion->enfermedadesplantacion->unique('id');
		@endphp
@foreach($unicos as $enfermedad)

		

<tr>
			<td align="center">{{$enfermedad->created_at->year}}-{{$enfermedad->created_at->month}}-{{$enfermedad->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$enfermedad->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$enfermedad->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>
			



			<h2 align="center">Manejó de Enfermedades</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>

		@php

			$unicos = $plantacion->manejo_enfermedades->unique('id');
		@endphp

@foreach($unicos as $manejo)

		

<tr>
			<td align="center">{{$manejo->created_at->year}}-{{$manejo->created_at->month}}-{{$manejo->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$manejo->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$manejo->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>




			<h2 align="center">Plagas</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>


		@php

			$unicos = $plantacion->plagas->unique('id');
		@endphp
@foreach($unicos as $plaga)


		
<tr>
			<td align="center">{{$plaga->created_at->year}}-{{$plaga->created_at->month}}-{{$plaga->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$plaga->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$plaga->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>



			<h2 align="center">Manejó de Plagas</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>

		@php

			$unicos = $plantacion->manejo_plagas->unique('id');
		@endphp

@foreach($unicos as $ma_plaga)

		

<tr>
			<td align="center">{{$ma_plaga->created_at->year}}-{{$ma_plaga->created_at->month}}-{{$ma_plaga->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$ma_plaga->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$ma_plaga->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>




			<h2 align="center">Fertilizantes</h2>

				<table align="center" class="table">
		<tr>
			<th>Fecha</th>
			<th></th>
			<th>Nombre</th>
			<th></th>
			<th>Descripcion</th>
			<th></th>
			
		
		</tr>

		@php

			$unicos = $plantacion->fertilizantes->unique('id');
		@endphp

@foreach($unicos as $fertilizante)

		

<tr>
			<td align="center">{{$fertilizante->created_at->year}}-{{$fertilizante->created_at->month}}-{{$fertilizante->created_at->day}}</td>
			<td align="center"></td>
			<td align="center">{{$fertilizante->nombre}}</td>
			<td align="center"></td>
			<td align="center">{{$fertilizante->descripcion}}</td>
			
			
		</tr>
		@endforeach
	
			</table>

			</div>
		</div>
	<br>

</body>
</html>