<html>
<body background="fondoPagina.png"></body>

<?php error_reporting(1); 

$link = mysql_connect("localhost", "wcorea", "root"); 

$basedatos = mysql_select_db('prueba'); 


if ( $_POST["colorblock"] == null ) 
    
{ 
echo '<script>
	 alert("Debe escribir los datos solicitados") ;
	 windows.history.go(-1);
	 </script>';
echo"<br/><br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";

 return;
 }
$comando = mysql_query( "DELETE FROM prueba WHERE colorblock = '".$_POST["colorblock"]."'",$link); 

if (!$comando) 
{
 echo '<script>
	 alert("Debe escribir los datos solicitados") ;
	 windows.history.go(-1);
	 </script>';

echo"<br/><br/>";
echo "<input type='button' value='Regresar' onClick='history.go(-1);'>";


 } 
else
{
echo '<script>
	 alert("Solicitd eliminada") ;
	 windows.history.go(-1);
	 </script>';
 
} 
?>
<br/>
<br/>

<FORM METHOD=POST ACTION="eliminar.html"> 
<INPUT TYPE="submit" VALUE="Eliminar Productos">
<br/><br/>

<FORM METHOD=POST ACTION="inicio.html"> 
<INPUT TYPE="submit" VALUE="Inicio">

</body>

</html>