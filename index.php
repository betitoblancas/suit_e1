<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
?>
<!DOCTYPE html>
<head>
    <title>Ejercicios</title>
</head>
<body>
    <form action="procesos/insertar.php" method="post" >
        <label for="">Nombre</label>
        <p></p>
        <input type="text" name="txtnombre">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad">
        <p></p>
        <button>Agregar</button>
    </form>
    <br></br>
    <table style="border-collapse: colapse;" border="1">
        <tr>
            <td>nombre</td>
            <td>marca</td>
            <td>modelo</td>
            <td>color</td>
            <td>capacidad (kg)</td>
            <td>fecha_entrega</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
<?php
    $obj= new metodos();
    $sql="SELECT id,nombre,marca,modelo,color,capacidad,fecha_entrega from t_persona";
    $datos=$obj->mostrarDatos($sql);

    foreach ($datos as $key){
?>
        <tr>
            <td><?php echo $key['nombre']; ?></td>
            <td><?php echo $key['marca'] ?></td>
            <td><?php echo $key['modelo'] ?></td>
            <td><?php echo $key['color'] ?></td>
            <td><?php echo $key['capacidad'] ?></td>
            <td><?php echo $key['fecha_entrega'] ?></td>
            <td><a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a></td>
            <td><a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>