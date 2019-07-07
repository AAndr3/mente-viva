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


if(isset($_POST['registar_submit'])) {
  $primeiro_nome = mysqli_real_escape_string($bd, $_POST['primeiro_nome']);
  $ultimo_nome = mysqli_real_escape_string($bd, $_POST['ultimo_nome']);
  $email = mysqli_real_escape_string($bd, $_POST['email_registar']);
  $pass = mysqli_real_escape_string($bd, $_POST['pass_registar']);
  $pass2 = mysqli_real_escape_string($bd, $_POST['pass2_registar']);
  $_SESSION['erros'] = "";
  if(empty($primeiro_nome)) {
    $_SESSION['erros'].= "Introduza o primeiro nome";
  }else if(empty($ultimo_nome)) {
    $_SESSION['erros'].= "Introduza o ultimo nome";
    $_SESSION['primeiro_nomeerro'] = $primeiro_nome;
  }else if(empty($email)) {
    $_SESSION['erros'].= "Introduza o email";
    $_SESSION['primeiro_nomeerro'] = $primeiro_nome;
    $_SESSION['ultimo_nomeerro'] = $ultimo_nome;
  }else if(empty($pass)) {
    $_SESSION['erros'].= "Introduza a palavra passe";
    $_SESSION['primeiro_nomeerro'] = $primeiro_nome;
    $_SESSION['ultimo_nomeerro'] = $ultimo_nome;
    $_SESSION['emailerro'] = $email;
  }else if($pass != $pass2)  {
    $_SESSION['erros'].= "As palavras passes não coincidem";
    $_SESSION['primeiro_nomeerro'] = $primeiro_nome;
    $_SESSION['ultimo_nomeerro'] = $ultimo_nome;
    $_SESSION['emailerro'] = $email;
  }else {
    date_default_timezone_set('Europe/Lisbon');

    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO utilizadores (1nome, ultimo_nome, email, password, data_registo) VALUES ('$primeiro_nome', '$ultimo_nome', '$email', '$pass', '$date')";
    $query = mysqli_query($bd, $sql);
    $sql_select = "SELECT * FROM utilizadores WHERE email = '$email' AND password = '$pass'";
    $query_select = mysqli_query($bd, $sql_select);
    $res_select = mysqli_fetch_assoc($query_select);
    $_SESSION['id_utilizador'] = $res_select['id_utilizador'];
    $_SESSION['nome'] = $res_select['1nome'];
    header('location:index.php');

  }
}


/* SAIR */
if(isset($_GET['logout'])) {
  unset($_SESSION['id_utilizador']);
  unset($_SESSION['nome']);
  header('location:index.php');
}
/* /SAIR*/
