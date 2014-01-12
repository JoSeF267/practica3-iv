<?php
$dsn = "localhost"; 
$usuario_db= "x74737718";
$password= "cr26ti7";
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha=$_POST['fecha'];
$dni=$_POST['dni'];
$email=$_POST['email'];
$pass_usuario=$_POST['pass'];

$conexion = mysql_connect("localhost", "x74737718", "cr26ti7")or die('esto falla conexion'. mysql_error()); 
mysql_select_db("x74737718",$conexion)or die('esto falla selecion'. mysql_error());

$sql="INSERT INTO usuarios VALUES('$usuario','$nombre','$apellidos','$fecha','$dni','$email','$pass_usuario')";
$resultado = mysql_query($sql) or die('esto falla selecion'. mysql_error());

if($resultado){
echo "Gracias todo correcto";
echo "<BR>";
echo "<a href='inscripcion.html'>Pagina principal</a>";
}else {
echo "ERROR";
}
?> 

<?php 

mysql_close();


?>

