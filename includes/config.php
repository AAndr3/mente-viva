<?php 

$nomeutilizador = "localhost";
$root = "root";
$password_bd = "";
$nome_bd = "bd_carros";

$bd = mysqli_connect($nomeutilizador, $root, $password_bd, $nome_bd);

mysqli_set_charset($bd, 'utf8');

?>