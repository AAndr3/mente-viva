<?php 

include('config.php');
session_start();

if(isset($_SESSION['id_carro'])) {

	$num = 0;

	$id_carro = $_SESSION['id_carro'];

	unset($_SESSION['id_carro']);

	for($x=0;$x<8;$x++) {
		$num = $num + 1;
		if(isset($_FILES["img".$num]["name"])) {
			$test = explode(".", $_FILES['img'.$num]['name']);
			$extension = end($test);
			$name = rand(10000, 999999999).'.'.$extension;
			$location = '../assets/images/'.$name;
			move_uploaded_file($_FILES['img'.$num]["tmp_name"],$location);
			if($num == 1) {
				$sql_1 = "INSERT INTO imagens(imagens, img_principal, id_carro) VALUES ('$name', '1', '$id_carro')";
				$query_1 = mysqli_query($bd, $sql_1);
			}else{
				$sql = "INSERT INTO imagens(imagens, img_principal, id_carro) VALUES ('$name', '0', '$id_carro')";
				$query = mysqli_query($bd, $sql);
			}
		}
	}

	?><script>window.location = "index.php";</script><?php
}
?>