$(document).ready(function() {


  //////////////////////////////////////////////////////////////
 ////						Listar                         ////
//////////////////////////////////////////////////////////////

api.listar = function() 
{
	$('#loading').show();
	$.get(this.base_uri+'api/empresa', function(res) {
		$('#listaEmpresas tbody').html(api.renderList(res.empresas));
		$('#loading').hide();
	});
}

api.renderList = function(empresas)
{	
	var list = '';
	if(empresas.length) {
		for(key in empresas) {
			var empresa = empresas[key];
			list += '<tr>';
	        list +=     '<td>'+ empresa.id +'</td>';
	        list +=     '<td>'+ empresa.nombre +'</td>';
	        list +=     '<td>'+ empresa.direccion+'</td>';
	        list +=     '<td>'+ empresa.cuit +'</td>';
	        list +=     '<td>';
	        list +=         '<a href="editar/'+ empresa.id +'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a> <br>';
	        list +=         '<a href="#" data-id="'+ empresa.id +'" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a> <br>';
	        list +=     '</td>';
	        list += '</tr>';
		}
	} else {
		list = '<tr><td colspan="5" class="text-center">No existen registros de empresa</td></tr>';
	}
	
	return list;
}




  //////////////////////////////////////////////////////////////
 ////						Agregar                        ////
//////////////////////////////////////////////////////////////

api.agregar = function()
{
	$('#btnGuardar').on('click', function(e) {
		e.preventDefault();
		
		var data = { nombre: $('#nombre').val(), cuit: $('#cuit').val(), direccion: $('#direccion').val() };

		$('#loading').show();
		$.ajax({
		    url: api.base_uri+'api/empresa',
		    type: 'POST',
		    data: JSON.stringify(data),
		    contentType: 'application/json; charset=utf-8',
		    dataType: 'json',
		    success: function(msg) {

		    	$('#loading').hide();

		        // Alert mensaje de éxito
                swal({
                  title: "¡Bien hecho!",
                  text: "La empresa fue creada",
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#2edb53",
                  confirmButtonText: "Volver al listado",
                  closeOnConfirm: false
                },
                function(isConfirm) {
                	// vuelve al listado
                    window.location.href = api.base_uri;
                });
		    },
		    error: function(res) {
                
                var errors = res.responseJSON.errors;
                var errorMsg = '<ul>';
                
                $.each( errors, function( key, value ) {

                    errorMsg += '<li style="list-style: none; color: #df1e1e">' + value + '</li>';
                });

                errorMsg += '</ul>';

                $('#loading').hide();
                
                // Alertar Errores
                swal({
                  title: "¡Error! <br><small>Verifica los siguientes campos</small>",
                  text: errorMsg,
                  html: true
                });
            }

		});

	});
}



  //////////////////////////////////////////////////////////////
 ////						Editar                         ////
//////////////////////////////////////////////////////////////

api.editar = function()
{
	$('#btnGuardar').on('click', function(e) {
		e.preventDefault();
		
		var data = { nombre: $('#nombre').val(), cuit: $('#cuit').val(), direccion: $('#direccion').val() };

		$('#loading').show();

		$.ajax({
		    url: api.base_uri+'api/empresa/'+$(this).data('id'),
		    type: 'PUT',
		    data: JSON.stringify(data),
		    contentType: 'application/json; charset=utf-8',
		    dataType: 'json',
		    success: function(msg) {

		    	$('#loading').hide();

		        // Alert mensaje de éxito
                swal({
                  title: "Ok!",
                  text: "Los cambios se han guardado",
                  type: "success",
                  showCancelButton: false,
                  confirmButtonColor: "#2edb53",
                  confirmButtonText: "Volver al listado",
                  closeOnConfirm: false
                },
                function(isConfirm) {
                	// vuelve al listado
                    window.location.href = api.base_uri;
                });
		    },
		    error: function(res) {
                
                var errors = res.responseJSON.errors;
                var errorMsg = '<ul>';
                
                $.each( errors, function( key, value ) {

                    errorMsg += '<li style="list-style: none; color: #df1e1e">' + value + '</li>';
                });

                errorMsg += '</ul>';

                $('#loading').hide();
                
                // Alertar Errores
                swal({
                  title: "¡Error! <br><small>Verifica los siguientes campos</small>",
                  text: errorMsg,
                  html: true
                });
            }

		});

	});
}


  //////////////////////////////////////////////////////////////
 ////						Eliminar                       ////
//////////////////////////////////////////////////////////////

api.eliminar = function()
{
	$('body').on('click', '.delete', function(e) {
		e.preventDefault();
		
		var button = $(this);

		$('#loading').show();

	    $.ajax({
		    url: api.base_uri+'api/empresa/'+$(this).data('id'),
		    type: 'DELETE',
		    success: function(msg) {

		    	$('#loading').hide();

		    	button.parent().parent().remove();
		    }
		});


	});
}


if(api.current === 'agregar') {

	api.agregar();
}

if(api.current === 'editar') {

	api.editar();
}

if(api.current === 'listar') {

	api.listar();
	api.eliminar();
}

});