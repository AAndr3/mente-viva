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


	
	<title>Mente Viva </title>

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


<!--BANNER-->
<div class="banner">

	<div class="banner_info">
		<h1 id="banner_h1">Escolhe o carro<br>certo para ti</h1>
		<h3 id="banner_h3">Temos centenas de carros<br>para escolheres</h3>
		<button onclick="window.location = 'pesquisar.php' " class="search_banner">Pesquisar<i class="fas fa-angle-right seta"></i></button>
	</div>

</div>
<!--/BANNER-->

<!--RECENT-CAR-->
<div class="recent_div">
	
	<div class="balao">
		Ultimos anúncios
	</div>


<?php 

$sql = "SELECT * FROM carro  ORDER BY id_carro DESC LIMIT 6";
$query = mysqli_query($bd, $sql);
$res = mysqli_fetch_assoc($query);
$cont = 0;
do {

	$cont = $cont + 1;

	$id_carro = $res['id_carro'];
	$id_marca = $res['id_marca']; 
	$id_modelo = $res['id_modelo'];
	$id_ano = $res['id_ano'];


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


	$sql_imagens_princ = "SELECT * FROM imagens WHERE id_carro = '$id_carro' AND img_principal = '1'";
	$query_imagens_princ = mysqli_query($bd, $sql_imagens_princ);
	$res_imagens_princ = mysqli_fetch_assoc($query_imagens_princ);
	$imagem_principal = $res_imagens_princ['imagens'];

	?>
	<div class="car_div_last" style="cursor: pointer;" onclick="window.location = 'mostrar_carro.php?id_carro=<?php echo $id_carro;?>'">
		<img src="assets/images/<?php echo $imagem_principal;?>">
			<div class="div_line">
				<a class="especificao"><i class="fas fa-car"></i>&ensp;<?php echo $marca;?>&ensp;&ensp;<i class="fas fa-car-side"></i>&ensp;<?php echo $modelo;?>
				&ensp;&ensp;<i class="fas fa-calendar-alt"></i>&ensp;<?php echo $ano;?></a>
			</div>
	</div>
	<?php 



}while($res = mysqli_fetch_assoc($query));

?>

</div>
<!--/RECENT-CAR-->


<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->

<br>
<style>
.recent_div {
	width: 110rem;
	margin: auto;
	max-width: 100%;
	text-align: center;
}	
.recent_div .car_div_last {
	width: 35rem;
	height: 22rem;
	position: relative;
	margin-top: 5rem;
	display: inline-block;
	margin-left:0.5rem;
}
.recent_div .car_div_last img {
	width: 35rem;
	height: 22rem;
}
.recent_div .car_div_last .div_line {
	width: 100%;
	background-color: black;
	position: absolute;
	bottom:0 ;
	height: 4rem;
	width: 35rem;
	opacity: 0.6;
}
.recent_div .car_div_last .div_line .especificao {
	line-height: 4rem;
	font-size:1.6rem;
	color:white;
	text-decoration: none;
}
.balao{
    margin: 0 auto; 
    background: red;
    font-family: 'open sans';
    font-size: 2.5rem;
    line-height: 1em;  
    border-radius: 15px;
    width: 250px;
    height: auto;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    margin-top: 5rem;
}
.balao:after{ 
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-top: 20px solid red;
    bottom: -20px; 
    left: 40%;
}
</style>


<script>
$(window).resize(function() {
  if ($(window).width() <= 788) {
  	document.getElementById("banner_h1").innerHTML = "Escolhe o carro certo para ti";
  	document.getElementById("banner_h3").innerHTML = "Temos centenas de carros para escolheres</h3>";
  } 
});

$(window).on('load', function() {
  	if ($(window).width() <= 788) {
  		document.getElementById("banner_h1").innerHTML = "Escolhe o carro certo para ti";
  		document.getElementById("banner_h3").innerHTML = "Temos centenas de carros para escolheres</h3>";
  	}
});

</script>


</body>
</html>