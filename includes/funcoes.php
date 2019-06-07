<?php

$GLOBALS['bd'] =  mysqli_connect('localhost','root', '', 'bd_carros');


function get_marca() {
	$output = "";
	$sql = "SELECT * FROM marca order by marca";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row["id_marca"].'">'.$row["marca"].'</option>';
	}
	echo $output;
}

function get_ano() {
	$output = "";
	$sql = "SELECT * FROM ano order by ano DESC";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row['id_ano'].'">'.$row["ano"].'</option>';
	}
	echo $output;
}

function get_cor() {
	$output = "";
	$sql = "SELECT * FROM cor order by cor ASC";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row['id_cor'].'">'.$row["cor"].'</option>';
	}
	echo $output;
}

function get_distrito() {
	$output = "";
	$sql = "SELECT * FROM distrito";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
			$output .= '<option value="'.utf8_encode($row["distrito"]).'">'.utf8_encode($row["distrito"]).'</option>';
	}
	echo $output;
}


function get_mes() {
	$output = "";
	$sql = "SELECT * FROM mes";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)){
		$output .= '<option value="'.utf8_encode($row["id_mes"]).'">'.utf8_encode($row["mes"]).'</option>';
	}
	echo $output;
}


function get_combustivel() {
	$output = "";
	$sql = "SELECT * FROM combustivel";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.utf8_encode($row["id_combustivel"]).'">'.utf8_encode($row["combustivel"]).'</option>';
	}
	echo $output;
}


function get_caixa() {
	$output = "";
	$sql = "SELECT * FROM tipo_caixa";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)){
		$output.= '<option value="'.utf8_encode($row["id_caixa"]).'">'.utf8_encode($row["caixa"]).'</option>';
	}
	echo $output;
}

function get_preco() {
	$output = "";
	$sql = "SELECT  * FROM preco_pesquisar";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output.= '<option value="'.utf8_encode($row["preco"]).'">'.utf8_encode($row["preco"]).'€</option>';
	}
	echo $output;
}

function get_km() {
	$output = "";
	$sql = "SELECT * FROM km_pesquisar";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output.= '<option value="'.$row["km"].'">'.$row["km"].' km</option>';
	}
	echo $output;
}

function get_potencia() {
	$output = "";
	$sql = "SELECT * FROM  potencia_pesquisar";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output.= '<option value="'.$row["potencia"].'">'.$row["potencia"].' cv</option>';
	}
	echo $output;
}


?>
