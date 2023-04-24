<html>
<head>
<title>Pago de horas</title>
</head>
✅ DATOS INGRESADOS ✅</p>

<body background="https://previews.123rf.com/images/hydognik/hydognik1010/hydognik101000022/8077349-fondo-de-invierno-
para-el-registro-de-las-p%C3%A1ginas-de-la-celebraci%C3%B3n-.jpg">

<?php
$horas=$_POST['horast'];$valor=$_POST['valorh'];
$adelan=$_POST['adelanto'];$horavalor=$horas*$valor;
$horavaloradelan=$horavalor-$adelan;
echo"✨NOMBRE : ".$_POST['nombre'];echo"<br>✨PAGO : ".$_POST['pago'];
echo"<br>✨EDAD : ".$_POST['EDAD'];echo"<br>✨DNI : ".$_POST['dni'];
echo"<br>✨Correo : ".$_POST['Correo'];echo"<br>✨HORAS TRABAJADAS : ".$_POST['horast'];
echo"<br>✨VALOR DE LA HORA: ".$_POST['valorh'];echo"<br>✨ADELANTO : ".$_POST['adelanto'];
echo"<br>✨SUELDO BRUTO : ".$horavalor;echo"<br>✨ESTADO CIVIL : ".$_POST['ecivil'];
if($_POST['ecivil']=='soltero'){
$solter=($horavalor*5)/100;echo"<br>✨BONIFICACION : ".$solter;}
else if($_POST['ecivil']=='viudo'){
$viud=($horavalor*10)/100;echo"<br>✨BONIFICACION : ".$viud;}
else if($_POST['ecivil']=='casado'){
$casad=($horavalor*14)/100;echo"<br>✨BONIFICACION : ".$casad;}
if($_POST['ecivil']=='divorciado'){
$divorciad=($horavalor*8)/100;echo"<br>✨BONIFICACION : ".$divorciad;}
$ley=($horavalor*11)/100;echo"<br>✨DESCUENTO DE LEY : ".$ley;
if($_POST['ecivil']=='soltero'){
$solter=($horavalor*5)/100;$totalp=($solter+$horavaloradelan-$ley);
echo"<br>✨TOTAL : ".$totalp;}
else if($_POST['ecivil']=='viudo'){
$viud=($horavalor*10)/100;$totalp=($viud+$horavaloradelan-$ley);
echo"<br>✨TOTAL : ".$totalp;}
else if($_POST['ecivil']=='casado'){
$casad=($horavalor*14)/100;$totalp=($casad+$horavaloradelan-$ley);
echo"<br>✨TOTAL : ".$totalp;}
if($_POST['ecivil']=='divorciado'){
$divorciad=($horavalor*8)/100;$totalp=($divorciad+$horavaloradelan-$ley);
echo"<br>✨TOTAL : ".$totalp;}
?></body></html>