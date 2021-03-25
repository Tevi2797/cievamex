@extends('plantillas.adminMain')





@section('titulo','Ciclo')





@section('formbus')



<div class="container">

    <div class="row">

		<div class="col">

			<br>

			<h2 class="titulo1 centrarCosa">Ciclos de Floración</h2>

            <br>

        </div>

    </div>



    <div class="row">

        <div class="col">

            <table class="table">

		<tr class="tablaVerde">

			<th>#</th>

            <th>Año</th>
            <th>Área cosechada (ha)</th>

            <th>Dias de floración</th>
            <th>Fecha recomendada de cosecha</th>

			<th>Fecha de cosecha</th>
            <th>Edad del fruto</th>
			<th>Caída prematura</th>



			<th>Producción (kg)</th>

			<th>Pérdida Estimada (kg)</th>

			<th>Rendimiento estimado (kg/ha)</th>

            <th>Editar</th>

            <th>Eliminar</th>



		</tr>



@foreach($ciclos as $ciclo)



		<tr>

			<td class="centrarColumna">{{$loop->index+1}}</td>

            <td >{{$ciclo->año}}</td>
            <td>{{$ha}}</td>

            <td>{{$ciclo->dias_floracion}} Dias</td>
            <td>{{$ciclo->recomendada}}</td>

			<td>{{$ciclo->fecha_cosecha}}</td>
            <td >{{number_format($ciclo->edad_fruto, 1)}} Meses</td>

			<td>{{$ciclo->caida_prematura}} %</td>


			<td>{{$ciclo->produccion}} Kg</td>

			<td>{{number_format($ciclo->perdida_estimada,1)}} Kg</td>

			<td>{{number_format($ciclo->rendimiento_estimado,1)}} Kg</td>



			@php

				$parameter =[

					'id'=>$ciclo->id,

				];

				$parameter = Crypt::encrypt($parameter);

			@endphp

			<td class="centrarColumna"><a href="{{route('ciclos.edit',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/editar.png')}}"></a></td>

			<td class="centrarColumna"><a href="{{route('destroy.ciclo',$parameter)}}" class="center"><img class="imgTabla" src="{{asset('img/eliminar.png')}}"></a></td>



		</tr>





@endforeach

			</table>

        </div>

    </div>

</div>



@endsection
