
<h4> Nueva Noticia </h4>
<form method="post">Titulo Noticia<input type="text" id="noticia" name="noticia" size=20><br />
Hora<input type="text" name="hora">
<br />
<input type="submit" value="Enviar" name="nueva">
</form>

<h4> Borrar Noticia </h4>
<form method="post">ID Noticia<input type="text" name="id_noticia" size=20>
<br />
<input type="submit" value="Enviar" name="id">
</form>

<h4> Modificar Noticia </h4>
<form method="post">ID Noticia<input type="text" name="id_noticia_modificada" size=20>
<br/>
Titulo Noticia<input type="text" id="noticia" name="titulo_modificado" size=20>
<br />
Hora<input type="text" name="hora_modificada">
<br />
<input type="submit" value="Enviar" name="modificar">

</form>
<a href="index.php">Pagina principal</a><br/>
<?php


$noticia=$_POST['noticia'];
$hora=$_POST['hora'];
$borrar=$_POST['id_noticia'];	
$noticia_modificada=$_POST['id_noticia_modificada'];	
$hora_modificada=$_POST['hora_modificada'];	
$titulo_modificar=$_POST['titulo_modificado'];	

$conexion = mysql_connect("localhost", "x74737718", "cr26ti7")or die('esto falla conexion'. mysql_error()); 
mysql_select_db("x74737718",$conexion)or die('esto falla selecion'. mysql_error());

$result = mysql_query ("select * from noticias");
echo "<table border='1' align='left'>";
echo "<tr bgcolor='#CCCCCC'>";
echo "<td><b>ID</b></td>";
echo "<td><b>Titulo</b></td>";
echo "<td><b>Fecha</b></td>";
echo "</tr>";
while ($row = mysql_fetch_array ($result))  
{  
echo "<tr>";
    echo "<td>".$row[ID]."</td>";
    echo "<td>".$row[titulo]."</td>";
    echo "<td>".$row[fecha]."</td>";
}  

if ($noticia!= NULL){
	
       $sql = "INSERT INTO noticias (id, titulo,fecha) VALUES ('','".$noticia."','".$hora."')";
	   $resultado = mysql_query($sql) or die('esto falla la busqueda'. mysql_error());

		echo 'Noticia insertada :)';
		
	}
	
if($borrar!=NULL){
		
			$sql="DELETE FROM noticias WHERE  ID = ".$borrar;
			$resultado = mysql_query($sql) or die('esto falla al borrar'. mysql_error());
			echo 'Borrada correctamente :)' ;
	

}
if($noticia_modificada != NULL){
	
			$sql = "UPDATE FROM noticias SET titulo='".$titulo_modificar."' fecha='".$hora_modificada."' where ID=".$noticia_modificada ;
			$resultado = mysql_query($sql) or die('esto falla al modificar'. mysql_error());
			echo 'Modificada correctamente :)' ;
	
	

}











?>