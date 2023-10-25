<?php 

include ("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidopaterno=$_POST['apellidopaterno'];
$apellidomaterno=$_POST['apellidomaterno'];
$cargo=$_POST['cargo']; 

$sql="UPDATE empleados set nombre='$nombre', apellidopaterno='$apellidopaterno', apellidomaterno='$apellidomaterno', cargo='$cargo' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: empleados.php"); 
}

?> 


