$(document).ready(function(){
	/*$("#nivel").change(function() { 
		$.post(urlajax+"/getGrupos",{"nivel":$("#nivel").val()},gotniveles);
	});*/
	$("#form-niveles").submit(function(e){
		e.preventDefault();
		$.post(urlajax+"/getAlumnos",$("#form-niveles").serialize(),gotTable);
	});
	$("#form-nivelesd").submit(function(e){
		e.preventDefault();
		$.post(urlajax+"/getDocenteS",$("#form-nivelesd").serialize(),gotTable);
	});

	
});
function gotTable(html)
{
	gettingsomething=false;
	$("#contentTable").empty();
	$("#contentTable").append(html);
}