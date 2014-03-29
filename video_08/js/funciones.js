function limpiar(){
	document.insertar_form.reset();
	document.insertar_form.nom_txt.focus();
	
}

function validar(){
	var form =document.insertar_form;
	if (form.nom_txt.value==0) {
		alert ("Ingrese su nombre");
		form.nom_txt.value="";
		form.nom_txt.focus();
		return false;
	}
	if (form.texto_ta.value==0) {
		alert ("Ingrese su mensaje");
		form.texto_ta.value="";
		form.texto_ta.focus();
		return false;
	}
	form.submit();
}
