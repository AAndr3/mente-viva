<?php 
session_start();
include('includes/config.php');
include('includes/servidor.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Registar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/login_registar.css">
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



<!--REGISTAR-->
<div class="div_back">
  <div class="div_master">
    <br><br>
    <div class="form_div_registar">
      <div class="form_title">
        <h1>Registar</h1>
      </div>
      <br>
      <form method="post">
      	<?php
      	if(isset($_SESSION['erros'])) { ?>
      		<p style="color:red"><?php echo $_SESSION['erros'];?></p> <?php 
      	}
      	?>

      	<?php
      	 if(isset($_SESSION['erros']) and isset($_SESSION['primeiro_nomeerro'])) { ?>
		   <input type="text" name="primeiro_nome"  class="inputform"  id="primeiro_nome" value="<?php echo $_SESSION['primeiro_nomeerro'];?>"><?php
      	} else { ?>
      		<input type="text" name="primeiro_nome"  class="inputform"  id="primeiro_nome" placeholder="Primeiro nome*"><?php
      	}?>
      	<br><br>

      	<?php 
      	if(isset($_SESSION['erros']) and isset($_SESSION['ultimo_nomeerro'])) { ?>
    		<input type="text" name="ultimo_nome"  class="inputform"  id="ultimo_nome" value="<?php echo $_SESSION['ultimo_nomeerro'];?>">
      	<?php }else { ?>
			<input type="text" name="ultimo_nome"  class="inputform"  id="ultimo_nome" placeholder="Ultimo nome*">
      	<?php } ?>
      	<br><br>

      	<?php
      	if(isset($_SESSION['erros']) and isset($_SESSION['emailerro'])) { ?>
      	    <input type="text" name="email_registar"  class="inputform"  id="email_registar" value="<?php echo $_SESSION['emailerro'];?>">
      	<?php } else { ?>
 			<input type="text" name="email_registar"  class="inputform"  id="email_registar" placeholder="Email*">
      	<?php } ?>
        <br><br>
        <input type="password" name="pass_registar" class="inputform" id="pass_registar" placeholder="Palavra passe*">
        <br><br>
        <input type="password" name="pass2_registar" class="inputform" id="pass2_registar" placeholder="Confirmar palavra passe*">
        <br><br>
        <input type="submit" name="registar_submit" class="submitform" id="registar_submit" value="Registar">
        <br>
        <h4>Já tens conta? <a href="login.php">Inicia sessão</a></h4>
      </form>
    </div>
  </div>
</div>

<?php
unset($_SESSION['erros']);
unset($_SESSION['primeiro_nomeerro']);
unset($_SESSION['ultimo_nomeerro']);
unset($_SESSION['emailerro']);
?>
<!--/REGISTAR-->



<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->
