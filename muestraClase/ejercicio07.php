<?php
?>
<HTML>
<BODY BACKGROUND=fondo1.jpg><center>
<H2>Ingreso de Datos</H2>
<FORM CLASS="borde" ACTION="ejercicio07.php" METHOD="POST">
<P><LABEL>Nombre del cliente :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto1"></P>
<P><LABEL>Nota 1 :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto2"></P>
<P><LABEL>Nota 2 :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto3"></P>
<P><LABEL>Nota 3:</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto4"></P>
<BR>
Carrera:
<select name="carrera" id="carrera">
<option SELECTED>Todos</option>
<option value="medicina">Medicina</option>
<option value="administracion">Administracion</option>
<option value="computacion">Computacion</option>
<option value="sistemas">Sistemas</option>
<option value="mecatronica">Mecatronica</option>
<option value="contabilidad">Contabilidad</option>
<option value="electricidad">Electricidad</option>
</select><BR>
<P><INPUT TYPE="SUBMIT" NAME="Imprimir" VALUE="Imprimir"></P> <BR>
</p>
</FORM>
</center>
</BODY>
</HTML>
<?php
if (isset($_REQUEST['Imprimir'])){
$nota1=0;$nota2=0;$nota3=0;
$nota1 = $_POST['texto2'];
$nota2 = $_POST['texto3'];
$nota3 = $_POST['texto4'];
$carrera = $_POST['carrera'];
if (isset($_REQUEST['Imprimir'])) {
if ($carrera == "medicina") {
printf("Nota 1: . $nota1 <BR>");
printf("Nota 2: . $nota2 <BR>");
printf("Nota 3: . $nota3 <BR>");
$promedio = ($nota1 + $nota2 + $nota3) / 3;
printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
printf("<BR> El Estudiante es de la carrera de:
$carrera<BR>");
if ($promedio >=13){
printf("<BR> El alumno esta aprobado en la carrera<BR>");
}
else{
printf("<BR> El alumno esta desaprobado en la carrera<BR>");
};
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");

}
if ($carrera == "administracion") {
printf("Nota 1: . $nota1 <BR>");
printf("Nota 2: . $nota2 <BR>");
printf("Nota 3: . $nota3 <BR>");
$promedio = ($nota1 + $nota2 + $nota3) / 3;
printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
printf("<BR> El Estudiante es de la carrera de:
$carrera<BR>");
if ($promedio >=13){
printf("<BR> El alumno esta aprobado en la carrera<BR>");
}
else{
printf("<BR> El alumno esta desaprobado en la carrera<BR>");
};
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
}
if ($carrera == "computacion") {
printf("Nota 1: . $nota1 <BR>");
printf("Nota 2: . $nota2 <BR>");
printf("Nota 3: . $nota3 <BR>");
$promedio = ($nota1 + $nota2 + $nota3) / 3;
printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
printf("<BR> El Estudiante es de la carrera de: $carrera<BR>");
if ($promedio >=13){

    printf("<BR> El alumno esta aprobado en la carrera<BR>");

}else{
    printf("<BR> El alumno esta desaprobado en la carrera<BR>");
    
};
    print ("</UL>\n");
    print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
    
}if ($carrera == "sistemas") {
    printf("Nota 1: . $nota1 <BR>");
    printf("Nota 2: . $nota2 <BR>");
    printf("Nota 3: . $nota3 <BR>");
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
    printf("<BR> El Estudiante es de la carrera de:
    $carrera<BR>");
 if ($promedio >=13){
    printf("<BR> El alumno esta aprobado en la carrera<BR>");
    }
    else{
    printf("<BR> El alumno esta desaprobado en la carrera<BR>");
    };
    print ("</UL>\n");
    print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
    }
    if ($carrera == "mecatronica") {
    printf("Nota 1: . $nota1 <BR>");
    printf("Nota 2: . $nota2 <BR>");
    printf("Nota 3: . $nota3 <BR>");
    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
printf("<BR> El Estudiante es de la carrera de:
$carrera<BR>");
if ($promedio >=13){
printf("<BR> El alumno esta aprobado en la carrera<BR>");
}
else{
printf("<BR> El alumno esta desaprobado en lacarrera<BR>");
};
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
}if ($carrera == "contabilidad") {
    printf("Nota 1: . $nota1 <BR>");
    printf("Nota 2: . $nota2 <BR>");
    printf("Nota 3: . $nota3 <BR>");
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
    printf("<BR> El Estudiante es de la carrera de:
    $carrera<BR>");
if ($promedio >=13){
    printf("<BR> El alumno esta aprobado en la carrera<BR>");
}
else{
    printf("<BR> El alumno esta desaprobado en la carrera<BR>");
};
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
}

if ($carrera == "electricidad") {
    printf("Nota 1: . $nota1 <BR>");
    printf("Nota 2: . $nota2 <BR>");
    printf("Nota 3: . $nota3 <BR>");
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    printf("<BR> El promedio de las 3 notas es: $promedio<BR>");
    printf("<BR> El Estudiante es de la carrera de:
    $carrera<BR>");
    if ($promedio >=13){
    printf("<BR> El alumno esta aprobado en la
    carrera<BR>");
    }
    else{
    printf("<BR> El alumno esta desaprobado en la carrera<BR>");
    };
    print ("</UL>\n");
    print ("<P>[ <A HREF='ejercicio07.php'>Nuevo Estudiante</A> ]</P>\n");
}else {
    printf("Se cita a los padres del estudiante a una práctica amistosa con los maestros de la escuela de: $carrera");
    };
    };
    };
    ?>