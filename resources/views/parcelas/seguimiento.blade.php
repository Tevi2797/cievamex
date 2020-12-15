@extends('plantillas.adminMain')


@section('titulo','Seguimiento de Plantaciones')


@section('formbus')
<br>
<div class="container">
    <div class="row">
		<div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica producción rendimiento</h2>
			<p align="center">
			    <div id="chart"></div>
			</p>
		</div>
    </div>
    
    <br><br>
    
    <div class="row">
        <div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica de días de floración</h2>
			<p>
			    <div id="chart_div"></div>
			</p>
        </div>
    </div>
    
    <br><br>
    
    <div class="row">
        <div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica de producción</h2>
			<p>
		        <div id="chart_div2"></div>
			</p>
        </div>
    </div>
    
    <br><br>
        
    <div class="row">
        <div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica de rendimiento</h2>
			<p>
			    <div id="chart_div5"></div>
		    </p>
        </div>
    </div>
    
    <br><br>
     
    <div class="row">
        <div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica de caída prematura</h2>
			<p>
			    <div id="chart_div3"></div>
			</p>
        </div>
    </div>  
        
    <br><br>
    
    <div class="row">
        <div class="col">
            <h2 class="titulo1 centrarCosa">Gráfica de edad de fruto</h2>
			<p>
			    <div id="chart_div4"></div>
			</p>
        </div>
    </div>  
    <br>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawVisualization);

     function drawVisualization() {
  // Create and populate the data table.
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Años');
  data.addColumn('number', 'Produccion');
  data.addColumn('number', 'Hectareas cosechadas');
  
  data.addRows([
    @foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->produccion}},{{$ciclo->plantacion->parcela->ha}}],
    @endforeach
      ]);
 


  // Create and draw the visualization.
  new google.visualization.LineChart(document.getElementById('chart')).
      draw(data, {curveType: "function", width: 1100, height: 400,
    vAxes: {0: {logScale: false},
            1: {logScale: false, maxValue: 2}},
    series:{
       0:{targetAxisIndex:0},
       1:{targetAxisIndex:1},
       2:{targetAxisIndex:1}}}
          );
}
    </script>

    <script type="text/javascript">
    	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Dias de Floracion');

      data.addRows([
  	@foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->dias_floracion}}],
    @endforeach
      ]);

      var options = {
        hAxis: {
          title: 'Años'
        },
        vAxis: {
          title: 'Días'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Produccion');

      data.addRows([
  	@foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->produccion}}],
    @endforeach
      ]);

      var options = {
        hAxis: {
          title: 'Años'
        },
        vAxis: {
          title: 'Produccion'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));

      chart.draw(data, options);
    }
    </script>


      <script type="text/javascript">
    	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Rendimiento');

      data.addRows([
  	@foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->rendimiento_estimado}}],
    @endforeach
      ]);

      var options = {
        hAxis: {
          title: 'Años'
        },
        vAxis: {
          title: 'Produccion'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div5'));

      chart.draw(data, options);
    }
    </script>



      <script type="text/javascript">
    	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Caida');

      data.addRows([
  	@foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->caida_prematura}}],
    @endforeach
      ]);

      var options = {
        hAxis: {
          title: 'Años'
        },
        vAxis: {
          title: 'Caida %'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div3'));

      chart.draw(data, options);
    }
    </script>

    <script type="text/javascript">
    	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Meses');

      data.addRows([
  	@foreach($ciclos as $ciclo)
        [{{$ciclo->created_at->year}}, {{$ciclo->edad_fruto}}],
    @endforeach
      ]);

      var options = {
        hAxis: {
          title: 'Años'
        },
        vAxis: {
          title: 'Edad del Fruto(meses)'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div4'));

      chart.draw(data, options);
    }
    </script>



@endsection