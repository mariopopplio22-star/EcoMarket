<?php
$conexion=mysqli_connect("localhost","root","","ecomarket");
$nom=$_REQUEST['txtNom'];
$ape=$_REQUEST['txtApe'];
$ema=$_REQUEST['txtEma'];
$ciu=$_REQUEST['txtCiu'];
$pro=$_REQUEST['txtPro'];
mysqli_query($conexion,"insert into cliente (nombres,apellidos,email,ciudad,producto) 
values ('$nom','$ape','$ema','$ciu','$pro')");
mysqli_close($conexion);
echo "Compra exitosa";
?>