<?php
    require '';

    $nombre = $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $dirección= $_POST['dirección'];
    $correo_electronico= $_POST['correo'];
    $celular= $_POST['celular'];
    $usuario= $_POST['usuario'];
    $contraseña= $_POST['contraseña'];

    $sql = "INSERT INTO clientes (nombre, apellido, dirección, correo_electronico, celular, usuario, contraseña ) VALUES ('$nombre', '$apellido', '$dirección', '$correo_electronico', '$celular', '$usuario', '$contraseña' )";
    $resultado = $mysqli->query($sql);



?>

<?php if($resultado){ ?>
    <script>
        alert("Usuario creado satisfactoriamente");
        window.location = "";
    </script>
<?php } else { ?>
    <script>alert("Error al crear el usuario");
        window.location = "";</script>
<?php }
?>