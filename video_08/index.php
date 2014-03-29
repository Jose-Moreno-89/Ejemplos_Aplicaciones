<?php
	require_once("class/class.php");
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/funciones.js"> </script>
	<meta http-qeuiv="Content-Type" content="text/html; charset-UTF-8">
	<title>Insertar registros con PHP</title>
</head>
<body onload="limpiar()">
<form name="insertar_form" id="frm" action="insertar.php" method="post">
	
	<table width="400" align="center">
		<tr>
			<td align="center" width="400" valign="top" colspan="2">
				<h2>Ingrese su comentaro</h2>
			</td>
		</tr>
		<tr>
			<td valign="top" align="right">
				Su monbre
			</td>
			<td valign="top" align="left">
				<input type="text" name="nom_txt"> 
			</td>
		</tr>
		<tr>
			<td valign="top" align="right">
				Su mensaje
			</td>
			<td valign="top" align="left">
				<textarea name="texto_ta" cols="35" rows="5"></textarea> 
			</td>
		</tr>
				<tr>
			<td valign="top" width="400" align="center" colspan="2">
			<hr/>
				<input type="button" value="Escribir" title="Escribir" onclick="validar();"/>
			</td>

			</td>
		</tr>
	</table>
</form>
<table align="center" width="60%">
	<tr>
		<td width="500" valign="top" align="center"colspan="4">
			<hr/>
		</td>
	</tr>
	<tr style="background-color:#666666; font-weight:bold; color:#ffffff" >
		<td valign="top" align="center" width="150">
			Nombre
		</td>
		<td valign="top" align="center" width="350">
			Mensaje
		</td>
		<td valign="top" align="center" width="350">
			Fecha
		</td>
		<td valign="top" align="center" width="350">
			Hota
		</td>
	</tr>
	<?php
		$tra=new Trabajo();
		$reg=$tra->listar_visitas();
		for($i=0;$i<count($reg);$i++){
	?>

	<tr style="background-color:#f0f0f0">
		<td valign="top" align="right" width="150">
			<?php echo utf8_decode($reg[$i]["nombre_persona"]); ?>
		</td>
		<td valign="top" align="center" width="350">
			 <?php echo $reg[$i]["texto"] ?>
		</td>
		<td valign="top" align="center" width="350">
			 <?php echo $reg[$i]["fecha"] ?>
		</td>
		<td valign="top" align="center" width="350">
			 <?php echo $reg[$i]["hora"] ?>
		</td>
	</tr>
	<?php 
	}
	?>
</table>
</body>
</html>