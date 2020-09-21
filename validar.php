<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//conectar a la base de datos
$conexión=mysqli_connect('localhost', 'root', '', 'base de datos sme');
$consulta="SELECT * FROM clientes WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexión, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
    header("location:");
}
else {
    echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexión);
