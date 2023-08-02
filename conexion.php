<?php


$nombre = $_POST["txt_nombre"];

$apellidop = $_POST["txt_apellido_paterno"];

$apellidom = $_POST["txt_apellido_materno"];

$correo_usu = $_POST["inputEmail4"];

$contra_usu = $_POST["inputPassword4"];

$dia_usu = $_POST["dia"];

$mes_usu = $_POST["mes"];

$anho_usu = $_POST["anho"];

echo $nombre."<br>";
echo $apellidop."<br>";
echo $apellidom."<br>";
echo $correo_usu."<br>";
echo $contra_usu."<br>";
echo $dia_usu."<br>";
echo $mes_usu."<br>";
echo $anho_usu."<br>";



$mbd = new PDO('mysql:host=localhost;dbname=contasmartbd', 'root', '');



    try {   
        $mbd->query("INSERT INTO usuarios(id_usuario, nombre, apellido_p, apellido_m,
        correo_electronico, contrasena, dia_nacimiento, mes_nacimiento, anho_nacimiento) VALUES ('', '".$nombre."', '".$apellidop."', '".$apellidom."', '".$correo_usu."' ,'".$contra_usu."' ,'".$dia_usu."' ,'".$mes_usu."' ,'".$anho_usu."');");
        

    $mbd = null;

    echo "<meta http-equiv='refresh' content='3; url=http://localhost/ContaSmart/login.html'>";

}

catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    echo "error de ingreso";

    die();
}


/*$sql = "INSERT INTO usuario(id_usuario, nombre, apellido_p, apellido_m,
correo_electronico, contraseña, dia_nacimiento, mes_nacimiento, anho_nacimiento) VALUES ('', '".$nombre."', '".$apellidop."', '".$apellidom."', '".$correo_usu."' ,'".$contra_usu."' ,'".$dia_usu."' ,'".$mes_usu."' ,'".$anho_usu."')";*/





?>