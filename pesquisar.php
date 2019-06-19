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
  <link rel="stylesheet" type="text/css" href="assets/css/pesquisar.css">
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




<div class="div_pesquisar">
	<center><h2>Pesquisar carro</center>
		<br>

	<div class="pesquisar_div_width">
		<select id="marca" class="select actionmarca">
			<option value="0" selected disabled hidden>Marca</option>
			<?php echo get_marca(); ?>
		</select>
		<button type="button" id="botao_marca" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="modelo" class="select">
			<option value="0" selected disabled hidden>Modelo</option>
		</select>
		<button type="button" id="botao_modelo" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>		
	<div class="pesquisar_div_width small">
		<select id="anode" class="select selectpequeno ">
			<option value="0" selected disabled hidden>Ano de</option>
			<?php echo get_ano(); ?>
		</select>
		<button type="button" id="botao_anode" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="anoate" class="select selectpequeno">
			<option value="0" selected disabled hidden>Ano até</option>
			<?php echo get_ano(); ?>
		</select>
		<button type="button" id="botao_anoate" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="combustivel" class="select">
			<option value="0" selected disabled hidden>Combustível</option>
			<?php echo get_combustivel(); ?>
		</select>
		<button type="button" id="botao_combustivel" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>	

	<br><br><br>

	<div class="pesquisar_div_width small">
		<select id="precode" class="select selectpequeno">
			<option value="0" selected disabled hidden>Preço de</option>
			<?php echo get_preco(); ?>
		</select>
		<button type="button" id="botao_precode" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="precoate" class="select selectpequeno">
			<option value="0" selected disabled hidden>Preço até</option>
			<?php echo get_preco(); ?>
		</select>
		<button type="button" id="botao_precoate" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width small">
		<select id="kmde" class="select selectpequeno">
			<option value="0" selected disabled hidden>Km de</option>
			<?php echo get_km(); ?>
		</select>
		<button type="button" id="botao_kmde" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="kmate" class="select selectpequeno">
			<option value="0" selected disabled hidden>Km até</option>
			<?php echo get_km(); ?>
		</select>
		<button type="button" id="botao_kmate" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width small">
		<select id="potenciade" class="select selectpequeno">
			<option value="0" selected disabled hidden>Potência de</option>
			<?php echo get_potencia(); ?>
		</select>
		<button type="button" id="botao_potenciade" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">	
		<select id="potenciaate" class="select selectpequeno">
			<option value="0" selected disabled hidden>Potência até</option>
			<?php echo get_potencia(); ?>
		</select>
		<button type="button" id="botao_potenciaate" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<div class="pesquisar_div_width">
		<select id="caixa" class="select">
			<option value="0" selected disabled hidden>Tipo de caixa</option>
			<?php echo get_caixa(); ?>
		</select>
		<button type="button" id="botao_caixa" class="botaoremover"><i class="fas fa-times"></i></button>
	</div>
	<br><br>
	<div  style="float: right;" class="pesquisar_div_width">
		<button class="pesquisar" type="button" id="pesquisar_carros">Pesquisar</button>
	</div>
	<br><br><br>
	<div id="pesquisarfirst">
	<?php 

	$sql = "SELECT * FROM carro LIMIT 10";
	$query = mysqli_query($bd, $sql);
	$res = mysqli_fetch_assoc($query);

	do {
	$id_carro = $res['id_carro'];
	$id_marca = $res['id_marca']; //FEITO
	$id_modelo = $res['id_modelo']; //FEITO
	$id_ano = $res['id_ano']; //FEITO
	$id_combustivel = $res['id_combustivel']; //FEITO
	$id_utilizador = $res['id_utilizador']; //FEITO
	$id_mes = $res['id_mes']; //FEITO
	$preco = $res['preco']; //FEITO
	$km = $res['km']; //FEITO
	$potencia = $res['potencia']; //FEITO
	$cilindrada = $res['cilindrada']; //FEITO
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

	if($valor == "negociavel") {
		$valor = "Negociável";
	}

	if($valor == "fixo") {
		$valor = "Fixo";
	}

	$km_value = strlen($km);

	$potencia_value = strlen($potencia);

	if($km_value == "6") {
		$km = substr_replace($km," ", 3, -strlen($km));
	}

	if($km_value == "5") {
		$km = substr_replace($km," ", 2, -strlen($km));
	}

	if($km_value == "4") {
		$km = substr_replace($km," ", 1, -strlen($km));
	}


	if($potencia_value == "6") {
		$potencia = substr_replace($potencia," ", 3, -strlen($potencia));
	}
	if($potencia_value == "5") {
		$potencia = substr_replace($potencia," ", 2, -strlen($potencia));
	}

	if($potencia_value == "4") {
		$potencia = substr_replace($potencia," ", 1, -strlen($potencia));
	}


	
	?>
	<div class="resultados" onclick="window.location = 'mostrar_carro.php?id_carro=<?php echo $id_carro;?>'">
		<div class="resultados_div">
			<img class="main_img" src="assets/images/<?php echo $imagem_principal;?>">
			<div class="resultados_extras">
				<h1><?php echo $marca; ?> <?php echo $modelo;?></h1>
				<h5>-<?php echo $ano;?> &ensp;-<?php echo utf8_encode($mes);?> &ensp;-<?php echo $km;?>km &ensp;<?php echo $potencia;?>cv &ensp;-<?php echo $cilindrada;?>cm3 &ensp;</h5>
			</div>
			<div class="resultados_preco">
				<h1><?php echo $preco;?>€</h1>
				<h4 style="margin-bottom: -0.2rem;">Valor <?php echo $valor;?></h4>
				<i style="margin-right: 0.5rem;" class="fas fa-location-arrow"></i><h4 style="display: inline-block;"><?php echo utf8_encode($distrito);?></h4><br>
				<button class="contact">Contactar</button>
			</div>	
		</div>
	</div><br><br>

	<?php

}while($res = mysqli_fetch_assoc($query)); ?>
</div>
	<p id="resultados"></p>

