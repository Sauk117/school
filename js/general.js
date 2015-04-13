$(document).ready(function(){
	$(".num").keydown(function(e) {
        if ((e.which > 64 && e.which < 91) || e.which == 192 || e.which == 226 || (e.which > 218 && e.which < 223) || (e.which > 185 && e.which < 192) || (e.which > 105 && e.which < 112)) {
            e.preventDefault();
        }
    });


    $('.let').keydown(function(e) {
        if ((e.which > 8 && e.which < 58) || (e.which <= 91 && e.which >= 123) || (e.which <= 144 && e.which >= 145) || (e.which <= 186 && e.which >= 192)) {
            e.preventDefault();
        }
    });
        $("#docente").submit(function(e){
        $("#matricula").removeAttr('disabled');
        
    });

        $("#alumno").submit(function(e){
        $("#matricula").removeAttr('disabled');
        
    });
});