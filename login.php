<?php 
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Iniciar sessão</title>
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

<div class="banner">
<br>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Entrar</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Registar</button>
</div>


<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>


</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<style>
.banner {
	background: url(assets/images/banner2.jpg);
	max-width: 100% !important;
	background-size: 100%;
	background-position: center center;
	background-repeat: no-repeat;
	height: 51rem;
	position: relative;
}
.tab {
	width: 50rem;
	margin:auto;
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
 width: 24.89rem;
 padding: 1.5rem 0;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  background-color: white;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  width: 50rem;
  margin: auto;
}
	</style>
</body>
</html>