<HTML>
<body BACKGROUND=fondo.png><dr>
</body>
<FORM ACTION=pagos.php METHOD=post><br>
<B>Artefactos Electrodomesticos</B>
<SELECT NAME=pagos>
<OPTION>moto lineal
<OPTION>moto taxi
<OPTION>moto de carga
<OPTION>moto ultimo modelo </SELECT><br><br>
<B>Precio del Artefacto:</B><INPUT TYPE=text NAME=PRECIO value="" ><BR><br>
<b>Seleccione pago mensual del artefacto:</b><br><input type=radio name=CUOTA
value=6 >SEIS MESES<br>
<input type=radio name=CUOTA value=12>DOCE MESES<br>
<input type=radio name=CUOTA value=18>AÑO Y MEDIO<br>
<input type=radio name=CUOTA value=24>DOS AÑOS<br>
<b></b>
<INPUT TYPE=submit NAME=OK VALUE="IMPRIMIR"><BR>
</FORM></HTML>
<?php
$CUOTA="";$PRECIO="";$PRECIO== 'precio';
if ($CUOTA == "SEIS"){
{ $RESULTADO = $PRECIO/6;
printf("<INPUT TYPE=text NAME=RESULTADO value= ".$RESULTADO.">");
echo "<BR><br>En Seis Cuotas Pagara ".$RESULTADO." Soles Mensuales";};
if($CUOTA=="DOCE")
{ $RESULTADO = $PRECIO/12;
printf("<INPUT TYPE=text NAME=RESULTADO value= ".$RESULTADO.">");
echo "<BR><br>En Doce Cuotas Pagara ".$RESULTADO." Soles Mensuales ";};
if ($CUOTA == "DIECIOCHO")
{ $RESULTADO = $PRECIO/18;
printf("<INPUT TYPE=text NAME=RESULTADO value= ".$RESULTADO.">");
echo "<BR><br>En Diesiocho Cuotas Pagara ".$RESULTADO." Soles Mensuales ";};
if ($CUOTA == "VEINTICUATRO")
{ $RESULTADO = $PRECIO/24;
printf("<INPUT TYPE=text NAME=RESULTADO value= ".$RESULTADO.">");
echo "<BR><br>En Veinticuatro Cuotas Pagara ".$RESULTADO." Soles Mensuales ";};
};
?>