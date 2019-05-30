<?php

include('funcoes.php');

/* ENTRAR */
if(isset($_POST['entrar_submit'])) {
  $email = mysqli_real_escape_string($bd, $_POST['email_entrar']);
  $pass = mysqli_real_escape_string($bd, $_POST['pass_entrar']);
  $_SESSION['erros'] = "";

  if(empty($email)) {
    $_SESSION['erros'] .= "Introduza o email<br>";
  } else if(empty($pass)) {
    $_SESSION['erros'] .= "Introduza a palavra passe<br>";
    $_SESSION['emailerro'] = $email;
  } else {
    $sql = "SELECT * FROM utilizadores WHERE email = '$email' AND password = '$pass'";
    $query = mysqli_query($bd, $sql);
    $res = mysqli_fetch_assoc($query);
    $cont = mysqli_num_rows($query);
    if($cont == 1) {
      $_SESSION['id_utilizador'] = $res['id_utilizador'];
      $_SESSION['nome'] = $res['1nome'];
      header('location:index.php');
    }else {
      $_SESSION['erros'] = "Verifique os dados";
    }
  }
}
/* /ENTRAR */


/* SAIR */
if(isset($_GET['logout'])) {
  unset($_SESSION['id_utilizador']);
  unset($_SESSION['nome']);
  header('location:index.php');
}
/* /SAIR*/
