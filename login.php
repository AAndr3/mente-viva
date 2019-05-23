<?php 
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Mente Viva - Iniciar sessão</title>
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

<div class="div_back">
  <div class="div_master">
    <br><br>
    <div class="form_div">
      <div class="form_title">
        <h1>Iniciar sessão</h1>
      </div>
      <br>
      <input type="text" name="email_entrar" class="inputform" id="email_entrar" placeholder="Email*">
      <br><br>
      <input type="text" name="pass_entrar" class="inputform" id="pass_entrar" placeholder="Palavra passe*">
      <br><br>
      <input type="submit" name="entrar_submit" class="submitform" id="entrar_submit" value="Entrar">
    </div>
  </div>
</div>



<style>
  .div_back {
    background-repeat: no-repeat;
    background: url('assets/images/slide.jpg');
    height: 50rem;
  }
  .div_master {
    position: relative;
    width: 120rem;
    margin: auto; 
  }


  .form_div { 
    background: white;
    text-align: center;
    width: 35rem;
    margin: auto;
    height: 35rem;
    
  }
  .form_title {
    margin-top:-2rem;
    background: red;
    height: 9rem;
    border-bottom-right-radius: 15rem;
    border-bottom-left-radius: 15rem;
  }

  .form_title h1 {
    color:white;
    line-height: 8rem;
  }

  .form_div .inputform {
    width: 30rem;
    height: 3.2rem;
    font-size: 1.7rem;
    outline: none;
  }

  .form_div .submitform {
    width: 30rem;
    color:white;
    padding: 1rem 0;
    background: red;
    border:none;
    font-size:2rem;
    outline: none;
  }

  .form_div .errosform {
    color:red;
    font-weight: bold;
    line-height: 1.3rem;
  }