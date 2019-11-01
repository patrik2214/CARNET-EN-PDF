<?php
require_once("conexion.php");
$nom = $_POST['txtnombres'];
$apeM = $_POST['txtapellidoM'];
$apeP = $_POST['txtapellidoP'];
$dni = $_POST['txtdni'];
$universidad = $_POST['cbouniversidad'];
$escuela = $_POST['cboescuela'];

//Subir la Imagen
//Creamos una variable para ver si se sube o no el archivo
$imgload="true";

//Seteamos nombre, tipo y tamaño del archivo
$file_name=$_FILES['img']['name'];
$img_size=$_FILES['img']['size'];
$file_type=$_FILES['img']['type'];

//verificamos tamaño
if ($img_size>200000){
    $imgload="false";
}
//verificamos que solo sea imagen
if (!($file_type =="image/jpeg" OR $file_type=="image/gif")){
    // Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
    $imgload="false";
}
//seteamos la ruta de la carpeta
$add="uploads/$file_name";
//lo movemos del temporal a la carpeta
if($imgload=="true"){
    move_uploaded_file ($_FILES['img']['tmp_name'], $add);

    $sql="INSERT INTO asistente (dni,nombres,apellidomaterno,apellidopaterno,escuela,universidad,href)
    VALUES ('$dni','$nom','$apeM','$apeP','$escuela','$universidad','$add')";
    $resp=1;
    $cnx->query($sql) or $resp=0;
    echo $resp;
    if ($resp =1 ){
        session_start();
        $_SESSION['dni']= $dni;
        header("location: prueba2.php");
    }else{
        header("location: index.html");
    }
}
?>



