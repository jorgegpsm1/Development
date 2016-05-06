<!doctype html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    
</head>
<body>
	<div id="contenedor">
	</div>
    <input type="text" id="text_1" placeholder="datos">
	<button id="boton1" onClick="Ejecutar_Ajax()">GET</button>
	<script>
		function Ejecutar_Ajax(){
    	var conexion;
        var xmlDoc;
        var texto = document.getElementById("text_1").value;
    	var contenedor = document.getElementById("contenedor");
    	var boton = document.getElementById("boton1");
    	if(window.XMLHttpRequest){
    		conexion = new XMLHttpRequest(); 
    	}
    	else{
    		conexion = new ActiveXObject("Microsoft.XMLHTTP");
    	}
    	conexion.onreadystatechange=function(){
    		if((conexion.readyState==4) && (conexion.status==200)){

                xmlDoc=conexion.responseXML;
                txt="<table>";
                pais=xmlDoc.getElementsByTagName("pais");
                nacionlidad=xmlDoc.getElementsByTagName("nacionlidad");
                poblacion=xmlDoc.getElementsByTagName("poblacion");
                continente=xmlDoc.getElementsByTagName("continente");
                prefijo=xmlDoc.getElementsByTagName("prefijo");
                for(i=0;i<pais.length;i++){
                    txt=    txt+"<tr><td>"+
                            pais[i].childNodes[0].nodeValue+"</td><td>"+
                            nacionlidad[i].childNodes[0].nodeValue+"</td><td>"+
                            poblacion[i].childNodes[0].nodeValue+"</td><td>"+
                            continente[i].childNodes[0].nodeValue+"</td><td>"+
                            prefijo[i].childNodes[0].nodeValue+"</td><tr>";
                }
                txt=txt+"</table>";
                contenedor.innerHTML=txt;
    		}
    	}
    	conexion.open("GET","paises.xml",true);
    	conexion.send();
    }
   </script>
</body>
</html>