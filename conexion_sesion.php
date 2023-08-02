<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contasmartbd";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay algún error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


   // Verifica si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo y la contraseña ingresados por el usuario
    $correo = $_POST["inputUsuario"];
    $contrasena = $_POST["inputContrasena"];

    // Realiza las validaciones necesarias antes de consultar la base de datos
    // ...

    // Consulta la base de datos para verificar si el correo y la contraseña son correctos
    $sql = "SELECT * FROM usuarios WHERE correo_electronico = '$correo' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    // Verifica si se encontró algún registro coincidente
    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, redirige al frame de usuario
        
 // Obtén el registro del usuario
 $usuario = $result->fetch_assoc();
       
// Almacena el ID del usuario en una variable de sesión
session_start();
$_SESSION['id_usuario'] = $usuario['id_usuario'];

// Redirige al frame de usuario
header("Location:index.php");
exit;


   
        exit;
    } else {
        // Muestra un mensaje de error
        echo "Correo o contraseña incorrectos.";
    }
}



?>

