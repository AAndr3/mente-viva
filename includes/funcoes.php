<?php

$GLOBALS['bd'] =  mysqli_connect('localhost','root', '', 'bd_carros');


function get_marca() {
	$sql = "SELECT * FROM marca order by marca";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row["id_marca"].'">'.$row["marca"].'</option>';
	}
	echo $output;
}

function get_ano() {
	$sql = "SELECT * FROM ano order by ano DESC";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row['id_ano'].'">'.$row["ano"].'</option>';
	}
	echo $output;
}

function get_cor() {
	$sql = "SELECT * FROM cor order by cor ASC";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
		$output .= '<option value="'.$row['id_cor'].'">'.$row["cor"].'</option>';
	}
	echo $output;
}

function get_distrito() {
	$sql = "SELECT * FROM distrito";
	$query = mysqli_query($GLOBALS['bd'], $sql);
	while($row = mysqli_fetch_array($query)) {
			$output .= '<option value="'.utf8_encode($row["distrito"]).'">'.utf8_encode($row["distrito"]).'</option>';
		}
		echo $output;
	}
?>
