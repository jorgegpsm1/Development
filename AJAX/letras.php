<?
	$nombre=array();
	$nombre[]="Abril";
	$nombre[]="Amelia";
	$nombre[]="Africa";
	$nombre[]="Adelia";
	$nombre[]="Aida";
	$nombre[]="Aurora";
	$nombre[]="Auta";

	$dato = $_REQUEST['valor'];
	if(strlen($dato) > 0){
		$hint="";
		for($i=0; $i<count($nombre);$i++){
			if(strtolower($dato)==strtolower(substr($nombre[$i],0,strlen($dato)))){
				if($hint==""){
					$hint=$nombre[$i];
				}
				else{
					$hint=$hint." , ".$nombre[$i];
				}
			}
		}
	}
	else{
		$hint="";
	}
	if($hint==""){
		$respuesta="No hay coincidencias";
	}
	else{
		$respuesta=$hint;
	}
	echo $respuesta;
?>