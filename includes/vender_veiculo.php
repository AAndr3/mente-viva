<?php

include('config.php');
session_start();

$id_marca = $_POST['marca'];

$id_modelo = $_POST['modelo'];

$id_ano = $_POST['ano'];

$preco = $_POST['preco'];

$km = $_POST['km'];

$potencia = $_POST['potencia'];

$cilindrada = $_POST['cilindrada'];

$id_cor = $_POST['cor'];

$id_mes = $_POST['mes'];

$id_combustivel = $_POST['combustivel'];

$id_caixa = $_POST['caixa'];

$primeiro_nome = $_POST['primeiro_nome'];

$ultimo_nome = $_POST['ultimo_nome'];

$telemovel = $_POST['telemovel'];

$email = $_POST['email'];

$distrito = $_POST['distrito'];

$concelho = $_POST['concelho'];

$freguesia = $_POST['freguesia'];

$valor = $_POST['valor'];

$id_utilizador = $_SESSION['id_utilizador'];

date_default_timezone_set('Europe/Lisbon');

$date = date('Y-m-d H:i:s');


$sql_extras = "INSERT INTO extras (primeiro_nome, ultimo_nome, email, distrito, concelho, freguesia, telemovel,data_inserido, valor) VALUES ('$primeiro_nome', '$ultimo_nome', '$email', '$distrito', '$concelho', '$freguesia', '$telemovel', '$date', '$valor')";
$query_extras = mysqli_query($bd, $sql_extras);
$id_extras = mysqli_insert_id($bd);






$sql = "INSERT INTO carro (id_utilizador, id_marca, id_modelo, id_ano, id_mes, preco, km, id_combustivel, potencia, cilindrada, id_cor, id_caixa, id_extras) VALUES 
	('$id_utilizador', '$id_marca', '$id_modelo', '$id_ano', '$id_mes', '$preco', '$km', '$id_combustivel', '$potencia', '$cilindrada', '$id_cor', '$id_caixa', '$id_extras')";

$query = mysqli_query($bd, $sql);

$id_carro = mysqli_insert_id($bd);

$_SESSION['id_carro'] = $id_carro;

