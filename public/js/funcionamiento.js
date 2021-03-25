$(document).ready(function(){

    //validación de confirmación de password
    $('#password2').blur(function(event){
        var v1=$('#password').val();
        var v2=$('#password2').val();

        if(v1==v2){
            $('#pass_bien').removeAttr('hidden');
            $('#pass_bien').show();
            $('#pass_mal').hide()
            $('#btn_crear_u').removeAttr('disabled');
        }else{
            $('#pass_bien').hide();
            $('#pass_mal').removeAttr('hidden');
            $('#pass_mal').show();
            $('#btn_crear_u').attr('disabled','true');
        }
    });

    //mostrar los datos de password
    $('.btn_ojo').on('click', function(event){
       if( $('#password').attr('type')=='password'){
        $('#password').attr('type','text');
        $('#ocultar_pass').hide();
        $('#mostrar_pass').removeAttr('hidden');
        $('#mostrar_pass').show();
       }else{
        $('#password').attr('type','password');
        $('#mostrar_pass').hide();
        $('#ocultar_pass').removeAttr('hidden');
        $('#ocultar_pass').show();
       }
    });

    //validación para cargar los municipios
    var id_edo=$('#select_edo').val();
    $.ajax({
        method:'get',
        url:'/select/edo/'+id_edo,
        processData: false,
        data:{id:id_edo}
    }).done(function(municipios){
        var datos="<option>Seleccione una Opción</option>";
        console.log(municipios);
        municipios.forEach(muni => {
            console.log(muni);
           datos=datos+"<option value='"+muni.id+"'>"+muni.nombre+"</option>";
        });
        datos=datos+"<option value='mas'>Agregar Municipio</option>";
        $('#select_muni').html(datos);
    });

    $('#select_edo').on('change',function(){
        var id=$(this).val();
            $.ajax({
                method:'get',
                url:'/select/edo/'+id,
                processData: false,
                data:{id:id}
            }).done(function(municipios){
                var datos="<option>Seleccione una Opción</option>";
                console.log(municipios);
                municipios.forEach(muni => {
                    console.log(muni);
                   datos=datos+"<option value='"+muni.id+"'>"+muni.nombre+"</option>";
                });
                datos=datos+"<option value='mas'>Agregar Municipio</option>";
                $('#select_muni').html(datos);
            });
    });

    /*validación para cargar los municipios en actualizar
    var id_edo=$('#select_edo_update').val();
    $.ajax({
        method:'get',
        url:'/select/edo/'+id_edo,
        processData: false,
        data:{id:id_edo}
    }).done(function(municipios){
        var datos="";
        console.log(municipios);
        municipios.forEach(muni => {
            console.log(muni);
           datos=datos+"<option $direccion->id_municipio == "+muni.id+" ? 'selected':'' value='"+muni.id+"'>"+muni.nombre+"</option>";
        });
        datos=datos+"<option value='mas'>Agregar Municipio</option>";
        $('#select_muni_update').html(datos);
    });
*/
    $('#select_edo_update').on('change',function(){
        var id=$(this).val();
            $.ajax({
                method:'get',
                url:'/select/edo/'+id,
                processData: false,
                data:{id:id}
            }).done(function(municipios){
                var datos="";
                console.log(municipios);
                municipios.forEach(muni => {
                    console.log(muni);
                   datos=datos+"<option value='"+muni.id+"'>"+muni.nombre+"</option>";
                });
                datos=datos+"<option value='mas'>Agregar Municipio</option>";
                $('#select_muni_update').html(datos);
            });
    });

    $('#select_muni').on('change',function(){
        var id=$(this).val();
        if(id=='mas'){
            window.location='/municipios/create';
        }
    });

    $('#select_muni_update').on('change',function(){
        var id=$(this).val();
        if(id=='mas'){
            window.location='/municipios/create';
        }
    });
    $('#select_act').on('change',function(){
        var id=$(this).val();
        if(id=='mas_act'){
            window.location='/actividades/create';
        }
    });
    $('#btnModalHogar').on('click', function () {
        $('#datosHogar').modal('show');
      });
    $('#filasProd').on('change',function(){
        var filas=$(this).val();
        var buscar=$('#buscarProd').val();
        location.href='/productores?buscar='+buscar+'&filas='+filas;

    });
    $('#filasParcela').on('change',function(){
        var filas=$(this).val();
        var buscar=$('#buscarParc').val();
        location.href='/parcelas?buscar='+buscar+'&filas='+filas;

    });
    $('#filasUsuarios').on('change',function(){
        var filas=$(this).val();
        var buscar=$('#buscarUsuario').val();
        location.href='/usuarios?buscar='+buscar+'&filas='+filas;

    });

});
