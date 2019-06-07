<?php 
session_start();
include('includes/config.php');
include('includes/servidor.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Pesquisar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <!--Bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

<!--HEADER-->
<?php include('includes/header.php');?>
<!--/HEADER-->
<script>
	var y = 0;
	var images = [];
</script>
<?php 

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id_carro = substr($url, strrpos($url, '=') + 1);

$sql = "SELECT * FROM carro WHERE id_carro = '$id_carro'";
$query = mysqli_query($bd, $sql);
$res = mysqli_fetch_assoc($query);

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


	$sql_imagens_princ = "SELECT * FROM imagens WHERE id_carro = '$id_carro' AND img_principal = '1'";
	$query_imagens_princ = mysqli_query($bd, $sql_imagens_princ);
	$res_imagens_princ = mysqli_fetch_assoc($query_imagens_princ);
	$imagem_principal = $res_imagens_princ['imagens'];

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


	$sql_imagens = "SELECT * FROM imagens WHERE id_carro ='$id_carro'";
	$query_imagens = mysqli_query($bd, $sql_imagens);
	$res_imagens = mysqli_fetch_assoc($query_imagens);
	$cont = mysqli_num_rows($query_imagens);
	do {
		?><script>

			var cont = 0;
			var length = "<?php echo $cont;?>"
			
			
			images[y] = "<?php echo $res_imagens['imagens'];?>";

			y = y +1;

			

		</script>
		<?php
	}while($res_imagens = mysqli_fetch_assoc($query_imagens));



?>



<img style="width: 20rem" id="teste">


<script>	

	document.getElementById("teste").src = "assets/images/"+images[0];

</script>

<!--FOOTER-->
<?php include('includes/footer.php');?>
<!--/FOOTER-->