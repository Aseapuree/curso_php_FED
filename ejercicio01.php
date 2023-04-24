<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pago de cuotas</title>

<style>
    
    .contenedor{
        text-align: center;
        width: 300px;
        height: 40px;
        padding: 5px 5px;
        border: 1px solid black;
        border-radius: 6px;
        background-color: aquamarine;
        font-size: 25px;

    }


  
    .tabla{
        height: 150px;
        width: 250px;
         border: 1px solid black;
         border-radius: 2px;
    }

    .tabla td{

        border-bottom: 1px solid black;
    }
    

</style>

</head>
<body>
<center>
<form action="ejercicio01.php" method="post">

<p>Nombre: <input type="text" name="txtCliente" id=""> </p>
<p>DNI: <input type="text" name="txtDni" id=""> </p>
<p>Fecha: <input type="date" name="txtFecha" id=""> </p>

<p>Marca:<select name="txtMarca" id="">
    <option >Nissan</option>
    <option >Toyota</option>
    <option >Hyundai</option>
    <option >Ford</option>
    <option >BMw</option>
    <option >Mazda</option>
    <option >Chevrolet</option>
    <option >Honda</option>
    <option >Lexus</option>
    <option >Subaru</option>
    <option >Susuki</option>
    <option >Renault</option>
    <option >Kia</option>
    <option >Jeep</option>
    <option >Ferrari</option>


</select></p>

<B>Seleccione Producto </B>
<SELECT NAME="pagos">
<OPTION>Moto lineal
<OPTION>Moto taxi
<OPTION>Moto de carga
<OPTION>Moto ultimo modelo </SELECT><br><br>
<B>Ingrese Precio del Producto:</B>
<input name="precio" type="text" /><br>
<p>CUOTA: </p>
<input type="radio" name="CUOTA" value="6" >SEIS MESES<br>
<input type="radio" name="CUOTA" value="10" >DIEZ MESES<br>
<input type="radio" name="CUOTA" value="12">DOCE MESES<br>
<input type="radio" name="CUOTA" value="20" >VEINTE MESES<br>
<input type="radio" name="CUOTA" value="24">DOS AÑOS<br>
<input type="radio" name="CUOTA" value="30" >DOS AÑOS 6 MESES<br>
<b></b>
<BR><br>
<input type="submit" name="submit" value="¡Enviarme!" />
</form>
</body>
</html>

<?php
if($_POST){

    $nombre=$_POST['txtCliente'];
    $DNI=$_POST['txtDni'];
    $fecha=$_POST['txtFecha'];
    $marca=$_POST['txtMarca'];
    $a = $_POST['precio'];
    $b = $_POST['CUOTA'];
    $precio= $_POST['precio'];

    $suma = round(($a / $b),2);


    echo "<div class='caja' ><Marquee ><div class='contenedor' >¡Venta de autos en oferta!</div></Marquee></div>";

    echo "<br><table class='tabla'><tr><td>Nombre: </td><td>".$nombre."</td><tr>";
    echo "<tr><td>DNI: </td><td>".$DNI."</td><tr>";
    echo "<tr><td>Fecha: </td><td>".$fecha."</td><tr>";
    echo "<tr><td>Marca: </td><td>".$marca."</td><tr>";
    echo "<tr><td>Precio: </td><td>S/.".$precio."</td><tr>";
    echo "<tr><td>En ".$_POST['CUOTA']." Cuotas:</td><td>S/.".$suma ." </td></tr>";
    echo "<tr><td>PRODUCTO : </td><td>".$_POST['pagos']."</td><tr></table>";
}
?>
</form>
</center>
</body>
</html>