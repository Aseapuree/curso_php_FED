<html>
<head>
<title>Documento sin título</title>
</head>
<body BACKGROUND=fondo.png><dr>
<?php
echo"Artefactos Electrodomesticos : ".$_POST['pagos'];
echo"<br>Precio del Artefacto : ".$_POST['PRECIO'];
echo"<br>Meses : ".$_POST['CUOTA'];
$RESULTADOS=$_POST['PRECIO'];
$TOTAL=$_POST['PRECIO']/$_POST['CUOTA'];
echo"<br>Cuota : ".$TOTAL." Soles Mensuales ";
?>
</body>
</html>