<?php
require_once("conexion.php");
$nom = $_POST['txtnombres'];
$apeM = $_POST['txtapellidoM'];
$apeP = $_POST['txtapellidoP'];
$dni = $_POST['txtdni'];
$universidad = $_POST['cbouniversidad'];
$escuela = $_POST['cboescuela'];

$sql="INSERT INTO asistente (dni,nombres,apellidomaterno,apellidopaterno,escuela,universidad)
VALUES ('$dni','$nom','$apeM','$apeP','$escuela','$universidad')";
$resp=1;
$cnx->query($sql) or $resp=0;
echo $resp;

session_start();
$_SESSION['dni']= $dni;

header("location: prueba2.php");

?>



