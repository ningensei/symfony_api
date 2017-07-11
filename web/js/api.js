$(document).ready(function() {

  //////////////////////////////////////////////////////////////
 ////						Listar                         ////
//////////////////////////////////////////////////////////////

if(api.current === 'listar') {
	api.listar = function() {
		$('#loading').show();
		$.get(this.base_uri+'api/empresa', function(res) {
			$('#listaEmpresas tbody').html(api.renderList(res.empresas));
			$('#loading').hide();
		});
	}

	api.listar();
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
	        list +=         '<a href="update/'+ empresa.id +'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a> <br>';
	        list +=         '<a href="#" data-id="'+ empresa.id +'" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a> <br>';
	        list +=     '</td>';
	        list += '</tr>';
		}
	} else {
		list = '<tr><td colspan="5" class="text-center">No existen registros de empresa</tr>';
	}
	
	return list;
}

});