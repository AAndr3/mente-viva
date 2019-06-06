<?php 
if(isset($_POST["action"])) {
	$connect = mysqli_connect("localhost", "root", "", "bd_carros");
	$output = '';
	if($_POST["action"] == "marca")
	{
		$query = "SELECT * FROM modelo WHERE id_marca = '".$_POST["query"]."' GROUP BY modelo";
		$result = mysqli_query($connect, $query);
		$output .= '<option value="0" selected disabled hidden>Modelo</option>';
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["id_modelo"].'">'.$row["modelo"].'</option>';
		}
	}
	echo $output;
}