@extends('plantillas.adminMain')



@section('titulo','Actualizar Actividad Economica')



@section('formbus')

<div class="container">



	<div class="row">

		<div class="col">



<form method="post" action="{{route('update.actprodu',$productor->id)}}"  >

@method('GET')'

	  @csrf



 <h2 class="titulo1 centrarCosa">Actualizar Actividad Económica</h2>

 <h3>Productor: {{$productor->nombre}} {{$productor->apellido_pat}} {{$productor->apellido_mat}}</h3>



    <div class="form-group">

      <label for="tipo">Actividades económicas dispoibles:</label>

      <select  class="form-control" id="select_act" name="select_act" >

      <option>Seleccione una opción</option>

    @foreach($actividades as $actividad)

    <option value="{{$actividad->id}}"> {{$actividad->nombre}}</option>

     @endforeach

    </select>

  </div>



	<input type="submit" name="submit" class="submit btn btn-info" value="Actualizar" />

    </form>

   </div>

</div>

</div>

<br><br>





@endsection



