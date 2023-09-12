<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

$nombre = $_POST['fullName'];
$direccion = $_POST['username'];
$email = $_POST['email'];
$telefono = $_POST['phoneNumber'];
$fecha_nacimiento = $_POST['fecha'];
$area = $_POST['area'];
$genero = $_POST['gender'];

$sql = "INSERT INTO usuarios (nombre_completo, direccion, correo_electronico, numero_telefonico, fecha_nacimiento, area, genero)
        VALUES ('$nombre', '$direccion', '$email', '$telefono', '$fecha_nacimiento', '$area', '$genero')";

if ($conn->query($sql) === TRUE) {
    // Mostrar la alerta
    echo "<script>alert('Datos guardados correctamente');</script>";
    
    // Redirigir al usuario a una página después de guardar los datos
    echo "<script>window.location.href='http://localhost/Registro_iccenev/';</script>";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
