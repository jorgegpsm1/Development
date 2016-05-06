<!doctype html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    
</head>
<body>
	<div id="contenedor">
	</div>
	<button id="boton1" onClick="Ejecutar_Ajax()">GET</button>
	<script>
		function Ejecutar_Ajax(){
    	var conexion;
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
    			contenedor.innerHTML=conexion.response;
    		}
    	}
    	conexion.open("GET","data.txt",true);
    	conexion.send();
    }
   </script>
</body>
</html>