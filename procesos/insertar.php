<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre=$_POST['txtnombre'];
    $marca=$_POST['txtmarca'];
    $modelo=$_POST['txtmodelo'];
    $color=$_POST['txtcolor'];
    $capacidad=$_POST['txtcapacidad'];
    
    $datos=array(
        $nombre,
        $marca,
        $modelo,
        $color,
        $capacidad
    );

    $obj= new metodos();
    if ($obj->insertarDatos($datos)==1){
        header("location:../index.php");
    }else {
        echo "fallo";
    }

?>