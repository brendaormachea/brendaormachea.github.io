<?php
$servidor = "localhost";
$usuario ="root";
$password = "";
$bd = "formulario";

$conecta = mysqli_connect($servidor, $usuario, $password, $bd);

if($conecta->connect_error){
    die("error al conectar".$conecta->connect_error);
}

?>