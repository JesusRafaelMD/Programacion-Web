function validar(){
   // alert("estoy en JS");
    var nombre, telefono, email, expresionN, expresionT, expresionE;
    nombre = document.getElementById("nombre").value;
    telefono = document.getElementById("telefono").value;
    email = document.getElementById("email").value;
    
    //expresioness reg
    expresionN = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
    expresionT=/^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/;
    expresionE=/\w+@\w+\.+[a-z]/;
     
    
    
    if(nombre === "" || telefono === "" || email === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }

    else
        if(!isNaN(nombre)){
           alert("El nombre es incorrecto, ingrese solo letras");
           return false;
         }
        else 
            if(nombre.length>30){
              alert("El nombre es muy largo");
              return false;
            }
            else 
                if(!expresionN.test(nombre)){
                    alert("El nombre no es validop");
                    return false;
                }
                else  
                    if(telefono.length>15){
                       alert("El nombre es muy largo");
                       return false;
                    }
                    else
                        if(!expresionT.test(telefono)){
                        alert("El telefono no es validop");
                        }
                        else 
                            if(email.length>30){
                                alert("El nombre es muy largo");
                                return false;
                            }
                            else
                                if(!expresionE.test(email)){
                                    alert("El email no es validop");
                                    return false;
                                }
                                else  
                                   if(email.length>30 || nombre.length>30){
                                       alert("El nombre y el email solo deben de tener max 30 caracteres.");
                                       return false;
                                    }
}