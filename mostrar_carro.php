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

<script>
	var images = [];
	i = 0;
</script>
<?php 

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$id_carro = substr($url, strrpos($url, '=') + 1);

$sql_imagens = "SELECT * FROM imagens WHERE id_carro = '$id_carro'";
$query_imagens = mysqli_query($bd, $sql_imagens);
$res_imagens = mysqli_fetch_assoc($query_imagens);

do { ?>
  <script>

	  images[i] = "<?php echo $res_imagens['imagens'];?>";
    i = i + 1;
  </script>
	<?php
}while($res_imagens = mysqli_fetch_assoc($query_imagens));

?>
<br>
<div class="imagens_div">
  <div class="imagens_relative">
    <img class="imgs" id="img">
    <button class="buttons" id="next"><i class="fas fa-arrow-right"></i></button>
    <button class="buttons" id="previous"><i class="fas fa-arrow-left"></i></button>
  </div>
  <div class="informacoes">
    <div class="preco_back">
      10000€
    </div>
    <h3 style="text-align: center;">André Antunes</h3>
    <h4 style="text-align: center;">Coimbra, Figueira da Foz, Lavos</h4>
    <br>
    <button class="button">Ver email</button>
    <br><br><br>
    <button class="button">Ver nº telemóvel</button>
    <br><br>
    <h4 style="text-align: center;">Valor negociável</h4>
    <h4 style="text-align: center;margin-top:2.5rem;">Inserido dia 12/06/2019</h4>
  </div>
</div>




<div id="modalimg" class="modal">
    <span class="close">&times;</span>
    <div class="div_modal_relative">
      <img id="img1" class="modal-content">
      <button class="buttons" id="next-modal"><i class="fas fa-arrow-right"></i></button>
      <button class="buttons" id="previous-modal"><i class="fas fa-arrow-left"></i></button>
    </div>
</div>



<script>

  document.getElementById("next-modal").addEventListener("click", nextmodal);
  document.getElementById("previous-modal").addEventListener("click", previousmodal);

  function nextmodal() {
     if(i >= images.length - 1) {
          i = 0;
      } else{
          i = i + 1;
      }
    document.getElementById("img1").src = "assets/images/"+images[i];
  }


function previousmodal() {
   if(i==0) {
        i = images.length;
      }
      i = i -1; 
      document.getElementById("img1").src = "assets/images/"+images[i];
}







  var img = document.getElementById("img");
  var modal = document.getElementById("modalimg");
  var imgmodal = document.getElementById("img1");


  img.onclick = function() {
    modal.style.display = "block";
    imgmodal.src = this.src;
  }

  window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  <style>

.informacoes {
  vertical-align: text-bottom;
  width:30rem;
  margin: auto;
  display: inline-block;
  height: 45.3rem;
    }


    .informacoes .button {
       width: 30rem;
      color:white;
      padding:1rem;
      background: red;
     border:1px solid black;
      font-size: 2rem;
      outline: none;
      text-align: center;
    }

    .informacoes .button:hover {
      -webkit-box-shadow: inset -7px 13px 64px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: inset -7px 13px 64px 0px rgba(0,0,0,0.75);
    box-shadow: inset -7px 13px 64px 0px rgba(0,0,0,0.75);
    }
  .informacoes .preco_back {
    background: red;
    color:white;
    font-size: 3rem;
    padding: 1rem 1.5rem;
    text-align: center;
    border-radius: 10px;
  }
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.9); 
}

.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-height: 80rem;
}


.div_modal_relative {
  position: relative;
  width: 80%;
  max-height: 70%;
  margin:auto;

}

.div_modal_relative .buttons {
  font-size: 5rem;
  background: none;
  border:none;
  position: absolute;
  outline: none;
  font-weight: bold;
  color:white;
}

.div_modal_relative #next-modal {
  top:50%;
  right: 3rem;
}

.div_modal_relative #previous-modal {
  top:50%;
  left: 3rem;
}

  .imagens_div {
      max-width: 100%;
      width: 120rem;
      margin:auto;

    }
    .imagens_relative .imgs {
      position: absolute;
      top:0;
      left:0;
      width: 80rem;
      height: 45rem;
    }

    .imagens_relative {
      height: 45rem;
      width: 80rem;
      display: inline-block;
      position: relative;
    }

    .imagens_relative .buttons {
      position: absolute;
      font-size:4rem;
      padding: 0.5rem 1rem;
      outline: none;
      border:none;
      background: none;
      color:white;
      font-weight: bold;
    }

    .imagens_relative #next {
      right:1rem;
      top:50%;
    }
    .imagens_relative #previous {
      left:1rem;
      top:50%;
    }
  </style>




  <script>
    document.getElementById("img").src = "assets/images/" + images[0]; 
    document.getElementById("next").addEventListener("click", next);
    document.getElementById("previous").addEventListener("click", previous);

    function next() {
      if(i >= images.length - 1) {
          i = 0;
      } else{
          i = i + 1;
      }
    document.getElementById("img").src = "assets/images/"+images[i];
    }

    function previous() {
      if(i==0) {
        i = images.length;
      }
      i = i -1; 
      document.getElementById("img").src = "assets/images/"+images[i];
    }
</script>