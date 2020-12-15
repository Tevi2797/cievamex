@extends('plantillas.adminMain')



@section('titulo','Agregar Familiar')



@section('formbus')



<div class="row fondoFormulario before">

</div>



<div class="container">

<br><br>

  <div class="row justify-content-md-center">

    <div class="col-lg-6 py-3 px-lg-5 border bg-light" style="background-color: white">
        <br>
        <h1 class="titulo1" align="center">Registrar Nuevo Familiar</h1>

        <form method="post" action="{{route('familiares.store')}}">
        @csrf

            <div>
                <input hidden  name="id_productor" value="{{$productor->id}}">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre del familiar</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido_pat" name="apellido_pat" placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label for="nombre">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido_mat" name="apellido_mat" placeholder="">
                </div>

            </div>

            <div class="form-group">
                <label for="nombre">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="">
            </div>

            <div class="form-group row">
                <label for="example-date-input" class="col-5 col-form-label">Fecha de Nacimiento</label>
                <div class="col-7">
                    <input class="form-control" type="date" name="date" value="2011-08-19" id="example-date-input">
                </div>
            </div>

            <div class="form-group row">
            <label for="tipo" class="col-5 col-form-label">Parentesco</label>
                <div class="col-7">
                    <select class="form-control" id="parentesco" name="parentesco" >
                        <option >Mamá</option>
                        <option>Papá</option>
                        <option>Abuelo</option>
                        <option>Abuela</option>
                        <option>Bizabuelo</option>
                        <option>Bizabuela</option>
                        <option>Hermano</option>
                        <option>Hermana</option>
                        <option>Cónyuge</option>
                        <option>Hijo</option>
                        <option>Hija</option>
                        <option>Tío</option>
                        <option>Tía</option>
                        <option>Sobrino</option>
                        <option>Sobrina</option>
                        <option>Cuñado</option>
                        <option>Cuñada</option>
                        <option>Nieto</option>
                        <option>Nieta</option>
                        <option>Yerno</option>
                        <option>Nuera</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="tipo" class="col-5 col-form-label">Escolaridad</label>
                <div class="col-7">
                    <select class="form-control" id="escolaridad" name="escolaridad" >
                        <option >Nula</option>
                        <option>Primaria</option>
                        <option>Secundaria</option>
                        <option>Media Superior</option>
                        <option>Superior</option>
                    </select>
                </div>
            </div>

            <br>

            @foreach($enfermedades as $enfermedad)
                <input type="checkbox" name="enfermedad[]" value="{{$enfermedad->id}}"/> {{$enfermedad->nombre}} <br>
            @endforeach

            <br>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block fondoVerde" value="Guardar" />
            </div>
        </form>
	</div>
  </div>
</div>

<br><br>



@endsection
