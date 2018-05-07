function obtiene_http_request()
{
    var req = false;
    try{
        req = new XMLHttpRequest(); /* p.e. Firefox */
    } catch (err1){
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
            /* algunas versiones IE */
        } 
      catch (err2){
        try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
                /* algunas versiones IE */
            } 
      catch (err3){
                req = false;
            }
        }
    }
    return req;
}
var miPeticion = obtiene_http_request();


function funcion1() {
	
	
    var nom = document.getElementById('nom').value;
    alert(nom);
    

	var pass = document.getElementById('pass').value;
    var mail = document.getElementById('mail').value;
    var priv =document.getElementById('priv').value;	

	valores = "nom="+nom+"&pass="+pass+"&mail="+mail+"&priv="+priv;
	
    var url = 'archivo.php';	
	
	
	
	
    var mi_aleatorio = parseInt(Math.random() * 99999999);//para que no guarde la página en el caché...
    var vinculo = url + "?rand=" + mi_aleatorio;

    miPeticion.open("POST", vinculo, true);//ponemos true para que la petición sea asincrónica
    miPeticion.onreadystatechange = miPeticion.onreadystatechange = function () {
        
		if (miPeticion.readyState == 4){ 
				//alert('Status 4 error');		
             if (miPeticion.status == 200){
				 
			//	 alert(' status 200');
				 
                var http = miPeticion.responseText;
                document.getElementById('tabla_u').innerHTML = http;
				//alert(http);
            }
          }
        }

miPeticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
miPeticion.send(valores);
}