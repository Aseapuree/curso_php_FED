<?php
$pago=$_POST['precio']*$_POST['cantidad'];
if($_POST['cantidad']<=$_POST['stock']){
print("<label for=boleta><b>BOLETA DEVENTA</b></label><br><br>");
print("<label for=al>"."Producto:".$_POST['prod']."</label><br><br>");
print("<label for=al>"."Suma a pagar:".$pago."</label><br><br>");
print("<label for=al>Tipo de Producto:".$_POST['tipo']."</label><br><br>");
print("<label for=al>Gracias por su compra</label><br>");
}
else{
print("<label for=boleta><b>BOLETA DE VENTA</b></label><br>");
print("<label for=al>ESTA COMPRA NO SE PUEDE REALIZAR NO EXISTE EN STOCK</label><br>");
}
?>