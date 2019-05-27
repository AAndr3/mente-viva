<?php 
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Vender</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login_registar.css">
  <script src="assets/js/vender.js"></script>
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


<!--VENDER-->

<br><br>
<div class="vender_div">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Carro')" id="defaultOpen"><i class="fas fa-car"></i></button>
  <button class="tablinks" onclick="openCity(event, 'Imagens')"><i class="far fa-images"></i></button>
  <button class="tablinks" onclick="openCity(event, 'Pessoal')"><i class="fas fa-id-badge"></i></button>
</div>




<div id="Carro" class="tabcontent">
  <h1 style="text-align: center;font-size: 2.5rem">Dados da viatura</h1>
  <br>
	 <div class="tab_content_select">
	  <label>Marca*</label><br>
	  <select class="selectvender"></select>
	</div>
	 <div class="tab_content_select">
	  <label>Modelo*</label><br>
	  <select class="selectvender"></select>
	</div>
	<div class="tab_content_select">
	  <label>Ano*</label><br>
	  <select class="selectvender"></select>
	</div>
	<div class="tab_content_select">
	  <label>Preço*</label><br>
	  <select class="selectvender"></select>
	</div>
	
	<br><br><br>

	<div class="tab_content_select">
	  <label>Km*</label><br>
	  <select class="selectvender"></select>
	</div>
	<div class="tab_content_select">
	  <label>Potência*</label><br>
	  <select class="selectvender"></select>
	</div>
	<div class="tab_content_select">
	  <label>Cilindrada*</label><br>
	  <select class="selectvender"></select>
	</div>
	<div class="tab_content_select">
	  <label>Cor*</label><br>
	  <select class="selectvender"></select>
	</div>
	<br><br>
</div>

<div id="Imagens" class="tabcontent">
   <h1 style="text-align: center;font-size: 2.5rem">Imagens da viatura</h1>
   <br>
   	<div class="tab_content_img">
   		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>

	<br><br><br><br>

	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>
	<div class="tab_content_img">
		<label style="cursor: pointer;">
   			<img class="img" src="assets/images/add_image.png">	
   			<input type="file" style="display: none;">
   		</label>
	</div>

  <br><br>
</div>

<div id="Pessoal" class="tabcontent">
  <h1 style="text-align: center;font-size: 2.5rem">Dados do vendedor</h1>
 	<div class="tab_content_person">
 		
 	</div>
  <br><br>
</div>

</div>

<!--/vender-->


<script>
	document.getElementById("defaultOpen").click();
</script>

<style>

	.tab_content_person {
		display: inline-block;
		margin-right: 5rem;
	}

	.tab_content_img {
		display: inline-block;
		margin-right: 5rem;
	}

	.tab_content_img .img {
		width: 16rem;
	}

	.tab_content_select .selectvender {
		width:18rem;
		outline: none;
		height: 2.7rem;
	}
	.tab_content_select label {
		font-size:1.5rem;
	}
	.tab_content_select {
		display: inline-block;
		text-align: center;
		margin-right: 5rem;
	}
	.vender_div {
		max-width: 100%;
		width:120rem;
		margin:auto;
	}

	.tab {
	  overflow: hidden;
	  border: 1px solid #ccc;
	  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 1.5rem 0;
  transition: 0.3s;
  font-size:4rem;
  width:42rem;
  max-width: 33.333%;
  color:white;
}

.tab button.active {
  background-color: red;
  color:white;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  text-align: center;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}
</style>

<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->