</div>


<script>
	document.getElementById("marca").addEventListener("change", function() { mudar(this.id, "botao_marca") } );
	document.getElementById("modelo").addEventListener("change", function() { mudar(this.id, "botao_modelo") } );
	document.getElementById("anode").addEventListener("change", function() { mudar(this.id, "botao_anode") } );
	document.getElementById("anoate").addEventListener("change", function() { mudar(this.id, "botao_anoate") } );
	document.getElementById("combustivel").addEventListener("change", function() { mudar(this.id, "botao_combustivel") } );
	document.getElementById("precode").addEventListener("change", function() { mudar(this.id, "botao_precode") } );
	document.getElementById("precoate").addEventListener("change", function() { mudar(this.id, "botao_precoate") } );
	document.getElementById("kmde").addEventListener("change", function() { mudar(this.id, "botao_kmde") } );
	document.getElementById("kmate").addEventListener("change", function() { mudar(this.id, "botao_kmate") } );
	document.getElementById("potenciade").addEventListener("change", function() { mudar(this.id, "botao_potenciade") } );
	document.getElementById("potenciaate").addEventListener("change", function() { mudar(this.id, "botao_potenciaate") } );
	document.getElementById("caixa").addEventListener("change", function() { mudar(this.id, "botao_caixa") } );



	document.getElementById("botao_marca").addEventListener("click", function() {botaoremover("marca", this.id) } );
	document.getElementById("botao_modelo").addEventListener("click", function() {botaoremover("modelo", this.id) } );
	document.getElementById("botao_anode").addEventListener("click", function() {botaoremover("anode", this.id) } );
	document.getElementById("botao_anoate").addEventListener("click", function() {botaoremover("anoate", this.id) } );
	document.getElementById("botao_combustivel").addEventListener("click", function() {botaoremover("combustivel", this.id) } );
	document.getElementById("botao_precode").addEventListener("click", function() {botaoremover("precode", this.id) } );
	document.getElementById("botao_precoate").addEventListener("click", function() {botaoremover("precoate", this.id) } );
	document.getElementById("botao_kmde").addEventListener("click", function() {botaoremover("kmde", this.id) } );
	document.getElementById("botao_kmate").addEventListener("click", function() {botaoremover("kmate", this.id) } );
	document.getElementById("botao_potenciade").addEventListener("click", function() {botaoremover("potenciade", this.id) } );
	document.getElementById("botao_potenciaate").addEventListener("click", function() {botaoremover("potenciaate", this.id) } );
	document.getElementById("botao_caixa").addEventListener("click", function() {botaoremover("caixa", this.id) } );


	document.getElementById("pesquisar_carros").addEventListener("click", pesquisar);


	function pesquisar() {
		var marca = document.getElementById("marca").value;
		var modelo = document.getElementById("modelo").value;
		var anode = document.getElementById("anode").value;
		var anoate = document.getElementById("anoate").value;
		var combustivel = document.getElementById("combustivel").value;
		var precode = document.getElementById("precode").value;
		var precoate = document.getElementById("precoate").value;
		var kmde = document.getElementById("kmde").value;
		var kmate = document.getElementById("kmate").value;
		var potenciade = document.getElementById("potenciade").value;
		var potenciaate = document.getElementById("potenciaate").value;
		var tipocaixa = document.getElementById("caixa").value;
		$.ajax({
			type:"post",
			url:"includes/pesquisar_carro.php",
			data:{marca, modelo, anode,anoate,combustivel,precode,precoate,kmde,kmate,potenciade,potenciaate,tipocaixa},
			success:function(data) {
				document.getElementById("pesquisarfirst").innerHTML = "";
				$('#resultados').html(data);
			}

		})
	}


	function botaoremover(select_id, botao_id) {
		var select = document.getElementById(select_id);
		var botao = document.getElementById(botao_id);
		select.selectedIndex = "0";
		botao.style.display = "none";
		select.style.background = "url('assets/images/seta.png')";
		select.style.backgroundRepeat = "no-repeat";
		select.style.backgroundSize = "2rem";
		select.style.backgroundPosition = "97% 50%";

		if(select_id == "marca") {
		document.getElementById("modelo").selectedIndex = "0";
		document.getElementById("botao_modelo").style.display = "none";
		document.getElementById("modelo").style.background = "url('assets/images/seta.png')";
		document.getElementById("modelo").style.backgroundRepeat = "no-repeat";
		document.getElementById("modelo").style.backgroundSize = "2rem";
		document.getElementById("modelo").style.backgroundPosition = "97% 50%";
		}
	}

	function mudar(select_id, botao_id) {
		var select = document.getElementById(select_id);
		var botao = document.getElementById(botao_id);
		if(select.selectedIndex != 0) {
			select.style.background = 'none';
			botao.style.display = "inline-block";
		}else {
			select.style.background = 'url(assets/images/seta.png) no-repeat;';
		}
	}




$(document).ready(function(){
  $('.actionmarca').change(function(){
    if($(this).val() != '')
    {
      var action = $(this).attr("id");
      var query = $(this).val();  
      var result = '';
      if(action == "marca")
      {
        result = 'modelo';
      }
      $.ajax({
        url:"includes/show_modelo.php",
        method:"POST",
        data:{action:action, query:query},
        success:function(data){
          $("#"+result).html(data);
        }
      })
    }
  });
});

</script>





<!--FOOTER-->
<?php include('includes/footer.php');?>
<!--/FOOTER-->