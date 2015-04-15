$(document).ready(function (){
	$("#pais").change(function() { 
		$.post(urlajax+"/getestados",{"pais":$("#pais").val()},gotestados);
	});
	$("#contrasena1").keyup(function(e) { 
		if($("#contrasena1").val()==$("#contrasena").val())
			$("#confirmar").html("Correcto");
		else
			$("#confirmar").html("Las contraseñas no coinciden");
	});

	$("#contrasena").keyup(function(e) { 
		if ($("#contrasena1").val()!="") { 
			if($("#contrasena1").val()==$("#contrasena").val())
			$("#confirmar").html("Correcto");
		else
			$("#confirmar").html("Las contraseñas no coinciden");
		 };
	});

});

$(document).ready(function (){
	$("#estado").change(function() { 
		$.post(urlajax+"/getmunicipios",{"estado":$("#estado").val()},gotmunicipios);
	});
});

function gotestados(respuesta){
	d=$.parseJSON(respuesta);
	$("#estado option").remove();
	if(d!=null)
	{
		$("#estado").append($("<option >- Seleccione uno</option>"));
		for(i=0;i<d.length;i++)
		{
			$("#estado").append($("<option value="+d[i].id+">"+d[i].nombre+"</option>"));
		}
	}
	else
		$("#estado").append($("<option >- Vacío</option>"));
}

function gotmunicipios(respuesta){
	d=$.parseJSON(respuesta);
	$("#municipio option").remove();
	if(d!=null)
	{
		$("#municipio").append($("<option value='-1'>- Seleccione uno</option>"));
		for(i=0;i<d.length;i++)
		{
			$("#municipio").append($("<option value="+d[i].id+">"+d[i].nombre+"</option>"));
		}
	}
	else
		$("#municipio").append($("<option value='-1'>- Vacío</option>"));
}
$(document).ready(function (){
	$("#nivel").change(function() { 
		$.post(urlajax+"/getgruposbyajax",{"nivel":$("#nivel").val(),"turno":$("#turno").val()},gotgrupos);
	});
	$("#turno").change(function() { 
		$.post(urlajax+"/getgruposbyajax",{"nivel":$("#nivel").val(),"turno":$("#turno").val()},gotgrupos);
	});
	$("#materia").change(function() { 
		$.post(urlajax+"/getmateriasbyajax",{"nivel":$("#nivel").val(),},gotmaterias);
	});

});
function gotgrupos(respuesta){
	d=$.parseJSON(respuesta);
	$("#grupo option").remove();
	if(d!=null)
	{
		$("#grupo").append($("<option value='-1'>- Seleccione uno</option>"));
		for(i=0;i<d.length;i++)
		{
			$("#grupo").append($("<option value="+d[i].id+">"+d[i].nombre+"</option>"));
		}
	}
	else
		$("#grupo").append($("<option value='-1'>- Vacío</option>"));
}
function gotmaterias(respuesta){
	d=$.parseJSON(respuesta);
	$("#materia option").remove();
	if(d!=null)
	{
		$("#materia").append($("<option value='-1'>- Seleccione uno</option>"));
		for(i=0;i<d.length;i++)
		{
			$("#materia").append($("<option value="+d[i].id+">"+d[i].nombre+"</option>"));
		}
	}
	else
		$("#materia").append($("<option value='-1'>- Vacío</option>"));
}