<?php 
if(isset($_POST["action"])) {
	$connect = mysqli_connect("localhost", "root", "", "bd_carros");
	mysqli_set_charset($connect, 'utf8');
	$output = '';
	if($_POST["action"] == "distrito")
	{
		$query = "SELECT * FROM localizacao WHERE distrito = '".$_POST["query"]."' GROUP BY conselho";
		$result = mysqli_query($connect, $query);
		$output .= '<option value="" selected disabled hidden>Concelho</option>';
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["conselho"].'">'.$row["conselho"].'</option>';
		}

	}else if($_POST["action"] == "concelho")
	{
		$query = "SELECT * FROM localizacao WHERE conselho = '".$_POST["query"]."' GROUP BY freguesia";
		$result = mysqli_query($connect, $query);
		$output .= '<option value="" selected disabled hidden>Freguesia</option>';
		while($row = mysqli_fetch_array($result))
		{
			$output .= '<option value="'.$row["freguesia"].'">'.$row["freguesia"].'</option>';
		}
	}
	echo $output;
}
?>