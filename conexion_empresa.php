<?php


$nombre = $_POST["nombre"];

$rfc_emp = $_POST["rfc"];

$direc_emp = $_POST["direccion"];

$telef = $_POST["telefono"];

$correo_emp = $_POST["correo"];

$acti_emp = $_POST["actividad"];

$regi_emp = $_POST["regimen"];

$banc_emp = $_POST["banco"];

$cuenta_emp = $_POST["cuenta"];

$nombne_rep = $_POST["nombre_rep"];

$rfc_rep = $_POST["rfc_rep"];

$curp_rep = $_POST["curp_rep"];

echo $nombre."<br>";
echo $rfc_emp."<br>";
echo $direc_emp."<br>";
echo $telef."<br>";
echo $correo_emp."<br>";
echo $acti_emp."<br>";
echo $regi_emp."<br>";
echo $banc_emp."<br>";
echo $cuenta_emp."<br>";
echo $nombne_rep."<br>";
echo $rfc_rep."<br>";
echo $curp_rep."<br>";



$mbd = new PDO('mysql:host=localhost;dbname=contasmartbd', 'root', '');



    try {   
        $mbd->query("INSERT INTO empresa(id_empresa, nombre_empresa, rfc, direccion_emp, telefono_emp, correo_emp, acti_emp, regimen_emp, banco_emp, cuenta_emp,nombre_rep, rfc_rep,curp_rep) VALUES ('', '".$nombre."', '".$rfc_emp."', '".$direc_emp."', '".$telef."' ,'".$correo_emp."' ,'".$acti_emp."' ,'".$regi_emp."' ,'".$banc_emp."' ,'".$cuenta_emp."','".$nombne_rep."','".$rfc_rep."','".$curp_rep."');");
        

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