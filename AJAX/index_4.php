<!doctype html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    
</head>
<body>
	<div id="contenedor">
	</div>
    <input type="text" id="text_1" placeholder="datos" onkeyup="Ejecutar_Ajax(this.value)">
	<script>
		function Ejecutar_Ajax(data){
    	var conexion;
    	var contenedor = document.getElementById("contenedor");
        if(data.length==0){
            contenedor.innerHTML="";
            return;
        }
    	if(window.XMLHttpRequest){
    		conexion = new XMLHttpRequest(); 
    	}
    	else{
    		conexion = new ActiveXObject("Microsoft.XMLHTTP");
    	}
    	conexion.onreadystatechange=function(){
    		if((conexion.readyState==4) && (conexion.status==200)){
    			contenedor.innerHTML=conexion.responseText;
    		}
    	}
    	conexion.open("GET","letras.php?valor="+data,true);
    	conexion.send();
    }
   </script>
</body>
</html>