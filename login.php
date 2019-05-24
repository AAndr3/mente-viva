<?php 
session_start();
include('includes/config.php');
include('includes/servidor.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Iniciar sessão</title>
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



<?php 




?>

<!--LOGIN-->
<div class="div_back">
  <div class="div_master">
    <br><br>
    <div class="form_div">
      <div class="form_title">
        <h1>Iniciar sessão</h1>
      </div>
      <br>
      <form method="post">
        <?php 
        if(isset($_SESSION['erros'])) { ?>
         <p><?php echo $_SESSION['erros'];?></p> <?php 
        
        }?>

        <?php 
        if(isset($_SESSION['erros']) AND isset($_SESSION['emailerro'])) { ?>
          <input type="text" name="email_entrar"  class="inputform"  id="email_entrar" value="<?php echo $_SESSION['emailerro'];?>">
         <?php } else { ?>
        <input type="text" name="email_entrar" class="inputform" id="email_entrar" placeholder="Email*">
      <?php }?>
        <br><br>
        <input type="password" name="pass_entrar" class="inputform" id="pass_entrar" placeholder="Palavra passe*">
        <br><br>
        <input type="submit" name="entrar_submit" class="submitform" id="entrar_submit" value="Entrar">
        <br>
        <h4>Ainda não tens conta? <a href="registar.php">Regista-te</a></h4>
        <h4><a href="#password">Esqueces-te a palavra passe?</a></h4>
      </form>
    </div>
  </div>
</div>

<?php
unset($_SESSION['erros']);
?>
<!--/LOGIN-->


<!--FOOTER-->
<?php include('includes/footer.php'); ?>
<!--/FOOTER-->


