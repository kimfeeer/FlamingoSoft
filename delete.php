<?php

include("conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM empleados where id='$id'";
$query=mysqli_query($conexion,$sql);


if($query){
    Header("Location: empleados.php");
}


?>
