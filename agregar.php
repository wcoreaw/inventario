<html>
<body background="fondoPagina.png"></body>
<?php
error_reporting(1); 

$link = mysql_connect("localhost", "wcorea", "root");

$basedatos = mysql_select_db('prueba');

if ( $_POST["colorblock"] == null || $_POST["unidad"] == null )
 {
echo '<script>
	 alert("Debe escribir los datos solicitados") ;
	 windows.history.go(-1);
	 </script>';

echo "<br/><br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";

 return;
 }


$comando = mysql_query( "INSERT INTO prueba (colorblock,unidad,supervisor,fecha_pedido,fecha_entrega,comentarios)
 VALUES('".$_POST["colorblock"]
 ."','".$_POST["unidad"]
 ."','".$_POST["supervisor"]
 ."','".$_POST["fecha_pedido"]
 ."','".$_POST["fecha_entrega"]
 ."','".$_POST["comentarios"]
 ."')",$link);

if (!$comando)
{
echo '<script>
	 alert("ingrese los datos correctamente") ;
	 windows.history.go(-1);
	 </script>';
}
else

{
echo '<script>
	 alert("Su colorblock fue solicitado con exito!!!") ;
	 windows.history.go(-1);
	 </script>';

}
?>
<br/><br/>
<FORM METHOD=POST ACTION="agregar.html">
<INPUT TYPE="submit" VALUE="Regresar">

</form>

<FORM METHOD=POST ACTION="index.html">
<INPUT TYPE="submit" VALUE="Inicio">

</form>
</body>
</html>
