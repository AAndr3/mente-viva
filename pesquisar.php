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

<style>
	.pesquisar_div_width .pesquisar {
		margin-right:5.5rem;
		font-size: 1.7rem;
		padding: 1rem 8.9rem;
		outline: none;
		border: none;
		color:white;
		background: red;
	}

	.pesquisar_div_width .botaoremover {
		border: none;
		background: none;
		color:red;
		position: absolute;
		right:1rem;
		font-size: 2rem;
		bottom: 0.5rem;
		outline: none;
		display: none;
	}
	.div_pesquisar {
		width: 120rem;
		margin:auto;
		position: relative;
		margin-top: 2rem;
		text-align: center;
	}
	.pesquisar_div_width {
		text-align: center;
		display: inline-block;
		margin-right: 2.2rem;
		position: relative;
	}
	.pesquisar_div_width .select  {
		width: 25rem;
		outline: none;
		height: 3.5rem;
		border: 1px solid #c0c0c0;
		-webkit-appearance: none;
      	-moz-appearance: none;
      	padding-left: 3px;
      	background: url(assets/images/seta.png) no-repeat;
      	background-size: 7%;
      	background-position:97% 50%;

	}
	.pesquisar_div_width .selectpequeno {
		width: 12.3rem !important;
      	background-size: 14.5%;
      	background-position:96% 50%;
	}

	.small {
		margin-right: 0rem;
		font-size:1.4rem;
	}
</style>




<!--FOOTER-->
<?php include('includes/footer.php');?>
<!--/FOOTER-->