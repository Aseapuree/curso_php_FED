<html>
<head>
<title>Pago de horas</title>
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css"
/>
</head>

<body background="https://previews.123rf.com/images/hydognik/hydognik1010/hydognik101000022/8077349-fondo-de-
invierno-para-el-registro-de-las-p%C3%A1ginas-de-la-celebraci%C3%B3n-.jpg">

✅ INGRESE DATOS PERSONALES ✅</p><p><label></label></p>
<form id="form1" name="form1" method="post" action="pagohoras.php">
<p>NOMBRE <label for="nombre"></label>
<input name="nombre" type="text" id="nombre" size="40" maxlength="40" /></p>
<p>FECHA DE PAGO <label for="pago"></label>
<input type="text" name="pago" id="pago" /> </p>
<p>EDAD <label for="EDAD"></label>
<input type="text" name="EDAD" id="EDAD" /> </p>
<p>DNI <label for="dni"></label>
<input type="text" name="dni" id="dni" /> </p>
<p>Correo <label for="Correo"></label>
<input type="text" name="Correo" id="Correo" /> </p>
<p>ESTADO CIVIL<span id="spryradio1"> <label> <br />
<input type="radio" name="ecivil" value="soltero" id="ecivil_0" /> soltero</label> <br />
<label><input type="radio" name="ecivil" value="viudo" id="ecivil_1" />viudo</label> <br />
<label> <input type="radio" name="ecivil" value="casado" id="ecivil_2" />casado</label> <br />
<label> <input type="radio" name="ecivil" value="divorciado" id="ecivil_3" />divorciado</label> <br /> <br />
<span class="radioRequiredMsg">Realice una seleccion.</span></span></p>
<p>HORAS TRABAJADAS <label for="horast"></label><input type="text" name="horast" id="horast" /> </p>
<p>VALOR DE HORA <label for="valorh"></label> <input type="text" name="valorh" id="valorh" /> </p>
<p>ADELANTO <label for="adelanto"></label> <input type="text" name="adelanto" id="adelanto" /> </p> <p>
<input type="submit" name="button" id="button" value="Procesar" />
<input type="reset" name="button2" id="button2" value="Restablecer" /> </p>
</form> <p>&nbsp; </p>
</body>
</html>