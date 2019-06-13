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

			y = y + 1;

			

		</script>
		<?php
	}while($res_imagens = mysqli_fetch_assoc($query_imagens));



?>

<div class="div_mostrar">
	<br>
	<div style="position: relative;width: 80rem;display: inline-block;">
		<img style="width: 80rem" id="teste">
		<button id="next" onclick="next()"><i class="fas fa-arrow-left"></i></button>
		<button id="previous" onclick="previous()"><i class="fas fa-arrow-right"></i></button>
	</div>
	<div class="div_informacoes">
123
	</div>
</div>


<div id="myModal" class="modal">
	<span class="close">&times;</span>
	<div class="modal-relative">
  		<img class="modal-content" id="img01">
  		<button id="previousmodal" onclick="previousmodal()"><i class="fas fa-arrow-right"></i></button>
  		<button id="nextmodal" onclick="nextmodal()"><i class="fas fa-arrow-left"></i></button>
  </div>
</div>


<!--FOOTER-->
<?php include('includes/footer.php');?>
<!--/FOOTER-->


<style>
	.div_informacoes {
		display: inline-block;
	}
	#nextmodal {
		position:absolute;
		top:50%;
		left:3rem;
	}

	#previousmodal {
		position: absolute;
		top:50%;
		right: 3rem;
	}

	.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

.modal-relative {
	position: relative;
	width: 60rem;
	margin: auto;
}
.modal {
  display: none;
  position: fixed; 
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 800px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 90%;
  max-width: 7	00px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 550px;
}
	.div_mostrar {
		width: 120rem;
		margin:auto;
		height: 20rem;
	}

	#next {
		position: absolute;
		top:50%; 
		left:1rem;
		border:none;
		outline: none;
		background: black;
		opacity: 0.5;
		padding: 0.1rem 0.1rem;
		color:white;
		font-size:3.5rem;
	}

	#previous {
		position: absolute;
		top:50%;
		right: 1rem;
		border:none;
		outline: none;
		background: black;
		opacity: 0.5;
		padding: 0.1rem 0.1rem;
		color:white;
		font-size:3.5rem;
	}
	</style><script>	

	var modal = document.getElementById("myModal");

	var img = document.getElementById("teste");
	var modalImg = document.getElementById("img01");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}

var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


	document.getElementById("teste").src = "assets/images/"+images[0];


	function nextmodal() {
		if(y >= images.length - 1) {
			y = 0;
		}else{
			y = y +1;
		}
		modalImg.src = "assets/images/" + images[y];
	}

	function previousmodal() {
		if(y==0) {
			y = images.length;
		}
		y = y - 1;
		modalImg.src = "assets/images/" + images[y]; 
	}


	function next() {
		if(y >= images.length - 1) {
			y = 0;
		} else{
			y = y + 1;
		}
		document.getElementById("teste").src = "assets/images/"+images[y];
	}

	function previous() {

		if(y==0) {
			y = images.length;
		}

		y = y -1;

		document.getElementById("teste").src = "assets/images/"+images[y];
	}
</script>