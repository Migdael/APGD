
// carga del documento
$(document).ready(function() {



//Activar controles segun la seleccion del tipo 
    $("#selectTipo").change(event => {
        var tipo = $("#selectTipo option:selected").text();
        console.log(tipo);

        

        $("#txtCarrera").val("");
        $("#selectAño").val(null);
        $("#txtCarnet").val("");
        $("#selectGrado").val(null);


        if (tipo == "Universitario") {

            $("#txtCarrera").attr("disabled", false);
            $("#selectAño").attr("disabled", false);
            $("#txtCarnet").attr("disabled", false);
        } else {
            $("#txtCarrera").attr("disabled", true, "value", );
            $("#selectAño").attr("disabled", true);
            $("#txtCarnet").attr("disabled", true);
        }
        if (tipo == "Colegial") {
            $("#selectGrado").attr("disabled", false, "requiere");
        } else {
            $("#selectGrado").attr("disabled", true);
        }
    });
//fin de activar controles segun la seleccion del tipo 

//mostrar tablas segun la sellecion del tipo 
    $("#tipo").change(event => {

       
        //Eliminar tablas si existen
        $("#tablaDefecto").remove();
       $("#tablaUniversitario").remove();
       $("#tablaColegial").remove();
       $("#tablaDocente").remove();
       $("#tablaAdministrativo").remove();

        //si sellecione Universitarios
        if ($("#tipo option:selected").text() == "Universitario") {

            $.get('/deportistas/' + $("#tipo option:selected").index(), function(universitario) {
        
                $("#contenedorTabla").append('<table class="table table-striped jambo_table bulk_action" id="tablaUniversitario"></table>');
                $("#tablaUniversitario").append('<thead id="encabezados"></thead>');
                $("#encabezados").append('<tr id="listaEncabezados"></tr>');
                $("#listaEncabezados").append('<th>Nombre</th>');
                $("#listaEncabezados").append('<th>Apellido</th>');
                $("#listaEncabezados").append('<th>Edad</th>');
                $("#listaEncabezados").append('<th>Sexo</th>');
                $("#listaEncabezados").append('<th>telefono</th>');
                $("#listaEncabezados").append('<th>F. Nacimiento</th>');
                $("#listaEncabezados").append('<th>Deporte</th>');
                $("#listaEncabezados").append('<th>Año</th>');
                $("#listaEncabezados").append('<th>Carrera</th>');
                $("#listaEncabezados").append('<th>Carnet</th>');
                $("#listaEncabezados").append('<th>Institucion</th>');
                $("#tablaUniversitario").append('<tbody id="cuerpo"></tbody>');

                $("#cuerpo").append('<tr id="listaFilas"></tr>');

                universitario.forEach(element => {
                    $("#listaFilas").append(`<td> ${element.nombre} </td>)`);
                    $("#listaFilas").append(`<td> ${element.apellido} </td>`);
                    $("#listaFilas").append(`<td> ${element.edad} </td>`);
                    $("#listaFilas").append(`<td> ${element.sexo} </td>`);
                    $("#listaFilas").append(`<td> ${element.telefono} </td>`);
                    $("#listaFilas").append(`<td> ${element.fechaNacimiento} </td>`);
                    $("#listaFilas").append(`<td> ${element.deporte.name} </td>`);
                    $("#listaFilas").append(`<td> ${element.anio} </td>`);
                    $("#listaFilas").append(`<td> ${element.carrera} </td>`);
                    $("#listaFilas").append(`<td> ${element.carnet} </td>`);
                    $("#listaFilas").append(`<td> ${element.institucion.nombre} </td>`);

                });
            });
        };
        //Fin de si sellecione Universitarios
        
        //si sellecione colegial
        if ($("#tipo option:selected").text() == "Colegial") {

            $.get('/deportistas/' + $("#tipo option:selected").index(), function(colegial) {
        
                $("#contenedorTabla").append('<table class="table table-striped jambo_table bulk_action" id="tablaColegial"></table>');
                $("#tablaColegial").append('<thead id="encabezados"></thead>');
                $("#encabezados").append('<tr id="listaEncabezados"></tr>');
                $("#listaEncabezados").append('<th>Nombre</th>');
                $("#listaEncabezados").append('<th>Apellido</th>');
                $("#listaEncabezados").append('<th>Edad</th>');
                $("#listaEncabezados").append('<th>Sexo</th>');
                $("#listaEncabezados").append('<th>telefono</th>');
                $("#listaEncabezados").append('<th>F. Nacimiento</th>');
                $("#listaEncabezados").append('<th>Deporte</th>');
                $("#listaEncabezados").append('<th>Grado</th>');
                $("#listaEncabezados").append('<th>Institución</th>');
                $("#tablaColegial").append('<tbody id="cuerpo"></tbody>');
                $("#cuerpo").append('<tr id="listaFilas"></tr>');

                colegial.forEach(element => {
                    $("#listaFilas").append(`<td> ${element.nombre} </td>)`);
                    $("#listaFilas").append(`<td> ${element.apellido} </td>`);
                    $("#listaFilas").append(`<td> ${element.edad} </td>`);
                    $("#listaFilas").append(`<td> ${element.sexo} </td>`);
                    $("#listaFilas").append(`<td> ${element.telefono} </td>`);
                    $("#listaFilas").append(`<td> ${element.fechaNacimiento} </td>`);
                    $("#listaFilas").append(`<td> ${element.deporte.name} </td>`);
                    $("#listaFilas").append(`<td> ${element.grado} </td>`);
                    $("#listaFilas").append(`<td> ${element.institucion.nombre} </td>`);
                });
            });
        };
        //Fin de si sellecione colegial
                //si sellecione doscente
        if ($("#tipo option:selected").text() == "Docente") {

            $.get('/deportistas/' + $("#tipo option:selected").index(), function(docente) {
        
                $("#contenedorTabla").append('<table class="table table-striped jambo_table bulk_action" id="tablaDocente"></table>');
                $("#tablaDocente").append('<thead id="encabezados"></thead>');
                $("#encabezados").append('<tr id="listaEncabezados"></tr>');
                $("#listaEncabezados").append('<th>Nombre</th>');
                $("#listaEncabezados").append('<th>Apellido</th>');
                $("#listaEncabezados").append('<th>Edad</th>');
                $("#listaEncabezados").append('<th>Sexo</th>');
                $("#listaEncabezados").append('<th>Cedula</th>');
                $("#listaEncabezados").append('<th>Institución</th>');
                $("#tablaDocente").append('<tbody id="cuerpo"></tbody>');
                $("#cuerpo").append('<tr id="listaFilas"></tr>');

                doscente.forEach(element => {
                    $("#listaFilas").append(`<td> ${element.nombre} </td>)`);
                    $("#listaFilas").append(`<td> ${element.apellido} </td>`);
                    $("#listaFilas").append(`<td> ${element.edad} </td>`);
                    $("#listaFilas").append(`<td> ${element.sexo} </td>`);
                    $("#listaFilas").append(`<td> ${element.cedula} </td>`);
                    $("#listaFilas").append(`<td> ${element.institucion.nombre} </td>`);
                });
            });
        };
        //Fin de si sellecione doscente
        
                 //si sellecione administrativo
        if ($("#tipo option:selected").text() == "Administrativo") {

            $.get('/deportistas/' + $("#tipo option:selected").index(), function(administrativo) {
        
                $("#contenedorTabla").append('<table class="table table-striped jambo_table bulk_action" id="tablaAdministrativo"></table>');
                $("#tablaAdministrativo").append('<thead id="encabezados"></thead>');
                $("#encabezados").append('<tr id="listaEncabezados"></tr>');
                $("#listaEncabezados").append('<th>Nombre</th>');
                $("#listaEncabezados").append('<th>Apellido</th>');
                $("#listaEncabezados").append('<th>Edad</th>');
                $("#listaEncabezados").append('<th>Sexo</th>');
                $("#listaEncabezados").append('<th>Cedula</th>');
                $("#listaEncabezados").append('<th>Institución</th>');
                $("#tablaAdministrativo").append('<tbody id="cuerpo"></tbody>');
                $("#cuerpo").append('<tr id="listaFilas"></tr>');

                administrativo.forEach(element => {
                    $("#listaFilas").append(`<td> ${element.nombre} </td>)`);
                    $("#listaFilas").append(`<td> ${element.apellido} </td>`);
                    $("#listaFilas").append(`<td> ${element.edad} </td>`);
                    $("#listaFilas").append(`<td> ${element.sexo} </td>`);
                    $("#listaFilas").append(`<td> ${element.cedula} </td>`);
                    $("#listaFilas").append(`<td> ${element.institucion.nombre} </td>`);
                });
            });
        };
        //Fin de si sellecione administrativo
        

        


    });
//fin de mostrar tablas segun la sellecion del tipo

   

    
});
//cierre carga del documento