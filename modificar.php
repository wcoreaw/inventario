<html>
<body background="fondoPagina.png"></body>

<?php error_reporting(1);
 
$link = mysql_connect("localhost", "wcorea", "root");

$basedatos = mysql_select_db('prueba'); 

if ( $_POST["status"] == null || $_POST["colorblock"] == null )
{
echo '<script>
	 alert("Ingrese los datos") ;
	 windows.history.go(-1);
	 </script>';
echo"<br/><br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";

return;
}

$comando = mysql_query("UPDATE prueba SET status = '".$_POST["status"]."' WHERE colorblock= '".$_POST["colorblock"]."'",$link);

if (!$comando)
{
echo "Ha ocurrido un error"; 
echo"<br/><br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";

} 
else
{
echo '<script>
	 alert("Colorblock Actualizado") ;
	 windows.history.go(-1);
	 </script>';
} 

?>
<br/><br/>
<FORM METHOD=POST ACTION="modificar.html">
<INPUT TYPE="submit" VALUE="Regresar">
</FORM>

<FORM METHOD=POST ACTION="inicio.html">
<INPUT TYPE="submit" VALUE="Inicio">
</FORM>

</body>
</html>