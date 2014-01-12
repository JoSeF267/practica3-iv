<?php
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
?>