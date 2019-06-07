<?php

include('config.php');

session_start();

$id_marca = $_POST["marca"];


$id_anode = $_POST["anode"];

$id_anoate = $_POST["anoate"];

$id_combustivel = $_POST["combustivel"];

$precode = $_POST["precode"];

$precoate = $_POST["precoate"];

$kmde = $_POST["kmde"];

$kmate = $_POST["kmate"];

$potenciade = $_POST["potenciade"];

$potenciaate = $_POST["potenciaate"];

$id_tipocaixa = $_POST["tipocaixa"];

$sql = "SELECT * FROM carro WHERE ";

if($id_marca != "0") {
	$sql .= "id_marca = ".$id_marca." AND ";
	$id_modelo = $_POST["modelo"];
	if($id_modelo != "0") {
		$sql .= "id_modelo = ".$id_modelo. " AND ";
	}
}


if($id_anode != "0" AND $id_anoate != "0") {
	$sql .= "id_ano BETWEEN ".$id_anode." AND ".$id_anoate. " AND ";
}

if($id_anode != "0" AND $id_anoate == "0") {
	$sql .= "id_ano BETWEEN ".$id_anode. " AND 70 AND ";
}

if($id_anode == "0" AND $id_anoate != "0") {
	$sql .= "id_ano BETWEEN 1 AND ".$id_anoate. " AND ";
}


if($id_combustivel != "0") {
	$sql .= "id_combustivel = ".$id_combustivel." AND ";
}


if($precode != "0" AND $precoate != "0") {
	$sql .=  "preco BETWEEN	".$precode." AND ".$precoate. " AND ";
}

if($precode != "0" AND $precoate == "0") {
	$sql .=  "preco BETWEEN	".$precode." AND 1000000 AND ";
}

if($precode == "0" AND $precoate != "0") {
	$sql .=  "preco BETWEEN	1 AND ".$precoate." AND ";
}


if($kmde != "0" AND $kmate != "0") {
	$sql .= "km BETWEEN ".$kmde." AND ".$kmate. " AND ";
}

if($kmde != "0" AND $kmate == "0") {
	$sql .= "km BETWEEN ".$kmde." AND 2000000 AND ";
}

if($kmde == "0" AND $kmate != "0") {
	$sql .= "km BETWEEN 0 AND ".$kmate." AND ";
}


if($potenciade != "0" AND $potenciaate != "0") {
	$sql .= "potencia BETWEEN ".$potenciade." AND ".$potenciaate." AND ";
}
if($potenciade != "0" AND $potenciaate == "0") {
	$sql .= "potencia BETWEEN ".$potenciade. " AND  500 AND ";
}
if($potenciade == "0" AND $potenciaate != "0") {
	$sql .= "potencia BETWEEN 0 AND ".$potenciaate. " AND ";
}


if($id_tipocaixa != "0") {
	$sql .= "id_caixa = ".$id_tipocaixa." AND ";
}

$sql = substr($sql, 0, strlen($sql) - 5);
$query = mysqli_query($bd, $sql);
$cont = mysqli_num_rows($query);
$res = mysqli_fetch_assoc($query);

if($cont != 0) {
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
				<h5>-<?php echo $ano;?> &ensp;-<?php echo $mes;?> &ensp;-<?php echo $km;?>km &ensp;<?php echo $potencia;?>cv &ensp;-<?php echo $cilindrada;?>cm3 &ensp;</h5>
			</div>
			<div class="resultados_preco">
				<h1><?php echo $preco;?>€</h1>
				<h4 style="margin-bottom: -0.2rem;">Valor <?php echo $valor;?></h4>
				<i style="margin-right: 0.5rem;" class="fas fa-location-arrow"></i><h4 style="display: inline-block;"><?php echo $distrito;?></h4><br>
				<button class="contact">Contactar</button>
			</div>	
			
		</div>
	</div><br><br>

	<?php

}while($res = mysqli_fetch_assoc($query));

}else {
	?><p>Sem resultados</p><?php
}

?>
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
