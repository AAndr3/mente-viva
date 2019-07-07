<?php 
session_start();
include('includes/config.php');
include('includes/servidor.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!--STYLE-->
	<link rel="stylesheet" type="text/css" href="assets/css/header.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<!--/STYLE-->


	
	<title>Mente Viva - Perfil</title>

	<!--Bootstrap-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>
<body>

<!--Header-->
<?php include('includes/header.php'); ?>
<!--/Header-->



<?php 


$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id_utilizador = substr($url, strrpos($url, '=') + 1);

$sql = "SELECT * FROM carro WHERE id_utilizador = '$id_utilizador'";
$query = mysqli_query($bd, $sql);
$cont = mysqli_num_rows($query);
$res = mysqli_fetch_assoc($query);




if($cont < 1) {
	echo "<h2 style='text-align:center;color:red'>Ainda não tem anuncios</h2>";
}else {
	echo "<h2 style='text-align:center'>Meus anúncios</h2>";
	do {
	$id_carro = $res['id_carro'];
	$id_marca = $res['id_marca']; 
	$id_modelo = $res['id_modelo']; 
	$id_ano = $res['id_ano']; 
	$id_combustivel = $res['id_combustivel']; 
	$id_utilizador = $res['id_utilizador'];
	$id_mes = $res['id_mes']; 
	$preco = $res['preco']; 
	$km = $res['km'];
	$potencia = $res['potencia'];
	$cilindrada = $res['cilindrada'];
	$id_cor = $res['id_cor'];
	$id_caixa = $res['id_caixa'];
	$id_extras = $res['id_extras'];

	$sql_marca = "SELECT * FROM marca WHERE id_marca = '$id_marca'";
	$query_marca = mysqli_query($bd, $sql_marca);
	$res_marca = mysqli_fetch_assoc($query_marca);
	$marca = $res_marca['marca'];
	
	$sql_modelo = "SELECT * FROM modelo WHERE id_modelo = '$id_modelo'";
	$query_modelo = mysqli_query($bd, $sql_modelo);
	$res_modelo = mysqli_fetch_assoc($query_modelo);
	$modelo = $res_modelo['modelo'];
	
	$sql_ano = "SELECT * FROM ano WHERE id_ano = '$id_ano'";
	$query_ano = mysqli_query($bd, $sql_ano);
	$res_ano = mysqli_fetch_assoc($query_ano);
	$ano = $res_ano['ano'];

	$sql_combustivel = "SELECT * FROM combustivel WHERE id_combustivel = '$id_combustivel'";
	$query_combustivel = mysqli_query($bd, $sql_combustivel);
	$res_combustivel= mysqli_fetch_assoc($query_combustivel);
	$combustivel = $res_combustivel['combustivel'];

	$sql_mes = "SELECT * FROM mes WHERE id_mes = '$id_mes'";
	$query_mes = mysqli_query($bd, $sql_mes);
	$res_mes = mysqli_fetch_assoc($query_mes);
	$mes = $res_mes['mes'];

	$sql_cor = "SELECT * FROM cor WHERE id_cor = '$id_cor'";
	$query_cor = mysqli_query($bd, $sql_cor);
	$res_cor = mysqli_fetch_assoc($query_cor);
	$cor = $res_cor['cor'];

	$sql_caixa = "SELECT * FROM tipo_caixa WHERE id_caixa = '$id_caixa'";
	$query_caixa = mysqli_query($bd, $sql_caixa);
	$res_caixa = mysqli_fetch_assoc($query_caixa);
	$caixa = $res_caixa["caixa"];

	$sql_extras = "SELECT * FROM extras WHERE id_extras = '$id_extras'";
	$query_extras = mysqli_query($bd, $sql_extras);
	$res_extras = mysqli_fetch_assoc($query_extras);
	$primeiro_nome = $res_extras['primeiro_nome'];
	$ultimo_nome = $res_extras['ultimo_nome'];
	$email = $res_extras['email'];
	$distrito = $res_extras['distrito'];
	$concelho = $res_extras['concelho'];
	$freguesia = $res_extras['freguesia'];
	$telemovel = $res_extras['telemovel'];
	$data_inserido = $res_extras['data_inserido'];
	$valor = $res_extras['valor'];

	if($valor == "negociavel") {
		$valor = "Negociável";
	}

	if($valor == "fixo") {
		$valor = "Fixo";
	}


	$sql_imagens = "SELECT * FROM imagens WHERE id_carro = '$id_carro' AND img_principal = '1'";
	$query_imagens = mysqli_query($bd, $sql_imagens);
	$res_imagens = mysqli_fetch_assoc($query_imagens);
	$imagem_principal = $res_imagens['imagens'];

	?>
	<div style="width: 120rem;margin:auto;max-width: 100%;">
	<div class="resultados">
		<div class="resultados_div">
			<img class="main_img" src="assets/images/<?php echo $imagem_principal;?>">
			<div class="resultados_extras">
				<h1><?php echo utf8_encode($marca); ?> <?php echo utf8_encode($modelo);?></h1>
				<h5>-<?php echo utf8_encode($ano);?> &ensp;-<?php echo utf8_encode($mes);?> &ensp;-<?php echo $km;?>km &ensp;<?php echo $potencia;?>cv &ensp;-<?php echo $cilindrada;?>cm3 &ensp;</h5>
			</div>
			<div class="resultados_preco">
				<h1><?php echo $preco;?>€</h1>
				<h4 style="margin-bottom: -0.2rem;">Valor <?php echo $valor;?></h4>
				<i style="margin-right: 0.5rem;" class="fas fa-location-arrow"></i><h4 style="display: inline-block;"><?php echo utf8_encode($distrito);?></h4><br>
				<button class="contact">Contactar</button>
			</div>	
			
		</div>
	</div>
</div><br>
	<?php
	}while($res = mysqli_fetch_assoc($query));
}


?>





<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->


<style>
	.resultados_preco {
		float: right;
		position: absolute;
		top:0;
		right: 1rem;
	}

	.resultados_preco .contact {
		width:10rem;
		color:white;
		background: red;
		outline: none;
		text-align: center;
		border:none;
		padding: .4rem 0rem;
	}

	.resultados_preco h1 {
		font-weight: bold;
		font-size: 3.5rem;
	}


	.resultados {
		position: relative;
		height: 17rem;
		border:2px solid grey;
		text-align: left;
		transition: 0.7s border;
		cursor: pointer;
	}

	.resultados:hover {
		border:2px solid red;
	}
	.resultados_div {
		position: absolute;
		width: 120rem;
		height: 17rem;
		display: inline-block;
	}

	.resultados_div .main_img {
		position: absolute;
		top:0rem;
		width: 25rem;
		height: 16.8rem;
		z-index:-1;
		margin-left:0rem;

	}

	.resultados_extras {
		margin-left:25rem;
		margin-top:-1rem;
		color:black;
	}

	.resultados_extras h1 {
		font-weight: bold;
		font-size: 5rem;
		margin-left: 1rem;
	}

	.resultados_extras h5 {
		margin-left:1rem;
		margin-top:2rem;
	}

</style>