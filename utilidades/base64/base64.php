<?php // /toolbox/base64.php

if(isset($_REQUEST["texto"])){
	$texto = $_REQUEST["texto"];
}else{
	$texto = "";
}


if(isset($_REQUEST["codificar_base64"])){
	$resultado = base64_encode($texto);
}elseif(isset($_REQUEST["decodificar_base64"])){
	$resultado = base64_decode($texto);
}else{
	$resultado = "";
}


$html=<<<fin
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="?">
		<textarea name="texto" onclick="this.select();">$texto</textarea>
		<br><input type="submit" value="Codificar en BASE64" name="codificar_base64">
		<input type="submit" value="Decodificar en BASE64" name="decodificar_base64">
		<div id="resultado">$resultado</div>
	</form>	
</body>
</html>
fin;

header("Content-type: text/html; charset=utf8;");
print $html;

?>