<?php

include('config.php');


$id_marca = $_POST['marca'];

$id_modelo = $_POST['modelo'];

$id_ano = $_POST['ano'];

$preco = $_POST['preco'];

$km = $_POST['km'];

$potencia = $_POST['potencia'];

$cilindrada = $_POST['potencia'];

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

if(isset($_SESSION['id_utilizador'])) {
	header('location:login.php');
}else{

//PRIMEIRO TENHO DE INSERIR O EMAIL, O TELEMOVEL O CONCELHO E A FREGUESIA
//PEGUAR O ID E METE LO NO ID EXTRAS

$sql_extras = "INSERT INTO extras (email, concelho, freguesia, telemovel) VALUES ('$email', '$concelho', '$freguesia', '$telemovel')";
$query_extras = mysqli_query($bd, $sql_extras);
$id_extras = mysqli_insert_id($bd);




$sql = "INSERT INTO carro (id_marca,id_modelo, id_ano, id_mes, preco, km, id_combustivel, potencia, cilindrada, id_cor, id_caixa, id_extras) VALUES 
	('$id_marca', '$id_modelo', '$id_ano', '$id_mes', '$preco', '$km', '$id_combustivel', '$potencia', '$potencia', '$id_cor', '$id_caixa', '$id_extras')";

$query = mysqli_query($bd, $sql);



}
?>