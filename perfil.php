<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/usuario.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="shortcut icon" href="img/logo (1).ico" />
  <title>Usuario</title>
</head>
<header>
  <div class="container">
    <div class="left">
      <img class="logo" src="img/logod.png" alt="all" href="index.html" />
      <a style="color: white; text-decoration: none" href="index.html">ContaSmart</a>
    </div>
  </div>
</header>

<body>
  <div class="divuser1">
    <div>
      <img class="imguser" src="img/perfil-del-usuario.png" alt="usuario">
      <h1 class="userh1">Usuario</h1>
      <a href="registro.html" class="abtn1"><button class="btnempresa"><span>Editar</span></button></a>
    </div>
  </div>
  <div class="divuser2">


  <?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contasmartbd";


$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    // Si no ha iniciado sesión, redirige al formulario de inicio de sesión
    header("Location:login.html");
    exit;
}

// Obtiene el ID del usuario desde la variable de sesión
$idUsuario = $_SESSION['id_usuario'];

// Consulta los datos del usuario desde la base de datos
$sql = "SELECT * FROM usuarios WHERE id_usuario = $idUsuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtén los datos del usuario
    $usuario = $result->fetch_assoc();

    // Accede a los datos individuales
    echo $nombre = $usuario['nombre']."<br/>";
    echo $correo = $usuario['correo_electronico']."<br/>";
    echo $idUsuario;


    
   // header("Location:usuario.php");

    




    // ...

    // Puedes utilizar los datos del usuario como desees
    // ...
} else {
    // El usuario no existe en la base de datos, realiza alguna acción o muestra un mensaje de error
}
// ...

?>





    <h1 class="empresa1">Tus empresas</h1>
    <a href="registro-empresa.html" class="abtn"><button class="btnempresa"><span>Registra una nueva
          empresa</span></button></a>
  </div>
  <div>
    <div class="divempresa">
      <div>
        <img class="imgempresa" src="img/perfil-del-usuario.png" alt="empresa">
        <h1 class="h1empresa">Nombre empresa</h1>
        <a href="registro-empresa.html" class="abtn2"><button class="btnempresa"><span>Ver</span></button></a>
      </div>
      <div>
        <img class="imgempresa" src="img/perfil-del-usuario.png" alt="empresa">
        <h1 class="h1empresa">Nombre empresa</h1>
        <a href="registro-empresa.html" class="abtn2"><button class="btnempresa"><span>Ver</span></button></a>
      </div>
      <div>
        <img class="imgempresa" src="img/perfil-del-usuario.png" alt="empresa">
        <h1 class="h1empresa">Nombre empresa</h1>
        <a href="registro-empresa.html" class="abtn2"><button class="btnempresa"><span>Ver</span></button></a>
      </div>
    </div>
  </div>
  <script src="js/bootstrap.js"></script>
</body>
<footer>
  <div class="footer-links">
    <a href="nosotros.html">Preguntas frecuentes</a>
    <a href="nosotros.html">Acerca de nosotros</a>
  </div>
  <section class="buttons">
    <p>Nuestras Redes Sociales</p>
    <a href="https://www.facebook.com/profile.php?id=100094040837205"><img src="img/icons8-facebook-30azul.png"
        alt="facebook"></a>
    <a href="https://twitter.com/SmartTwittC"><img src="img/icons8-twitter-30azul.png" alt="twitter"></a>
    <a href="#"><img src="img/icons8-youtube-play-30azul.png" alt="youtube"></a>
  </section>
</footer>

</html>
