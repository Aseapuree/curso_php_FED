<?php
?>
<HTML>
    <head>

        <style>
            .borde{
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid black;
                border-radius: 4px;
                width: 700px;
            }


            .tabla{

                border: 1px solid black;
                border-radius: 2px;
            }
        </style>

    </head>
<body bgcolor="yellow">

    <FORM CLASS="borde" ACTION="ejercicio02.php" METHOD="POST">
    <div>

        <h2>Calculo Promedio</h2>
        
        <P><LABEL>Codigo del Estudiante :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto0"></P>
        <P><LABEL>Nombre del Estudiante :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto1"></P>
        
        
        <p>Carrera 
            
            <select name="txtCarrera" id="">
                <option >Computacion</option>
                <option >Enfermeria</option>
                <option >Mecanica</option>
    <option >Electricidad</option>
    <option >Contabilidad</option>
    <option >Administracion</option>
    <option ></option>
    <option ></option>
</select>
</p>

<p>Turno: Mañana<input type="radio" name="txtTurno" value="Mañana">
Noche:<input type="radio" name="txtTurno" value="Noche">
</p>

<p>Ciclo:
    
    I<input type="radio" name="txtCiclo"   value="Primero">
    II<input type="radio" name="txtCiclo"  value="Segundo">
    III<input type="radio" name="txtCiclo" value="Tercero">
    IV<input type="radio" name="txtCiclo"  value="Cuarto">
    V<input type="radio" name="txtCiclo"   value="Quinto">
    VI<input type="radio" name="txtCiclo"  value="Sexto">
</p>


<p>Curso V ciclo
    
    <select name="txtCurso" id="">
        <option >Desarrollo aplicaciones</option>
        <option >Aplicaciones Moviles</option>
        <option >Arquitectura de la informacion</option>
        <option >Diseño grafico</option>
    <option >Desarrollo recuersos TIC</option>
    <option >Negociacion y solucion de conflictos</option>
    <option >Emprendimiento Digital</option>
</select>
</p>


<P><LABEL>Nota Practica 01 :</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto2"></P>
<P><LABEL>Nota Practica 02:</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto3"></P>
<P><LABEL>Nota Practica 03:</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto4"></P>
<P><LABEL>Nota examen parcial:</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto5"></P>
<P><LABEL>Nota final:</LABEL><INPUT TYPE="TEXT" SIZE="40" NAME="texto6"></P>
<BR><BR>



<P><INPUT TYPE="SUBMIT" NAME="Imprimir" VALUE="Imprimir"></P> <BR>
</p>
</div>
</FORM>
</HTML>




<?php
if (isset($_REQUEST['Imprimir'])){
$nota1=0;$nota2=0;$nota3=0;


$codigo=$_POST['texto0'];
$nombre=$_POST['texto1'];
$carrera=$_POST['txtCarrera'];
$turno=$_POST['txtTurno'];
$ciclo=$_POST['txtCiclo'];
$curso=$_POST['txtCurso'];


$nota1 = $_POST['texto2'];
$nota2 = $_POST['texto3'];
$nota3 = $_POST['texto4'];
$notaParcial=$_POST['texto5']*2;
$notaFinal=$_POST['texto6']*3;



printf("Nota 1: . $nota1 <BR>");
printf("Nota 2: . $nota2 <BR>");
printf("Nota 3: . $nota3 <BR>");
$promedio = ($nota1 + $nota2 + $nota3+ $notaParcial+$notaFinal) / 8;
if ($promedio>=13) {


printf("<table class='tabla'>");
printf("<tr><td>Codigo:</td><td>".$codigo."</td></tr>");
printf("<tr><td>Nombre:</td><td>".$nombre."</td></tr>");
printf("<tr><td>Carrera:</td><td>".$carrera."</td></tr>");
printf("<tr><td>Turno:</td><td>".$turno."</td></tr>");
printf("<tr><td>Ciclo:</td><td>".$ciclo."</td></tr>");
printf("<tr><td>Curso:</td><td>".$curso."</td></tr>");
printf("<tr><td>El promedio de las 3 notas es: $promedio</td></tr></table>");
printf("<BR> El Estudiante esta Aprobado<BR>");
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio02.php'>Nuevo Estudiante</A> ]</P>\n");
}else{
    printf("<table class='tabla'>");
printf("<tr><td>Codigo:</td><td>".$codigo."</td></tr>");
printf("<tr><td>Nombre:</td><td>".$nombre."</td></tr>");
printf("<tr><td>Carrera:</td><td>".$carrera."</td></tr>");
printf("<tr><td>Turno:</td><td>".$turno."</td></tr>");
printf("<tr><td>Ciclo:</td><td>".$ciclo."</td></tr>");
printf("<tr><td>Curso:</td><td>".$curso."</td></tr>");
printf("<tr><td>El promedio de las 3 notas es: $promedio</td></tr></table>");
printf("<BR> El Estudiante esta Desaprobado<BR>");
print ("</UL>\n");
print ("<P>[ <A HREF='ejercicio02.php'>Nuevo Estudiante</A> ]</P>\n");
};
};


?>