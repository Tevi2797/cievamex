@extends('plantillas.adminMain')

@section('titulo','Gráfica')

@section('formbus')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<br>
<div class="container">
    <div class="row">
	    <div class="col">
            <h2 class="titulo1 centrarCosa">Producción total {{$total}} Kilogramos</h2>
        </div>	
	</div>
	<br>
	<div class="row">
		<div class="col" align="center">
		    <div id="geochart-colors" style="width: 800px; height: 500px;"></div>
        </div>
	</div>
    <br><br>
</div>



<script type="text/javascript">
	google.charts.load('upcoming', {
        'packages': ['geochart']
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([

          ['Estado', 'Produccion(Kg)','superficie(Ha)'],
          
         
       
		@foreach($sumas as $suma)
          ['{{$suma->nombre}}',{{$suma->cantidad}},{{$suma->superficie}}],
          @endforeach
         
        ]);

        var options = {
          region: 'MX', // Mexico
          resolution: 'provinces',
          colorAxis: {
            //     	minValue=100,
            //     maxValue=400,
            values: [1 ,50, 100, 150, 200],
            colors: ['black','green', 'yellow', 'orange', 'red']
          },
          backgroundColor: '#81d4fa',
          datalessRegionColor: '#eeeeee',
          defaultColor: '#f5f5f5',
        };

        var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
        chart.draw(data, options);
      };
</script>

@endsection