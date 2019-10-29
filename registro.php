<?php
require_once("conexion.php");
$nom = $_POST['txtnombres'];
$apeM = $_POST['txtapellidoM'];
$apeP = $_POST['txtapellidoP'];
$dni = $_POST['txtdni'];
$universidad = $_POST['txtuniversidad'];
$escuela = $_POST['txtescuela'];

$sql="INSERT INTO asistente (dni,nombres,apeliidomaterno,apellidopaterno,escuela,universidad)
VALUES ('$dni','$nom','$apeM','$apeP','$escuela','$universidad')";
$resp=1;
$cnx->query($sql) or $resp=0;
echo $resp;


session_start();
$_SESSION['txtnombres']= $nombre;
$_SESSION['txtapellidoM']= $apellidomaterno;
$_SESSION['txtapellidoP']= $apellidopaterno;
$_SESSION['txtdni']= $documento;
$_SESSION['txtuniversidad']= $uni;
$_SESSION['txtescuela']= $escu;
header("location: prueba2.php");

?>



