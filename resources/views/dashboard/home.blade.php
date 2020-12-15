@extends('plantillas.adminMain')


@section('titulo','Dashboard')


@section('formbus')
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="titulo1 centrarCosa">Datos Pre-Almacenados</h1>
		</div>
	</div>
</div>
<br>
<div class="container"> 
	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Municipio</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('municipios.create')}}">
						<a href="{{route('municipios.create')}}"><img class="img-fluid img-cat" src="{{asset('img/municipio.jpg')}}" alt="Snow" style="width:100%"></a>
						<button class="btn1 fondoVerde"><i class="fa fa-folder"></i> Agregar Nuevo</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Municipios</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('municipios.index')}}">
						<a href="{{route('municipios.index')}}"><img class="img-fluid img-cat" src="{{asset('img/municipio.jpg')}}" alt="Snow" style="width:100%" ></a>
						<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
					</form>
				</div>
			</div>
		</div>
	</div>

<br><br>

	<div class="row">		
		<div class="col-5">
			<h2 class="titulod">Agregar Tipo de Suelos</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('suelos.create')}}">
					<a href="{{route('suelos.create')}}"><img class="img-fluid img-cat" src="{{asset('img/suelo.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Suelos Agregados</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('suelos.index')}}">
					<a href="{{route('suelos.index')}}"><img class="img-fluid img-cat" src="{{asset('img/suelo.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Sistema de Riego</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('riegos.create')}}">
					<a href="{{route('riegos.create')}}"><img class="img-fluid img-cat" src="{{asset('img/riego.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Sistemas de Riego</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('riegos.index')}}">
					<a href="{{route('riegos.index')}}"><img class="img-fluid img-cat" src="{{asset('img/riego.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Nueva Actividad Económica</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('actividades.create')}}">
					<a href="{{route('actividades.create')}}"><img class="img-fluid img-cat" src="{{asset('img/actividadeconomica.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Actividades Económicas</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('actividades.index')}}">
					<a href="{{route('actividades.index')}}"><img class="img-fluid img-cat" src="{{asset('img/actividadeconomica.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i> Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Enfermedad de Plantación</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('enfermedades.create')}}">
					<a href="{{route('enfermedades.create')}}"><img class="img-fluid img-cat" src="{{asset('img/enfermedad.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Enfermedades de Plantación</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('enfermedades.index')}}">
					<a href="{{route('enfermedades.index')}}"><img class="img-fluid img-cat" src="{{asset('img/enfermedad.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Manejó de Plagas</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('manejospla.create')}}">
					<a href="{{route('manejospla.create')}}"><img class="img-fluid img-cat" src="{{asset('img/plaga.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Manejo de Plagas</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('manejospla.index')}}">
					<a href="{{route('manejospla.index')}}"><img class="img-fluid img-cat" src="{{asset('img/plaga.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Plaga</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('plagas.create')}}">
					<a href="{{route('plagas.create')}}"><img class="img-fluid img-cat" src="{{asset('img/plaga.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Plagas</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('plagas.index')}}">
					<a href="{{route('plagas.index')}}"><img class="img-fluid img-cat" src="{{asset('img/plaga.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Método De Manejo De Enfermedad</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('manejosenfer.create')}}">
					<a href="{{route('manejosenfer.create')}}"><img class="img-fluid img-cat" src="{{asset('img/enfermedad.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Métodos De Manejo De Enfermedades</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('manejosenfer.index')}}">
					<a href="{{route('manejosenfer.index')}}"><img class="img-fluid img-cat" src="{{asset('img/enfermedad.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i> Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Fertilizante</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('fertilizantes.create')}}">
					<a href="{{route('fertilizantes.create')}}"><img class="img-fluid img-cat" src="{{asset('img/fertilizante.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Fertilizantes</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('fertilizantes.index')}}">
					<a href="{{route('fertilizantes.index')}}"><img class="img-fluid img-cat" src="{{asset('img/fertilizante.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Tutor</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('tutores.create')}}">
					<a href="{{route('tutores.create')}}"><img class="img-fluid img-cat" src="{{asset('img/tutor.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Tutores</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('tutores.index')}}">
					<a href="{{route('tutores.index')}}"><img class="img-fluid img-cat" src="{{asset('img/tutor.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i> Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Cultivó Asociado</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('asociados.create')}}">
					<a href="{{route('asociados.create')}}"><img class="img-fluid img-cat" src="{{asset('img/cultivoasociado.png')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Cultivos Asociados</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('asociados.index')}}">
					<a href="{{route('asociados.index')}}"><img class="img-fluid img-cat" src="{{asset('img/cultivoasociado.png')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Tipos de Plantación</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('tipos.create')}}">
					<a href="{{route('tipos.create')}}"><img class="img-fluid img-cat" src="{{asset('img/tipodeplantacion.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Tipos de Plantación</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('tipos.index')}}">
					<a href="{{route('tipos.index')}}"><img class="img-fluid img-cat" src="{{asset('img/tipodeplantacion.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>

	<div class="row">
		<div class="col-5">
			<h2 class="titulod">Agregar Nueva Especie</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('especies.create')}}">
					<a href="{{route('especies.create')}}"><img class="img-fluid img-cat" src="{{asset('img/especie.jpg')}}" alt="Snow" style="width:100%"></a>
					<button class="btn1 btn-info"><i class="fa fa-folder"></i> Agregar Nuevo</button>
				</form>
				</div>
				
			</div>
		</div>
		<div class="col-2"></div>
		<div class="col-5">
			<h2 class="titulod">Lista de Especies</h2>
			<div class="container1">
				<div class="frame-img">
					<form action="{{route('especies.index')}}">
					<a href="{{route('especies.index')}}"><img class="img-fluid img-cat" src="{{asset('img/especie.jpg')}}" alt="Snow" style="width:100%" ></a>
					<button class="btn1 btn-info"><i class="fa fa-bars"></i>Ver Lista</button>
				</form>
				</div>
				
			</div>
		</div>
	</div>

<br><br>
</div>

<br><br>

@endsection