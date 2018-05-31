function validar(){
	var nombre, apellidos, correo, usuario, clave, telefono, expresion;
	nombre=document.getElementById("nombre").value;
	apellidos=document.getElementById("apellidos").value;
	correo=document.getElementById("correo").value;
	usuario=document.getElementById("usuario").value;
	clave=document.getElementById("clave").value;
	telefono=document.getElementById("telefono").value;

expresion=/\w+@\w+\.+[a-z]/; //Esto es una expresión regular

	if(nombre === "" || apellidos === "" || correo === "" || usuario === "" || clave === "" || telefono === ""){
       alert("Todos los campos son obligatorios");
       return false;
	}

	else if(nombre.length>30){
		alert("El nombre es muy largo");
		return false;
	}

	else if(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/.test(nombre)==false){
        alert ("El nombre solo puede contener letras");
        return false; 
        
	}

	//Alfabetico con espacios [hola como estas]
/*var filter6=/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
if (filter6.test(document.getElementById("EL_ID_DEL_C AMPO"))){
alert("Es puro texto")
}
else{
alert("No es texto")
}*/

	else if(apellidos.length>30){
		alert("Los apellidos son muy largos");
		return false;
	}

	else if(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/.test(apellidos)==false){
        alert ("El apellido solo puede contener letras");
        return false; 
        
	}

	else if(correo.length>40){
		alert("El correo es muy largo");
		return false;
	}

	else if(!expresion.test(correo)){ // Con la variable text se 
		                             //evalua si la variable correo 
		                             //cumple con los requisitos
	    alert("El correo es válido");
		return false;
	}

    else if(usuario.length<8 ){
		alert("El usuario debe ser de mínimo 8 caracteres");
		return false;
	}

	else if(clave.length<6 ){
		alert("La clave debe ser de mínimo 6 caracteres");
		return false;
	}

	else if(telefono.length>15){
		alert("El teléfono es muy largo");
		return false;
	}
	else if(isNaN(telefono)){
		alert("El teléfono ingresado no es un número");
		return false;
	}
	

}