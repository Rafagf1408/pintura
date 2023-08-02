<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/index.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="shortcut icon" href="img/logo (1).ico" />
  <title>ContaSmart</title>
</head>
<header>
  <div class="container">
    <div class="left">
      <img class="logo" src="img/logo phpa.png" alt="all" href="index.html" />
      <a style="color: white; text-decoration: none" href="index.html">Pintura Automotriz</a>
    </div>
    <div class="right">

    <?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contasmartbd";


$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica si el usuario ha iniciado sesión
/*if (!isset($_SESSION['id_usuario'])) {
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
   $nombre = $usuario['nombre'];
   


    
   // header("Location:usuario.php");

    




    // ...

    // Puedes utilizar los datos del usuario como desees
    // ...
} else {
    // El usuario no existe en la base de datos, realiza alguna acción o muestra un mensaje de error
}
// ...

?>



      <a style="text-decoration: none;"><button class="bttnusuario"><span>
        <?php 
        
      
        echo $nombre;
        echo "<script>var nombre = '{$nombre}';</script>";


        */
        
        ?>
      
      
      </span></button></a>
    </div>
  </div>
</header>

<body>



  <div class="divlema" name="divlema" id="divlema">
    <div>
      <h1><b class="lemaspan">"Simplifica tus impuestos,</b><br>
        potencía tu éxito"</h1>
      <p class="lemap">Toma el control, elige las mejores decisiones y alcanza todas tus metas con <br><b
          class="contasmartspan">ContaSmart</b> hecho para tu empresa.</p>
    </div>
  </div>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/fondo_coche.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>ContaSmart</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>ContaSmart</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>ContaSmart</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div>
    <div class="queesdiv">



    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" style="background-color: #fffffe; color: black; font-weight: bolder;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          ¿POR QUE NOSOTROS?
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body"  style="background-color: #0f0e17; color: white;">
            <strong>Ofrecemos soluciones de alta calidad </strong>Para rejuvenecer y proteger la apariencia de su automóvil, Nuestro equipo cuenta con años de experiencia y una formación continua en las últimas técnicas y productos del mercado, lo que nos permite brindar resultados impecables y duraderos. Además, utilizamos materiales y equipos de primera calidad para garantizar un acabado uniforme y brillante.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" style="background-color: #fffffe; color: black; font-weight: bolder;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            APLICANDO LA EFICIENCIA AL TRABAJO
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body"  style="background-color: #0f0e17; color: white;">
            <strong>Nos enorgullece brindar un servicio excepcional.</strong> Pero en la misma forma personalizado a cada uno de nuestros clientes. Entendemos la importancia de su automóvil y trabajamos con diligencia para asegurarnos de que estén completamente satisfechos con el resultado final en el minimo tiempo posible.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" style="background-color: #fffffe; color: black; font-weight: bolder;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            VALORANDO SU TIEMPO E INVERSION
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body"  style="background-color: #0f0e17; color: white;">
            <strong>Si está buscando una solución profesional.</strong> Así como de calidad para mejorar la apariencia de su automóvil, no dude en visitarnos. Estaremos encantados de brindarle una cotización y asesoramiento personalizado a los mejores precios.
          </div>
        </div>
      </div>
    </div>



      <div class="quesbttndiv"><a href="login.html" style="text-decoration: none;"><button class="bttnusuario"><span>Contactanos</span></button></a></div>
    </div>
  </div>

  <div class="container1">

    <div class="box">

    <div>
    <div class="imagen" style="height: 50%; width: 50%; margin-left: 25%; margin-top: 15%;">
        <button><img src="img/autorojo.png" class="img-thumbnail" alt="..." > </button>
      </div>
      <div class="texto" style="height: 15%; width: 80%; margin-left: 10%; margin-top: 5%;">
        <p> 
         Contamos con una amplia gama de servicios, desde la reparación de arañazos y golpes hasta la transformación completa de su automóvil con un nuevo color o diseño personalizado.
        </p>
   
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 1%; background-color: #e53170;">Ir a Galeria</button>
        
       </div> 
</div>

    </div>


    

  </div>


  <div class="container1">

  <div class="box">

<div>
  
<div class="imagen" style="height: 50%; width: 50%; margin-left: 7%; margin-top: 15%;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1089.3570381823727!2d-98.10706136268185!3d19.041167888083315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfeb1619c0062f%3A0x37e80a5a1d6c7822!2sTaller%20De%20Hojalater%C3%ADa%20Y%20Pintura%20Automotriz!5e0!3m2!1ses!2smx!4v1675320422703!5m2!1ses!2smx" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
 
</div>



</div>

</div>

  <script src="js/bootstrap.js"></script>


  <!-- Modal reparaciones-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Reparacion Toyota Yaris</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       



            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" >
                  <div class="carousel-item active" data-bs-interval="2000">
                    <img src="img/reparacion1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/reparacion2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/reparacion3.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/reparacion4.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 
                </button>
              </div>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

</body>
<footer>
  <div class="footer-links">
    <a href="#">Preguntas frecuentes</a>
    <a href="#">Acerca de nosotros</a>
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