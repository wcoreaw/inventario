<html>
<BODY background="fondoPagina.png">
<head>

 	<H1 ALIGN= "CENTER " style="text-shadow: 15px 20px 10px green;"> <font    face='Arial' color=yellow>Catalogo de Productos</H1> 

<justify>
    
    
<br/>
<table bgcolor="white" align ="justify" border="0" cellspacing="0" cellpadding="0"  width = 60%  >
	<tr><tr
       
       align="justify">
 	<br>   
    
        
<?php     
error_reporting(1); 
$link = mysql_connect("localhost", "wcorea", "root");
$basedatos = mysql_select_db('prueba'); 
$consulta = mysql_query("SELECT * FROM prueba",$link);
    
while ($registro = mysql_fetch_assoc($consulta)) 
{
    echo "<b># Transaccion:</b> ".$registro['id_transaccion']."<br/>";
    echo "<b>Colorblock:</b> ".$registro['colorblock']."<br/>"; 
    echo "<b>Unidad:</b> ".$registro['unidad']."<br/>";
    echo "<b>Supervisor:</b> ".$registro['supervisor']."<br/>";      
    echo "<b>Fecha pedido:</b> ".$registro['fecha_pedido']."<br/>";    
    echo "<b>Fecha entrega:</b> ".$registro['fecha_entrega']."<br/>";
    echo "<b>Comentarios:</b> ".$registro['comentarios']."<br/>";
    echo "<b>Status:</b> ".$registro['status']."<br/>";
    echo"<br/>";
} 

?>
     <br><br><br><br>

    <FORM METHOD="POST" ACTION="inicio.html">
    <INPUT TYPE="submit" VALUE="Inicio">
    <FORM>     
    
    </justify></head></html>

	