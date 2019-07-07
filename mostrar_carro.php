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

$sql= "SELECT * FROM carro WHERE id_carro = '$id_carro'";
$query = mysqli_query($bd, $sql);
$res = mysqli_fetch_assoc($query);

$id_carro = $res['id_carro'];
$id_marca = $res['id_marca'];
$id_modelo = $res['id_modelo'];
$id_ano = $res['id_ano'];
$id_combustivel = $res['id_combustivel']; 
$id_utilizador = $res['id_utilizador'];
$id_mes = $res['id_mes']; 
$preco = $res['preco']; 
$km = $res['km']; 
$potencia = $res['potencia']; 
$cilindrada = $res['cilindrada'];
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
    <h3 style="text-align: center;"><?php echo utf8_encode($primeiro_nome);?> <?php echo utf8_encode($ultimo_nome);?></h3>
    <h4 style="text-align: center;"><?php echo utf8_encode($distrito);?>, <?php echo utf8_encode($concelho);?>, <?php echo utf8_encode($freguesia);?></h4>
    <br>
    <h4 style="text-align: center;font-weight: bold"><?php echo $email;?></h3>
    <h4 style="text-align: center;font-weight: bold"><?php echo $telemovel;?></h4>
    <h4 style="text-align: center;">Valor <?php echo $valor;?></h4>
    <h4 style="text-align: center;margin-top:2.5rem;">Inserido dia <?php echo date(' d m Y', strtotime($data_inserido));?></h4>
  </div>
</div>
<br>
<div class="mostrarresto">
  <table border="0">
    <tr>
      <th>
        Marca
      </th>
      <th>
        Modelo
      </th>
      <th>
        Ano
      </th>
      <th>
        Mês
      </th>
    </tr>
    <tr>
      <td>
        <?php echo utf8_encode($marca);?>
      </td>
      <td>
        <?php echo utf8_encode($modelo);?>
      </td>
      <td>
        <?php echo $ano;?>
      </td>
      <td>
        <?php echo utf8_encode($mes);?>
      </td>
    </tr>
    <tr style="height: 2rem">
    </tr>
    <tr>
      <th>
        Km
      </th>
      <th>
        Potência
      </th>
      <th>
        Cilindrada
      </th>
      <th>
        Cor
      </th>
    </tr>
    <tr>
      <td>
        <?php echo $km;?> km
      </td>
      <td>
        <?php echo $potencia;?> cv
      </td>
      <td>
        <?php echo $cilindrada;?> cm3
      </td>
      <td>
        <?php echo utf8_encode($cor);?>
      </td>
    </tr>
    <tr style="height: 2rem;">
    </tr>
    <tr>
      <th colspan="4">
        Tipo de caixa
      </th>
    </tr>
    <tr>
      <td colspan="4">
        <?php echo utf8_encode($caixa);?>
      </td>
    </tr>

  </table>

</div>


<style>
  .mostrarresto {
    width:120rem;
    margin:auto;
    max-width: 100%;
  }
  .mostrarresto table {
    width: 100%;
  }
  .mostrarresto th {
    width:25%;
    text-align: center;
    height: 2.5rem;
  }
  .mostrarresto td {
    width:25%;
    text-align: center;
  }
</style>


<div id="modalimg" class="modal">
    <span class="close">&times;</span>
    <div class="div_modal_relative">
      <img id="img1" class="modal-content">
      <button class="buttons" id="next-modal"><i class="fas fa-arrow-right"></i></button>
      <button class="buttons" id="previous-modal"><i class="fas fa-arrow-left"></i></button>
    </div>
</div>

<?php include('includes/footer.php');?>

<script>

  document.getElementById("next-modal").addEventListener("click", nextmodal);
  document.getElementById("previous-modal").addEventListener("click", previousmodal);

  function nextmodal() {
      i = i + 1;
             i = i % images.length; 
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
  width:39rem;
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
      transition: all 0.7s ease;
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

    document.getElementById("next").addEventListener("click", nextItem);

    document.getElementById("previous").addEventListener("click", previous);

    var x = -1;

    function nextItem() {

            i = i + 1;
             i = i % images.length; 
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