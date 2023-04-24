<HTML LANG="es">
<HEAD> <body bgcolor="pink">
<TITLE>El formulario de PHP</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>
<BODY>
<?PHP
if(isset($_REQUEST['buscar'])){
print ("<H1>El formulario de PHP. Resultados del formulario</H1>\n");

$texto = $_REQUEST['texto'];
$donde = $_REQUEST['donde'];
$genero = $_REQUEST['genero'];
print ("<P>Estos son los datos introducidos:</P>\n");

print ("<UL>\n");
print (" <LI>Texto de busqueda: $texto\n");
print (" <LI>Buscar en: $donde\n");
print (" <LI>Genero: $genero\n");

print ("</UL>\n");
print ("<P>[ <A HREF='IF02.php'>Nueva busqueda</A>]</P>\n");

}
else
{
?>
<H1>El formulario de PHP</H1>
<H2>Busqueda de peliculas</H2>
<FORM CLASS="borde" ACTION="IF02.php" METHOD="POST">
<P><LABEL>Texto a buscar:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="texto"></P>
<P><LABEL>Buscar en:</LABEL>
<INPUT TYPE="RADIO" NAME="donde" VALUE="titulo">Titulos de peliculas
<INPUT TYPE="RADIO" NAME="donde" VALUE="album">Nombres de album
<INPUT TYPE="RADIO" NAME="donde" VALUE="ambos" CHECKED>Ambos campos</P>
<P><LABEL>Genero:</LABEL>
<SELECT NAME="genero">
<OPTION SELECTED>Todos
<OPTION>Terror
<OPTION>Ancion
<OPTION>Suspenso
</SELECT></P>
<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>
</FORM>
<?PHP }
?>
</BODY>
</HTML>