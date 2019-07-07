<header>

	<!--HEADER-WRAPPER-->

	<div class="header-wrapper">

		<a href="index.php"><img src="assets/images/logo.png"></a>

		<div class="informacoes_icone_div">

			<div class="icone_div">
				<i id="icone" class="fas fa-envelope"></i>
			</div>

			<h5 id="info_email" class="info">Para mais informações envie um email para<br><span class="important">menteviva@gmail.com</span></h5>

		</div>

		<div class="informacoes_icone_div">

			<div class="icone_div">
				<i id="icone" class="fas fa-phone"></i>
			</div>

			<h5 id="info_contato" class="info">Para ajuda ligue para<br><span class="important">960442568</span></h5>

		</div>

		<div class="social_links">
			<i class="fab fa-facebook-square social_link social"></i>
		    <i class="fab fa-instagram social_link social"></i>
		    <i class="fab fa-twitter-square social_link social"></i>
		    <i class="fab fa-google-plus-square social_link social"></i>
		</div>

		<?php 
		if(!isset($_SESSION['id_utilizador'])) {?>
		<button onclick="login()" class="entrar_registar">Login/Registar</button> <?php
	}else {
		 ?><h3 style="display: inline-block;vertical-align: middle;float: right;margin-top: 1.2rem">Bem vindo/a, <?php echo utf8_encode($_SESSION['nome']);?></h3><?php
	} ?>


	</div>

	<script>
		function login() {
			window.location = "login.php";
		}
	</script>

	<!-- /HEADER-WRAPPER-->

	<div class="nav-wrapper">
		
		<div class="nav-text">
			
			<div class="nav-menu" id="menu">
				<a href="javascript:void(0);" class="icon" onclick="responsivo_menu()"><i class="fa fa-bars"></i></a>
				<a href="index.php">Home</a>
				<a href="pesquisar.php">Pesquisar</a>
				<a href="vender.php">Vender veículo</a>
			</div>


			<div class="nav-resto">
			<?php
			if(isset($_SESSION['id_utilizador'])) {
				$id_utilizador = $_SESSION['id_utilizador'];?>
				<button onclick="myFunction()" class="btn_profile"><i class="fas fa-user"></i><i style="margin-left: 0.6rem;" class="fas fa-angle-down"></i></button>
					<div id="dropdown-profile" class="dropdown-content">
					    <a href="perfil.php?perfil=<?php echo $id_utilizador;?>">Perfil</a>
   					    <a href="index.php?logout=1">Sair</a>

					  </div>
				<?php	}?>
				<input class="input_search" type="text" placeholder="Pesquisar">
			</div>
				
		</div>

	</div>

</header>


<script>


function myFunction() {
	document.getElementById("dropdown-profile").classList.toggle("show");
}

function responsivo_menu() {
  var x = document.getElementById("menu");
  if (x.className === "nav-menu") {
    x.className += " responsive";
  } else {
    x.className = "nav-menu";
  }
}

	
$(window).resize(function() {
  if ($(window).width() <= 1059) {
  	document.getElementById("info_email").innerHTML = "menteviva@gmail.com";
  	document.getElementById("info_contato").innerHTML = "960442568";
  } else {
  	document.getElementById("info_email").innerHTML = "Para mais informações envie um email para<br><span class='important'>menteviva@gmail.com</span>";
  	document.getElementById("info_contato").innerHTML = "Para ajuda ligue para<br><span class='important'>960442568</span>";
  }
});


$(window).on('load', function() {
  if ($(window).width() <= 1059) {
  	document.getElementById("info_email").innerHTML = "menteviva@gmail.com";
  	document.getElementById("info_contato").innerHTML = "960442568";
  } else {
  	document.getElementById("info_email").innerHTML = "Para mais informações envie um email para<br><span class='important'>menteviva@gmail.com</span>";
  	document.getElementById("info_contato").innerHTML = "Para ajuda ligue para<br><span class='important'>960442568</span>";
  }
});

</script>