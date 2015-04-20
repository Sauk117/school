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

	$("#buscar").keyup(function() {
		
         //alert("hola");
           $.post(urlajax+"/getAlumnosbu",{"buscar":$("#buscar").val()},gotTable);
        });

	$("#buscard").keyup(function() {
		
         //alert("hola");
           $.post(urlajax+"/getDocentesbu",{"buscard":$("#buscard").val()},gotTable);
        });
	
		$("#buscaru").keyup(function() {
		
         //alert("hola");
           $.post(urlajax+"/getUsuariosbu",{"buscaru":$("#buscaru").val()},gotTable);
        });
});
function gotTable(html)
{
	gettingsomething=false;
	$("#contentTable").empty();
	$("#contentTable").append(html);
}