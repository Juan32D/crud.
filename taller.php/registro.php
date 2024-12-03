<?php
include 'conexion.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);  /
    $celular = $_POST['celular'];

    
    $sql = "INSERT INTO usuarios (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, documento, email, contraseña, celular) 
            VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$documento', '$email', '$contraseña', '$celular')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

